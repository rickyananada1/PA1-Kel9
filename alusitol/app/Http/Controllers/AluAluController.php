<?php

namespace App\Http\Controllers;

use App\Models\alualu;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class AluAluController extends Controller
{
    public function AllAlu()
    {
        $alualu = alualu::latest()->get();
        return view('admin.alualu.allalualu', compact('alualu'));
    }
    public function AddAlu()
    {
        return view('frontend.alualu.addalualu');
    }

    public function StoreAlu(Request $request)
    {
        alualu::insert([
            'to' => $request->to,
            'from' => $request->from,
            'isi' => $request->message,
            'created_at' => Carbon::now(),
        ]);
        $notification = array(
            'message' => 'AluAlu Uda Terkirim ',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function DeleteAlu($id)
    {

        alualu::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Alu Alu Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    } //endmethod
}
