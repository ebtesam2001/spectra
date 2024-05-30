<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Support\Facades\File;


class TeamController extends Controller
{


    public function index()
    {
        $teams = Team::get();
        return Inertia::render('Dashboard/team/index', [
            'teams' => $teams,
        ]);
    }


    // create

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'job' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg,png,bmp,gif,svg',
        ]);

        $image = $request->image->getClientOriginalName();
        $image_name = time() . '.' . $image;
        $path = 'uploads/Team';
        $request->image->move($path, $image_name);

        $teams = Team::create([
            'name' => $request->input('name'),
            'job' => $request->input('job'),
            'image' => '/' . $path . '/' . $image_name
        ]);


        return redirect()->route('teams.index');
    }

    public function update(Request $request, $id)
    {
        $teams = Team::find($id);

        if ($teams) {
            $request->validate([
                'name' => 'required',
                'job' => 'required',
                'image' => 'image|mimes:jpeg,jpg,png,bmp,gif,svg',
            ]);

            $image_path='';
            if ($request->file('image')) {
                global $image_path;
                if (
                    File::exists(public_path() . $teams->image)
                ) {
                    File::delete(public_path() . $teams->image);
                }

                $image = $request->image->getClientOriginalName();
                $image_name = time() . '.' . $image;
                $path = 'uploads/teams';
                $image_path = '/' . $path . '/' . $image_name;
                $request->image->move($path, $image_name);
            }

            $fields = [
                'name' => $request->input('name'),
                'job' => $request->input('job'),
            ];
            if($image_path){
                $fields['image'] = $image_path;
            }
            $teams->update($fields);



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
        $teams = Team::find($id);

        $teams->delete();
        unlink(public_path() .  $teams->image);
    }
}
