<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\berita;
use App\Models\BeritaCategory;
use COM;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Carbon;

class BeritaController extends Controller
{
    public function AllBerita()
    {
        $berita = berita::latest()->get();
        return view('admin.berita.berita_all', compact('berita'));
    }
    public function AddBerita()
    {
        $categories = BeritaCategory::orderBy('berita_category', 'ASC')->get();
        return view('admin.berita.berita_add', compact('categories'));
    }
    public function StoreBerita(Request $request)
    {
        $image = $request->file('berita_image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension(); //ngambil nama file

        Image::make($image)->resize(430, 327)->save('upload/berita/' . $name_gen); //panjanglebar
        $save_url = 'upload/berita/' . $name_gen;

        berita::insert([
            'berita_category_id' => $request->berita_category_id,
            'berita_title' => $request->berita_title,
            'berita_tags' => $request->berita_tags,
            'berita_description' => $request->berita_description,
            'berita_image' => $save_url,
            'created_at' => Carbon::now(),

        ]);
        $notification = array(
            'message' => 'Berita Inserted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.berita')->with($notification);
    } //end method
    public function EditBerita($id)
    {
        $berita = berita::findOrFail($id);
        $categories = BeritaCategory::orderBy('berita_category', 'ASC')->get();
        return view('admin.berita.berita_edit', compact('berita', 'categories'));
    }
    public function UpdateBerita(Request $request)
    {

        $berita_id = $request->id;

        if ($request->file('berita_image')) {
            $image = $request->file('berita_image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension(); //ngambil nama file

            Image::make($image)->resize(430, 327)->save('upload/berita/' . $name_gen); //panjanglebar
            $save_url = 'upload/berita/' . $name_gen;

            berita::findOrFail($berita_id)->update([
                'berita_category_id' => $request->berita_category_id,
                'berita_title' => $request->berita_title,
                'berita_tags' => $request->berita_tags,
                'berita_description' => $request->berita_description,
                'berita_image' => $save_url,
            ]);
            $notification = array(
                'message' => 'Berita Updated with Image Successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('all.berita')->with($notification);
        } else {
            berita::findOrFail($berita_id)->update([
                'berita_category_id' => $request->berita_category_id,
                'berita_title' => $request->berita_title,
                'berita_tags' => $request->berita_tags,
                'berita_description' => $request->berita_description,
            ]);
            $notification = array(
                'message' => 'Berita Updated without Image Successfully',
                'alert-type' => 'success'
            ); //end else
            return redirect()->route('all.berita')->with($notification);
        }
    } //end method

    public function DeleteBerita($id)
    {
        $berita = berita::findOrFail($id);
        $img = $berita->berita_image;
        unlink($img);

        berita::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Berita Image Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    } //endmethod

    public function BeritaDetails($id)
    {
        $allberita = berita::latest()->limit(5)->get();
        $categories = BeritaCategory::orderBy('berita_category', 'ASC')->get();
        $berita = berita::findOrFail($id);
        return view('frontend.berita_details', compact('berita', 'allberita', 'categories'));
    }
    public function CategoryBerita($id)
    {
        $allberita = berita::latest()->limit(5)->get();
        $categories = BeritaCategory::orderBy('berita_category', 'ASC')->get();
        $beritapost = berita::where('berita_category_id', $id)->orderBy('id', 'DESC')->get();
        $categoryname = BeritaCategory::findOrFail($id);
        return view('frontend.cat_berita_details', compact('beritapost', 'allberita', 'categories', 'categoryname'));
    }
    public function HomeBerita()
    {
        $allberita = berita::latest()->get();
        $categories = BeritaCategory::orderBy('berita_category', 'ASC')->get();
        return view('frontend.berita', compact('allberita', 'categories'));
    }
}
