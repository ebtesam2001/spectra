<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Support\Facades\File;


class ProjectController extends Controller
{


    public function index()
    {
        $projects = Project::get();
        return Inertia::render('Dashboard/project/index', [
            'projects' => $projects,
        ]);
    }


    // create

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg,png,bmp,gif,svg',
        ]);

        $image = $request->image->getClientOriginalName();
        $image_name = time() . '.' . $image;
        $path = 'uploads/projects';
        $request->image->move($path, $image_name);

        $projects = Project::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'image' => '/' . $path . '/' . $image_name
        ]);


        return redirect()->route('projects.index');
    }

    public function update(Request $request, $id)
    {
        $projects = Project::find($id);

        if ($projects) {
            $request->validate([
                'name' => 'required',
                'description' => 'required',
                'image' => 'image|mimes:jpeg,jpg,png,bmp,gif,svg',
            ]);

            $image_path='';
            if ($request->file('image')) {
                global $image_path;
                if (
                    File::exists(public_path() . $projects->image)
                ) {
                    File::delete(public_path() . $projects->image);
                }

                $image = $request->image->getClientOriginalName();
                $image_name = time() . '.' . $image;
                $path = 'uploads/projects';
                $image_path = '/' . $path . '/' . $image_name;
                $request->image->move($path, $image_name);
            }

            $fields = [
                'name' => $request->input('name'),
                'description' => $request->input('description'),
            ];
            if($image_path){
                $fields['image'] = $image_path;
            }
            $projects->update($fields);



                return response()->json([
                    'message' => 'تم التعديل بنجاح ',
                ]);
        } else {
            return response()->json([
                'message' => 'هذا الحقل غير موجود '
            ]);
        }
    }
    // ------------------------------------

    public function destroy($id)
    {
        $projects = Project::find($id);

        $projects->delete();
        unlink(public_path() .  $projects->image);
    }
}
