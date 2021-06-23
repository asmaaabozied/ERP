<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\PointOfSale;
use Illuminate\Http\Request;
use App\Http\Requests\PointOfSaleRequest;





//use App\Http\Controllers\Controller;

class PointOfSaleController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pointofsales= PointOfSale::latest()->paginate(10);
        return view('dashboard.pointofsale.index',compact('pointofsales'));
        //return response(['data'=>$pointofsales,'msg'=>'true']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pointofsale.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PointOfSaleRequest $request)
    {
        
            $data = [
                'code'=>$request->input('code'),
                
              ];
              foreach (config('translatable.locales') as $locale) {
                $data[$locale]['point_name'] = $request->$locale['name'];
            }
                $pointofsale = PointOfSale::create($data);
               
                return redirect()->route('pointofsale.index')->with('success',trans('general.saved'));
                //return response()->json(['message'=>'ok','success'=>200]);
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
