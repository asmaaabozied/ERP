<?php

namespace App\Http\Controllers;
use App\Models\District;
use App\Models\City;
use App\Http\Requests\DistrictRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class DistrictController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $districts= District::with('city.country')->latest()->paginate(10);
        //$cities=City::get();
        return view('dashboard.district.index',compact('districts'));
        //return response(['data'=>$districts,'msg'=>'true']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $districts=District::get();
        $cities=City::get();
        return view('dashboard.district.create',compact('districts','cities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DistrictRequest $request)
    {
     // dd($request->all());
        $data = [
            'city_id'=>$request->input('city_id'),
            
          ];
          foreach (config('translatable.locales') as $locale) {
            $data[$locale]['name'] = $request->$locale['name'];
            
        }
        //  dd($data);
          $district = District::create($data);
          return redirect()->route('district.index')->with('success',trans('general.saved'));
          //return redirect()->action([DistrictController::class,'index']);
         // return response()->json(['message'=>'ok','success'=>200]);
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
