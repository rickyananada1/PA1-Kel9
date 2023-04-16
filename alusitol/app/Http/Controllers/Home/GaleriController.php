<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\galeri;
use Image;
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
}
