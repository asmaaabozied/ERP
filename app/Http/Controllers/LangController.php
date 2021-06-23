<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LangController extends Controller
{
    public function getlang($lang ,Request $request)
    {
        $request->session()->put('lang',$lang);
        return back();
    }
}
