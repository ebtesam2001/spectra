<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Contentmangment;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Support\Facades\File;


class ContentmangmentController extends Controller
{


    public function index()
    {
        $contentmangments = Contentmangment::get();
        return Inertia::render('Dashboard/contentmangment/index', [
            'contentmangments' => $contentmangments,
        ]);
    }


    // create

    public function store(Request $request)
    {

        $request->validate([
            'key' => 'required',
            'section' => 'required',
            'content' => 'required',
        ]);


        $contentmangments = Contentmangment::create([
            'key' => $request->input('key'),
            'section' => $request->input('section'),
            'content' => $request->input('content'),
        ]);


        return redirect()->route('contentmangment.index');
    }

    public function update(Request $request, $id)
    {
        $contentmangments = Contentmangment::find($id);

        if ($contentmangments) {
            $request->validate([
                'key' => 'required',
                'section' => 'required',
                'content' => 'required',
            ]);

            if ($request) {

                $contentmangments->update([
                    'key' => $request->input('key'),
                    'section' => $request->input('section'),
                    'content' => $request->input('content'),
                ]);

                $fields = [
                    'key' => $request->input('key'),
                    'section' => $request->input('section'),
                    'content' => $request->input('content'),
                ];

                $contentmangments->update($fields);

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
        $contentmangments = Contentmangment::find($id);

        $contentmangments->delete();
    }
}
