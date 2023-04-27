<?php

namespace App\Http\Controllers;

use App\Models\tentangdesam;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;

class TentangDesaController extends Controller
{
    public function AllTentangDesa()
    {
        $tentangdesa = tentangdesam::latest()->get();
        return view('admin.tentangdesa.viewtentangdesa', compact('tentangdesa'));
    } //end method
    public function AddTentangDesa()
    {
        return view('admin.tentangdesa.add_tentang_desa');
    } //End Method
    public function StoreTentangDesa(Request $request)
    {
        $request->validate([
            'tentangdesa' => 'required',
            'visimisi' => 'required',

        ]);


        tentangdesam::create([
            'tentangdesa' => $request->tentangdesa,
            'visimisi' => $request->visimisi,

        ]);

        $notification = array(
            'message' => 'tentangdesa berhasil disimpan',
            'alert-type' => 'success'
        );

        return redirect()->route('all.tentang.desa')->with($notification);
    }
    public function EditTentangDesa($id)
    {
        $tentangdesa = tentangdesam::findOrFail($id);
        return view('admin.tentangdesa.edit_tentangdesa', compact('tentangdesa'));
    } //end method
    public function UpdatedTentangDesa(Request $request)
    {

        $tentangdesa_id = $request->id;

        tentangdesam::findOrFail($tentangdesa_id)->update([
            'tentangdesa' => $request->tentangdesa,
            'visimisi' => $request->visimisi,
            'updated_at' => Carbon::now(),
        ]);
        $notification = array(
            'message' => 'tentangdesa Updated with Image Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.tentang.desa')->with($notification);
    } //end method

    public function DeleteTentangDesa($id)
    {
        $tentangdesa = tentangdesam::findOrFail($id);


        tentangdesam::findOrFail($id)->delete();

        $notification = array(
            'message' => 'tentangdesa Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    } //endmethod
}
