<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFormValidation;
use App\Models\Category;
use App\Models\Unit;
use App\Models\Bulkunit;
use App\Models\CostWay;
use App\Models\Currency;
use App\Models\Discount;
use App\Models\Guarantee;
use App\Models\Product;
use App\Models\Option;
use App\Models\OptionValue;
use App\Models\ProductType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ProductController extends Controller
{
    public function create()
    {
        $categories = Category::get();
        $ProductType = ProductType::get();
        $CostWay = CostWay::get();
        $Discounts = Discount::get();
        $Guarantees = Guarantee::get();
        $options = Option::get();
        $units = Unit::get();
        $bulkunits = Bulkunit::get();
        $values = OptionValue::get();
        $Currency = Currency::get();
        $products = Product::get();

        return view('dashboard.product.create', compact('categories', 'ProductType', 'CostWay', 'Discounts', 'Guarantees', 'units', 'bulkunits','options','values','Currency','products'));
    }

    //done


    public function store(StoreFormValidation $request)
    {

        if($request->hasFile('image')){

            $image = Storage::putFile("product", $request->file('image'));
        }

        $date = [

            'image' => $image ?? '',
            'category_id' =>  $request->category_id,
            'products_type_id' =>  $request->products_type_id,
            'cost_way_id' =>  $request->cost_way_id,
            'discount_id' =>  $request->discount_id,
            'property_id' =>  $request->property_id,
            'guarantee_id' =>  $request->guarantee_id,
            'currency_id' =>  $request->currency_id,
            // 'en' => ['name_product_type' =>  $request->name_product_type_en, 'name_product' => $request->name_product_en],
            // 'ar' => ['name_product_type' => $request->name_product_type_ar, 'name_product' => $request->name_product_ar],
            'parcode_product_type' =>  $request->parcode_product_type,

            'model_product' =>  $request->model_product,
            'price' =>  $request->price,

            'greet_numper' =>  $request->greet_numper,
            'small_numper' =>  $request->small_numper,
            'order_limit' =>  $request->order_limit,
            'Consumer_price' =>  $request->Consumer_price,

            'min_price_sell' =>  $request->min_price_sell,
            'price_buy' =>  $request->price_buy,
            'unit_id' => $request->unit_id,
            'stock'=>$request->stock,
            'cost_price'=>$request->cost_price
        ];


        foreach (config('translatable.locales') as $Locale) {
            $date[$Locale]['name_product'] = $request->$Locale['name_product'];
        };


       $Product = Product::create($date);


        $bulk_units = $request->get('bulkunits');
        ##get the arrays requests that are related to each bulkunit
        $symbols = $request->get('symbols');
        $prices =  $request->get('prices');
        $great_numbers = $request->get('great_numbers');
        $small_numbers = $request->get('small_numbers');
        $order_limits = $request->get('order_limits');
        $consumer_prices =  $request->get('consumer_prices');
        $min_prices_sell =  $request->get('min_prices_sell');
        $prices_buy =  $request->get('prices_buy');
        $quantaties =  $request->get('quantaties');
        $options = $request->get('options');

        ##check if request has bulkunits was assigned to the product
        if (!empty($bulk_units)) {
            foreach ($bulk_units as $key_bulk => $bulk_unit) {
                #putting default values
                $price = NULL;
                $great_number = NULL;
                $small_number = NULL;
                $order_limit = NULL;
                $consumer_price = NULL;
                $min_price_sell = NULL;
                $price_buy = NULL;
                $symbol = 'multiply';
                $quantity = 1;

                #check if the request has a bulkunit prices
                if (!empty($prices)) {
                    #if this bulk unit has a price was assigned to it if the user wants it to be different than the basic price for the product
                    if (array_key_exists($key_bulk, $bulk_units)) {
                        $price = $prices[$key_bulk];
                    }
                }

                #check if the request has a quantities
                if (!empty($quantaties)) {
                    #if this bulk unit has a quantities was assigned to it if the user doesn't want it to be 1 for the product
                    if (array_key_exists($key_bulk, $quantaties)) {
                        $quantity = $quantaties[$key_bulk];
                    }
                }

                #check if the request has a bulkunit prices
                if (!empty($great_numbers)) {
                    #if this bulk unit has a great_number was assigned to it if the user wants it to be different than the basic great_number for the product
                    if (array_key_exists($key_bulk, $great_numbers)) {
                        $great_number = $great_numbers[$key_bulk];
                    }
                }

                #check if the request has a bulkunit small_number
                if (!empty($small_numbers)) {
                    #if this bulk unit has a small_number was assigned to it if the user wants it to be different than the basic small_number for the product
                    if (array_key_exists($key_bulk, $small_numbers)) {
                        $small_number = $small_numbers[$key_bulk];
                    }
                }

                #check if the request has a bulkunit order_limit
                if (!empty($order_limits)) {
                    #if this bulk unit has a order_limit was assigned to it if the user wants it to be different than the basic order_limit for the product
                    if (array_key_exists($key_bulk, $order_limits)) {
                        $order_limit = $order_limits[$key_bulk];
                    }
                }

                #check if the request has a bulkunit consumer_prices
                if (!empty($consumer_prices)) {
                    #if this bulk unit has a consumer_price was assigned to it if the user wants it to be different than the basic consumer_price for the product
                    if (array_key_exists($key_bulk, $consumer_prices)) {
                        $consumer_price = $consumer_prices[$key_bulk];
                    }
                }

                #check if the request has a bulkunit min_prices_sells
                if (!empty($min_prices_sell)) {
                    #if this bulk unit has a min_prices_sell was assigned to it if the user wants it to be different than the basic min_prices_sell for the product
                    if (array_key_exists($key_bulk, $min_prices_sell)) {
                        $min_price_sell = $min_prices_sell[$key_bulk];
                    }
                }
                #check if the request has a bulkunit prices_buy
                if (!empty($prices_buy)) {
                    #if this bulk unit has a price_buy was assigned to it if the user wants it to be different than the basic price_buy for the product
                    if (array_key_exists($key_bulk, $prices_buy)) {
                        $price_buy = $prices_buy[$key_bulk];
                    }
                }
                #check if the request has a symbols
                if (!empty($symbols)) {
                    if (array_key_exists($key_bulk, $symbols)) {
                        $symbol = $symbols[$key_bulk];
                    }
                }
                $Product->bulkunits()->syncWithoutDetaching([
                    $bulk_unit => [
                        'symbol' => $symbol,
                        'price' => $price,
                        'great_number' => $great_number,
                        'small_number' => $small_number,
                        'order_limit' => $order_limit,
                        'consumer_price' => $consumer_price,
                        'min_price_sell' => $min_price_sell,
                        'price_buy' => $price_buy,
                        'quantity' => $quantity
                    ]

                ]);
            }
        }

        ##check if request has options that was assigned to the product
        if(!empty($options)){
            $options = $request->get('options');

            foreach($options as $key_option => $option){
                foreach($option as $values){
                    foreach($values as $key_value =>$value){
                        dd($values);
                        $Product->optionvalues()->syncWithoutDetaching([

                            $key_value => [
                                'option_id'=> $key_option,
                                'price' => $value['price'],
                                'option_value_id'=>$key_value,
                                'price_prefix'=> $value['price_prefix'],
                                'stock'=>$value['stock']
                            ]

                        ]);
                    }
                }


            }
        }

        return redirect('products'); ////////////////
    }


    public function edit($id)
    {
        $categories = Category::get();
        $ProductType = ProductType::get();
        $CostWay = CostWay::get();
        $Discounts = Discount::get();
        $Product = Product::findOrFail($id);

        return view('Dashboard.product.edit', compact('Product', 'categories', 'ProductType', 'CostWay', 'Discounts'));
    }

    // done

    public function update(StoreFormValidation $request, $id)
    {

        $Product = Product::findOrFail($id);

        $Product->update([

            'category_id' =>  $request->category_id,
            'products_type_id' =>  $request->products_type_id,
            'cost_way_id' =>  $request->cost_way_id,
            'discount_id' =>  $request->discount_id,
            'property_id' =>  $request->property_id,

            'en' => ['name_product_type' =>  $request->name_product_type_en, 'name_product' => $request->name_product_en],
            'ar' => ['name_product_type' => $request->name_product_type_ar, 'name_product' => $request->name_product_ar],

            'code_product_type' =>  $request->code_product_type,
            'parcode_product_type' =>  $request->parcode_product_type,

            'model_product' =>  $request->model_product,
            'price' =>  $request->price,

            'greet_numper' =>  $request->greet_numper,
            'small_numper' =>  $request->small_numper,
            'order_limit' =>  $request->order_limit,
            'Consumer_price' =>  $request->Consumer_price,

            'min_price_sell' =>  $request->min_price_sell,
            'price_buy' =>  $request->price_buy,

        ]);
        return redirect('show/product');
    }


    public function destroy($id)
    {
        $Product = Product::findOrFail($id);
        $Product->delete();
        return redirect('product');
    }
    

    public function index()
    {

        $Products = Product::orderBy('id','desc')->paginate(5);
        $Product= Product::get();

        return view('dashboard.product.product', compact('Products', 'Product'));

    }

    public function show($id)
    {
        $Product = Product::findOrFail($id);
        $guarantee = $Product->guarantee;
        return view('dashboard.product.details', compact('Product', 'guarantee'));
    }
}
// done
