<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Support\Facades\File;


class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::get();
        return Inertia::render('Dashboard/category/index', [
            'categories' => $categories,
        ]);
    }


    // create

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg,png,bmp,gif,svg',
        ]);
        $image = $request->image->getClientOriginalName();
        $image_name = time() . '.' . $image;
        $path = 'uploads/categories';
        $request->image->move($path, $image_name);


        $categories = Category::create([
            'name' => $request->input('name'),
            'image' => '/' . $path . '/' . $image_name
        ]);


        return redirect()->route('categories.index');
    }

    public function update(Request $request, $id)
    {
        $categories = Category::find($id);

        if ($categories) {
            // dd($categories);
            $request->validate([
                'name' => 'required',
                'image' => 'image|mimes:jpeg,jpg,png,bmp,gif,svg',
            ]);
            $image_path='';
            if ($request->file('image')) {
                global $image_path;
                if (
                    File::exists(public_path() . $categories->image)
                ) {
                    File::delete(public_path() . $categories->image);
                }

                $image = $request->image->getClientOriginalName();
                $image_name = time() . '.' . $image;
                $path = 'uploads/$categories';
                $image_path = '/' . $path . '/' . $image_name;
                $request->image->move($path, $image_name);
         

                $fields = [
                    'name' => $request->input('name'),
                ];

                if($image_path){
                    $fields['image'] = $image_path;
                }

                $categories->update($fields);

                return response()->json([
                    'message' => 'تم التعديل بنجاح ',
                ]);
            } else {
                return response()->json([
                    'message' => 'خطا '
                ]);
            }
        } else {
            return response()->json([
                'message' => 'هذا الحقل غير موجود '
            ]);
        }
    }
    // ------------------------------------



    public function destroy($id)
    {
        $categories = Category::find($id);
        $categories->delete();
        unlink(public_path() .  $categories->image);
        $categories->product()->delete();
    }
}
