<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use Illuminate\Http\Request;
use App\Http\Requests\CurrencyRequest;
use App\Http\Requests\CurrencyValidation;

class CurrencyController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $currencies= Currency::latest()->paginate(10);
        $curpagin= Currency::orderBy('id','desc')->paginate(5);
        $curall= Currency::get();
        return view('dashboard.Currency.tablecurrency',compact('currencies' , 'curpagin' , 'curall'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('dashboard.Currency.createCurrency');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CurrencyValidation $request)
    {

        $date = [

        ];

        foreach (config('translatable.locales') as $Locale) {
            $date[$Locale]['name'] = $request->$Locale['name'];
        };

       $Currency =Currency::create($date);
       return redirect('products'); ////////////////

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
