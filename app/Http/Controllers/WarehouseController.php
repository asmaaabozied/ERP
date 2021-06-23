<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Voucher;
use App\Models\Employ;
use App\Models\Country;
use App\Models\City;
use App\Models\District;
use App\Models\Branch;
use App\Models\Warehouse;
use Illuminate\Http\Request;
use App\Http\Requests\WareHouseRequest;


class WarehouseController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $warehouses= Warehouse::with('country','city','district','branch','employ','voucherin','voucherout')->latest()->paginate(10);
       
       // dd($warehouses);
        return view('dashboard.warehouse.index',compact('warehouses'));
        //return response(['data'=>$warehouses,'msg'=>'true']);
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
        $branchs=Branch::get();
        $employes=Employ::get();
        $warehouses=Warehouse::get();
        $vouchers_In=Voucher::where('type','in')->get();
        $vouchers_Out=Voucher::where('type','out')->get();
       
        return view('dashboard.warehouse.create',compact('employes','warehouses','vouchers_In','vouchers_Out','countries','cities','districts','branchs'));
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
        $data['branchs'] = Branch::where("district_id",$request->district_id)->get();

        return response()->json($data);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WareHouseRequest $request)
    {
      
       
            $data = [
                'warehouse_id'=>$request->input('warehouse_id'),
                'country_id'=>$request->input('country_id'),
                'city_id'=>$request->input('city_id'),
                'district_id'=>$request->input('district_id'),
                'branch_id'=>$request->input('branch_id'),
                'parent_id'=>$request->input('warehouse_id'),
                'employ_id'=>$request->input('employ_id'),
                'store_first'=>$request->input('store_first'),
                'store_last'=>$request->input('store_last'),
                'in_foriegn'=>$request->input('voucher_in'),
                'out_foriegn'=>$request->input('voucher_out'),
                     ];
                     foreach (config('translatable.locales') as $locale) {
                        $data[$locale]['ware_name'] = $request->$locale['name'];
                        $data[$locale]['address'] = $request->$locale['address'];
                        $data[$locale]['notes'] = $request->$locale['notes'];
                        
                        
                    }

                $warehouse = Warehouse::create($data);

                if($request->flag==1){
                    return $warehouse;

                }
                return redirect()->route('warehouse.index')->with('success',trans('general.saved'));
              // return redirect()->action([WarehouseController::class,'index']);
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
