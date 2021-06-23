<?php

namespace App\Http\Controllers;

use App\Http\Requests\CartValidation;
use App\Models\Cart;
use App\Models\Currency;
use App\Models\Employ;
use App\Models\Vip;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function create()
    {
        $Vips = Vip::get();
        $Currency = Currency::get();
        $Emploies = Employ::get();
        return view('dashboard.cart.create', compact('Vips', 'Currency', 'Emploies'));
    }

    public function store(CartValidation $request)
    {

        $date = [
            'employe_id' =>  $request->employe_id,
            'Currency_id' =>  $request->Currency_id,
            'vip_id' =>  $request->vip_id,

            'Account_Category' => $request->Account_Category, //>
            'isActive' => $request->isActive, //>


            'isActive' => $request->isActive,

            'address' => $request->address,
            'phone_number1' => $request->phone_number1,
            'phone_number2' => $request->phone_number2,
            'email' => $request->email,
            'iban' => $request->iban,
            'bank_account_number' => $request->bank_account_number,
            'tax_registration_number' => $request->tax_registration_number,
            'type' => $request->type,

            'limited_money' => $request->limited_money,  //
            'Note' => $request->Note, //
            'Credit_limit' => $request->Credit_limit,
            'Balance_relay' => $request->Balance_relay,

        ];

        foreach (config('translatable.locales') as $Locale) {
            $date[$Locale]['name'] = $request->$Locale['name'];
        };

        $Cart = Cart::create($date);

        return view('dashboard.cart.cart');
    }


    public function index()
    {
        $Carts = Cart::where('isActive', '=', 1)->orderBy('id', 'desc')->paginate(10);
        return view('Dashboard.card.allcart', compact('Carts'));
    }



    public function show($id)
    {
        $Cart = Cart::findOrFail($id);

        $currency = $Cart->Currency_id;

        return view('Dashboard.card.show', compact('Cart', 'currency'));
    }
}
