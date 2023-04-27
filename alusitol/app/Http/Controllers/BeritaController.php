<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use App\Models\BeritaCategorym;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;

class BeritaController extends Controller
{
    public function AllBerita()
    {
        $category = BeritaCategorym::orderBy('berita_category', 'ASC')->get();
        $berita = Berita::latest()->pahination(2); // Memakai limit
        return view('frontend.berita.allberita', compact('berita', 'category'));
    } //end method

    public function AllBeritaAdmin()
    {
        $berita = Berita::latest()->limit(10)->get();
        return view('admin.berita.all_berita_admin', compact('berita'));
    } //end method
    public function AddBerita()
    {
        $category = BeritaCategorym::orderBy('berita_category', 'ASC')->get();
        return view('admin.berita.add_berita', compact('category'));
    } //End Method
    public function StoreBerita(Request $request)
    {
        $image = $request->file('berita_image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension(); //ngambil nama file

        Image::make($image)->resize(827, 413)->save('upload/berita/' . $name_gen); //panjanglebar
        $save_url = 'upload/berita/' . $name_gen;

        Berita::insert([
            'berita_category_id' => $request->berita_category_id,
            'berita_title' => $request->berita_title,
            'berita_tags' => $request->berita_tags,
            'berita_long_description' => $request->berita_long,
            'berita_image' => $save_url,
            'created_at' => Carbon::now(),

        ]);
        $notification = array(
            'message' => 'Berita Inserted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.berita.admin')->with($notification);
    } //end method

    public function EditBerita($id)
    {
        $berita = Berita::findOrFail($id);
        $category = BeritaCategorym::orderBy('berita_category', 'ASC')->get();
        return view('admin.berita.edit_berita', compact('berita', 'category'));
    } //end method

    public function UpdatedBerita(Request $request)
    {

        $berita_id = $request->id;

        if ($request->file('berita_image')) {
            $image = $request->file('berita_image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension(); //ngambil nama file

            Image::make($image)->resize(827, 413)->save('upload/berita/' . $name_gen); //panjanglebar
            $save_url = 'upload/berita/' . $name_gen;

            Berita::findOrFail($berita_id)->update([
                'berita_category_id' => $request->berita_category_id,
                'berita_title' => $request->berita_title,
                'berita_tags' => $request->berita_tags,
                'berita_long_description' => $request->berita_long,
                'berita_image' => $save_url,
                'created_at' => Carbon::now(),
            ]);
            $notification = array(
                'message' => 'Berita Updated with Image Successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('all.berita.admin')->with($notification);
        } else {
            Berita::findOrFail($berita_id)->update([
                'berita_category_id' => $request->berita_category_id,
                'berita_title' => $request->berita_title,
                'berita_tags' => $request->berita_tags,
                'berita_long_description' => $request->berita_long,
                'updated_at' => Carbon::now(),
            ]);
            $notification = array(
                'message' => 'Berita Updated without Image Successfully',
                'alert-type' => 'success'
            ); //end else
            return redirect()->route('all.berita.admin')->with($notification);
        }
    } //end method
    public function DeleteBerita($id)
    {
        $berita = Berita::findOrFail($id);
        $img = $berita->berita_image;
        unlink($img);

        Berita::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Berita Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    } //endmethod
    public function CategoryBerita($id)
    {
        $allberita = berita::latest()->limit(5)->get();
        $category = BeritaCategoryM::orderBy('berita_category', 'ASC')->get();
        $beritapost = berita::where('berita_category_id', $id)->orderBy('id', 'DESC')->get();
        $categoryname = BeritaCategoryM::findOrFail($id);
        return view('frontend.berita.cat_berita_details', compact('beritapost', 'allberita', 'category', 'categoryname'));
    }
    public function BeritaDetails($id)
    {
        $allberita = Berita::latest()->limit(5)->get();
        $category = BeritaCategorym::orderBy('berita_category', 'ASC')->get();
        $berita = Berita::findOrFail($id);
        return view('frontend.berita.singleberita', compact('berita', 'allberita', 'category'));
    }
}
