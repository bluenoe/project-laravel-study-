<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;    

class PageController extends Controller
{
    public function getIndex()
    {
        return view('page.homepage');
    }

    public function getLoaiSp()
    {
        return view('page.product');
    }

    public function getChiTietSp()
    {
        return view('page.product_detail');
    }

    public function getLienHe()
    {
        return view('page.contact');
    }

    public function getGioiThieu()
    {
        return view('page.about');
    }
}
