<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
        // 💬 Biến dữ liệu
        $message = "Hello from HelloController!";
        $a = 5 + 4;
        $array = [$a, $message];

        // 📦 Trả dữ liệu sang view bằng compact (gọn, chuẩn Laravel)
        return view('hello', compact('message', 'a'));
    }
}
