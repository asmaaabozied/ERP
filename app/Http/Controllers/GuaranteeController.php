<?php

namespace App\Http\Controllers;

use App\Http\Requests\GuaranteeValidation;
use App\Models\Guarantee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GuaranteeController extends Controller
{


    public function index()
    {

        $Guarantee= Guarantee::latest()->paginate(10);
        $Guarpagin= Guarantee::orderBy('id','desc')->paginate(2);
        $Guarall= Guarantee::get();
        return view('dashboard.guarantee.Guarantee',compact('Guarantee' , 'Guarpagin' , 'Guarall'));
    }




    public function create()
    {
        return view('dashboard.guarantee.guaranteecreate');
    }
    public function store(GuaranteeValidation $request)
    {

        $date = $request->all();





        if($request->hasFile('image')){
            $image = Storage::putFile("ticket", $request->file('image'));
        }


        $date['image'] = $image ?? '';
        Guarantee::create($date);
        return back();

    }

}
