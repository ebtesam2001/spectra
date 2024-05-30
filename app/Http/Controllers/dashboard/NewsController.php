<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Support\Facades\File;


class NewsController extends Controller
{


    public function index()
    {
        $news = News::get();
        return Inertia::render('Dashboard/news/index', [
            'news' => $news,
        ]);
    }


    // create

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'date' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg,png,bmp,gif,svg',
        ]);

        $image = $request->image->getClientOriginalName();
        $image_name = time() . '.' . $image;
        $path = 'uploads/news';
        $request->image->move($path, $image_name);

        $news = News::create([
            'name' => $request->input('name'),
            'date' => $request->input('date'),
            'description' => $request->input('description'),
            'image' => '/' . $path . '/' . $image_name
        ]);


        return redirect()->route('newsManage.index');
    }

    public function update(Request $request, $id)
    {
        $news = News::find($id);

        if ($news) {
            $request->validate([
                'name' => 'required',
                'date' => 'required',
                'description' => 'required',
                'image' => 'image|mimes:jpeg,jpg,png,bmp,gif,svg',
            ]);

            $image_path='';
            if ($request->file('image')) {
                global $image_path;
                if (
                    File::exists(public_path() . $news->image)
                ) {
                    File::delete(public_path() . $news->image);
                }

                $image = $request->image->getClientOriginalName();
                $image_name = time() . '.' . $image;
                $path = 'uploads/news';
                $image_path = '/' . $path . '/' . $image_name;
                $request->image->move($path, $image_name);
            }

            $fields = [
                'name' => $request->input('name'),
                'date' => $request->input('date'),
                'description' => $request->input('description'),
            ];
            if($image_path){
                $fields['image'] = $image_path;
            }
            $news->update($fields);



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
        $news = News::find($id);

        $news->delete();
        unlink(public_path() .  $news->image);
    }
}
