<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\sejarahdesa;
use Illuminate\Support\Carbon;

class SejarahDesaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function AllSejarahDesa()
    {
        $sejarahdesa = sejarahdesa::latest()->paginate(10);
        return view('admin.page_tentangdesa.sejarahdesa.all', compact('sejarahdesa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function AddSejarahDesa()
    {
        return view('admin.page_tentangdesa.sejarahdesa.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function StoreSejarahDesa(Request $request)
    {

        sejarahdesa::insert([
            'sejarahdesa' => $request->sejarahdesa,

            'created_at' => Carbon::now(),

        ]);
        $notification = array(
            'message' => 'sejarah Desa Inserted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.sejarah.desa')->with($notification);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function EditSejarahDesa($id)
    {
        $sejarahdesa = sejarahdesa::findOrFail($id);
        return view('admin.page_tentangdesa.sejarahdesa.edit', compact('sejarahdesa'));
    } //end method

    /**
     * Update the specified resource in storage.
     */
    public function UpdateSejarahDesa(Request $request)
    {
        $sejarahdesa_id = $request->id;

        sejarahdesa::findOrFail($sejarahdesa_id)->update([
            'sejarahdesa' => $request->sejarahdesa,

            'updated_at' => Carbon::now(),
        ]);
        $notification = array(
            'message' => 'sejarah Desa Updated  Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.sejarah.desa')->with($notification);
    } //end method
    public function DeleteSejarahDesa($id)
    {
        $sejarahdesa = sejarahdesa::findOrFail($id);


        sejarahdesa::findOrFail($id)->delete();

        $notification = array(
            'message' => 'sejarah desa Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    } //endmethod
}
