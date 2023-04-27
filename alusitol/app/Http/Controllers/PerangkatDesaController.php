<?php

namespace App\Http\Controllers;

use App\Models\perangkatdesam;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;

class PerangkatDesaController extends Controller
{
    public function AllPerangkatDesa()
    {
        $perangkatdesa = perangkatdesam::latest()->get();
        return view('admin.perangkatdesa.viewperangkatdesa', compact('perangkatdesa'));
    } //end method
    public function AddPerangkatDesa()
    {
        return view('admin.perangkatdesa.add_perangkat_desa');
    } //End Method
    public function StorePerangkatDesa(Request $request)
    {
        $request->validate([
            'perangkatdesa_image' => 'required|image|max:2048',
            'ProfilPerangkat' => 'required',
        ]);

        $image = $request->file('perangkatdesa_image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();

        $image->move(public_path('upload/perangkatdesa'), $name_gen);

        perangkatdesam::create([
            'fotoperangkat' => 'upload/perangkatdesa/' . $name_gen,
            'profilperangkat' => $request->ProfilPerangkat,
        ]);

        $notification = array(
            'message' => 'perangkatdesa berhasil disimpan',
            'alert-type' => 'success'
        );

        return redirect()->route('all.perangkat.desa')->with($notification);
    }
    public function EditPerangkatDesa($id)
    {
        $perangkatdesa = perangkatdesam::findOrFail($id);
        return view('admin.perangkatdesa.edit_perangkatdesa', compact('perangkatdesa'));
    } //end method
    public function UpdatedPerangkatDesa(Request $request)
    {

        $perangkatdesa_id = $request->id;

        if ($request->file('perangkatdesa_image')) {
            $image = $request->file('perangkatdesa_image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension(); //ngambil nama file

            Image::make($image)->resize(827, 413)->save('upload/perangkatdesa/' . $name_gen); //panjanglebar
            $save_url = 'upload/perangkatdesa/' . $name_gen;

            perangkatdesam::findOrFail($perangkatdesa_id)->update([
                'fotoperangkat' => 'upload/perangkatdesa/' . $name_gen,
                'profilperangkat' => $request->ProfilPerangkat,
                'updated_at' => Carbon::now(),
            ]);
            $notification = array(
                'message' => 'perangkatdesa Updated with Image Successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('all.perangkat.desa')->with($notification);
        } else {
            perangkatdesam::findOrFail($perangkatdesa_id)->update([
                'profilperangkat' => $request->ProfilPerangkat,
                'updated_at' => Carbon::now(),
            ]);
            $notification = array(
                'message' => 'perangkatdesa Updated without Image Successfully',
                'alert-type' => 'success'
            ); //end else
            return redirect()->route('all.perangkat.desa')->with($notification);
        }
    } //end method
    public function DeletePerangkatDesa($id)
    {
        $perangkatdesa = perangkatdesam::findOrFail($id);
        $img = $perangkatdesa->fotoperangkat;
        unlink($img);

        perangkatdesam::findOrFail($id)->delete();

        $notification = array(
            'message' => 'perangkatdesa Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    } //endmethod
}
