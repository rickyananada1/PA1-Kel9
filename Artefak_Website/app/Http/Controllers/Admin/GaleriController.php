<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\galeri;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function AllGaleri()
    {
        $galeri = galeri::latest()->paginate(8);
        return view('admin.page_galeri.galeri.all', compact('galeri'));
    } //end Method

    /**
     * Show the form for creating a new resource.
     */
    public function AddGaleri()
    {
        return view('admin.page_galeri.galeri.add');
    } //End Method

    /**
     * Store a newly created resource in storage.
     */
    public function storeGaleri(Request $request)
    {
        $images = $request->file('galeri_image');

        foreach ($images as $image) {
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension(); //ngambil nama file

            Image::make($image)->resize(636, 423)->save('upload/galeri/' . $name_gen); //panjanglebar
            $save_url = 'upload/galeri/' . $name_gen;

            Galeri::create([
                'galeri_image' => $save_url,
                'created_at' => Carbon::now(),
            ]);
        }

        $notification = array(
            'message' => 'Galeri Inserted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.galeri')->with($notification);
    }
    //end method


    /**
     * Show the form for editing the specified resource.
     */
    public function EditGaleri($id)
    {
        $galeri = galeri::findOrFail($id);
        return view('admin.page_galeri.galeri.edit', compact('galeri'));
    } //end method
    /**
     * Update the specified resource in storage.
     */
    public function UpdateGaleri(Request $request)
    {

        $galeri_id = $request->id;

        if ($request->file('galeri_image')) {
            $image = $request->file('galeri_image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension(); //ngambil nama file

            Image::make($image)->resize(636, 423)->save('upload/galeri/' . $name_gen); //panjanglebar
            $save_url = 'upload/galeri/' . $name_gen;

            Galeri::findOrFail($galeri_id)->update([
                'galeri_image' => $save_url,
                'updated_at' => Carbon::now(),
            ]);
            $notification = array(
                'message' => 'Galeri Updated with Image Successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('all.galeri')->with($notification);
        } else {
            Galeri::findOrFail($galeri_id)->update([
                'updated_at' => Carbon::now(),
            ]);
            $notification = array(
                'message' => 'galeri Updated without Image Successfully',
                'alert-type' => 'success'
            ); //end else
            return redirect()->route('all.galeri')->with($notification);
        }
    } //end method

    /**
     * Remove the specified resource from storage.
     */
    public function DeleteGaleri($id)
    {
        $galeri = galeri::findOrFail($id);
        $img = $galeri->galeri_image;
        unlink($img);

        galeri::findOrFail($id)->delete();

        $notification = array(
            'message' => 'galeri Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    } //endmethod

}
