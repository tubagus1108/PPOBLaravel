<?php

namespace App\Http\Controllers\WEB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function tos()
    {
        return view('halaman.tos');
    }
    public function faq()
    {
        return view('halaman.faq');
    }
    public function priceSMM()
    {
        return view('listprice.smmprice');
    }
}
