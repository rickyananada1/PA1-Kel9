<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\geografis;
use Illuminate\Support\Carbon;

class GeografisController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function AllGeografis()
    {
        $geografis = geografis::latest()->paginate(10);
        return view('admin.page_tentangdesa.geografis.all', compact('geografis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function AddGeografis()
    {
        return view('admin.page_tentangdesa.geografis.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function StoreGeografis(Request $request)
    {

        geografis::insert([
            'geografis' => $request->geografis,

            'created_at' => Carbon::now(),

        ]);
        $notification = array(
            'message' => 'geografis Desa Inserted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.geografis.desa')->with($notification);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function EditGeografis($id)
    {
        $geografis = geografis::findOrFail($id);
        return view('admin.page_tentangdesa.geografis.edit', compact('geografis'));
    } //end method

    /**
     * Update the specified resource in storage.
     */
    public function UpdateGeografis(Request $request)
    {
        $geografis_id = $request->id;

        geografis::findOrFail($geografis_id)->update([
            'geografis' => $request->geografis,

            'updated_at' => Carbon::now(),
        ]);
        $notification = array(
            'message' => 'geografis Desa Updated  Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('all.geografis.desa')->with($notification);
    } //end method
    public function DeleteGeografis($id)
    {
        $geografis = geografis::findOrFail($id);


        geografis::findOrFail($id)->delete();

        $notification = array(
            'message' => 'geografis desa Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    } //endmethod
}
