<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\alualu;
use Carbon\Carbon;

class AluAluController extends Controller
{
    public function AluAlu()
    {
        return view('frontend.alualu');
    }
    public function StoreAluAlu(Request $request)
    {
        alualu::insert([
            'name' => $request->name,
            'email' => $request->email,
            'to' => $request->to,
            'message' => $request->message,
            'created_at' => Carbon::now(),
        ]);
        $notification = array(
            'message' => 'AluAlu Submitted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function AluAluMessage()
    {
        $alualu = alualu::latest()->get();
        return view('admin.alualu.alualu_message', compact('alualu'));
    }
    public function DeleteAluAlu($id)
    {

        alualu::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Alu Alu Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    } //endmethod

}
