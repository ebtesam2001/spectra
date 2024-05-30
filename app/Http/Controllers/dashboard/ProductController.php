<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::with('Catrgory')->get();
        // dd($products->toArray());
        $category = Category::get();
        // dd($category->toArray());
        return Inertia::render('Dashboard/product/index', [
            'products' => $products,
            'category' => $category,
        ]);
    }


    // create

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'category_id' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,jpg,png,bmp,gif,svg',
        ]);

        $image = $request->image->getClientOriginalName();
        $image_name = time() . '.' . $image;
        $path = 'uploads/products';
        $request->image->move($path, $image_name);

        $products = Product::create([
            'name' => $request->input('name'),
            'category_id' => $request->input('category_id'),
            'image' => '/' . $path . '/' . $image_name
        ]);


        return redirect()->route('products.index');
    }

    public function update(Request $request, $id)
    {
        $products = Product::find($id);

        if ($products) {
            $request->validate([
                'name' => 'required',
                'category_id' => 'required|integer',
                'image' => 'image|mimes:jpeg,jpg,png,bmp,gif,svg',
            ]);

            $image_path='';
            if ($request->file('image')) {
                global $image_path;
                if (
                    File::exists(public_path() . $products->image)
                ) {
                    File::delete(public_path() . $products->image);
                }

                $image = $request->image->getClientOriginalName();
                $image_name = time() . '.' . $image;
                $path = 'uploads/products';
                $image_path = '/' . $path . '/' . $image_name;
                $request->image->move($path, $image_name);
            }

            $fields = [
                'name' => $request->input('name'),
                'category_id' => $request->input('category_id'),
            ];
            if($image_path){
                $fields['image'] = $image_path;
            }
            $products->update($fields);



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
        $products = Product::find($id);

        $products->delete();
        unlink(public_path() .  $products->image);
    }
}
