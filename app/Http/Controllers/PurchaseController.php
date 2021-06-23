<?php

namespace App\Http\Controllers;

use App\Http\Requests\PurchaseRequest;
use App\Models\Currency;
use App\Models\Product;
use App\Models\Purchase;
use App\Models\Warehouse;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
       
     
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $warehouses=Warehouse::get();
        $currancies=Currency::get();
        $products= Product::with('unit')->get();
        
        return view('dashboard.beginning_inventory.create',compact('warehouses','currancies','products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
   /// dd($request->all());
    
   

        $data =[
            'warehouse_id'=>$request->input('warehouse_id'),
            'date'=>$request->input('date'),
            'currency_id'=>$request->input('currency_id'),
            'statement'=>$request->input('statement'),
            'breakeevenvalue'=>$request->input('breakeevenvalue'),
            'subproject'=>$request->input('subproject'),
            
            

        ];
        
       // dd($data);
        //$data = $request->all();
    
         $purchase=Purchase::create($data);
         $products=$request->input('products');
         $prices=$request->input('price');
         //$units=$request->input('unit');
         $notes=$request->input('notes');
         $quantities=$request->input('qty');
         $total_without_taxs=$request->input('totalwot');
        
         $total_with_taxs=$request->input('totalat');
        // dd($total_with_taxs);
       //  $total=$request->input('total');
        // dd($total);
        foreach($products as $key_product => $product){
            $producto=Product::find($product);
           // dd();
            $purchase->products()->syncWithoutDetaching([
                $product => [
                  
                    'price' => $prices[$key_product],
                    'unit' => $producto->unit_id,
                    'notes' => $notes[$key_product],
                    'quantity' => $quantities[$key_product],
                    'total_without_tax' => $total_without_taxs[$key_product],
                    'total_with_tax' => $total_with_taxs[$key_product],
                    'total' =>$total_without_taxs[$key_product] + $total_with_taxs[$key_product] ,
                    
                ]

            ]);
        };

            $purchase->total_without_tax=$request->input('total_without_taxs');
            $purchase->total_with_tax=$request->input('total_with_taxs');
            $purchase->total=$request->input('total');
            $purchase->update();

         return redirect()->route('Purchases.create')->with('success',trans('general.saved'));
          
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
