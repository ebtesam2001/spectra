<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\HeroSection;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Support\Facades\File;

class HeroSectionController extends Controller
{

    public function index()
    {
        $heroSections = HeroSection::get();
        // dd($heroSections->toArray());
        // dd($category->toArray());
        return Inertia::render('Dashboard/heroSection/index', [
            'heroSections' => $heroSections,
        ]);
    }


    // create

    public function store(Request $request)
    {

        $request->validate([
            'key' => 'required',
            'section' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg,png,bmp,gif,svg',
        ]);

        $image = $request->image->getClientOriginalName();
        $image_name = time() . '.' . $image;
        $path = 'uploads/heroSections';
        $request->image->move($path, $image_name);

        $heroSections = HeroSection::create([
            'key' => $request->input('key'),
            'section' => $request->input('section'),
            'image' => '/' . $path . '/' . $image_name
        ]);


        return redirect()->route('herosections.index');
    }

    public function update(Request $request, $id)
    {
        $heroSections = HeroSection::find($id);

        if ($heroSections) {
            $request->validate([
                'key' => 'required',
                'section' => 'required',
                'image' => 'image|mimes:jpeg,jpg,png,bmp,gif,svg',
            ]);

            $image_path='';
            if ($request->file('image')) {
                global $image_path;
                if (
                    File::exists(public_path() . $heroSections->image)
                ) {
                    File::delete(public_path() . $heroSections->image);
                }

                $image = $request->image->getClientOriginalName();
                $image_name = time() . '.' . $image;
                $path = 'uploads/heroSections';
                $image_path = '/' . $path . '/' . $image_name;
                $request->image->move($path, $image_name);
            }

            $fields = [
                'key' => $request->input('key'),
                'section' => $request->input('section'),
            ];
            if($image_path){
                $fields['image'] = $image_path;
            }
            $heroSections->update($fields);



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
        $heroSections = HeroSection::find($id);
        $heroSections->delete();
        unlink(public_path() .  $heroSections->image);
    }
}
