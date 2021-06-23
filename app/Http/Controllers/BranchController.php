<?php

namespace App\Http\Controllers;
use App\Models\Country;
use App\Models\City;
use App\Models\District;
use App\Models\Branch;
use Illuminate\Http\Request;
use App\Http\Requests\BranchRequest;


class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $branchs= Branch::with('country')->with('city')->with('district')->latest()->paginate(10);
       
       return view('dashboard.branch.index',compact('branchs'));
       //return response(['data'=>$branchs,'msg'=>'true']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries=Country::get();
        $cities=City::get();
        $districts=District::get();
        return view('dashboard.branch.create',compact('countries','cities','districts'));
    }


    public function fetchCity(Request $request)
    {
        $data['cities'] = City::where("country_id",$request->country_id)->get();

        return response()->json($data);
    }

    public function fetchDistrict(Request $request)
    {
        $data['districts'] = District::where("city_id",$request->city_id)->get();

        return response()->json($data);
    }

    public function fetchBranch(Request $request)
    {
        $data['branchs'] = Branch::where("disrict_id",$request->district_id)->get();

        return response()->json($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BranchRequest $request)
    {
     // dd($request->input('address'));

        $data = [
            'country_id'=>$request->input('country_id'),
            'city_id'=>$request->input('city_id'),
            'district_id'=>$request->input('district_id'),
            'address'=>$request->input('address'),
            'lat' =>$request->input('lat'),
            'long' =>$request->input('lng'),
          ];
          foreach (config('translatable.locales') as $locale) {
            $data[$locale]['name'] = $request->$locale['name'];

        }
        //dd($data);
          $branch = Branch::create($data);
          return redirect()->route('branch.index')->with('success',trans('general.saved'));
         //return redirect()->action([BranchController::class,'index']);
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
