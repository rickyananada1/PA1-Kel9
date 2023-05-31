<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\beritacategorym;
use App\Models\alualu;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use App\Models\layanancategorym;


class UserAlualuController extends Controller
{
    public function Alualu()
    {
        $alualu = alualu::latest()->get();
        $categoryJ = layanancategorym::orderBy('layanan_category', 'ASC')->paginate(5);
        $category = beritaCategorym::orderBy('berita_category')->paginate(5);
        return view('front.page_alualu.alualu', compact('category', 'categoryJ', 'alualu'));
    }
    public function StoreAluAluu(Request $request)
    {
        $request->validate([
            'isi' => 'required'
        ], [
            'isi.required' => 'Alualu is required',
        ]);

        Alualu::insert([
            'to' => $request->input('to'),
            'from' => Auth::user()->username,
            'isi' => $request->input('isi'),
            'created_at' => Carbon::now(),
        ]);
        $notification = array(
            'message' => 'alualu Inserted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('alualu.user')->with($notification);
    } //end Method
}
