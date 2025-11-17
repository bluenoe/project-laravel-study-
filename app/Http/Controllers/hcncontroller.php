<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hcncontroller extends Controller
{
    public function formhcn()
    {
        return view('formhcn');
    }

    public function tinhhcn(Request $request)
    {
        $chieudai = $request->input('chieudai');
        $chieurong = $request->input('chieurong');
        $dientich = $chieudai * $chieurong;

        // gui data ra view
        return view('formhcn', compact('chieudai', 'chieurong', 'dientich'));
    }
}
