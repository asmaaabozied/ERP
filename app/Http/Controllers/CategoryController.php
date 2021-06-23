<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Models\CostWay;
use App\Models\Category;
use App\Models\ProductType;
use App\Models\MainCategory;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $type = "child";
        if($type == 'main'){
            $categories = MainCategory::latest()->paginate(10);

        }elseif($type == 'child'){
            $categories = Category::with('mainCateogry')->paginate(10);
        }
        return view('dashboard.category.index',compact('categories','type'));
 
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $type = 'child';
        $product_types = ProductType::get();
        $units = Unit::get();
        $cost_ways = CostWay::get();
        $categories = Category::get(); 
        return view('dashboard.category.create',compact('categories','product_types','units','cost_ways','type'));
   
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {   

        $type = 'child';
        $data['category_id'] =1; //$request->get('category');
        $data['cost_way_id'] = $request->get('cost_id');
        $data['unit_id'] = $request->get('unit_id');
        $data['type_id'] = $request->get('type_id');
        $data['code'] = $request->get('code');
        if( $request->get('active') != null){
            $data['active'] =  $request->get('active');
        }
        if( $request->get('apply_taxes') != null){

            $data['apply_taxes'] =  $request->get('apply_taxes');
        }
        foreach (config('translatable.locales') as $locale) {
            $data[$locale]['name'] = $request->$locale['name'];
            if(array_key_exists('description' ,$request->$locale)){
                $data[$locale]['description'] = $request->$locale['description'];
            }
            if(array_key_exists('notes' ,$request->$locale)){

                $data[$locale]['notes'] = $request->$locale['notes'];
            }
        }
     
        if ($request->hasFile('image')) {

            //Upload main category's Image
            $image = $request->file('image');
            $name = $image->getClientOriginalName();                    
            $destinationPath = public_path('/images/categories');
            $image->move($destinationPath, $name);

            $data['image'] = $name;
        }
        if($type == "child"){
            $category = Category::create($data);
        }elseif($type == "main"){
            $category = MainCategory::create($data);
        }
        if($category){
            if($type == "child"){
                return redirect('categories');
            }else{
                return redirect('categories/main');
            }

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
