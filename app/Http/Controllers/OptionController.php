<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Option;
use App\Models\OptionValue;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\OptionRequest;

class OptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $options = Option::latest()->paginate(10);
        return view('dashboard.option.index',compact('options'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.option.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OptionRequest $request)
    {
        if( $request->get('active') != null){

            $data['active'] = $request->get('active') ;
        }
        $data['type'] = $request->get('type') ;
        foreach (config('translatable.locales') as $Locale) {
            $data[$Locale]['name'] = $request->$Locale['name'];
        };
        $option = Option::create($data);
        
        if(!empty($request->get('values'))){
            $option_values = $request->get('values');

            foreach($option_values['en']['name'] as $key_value => $option_value){

                $data['en']['name']= $option_value;
                $data['ar']['name']= $option_values['ar']['name'][$key_value];
                $data['option_id'] = $option->id;
                $option_value = OptionValue::create($data);
            }
        }
        if($option){
            return redirect('options');
        }
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
