<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Gallery;

class GalleryController extends Controller
{

    public function imagesUpload()

    {
        $images = Gallery::latest()->get();

        return view('admin.gallery.index',compact('images'));

    }

    public function imagesUploadPost(Request $request)
    {
        request()->validate([
            'uploadFile' => 'required',
        ]);

        foreach ($request->file('uploadFile') as $key => $value) {
            $imageName = time(). $key . '.' . $value->getClientOriginalExtension();
            $value->move(public_path('gallery'), $imageName);
            $form_data = array(
                'gallery_image'    =>  $imageName
            );
            Gallery::create($form_data);
        }
        return response()->json(['success'=>'Images Uploaded Successfully.']);
    }

    public function destroy($id)
    {

        $gallery = Gallery::find($id);

        if (file_exists('gallery/' . $gallery->gallery_image))
        {
            unlink('gallery/' . $gallery->gallery_image);
        }
        $gallery->delete();

        return redirect()->back();
    }
}
