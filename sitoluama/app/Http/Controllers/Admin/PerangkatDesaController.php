<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\perangkatdesa;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;

class PerangkatDesaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function AllPerangkatDesa()
    {
        $perangkatdesa = perangkatdesa::latest()->paginate(10);
        return view('admin.page_perangkatdesa.perangkatdesa.all', compact('perangkatdesa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function AddPerangkatDesa()
    {
        return view('admin.page_perangkatdesa.perangkatdesa.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function StorePerangkatDesa(Request $request)
    {
        $image = $request->file('fotoperangkat');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension(); //ngambil nama file

        Image::make($image)->resize(827, 413)->save('upload/perangkatdesa/' . $name_gen); //panjanglebar
        $save_url = 'upload/perangkatdesa/' . $name_gen;

        perangkatdesa::insert([
            'profilperangkat' => $request->profilperangkat,
            'fotoperangkat' => $save_url,
            'created_at' => Carbon::now(),

        ]);
        $notification = array(
            'message' => 'Perangkat Desa Inserted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.perangkat.desa')->with($notification);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function EditPerangkatDesa(string $id)
    {
        $perangkatdesa = perangkatdesa::findOrFail($id);
        return view('admin.page_perangkatdesa.perangkatdesa.edit', compact('perangkatdesa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function UpdatePerangkatDesa(Request $request)
    {
        $perangkatdesa_id = $request->id;

        $image = $request->file('fotoperangkat');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension(); //ngambil nama file

        Image::make($image)->resize(827, 413)->save('upload/perangkatdesa/' . $name_gen); //panjanglebar
        $save_url = 'upload/perangkatdesa/' . $name_gen;

        perangkatdesa::findOrFail($perangkatdesa_id)->update([
            'profilperangkat' => $request->profilperangkat,
            'fotoperangkat' => $save_url,
            'updated_at' => Carbon::now(),

        ]);
        $notification = array(
            'message' => 'Perangkat Desa Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.perangkat.desa')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function DeletePerangkatDesa($id)
    {
        $perangkatdesa = perangkatdesa::findOrFail($id);
        $img = $perangkatdesa->fotoperangkat;
        unlink($img);

        perangkatdesa::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Perangkat Desa Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    } //endmethod
}
