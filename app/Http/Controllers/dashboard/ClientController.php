<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Support\Facades\File;


class ClientController extends Controller
{


    public function index()
    {
        $clients = client::get();
        return Inertia::render('Dashboard/client/index', [
            'clients' => $clients,
        ]);
    }


    // create

    public function store(Request $request)
    {

        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg,png,bmp,gif,svg',
        ]);

        $image = $request->image->getClientOriginalName();
        $image_name = time() . '.' . $image;
        $path = 'uploads/clients';
        $request->image->move($path, $image_name);

        $clients = client::create([
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'image' => '/' . $path . '/' . $image_name
        ]);


        return redirect()->route('clients.index');
    }

    public function update(Request $request, $id)
    {
        $clients = client::find($id);

        if ($clients) {
            $request->validate([
                'firstname' => 'required',
                'lastname' => 'required',
                'image' => 'image|mimes:jpeg,jpg,png,bmp,gif,svg',
            ]);

            $image_path='';
            if ($request->file('image')) {
                global $image_path;
                if (
                    File::exists(public_path() . $clients->image)
                ) {
                    File::delete(public_path() . $clients->image);
                }

                $image = $request->image->getClientOriginalName();
                $image_name = time() . '.' . $image;
                $path = 'uploads/clients';
                $image_path = '/' . $path . '/' . $image_name;
                $request->image->move($path, $image_name);
            }

            $fields = [
                'firstname' => $request->input('firstname'),
                'lastname' => $request->input('lastname'),
            ];
            if($image_path){
                $fields['image'] = $image_path;
            }
            $clients->update($fields);



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
        $clients = client::find($id);

        $clients->delete();
        unlink(public_path() .  $clients->image);
    }
}
