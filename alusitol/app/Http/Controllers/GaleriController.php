<?php

namespace App\Http\Controllers;

use App\Models\GaleriCategorym;
use App\Models\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;

class GaleriController extends Controller
{
    public function AllGaleriAdmin()
    {
        $galeri = Galeri::latest()->get();
        return view('admin.galeri.galeri_all', compact('galeri'));
    } //end Method

    public function AddGaleri()
    {
        $category = Galericategorym::orderBy('galeri_category', 'ASC')->get();
        return view('admin.galeri.add_galeri', compact('category'));
    } //End Method

    public function StoreGaleri(Request $request)
    {
        $image = $request->file('galeri_image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension(); //ngambil nama file

        Image::make($image)->resize(827, 413)->save('upload/galeri/' . $name_gen); //panjanglebar
        $save_url = 'upload/galeri/' . $name_gen;

        Galeri::insert([
            'galeri_category_id' => $request->galeri_category_id,
            'galeri_image' => $save_url,
            'created_at' => Carbon::now(),

        ]);
        $notification = array(
            'message' => 'Galeri Inserted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.galeri.admin')->with($notification);
    } //end method

    public function EditGaleri($id)
    {
        $galeri = Galeri::findOrFail($id);
        $category = GaleriCategorym::orderBy('galeri_category', 'ASC')->get();
        return view('admin.galeri.edit_galeri', compact('galeri', 'category'));
    } //end method
    public function UpdatedGaleri(Request $request)
    {

        $galeri_id = $request->id;

        if ($request->file('galeri_image')) {
            $image = $request->file('galeri_image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension(); //ngambil nama file

            Image::make($image)->resize(827, 413)->save('upload/galeri/' . $name_gen); //panjanglebar
            $save_url = 'upload/galeri/' . $name_gen;

            Galeri::findOrFail($galeri_id)->update([
                'galeri_category_id' => $request->galeri_category_id,
                'galeri_image' => $save_url,
                'updated_at' => Carbon::now(),
            ]);
            $notification = array(
                'message' => 'Galeri Updated with Image Successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('all.galeri.admin')->with($notification);
        } else {
            Galeri::findOrFail($galeri_id)->update([
                'galeri_category_id' => $request->galeri_category_id,
                'updated_at' => Carbon::now(),
            ]);
            $notification = array(
                'message' => 'galeri Updated without Image Successfully',
                'alert-type' => 'success'
            ); //end else
            return redirect()->route('all.galeri.admin')->with($notification);
        }
    } //end method
    public function DeleteGaleri($id)
    {
        $galeri = Galeri::findOrFail($id);
        $img = $galeri->galeri_image;
        unlink($img);

        Galeri::findOrFail($id)->delete();

        $notification = array(
            'message' => 'galeri Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    } //endmethod

    public function AllGaleriUser()
    {
        $category = GaleriCategorym::orderBy('galeri_category', 'ASC')->get();
        $galeri = Galeri::latest()->paginate(10); // Memakai paginate
        return view('frontend.galeri.galeri_category', compact('galeri', 'category'));
    } //end method
    public function CategoryGaleri($id)
    {
        $galeri = Galeri::latest()->limit(5)->get();
        $category = GaleriCategorym::orderBy('galeri_category', 'ASC')->get();
        $galeripost = galeri::where('galeri_category_id', $id)->orderBy('id', 'DESC')->get();
        $categoryname = GaleriCategoryM::findOrFail($id);
        return view('frontend.galeri.galeri_category', compact('galeripost', 'galeri', 'category', 'categoryname'));
    }
}
