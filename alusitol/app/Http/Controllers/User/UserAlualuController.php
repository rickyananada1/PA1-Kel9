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
    public function Alualu(Request $request)
    {
        $query = alualu::query()->latest();
        $date = $request->date_filter;

        switch ($date) {
            case 'today':
                $query->whereDate('created_at', Carbon::today());
                break;
            case 'yesterday':
                $query->whereDate('created_at', Carbon::yesterday());
                break;
            case 'this_week':
                $query->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()]);
                break;
            case 'this_month':
                $query->whereMonth('created_at', Carbon::now()->month);
                break;
            case 'this_year':
                $query->whereYear('created_at', Carbon::now()->year);
                break;
        }


        $alualus = $query->get();
        $categoryJ = layanancategorym::orderBy('layanan_category', 'ASC')->paginate(5);
        $category = beritaCategorym::orderBy('berita_category')->paginate(5);
        return view('front.page_alualu.alualu', compact('category', 'categoryJ', 'alualus'));
    }

    public function StoreAluAluu(Request $request)
    {
        $request->validate([
            'isi' => ['required', function ($attribute, $value, $fail) use ($request) {
                $filteredValue = str_ireplace(['kontol', 'pepek', 'bodat', 'bangsat', 'biadab'], '***', $value);

                if ($filteredValue !== $value) {
                    $fail('Kata-kata tidak diperbolehkan');
                }

                $request->merge(['isi' => $filteredValue]);
            }],
        ], [
            'isi.required' => 'Alualu is required',
        ]);

        Alualu::insert([
            'to' => $request->input('to'),
            'from' => Auth::user()->username,
            'isi' => $request->input('isi'),
            'last_usage' => Carbon::now(),
            'user_id' => Auth::user()->id,
            'created_at' => Carbon::now(),
        ]);

        $notification = [
            'message' => 'Alualu Inserted Successfully',
            'alert-type' => 'success'
        ];

        return redirect()->route('alualu.user')->with($notification);
    }

    public function SearchAluAlu(Request $request)
    {
        $query = $request->get('query');

        $results = alualu::where('isi', 'LIKE', '%' . $query . '%')
            ->get();

        return response()->json($results);
    }
}
