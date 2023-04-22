<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Footer;


class FooterController extends Controller
{
    public function FooterSetup()
    {
        $allfooter = Footer::find(1);
        return view('admin.footer.footer_all', compact('allfooter'));
    } //end Method

    public function UpdateFooters(Request $request)
    {
        $footer_id = $request->id;

        Footer::findOrfail($footer_id)->update([
            'number' => $request->number,
            'short_description' => $request->short_description,
            'address' => $request->address,
            'email' => $request->email,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'copyright' => $request->copyright,

        ]);
        $notification = array(
            'message' => 'Footer Page Updated with Image Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
