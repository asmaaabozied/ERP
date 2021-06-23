<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class LogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logs = DB::table('activity_log')->orderBy('id', 'DESC')->paginate(10);
        return view('dashboard.log.index',compact('logs'));
    }

    
}
