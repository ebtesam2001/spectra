<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Support\Facades\File;


class AboutController extends Controller
{

    public function index()
    {
        $about = About::get();
        return Inertia::render('Dashboard/aboutMangment/index', [
            'about' => $about,
        ]);
    }


    // create

    public function store(Request $request)
    {

        $request->validate([
            'key' => 'required',
            'section' => 'required',
            'content' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg,png,bmp,gif,svg',
        ]);

        $image = $request->image->getClientOriginalName();
        $image_name = time() . '.' . $image;
        $path = 'uploads/abouts';
        $request->image->move($path, $image_name);

        $abouts = About::create([
            'key' => $request->input('key'),
            'section' => $request->input('section'),
            'content' => $request->input('content'),
            'image' => '/' . $path . '/' . $image_name
        ]);


        return redirect()->route('aboutManage.index');
    }

    public function update(Request $request, $id)
    {
        $abouts = About::find($id);

        if ($abouts) {
            $request->validate([
                'key' => 'required',
                'section' => 'required',
                'content' => 'required',
                'image' => 'image|mimes:jpeg,jpg,png,bmp,gif,svg',
            ]);

            $image_path='';
            if ($request->file('image')) {
                global $image_path;
                if (
                    File::exists(public_path() . $abouts->image)
                ) {
                    File::delete(public_path() . $abouts->image);
                }

                $image = $request->image->getClientOriginalName();
                $image_name = time() . '.' . $image;
                $path = 'uploads/abouts';
                $image_path = '/' . $path . '/' . $image_name;
                $request->image->move($path, $image_name);
            }

            $fields = [
                'key' => $request->input('key'),
                'section' => $request->input('section'),
                'content' => $request->input('content'),
            ];
            if($image_path){
                $fields['image'] = $image_path;
            }
            $abouts->update($fields);



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
        $abouts = About::find($id);
        $abouts->delete();
        unlink(public_path() .  $abouts->image);
    }
}
