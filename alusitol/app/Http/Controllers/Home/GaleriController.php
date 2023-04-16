<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\galeri;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Carbon;

class GaleriController extends Controller
{
    public function AllGaleri()
    {
        $galeri = galeri::latest()->get();
        return view('admin.galeri.galeri_all', compact('galeri'));
    } //end Method

    public function AddGaleri()
    {
        return view('admin.galeri.galeri_add');
    }
    public function StoreGaleri(Request $request)
    {
        $request->validate([
            'galeri_name' => 'required',
            'galeri_title' => 'required',
            'galeri_image' => 'required',
        ], [
            'galeri_name.required' => 'Galeri Name is Required',
            'galeri_title.required' => 'Galeri Title is Required',
        ]);

        $image = $request->file('galeri_image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension(); //ngambil nama file

        Image::make($image)->resize(1020, 519)->save('upload/galeri/' . $name_gen); //panjanglebar
        $save_url = 'upload/galeri/' . $name_gen;

        galeri::insert([
            'galeri_name' => $request->galeri_name,
            'galeri_title' => $request->galeri_title,
            'galeri_description' => $request->galeri_description,
            'galeri_image' => $save_url,
            'created_at' => Carbon::now(),

        ]);
        $notification = array(
            'message' => 'Galeri Inserted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.galeri')->with($notification);
    }

    public function EditGaleri($id)
    {
        $galeri = galeri::findOrFail($id);
        return view('admin.galeri.galeri_edit', compact('galeri'));
    }
    public function UpdateGaleri(Request $request)
    {
        $galeri_id = $request->id;

        if ($request->file('galeri_image')) {
            $image = $request->file('galeri_image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension(); //ngambil nama file

            Image::make($image)->resize(1020, 519)->save('upload/galeri/' . $name_gen); //panjanglebar
            $save_url = 'upload/galeri/' . $name_gen;

            galeri::findOrfail($galeri_id)->update([
                'galeri_name' => $request->galeri_name,
                'galeri_title' => $request->galeri_title,
                'galeri_description' => $request->galeri_description,
                'galeri_image' => $save_url,
            ]);
            $notification = array(
                'message' => 'Galeri Updated with Image Successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('all.galeri')->with($notification);
        } else {
            galeri::findOrFail($galeri_id)->update([
                'galeri_name' => $request->galeri_name,
                'galeri_title' => $request->galeri_title,
                'galeri_description' => $request->galeri_description,
            ]);
            $notification = array(
                'message' => 'Galeri Updated without Image Successfully',
                'alert-type' => 'success'
            ); //end else
            return redirect()->route('all.galeri')->with($notification);
        }
    } //end method

    public function DeleteGaleri($id)
    {
        $galeri = galeri::findOrFail($id);
        $img = $galeri->galeri_image;
        unlink($img);

        galeri::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Galeri Image Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    } //endmethod

    public function GaleriDetails($id)
    {
        $galeri = galeri::findOrFail($id);
        return view('frontend.galeri_details', compact('galeri'));
    }
}
