<?php

namespace App\Http\Controllers\Home;

use App\Models\HomeSlide;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class HomeSliderController extends Controller
{
    public function HomeSlider()
    {
        $homeslide = HomeSlide::find(1);
        return view('admin.home_slide.home_slide_all', compact('homeslide'));
    } //end method
    public function UpdateSlider(Request $request)
    {
        $slide_id = $request->id;

        if ($request->file('home_slide')) {
            $image = $request->file('home_slide');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension(); //ngambil nama file

            Image::make($image)->resize(636, 852)->save('upload/home_slide/' . $name_gen); //panjanglebar
            $save_url = 'upload/home_slide/' . $name_gen;

            HomeSlide::findOrfail($slide_id)->update([
                'title' => $request->title,
                /*ini databasenya*/ 'short_title' => $request->short_title,
                'video_url' => $request->video_url,
                /**ini nama inputan filenya  */
                'home_slide' => $save_url,

            ]);
            $notification = array(
                'message' => 'Home Slide Updated with Image Successfully',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        } else {
            HomeSlide::findOrfail($slide_id)->update([
                'title' => $request->title,
                /*ini databasenya*/ 'short_title' => $request->short_title,
                'video_url' => $request->video_url,
                /**ini nama inputan filenya  */

            ]);
            $notification = array(
                'message' => 'Home Slide Updated without Image Successfully',
                'alert-type' => 'success'
            ); //end else
        }
    } //end method
}
