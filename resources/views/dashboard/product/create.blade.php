@extends('dashboard.layouts.app')
@section('content')


    <x-dashboard.tap-content>
        <x-slot name="breadcrumb">
            <x-dashboard.breadcrumb />
        </x-slot>
        <x-slot name="taps">
            <li class="nav-item ">
                <a class="nav-link active" id="group-card-tab" data-toggle="tab" href="#group-card-0">
                    <span class="nav-text">Group card</span>
                </a>
            </li>
        </x-slot>
        <x-slot name="tap_id"> group-card-0 </x-slot>


        {{-- begin main content --}}

        <!--begin::Container-->
        <div class="container">
            <div class="card card-custom mb-9 mt-10">
                <div class="card-header flex-wrap border-0 pb-0">

                    <div class="card-title">
                        <h3 class="card-label">@lang('general.product')</h3>


                    </div>



                    <div class="add-tabs w-100 sub-tabs">
                        <ul class="nav nav-tabs0" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="general" data-toggle="tab" href="#page-general">
                                    <span class="nav-icon">
                                        <i class="flaticon2-gear"></i>
                                    </span>
                                    <span class="nav-text">@lang('general.general')</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="data" data-toggle="tab" href="#page-data">
                                    <span class="nav-icon">
                                        <i class=" flaticon2-contract"></i>
                                    </span>
                                    <span class="nav-text">@lang('general.data')</span>
                                </a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" id="unit-tab" data-toggle="tab" href="#page-unit">
                                <span class="nav-icon">
                                    <i class=" flaticon2-tag"></i>
                                </span>
                                <span class="nav-text">Choose unit</span>
                            </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="option-tab" data-toggle="tab" href="#page-option">
                                    <span class="nav-icon">
                                        <i class=" flaticon2-console"></i>
                                    </span>
                                    <span class="nav-text">@lang('general.option')</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="alternative-items-tab" data-toggle="tab" href="#alternative-items">
                                    <span class="nav-icon">
                                        <i class=" flaticon2-layers-2"></i>
                                    </span>
                                    <span class="nav-text">alternative items</span>
                                </a>
                            </li>
                        </ul>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $err)
                                    <p>{{ '* ' . $err }}</p>
                                @endforeach
                            </div>
                        @endif

                        <form id="form1" autocomplete="off" enctype="multipart/form-data" action="{{ route('products.store') }}" method="POST">
                            @csrf
                            <div class="tab-content" id="myTabContent">

                                <div class="tab-pane fade active show" id="page-general" role="tabpanel"
                                    aria-labelledby="page-g-tab">

                                    <ul class="nav nav-tabs0" id="myTabs-general" role="tablist">
                                        @foreach (config('translatable.locales') as $key_locale => $locale)
                                            <li class="nav-item">
                                                <a @if ($key_locale == 0) class="nav-link active"  @else class="nav-link" @endif id="{{ $locale }}-tab" data-toggle="tab"
                                                    href="#{{ $locale }}-general">

                                                    <span class="nav-text "> @lang('general.'.$locale)</span>
                                                </a>
                                            </li>
                                        @endforeach


                                    </ul>

                                    <div class="tab-content" id="myTabContent-general">
                                        @foreach (config('translatable.locales') as $key_locale => $locale)
                                            @php $locales[] = $locale; @endphp
                                            <div @if ($key_locale == 0) class="tab-pane fade active show" @else  class="tab-pane fade" @endif id="{{ $locale }}-general" role="tabpanel"
                                                aria-labelledby="{{ $locale }}-tab">
                                                <div class="card-body p-0">

                                                    <div class="form-group row">
                                                        <label
                                                            class="col-lg-12 col-form-label">@lang('general.product_name_'.$locale)</label>
                                                        <div class=" col-lg-9">

                                                            <div class="col-lg-12 input-group p-0">
                                                                <input type="text" class="form-control"
                                                                    placeholder="@lang('general.product_name_'.$locale)"
                                                                    name="{{ $locale . '[name_product]' }}">

                                                            </div>

                                                        </div>
                                                    </div>


                                                </div>

                                            </div>
                                        @endforeach

                                    </div>
                                </div>

                                <div class="tab-pane fade" id="page-data" role="tabpanel" aria-labelledby="page-g-tab">

                                    <div class="row">



                                        <div class="form-group col-md-3 col-12">
                                            <label for="inputState">guarantee</label>
                                            <select id="inputState" class="form-control  " name="guarantee_id">
                                                <option selected disabled value="">Choose...</option>

                                                @foreach ($Guarantees as $Guarantee)

                                                    <option value="{{ $Guarantee->id }}">
                                                        {{ $Guarantee->kind_guarantee }}</option>
                                                @endforeach


                                            </select>
                                        </div>

                                        <div class="form-group col-md-3 col-12">
                                            <label for="inputState">Currency</label>
                                            <select id="inputState" class="form-control  " name="currency_id">
                                                <option selected disabled value="">Choose...</option>

                                                @foreach ($Currency as $Currenc)

                                                    <option value="{{ $Currenc->id }}">
                                                        {{ $Currenc->name }}</option>
                                                @endforeach


                                            </select>
                                        </div>


                                        <div class="form-group col-md-3 col-12">
                                            <label for="inputState">category</label>
                                            <select id="inputState" class="form-control  " name="category_id">
                                                <option selected disabled value="">Choose...</option>

                                                @foreach ($categories as $categor)
                                                    <option value="{{ $categor->id }}">{{ $categor->name }}</option>
                                                @endforeach


                                            </select>
                                        </div>

                                        <div class="form-group col-md-3 col-12">
                                            <label for="inputState">ProductType</label>
                                            <select id="inputState" class="form-control  " name="products_type_id">
                                                <option selected disabled value="">Choose...</option>

                                                @foreach ($ProductType as $Product)
                                                    <option value="{{ $Product->id }}">{{ $Product->name }}</option>
                                                @endforeach


                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">



                                        <div class="form-group col-md-4 col-12">
                                            <label for="inputState">Cost_Way</label>
                                            <select id="inputState" class="form-control  " name="cost_way_id">
                                                <option selected disabled value="">Choose...</option>

                                                @foreach ($CostWay as $Cost)

                                                    <option value="{{ $Cost->id }}">{{ $Cost->name }}</option>
                                                @endforeach


                                            </select>
                                        </div>


                                        <div class="form-group col-md-4 col-12">
                                            <label for="inputState">discount</label>
                                            <select id="inputState" class="form-control  " name="discount_id">
                                                <option selected disabled value="">Choose...</option>

                                                @foreach ($Discounts as $Discount)
                                                    <option value="{{ $Discount->id }}">{{ $Discount->name }}</option>
                                                @endforeach


                                            </select>
                                        </div>


                                        <div class="form-group col-md-4 col-12">
                                            <label for="inputState">unit</label>
                                            <select id="inputState" class="form-control  " name="unit_id">
                                                <option selected disabled value="">Choose...</option>
                                                @foreach ($units as $unit)
                                                    <option value="{{ $unit->id }}">{{ $unit->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        {{-- <div class="form-group col-md-4 col-12">
                                            <label for="inputState">unit</label>
                                            <select id="inputState" class="form-control  " onchange="insertInput(this)" name="unit_id">
                                                <option selected >Choose test...</option>
                                                <option value=1>hamada</option>
                                                <option value=2>hambozo</option>

                                            </select>
                                        </div>
                                        <input type="text" id="hidden_input" style="display: none;"> --}}

                                    </div>





                                    <div class="form-row">
                                        <div class="col">
                                            <label for="inputState"> code_product_type</label>

                                            <input type="numper" name="code_product_type" placeholder="code_product_type"
                                                class=" form-control  rounded-pill" id="inputmodel_product"
                                                aria-describedby="emailHelp">
                                        </div>


                                        <div class="col">
                                            <label for="inputState"> parcode_product_type</label>

                                            <input type="number" name="parcode_product_type"
                                                placeholder="parcode_product_type" class=" form-control rounded-pill"
                                                 aria-describedby="emailHelp">

                                        </div>
                                    </div>




                                    <div class="form-row">
                                        <div class="col">
                                            <label for="inputState"> model_product</label>

                                            <input type="text" name="model_product" placeholder="model"
                                                class=" form-control  rounded-pill" id="inputmodel_product"
                                                aria-describedby="emailHelp">
                                        </div>


                                        <div class="col">
                                            <label for="inputState"> number</label>

                                            <input type="number" name="price" placeholder="price"
                                                class=" form-control rounded-pill" id="inputprice"
                                                aria-describedby="emailHelp">

                                        </div>
                                        <div class="col">
                                            <label for="inputState"> stock</label>

                                            <input type="number" name="stock" placeholder="stock"
                                                class=" form-control rounded-pill"
                                                aria-describedby="emailHelp">

                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="col">
                                            <label for="inputState"> greet_numper</label>

                                            <input type="number" name="greet_numper" placeholder="max_limit"
                                                class=" form-control  rounded-pill" id="greet_numper"
                                                aria-describedby="emailHelp">
                                        </div>

                                        <div class="col">
                                            <label for="inputState"> small_numper</label>

                                            <input type="number" name="small_numper" placeholder="min_limit"
                                                class=" form-control  rounded-pill" id="small_numper"
                                                aria-describedby="emailHelp">
                                        </div>
                                        <div class="col">
                                            <label for="inputState"> order_limit</label>

                                            <input type="number" name="order_limit" placeholder="order_limit"
                                                class=" form-control  rounded-pill" id="order_limit"
                                                aria-describedby="emailHelp">
                                        </div>
                                        <div class="col">
                                            <label for="inputState"> Consumer_price</label>

                                            <input type="number" name="Consumer_price" placeholder="Consumer_price"
                                                class=" form-control  rounded-pill" id="Consumer_price"
                                                aria-describedby="emailHelp">

                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="col">
                                            <label for="inputState"> min_price_sell</label>

                                            <input type="number" name="min_price_sell" placeholder="min_price_sell"
                                                class="form-control rounded-pill" aria-describedby="emailHelp">
                                        </div>
                                        <div class="col">
                                            <label for="inputState"> price_buy</label>

                                            <input type="number" name="price_buy" placeholder="price_buy"
                                                class="form-control rounded-pill" aria-describedby="emailHelp">
                                        </div>
                                        <div class="col">
                                            <label for="inputState">cost_price</label>

                                            <input type="number" name="cost_price" placeholder="cost_price"
                                                class="form-control rounded-pill" aria-describedby="emailHelp">
                                        </div>

                                    </div>

                                     <div class="form-row" style="padding-top: 10px">

                                        <div class="col">
                                            <label for="inputState">image product</label>
                                            <input  name="image" class="form-control mb-2" type="file" id="formFileMultiple"
                                                multiple>
                                        </div>

                                    </div>


                                </div>

                                <div class="tab-pane fade" id="page-unit" role="tabpanel" aria-labelledby="unit-tab">

                                    <div class="row">

                                        <div class="form-group col-12">
                                            <!-- table button show -->


                                    <!-- Hidden inputs to have it on JS -->

                                    <input type="hidden" id="bulkunits_select" value="{{json_encode($bulkunits)}}">
                                    <input type="hidden" id="values_select" value="{{json_encode($values)}}">

                                    <table id="bulk-0" class="table table-striped table-bordered ">
                                    <tbody>

                                        <tr id="rowbulk-0">
                                            <td class="text-center"> <button type="button" class="btn btn-primary mb-4 mt-5" number=0 onclick="appendUnitRow(this)">Add BulkUnit</button></td>
                                            <td class="text-start option-left" colspan="2">

                                                <label>@lang('general.bulkunites')</label>
                                                <select id="bulkunit-0" onchange="changePrice(0)" class="form-control" name="bulkunits[]">
                                                    <option disabled selected>@lang('general.bulkunites_choose')</option>
                                                    @foreach($bulkunits as $bulkunit)
                                                    <option value="{{$bulkunit->id}}">{{$bulkunit->name}}</option>
                                                    @endforeach
                                                </select>
                                                <label>@lang('general.calculation')</label>
                                                <select id="calculation-0" onchange="changePrice(0)" class="form-control" name="symbols[]">
                                                    <option value="multiply" selected="">*</option>
                                                    <option value="divide">/</option>
                                                </select>
                                                <label>@lang('general.quantity')</label><input type="number" id="quantity-0" onchange="changePrice(0)" name="quantaties[]" min="1" value="1" style="/* width:100%; */display: inline;" class="form-control required">

                                                <label>@lang('general.price')</label><input type="number" id="price-0" name="prices[]" style="width:100%;display: inline;" class="form-control required">
                                                <label>@lang('general.consumer_price')</label><input type="number" name="consumer_prices[]" value="" class="form-control required">

                                            </td>
                                            <td colspan="3">
                                                <label>@lang('general.great_number')</label><input type="number" name="great_numbers[]" value="" class="form-control required">
                                                <label>@lang('general.small_numbers')</label><input type="number" name="small_numbers[]" value="" class="form-control required">
                                                <label>@lang('general.min_price_sell')</label><input type="number" name="min_prices_sell[]" value="" class="form-control required">
                                                <label>@lang('general.order_limits')</label><input type="number" name="order_limits[]" value="" class="form-control required">
                                                <label>@lang('general.prices_buy')</label><input type="number" name="prices_buy[]" value="" class="form-control required">
                                            </td>
                                            <td class="text-center">
                                                <button type="button" data-toggle="tooltip" title="Remove" disabled class="btn btn-danger btn-option mt-5">
                                                    <i class="fa fa-minus-circle"></i>
                                                </button>
                                            </td>

                                        </tr>




                                    </tbody>

                                    </table>




                                    <!-- end table button show -->


                                        </div>

                                    </div>



                                </div>

                                <div class="tab-pane fade" id="page-option" role="tabpanel" aria-labelledby="option-tab">



                                <div class="row">
                                    <div class="col-sm-3">
                                        <ul class="nav flex-column nav-pills" id="options-ul" >
                                            <li class="col-md-12 p-0">
                                                <select class="form-control" onchange="appendOption(this)" >
                                                    <option disabled value="" selected>@lang('general.select')</option>
                                                    @foreach($options as $option)
                                                    <option value="{{$option}}">{{$option->name}}</option>
                                                    @endforeach
                                                </select>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-9">

                                        <div class="tab-content" id="myTabContent5">

                                            {{-- <div class="tab-pane fade" id="home-5" role="tabpanel" aria-labelledby="home-tab-5">


                                                <div class="table-responsive">
                                                    <table id="option-value0" class="table table-striped table-bordered table-hover">
                                                        <thead>
                                                            <tr>
                                                                <td class="text-start">Option Value</td>
                                                                <td class="text-right">Quantity</td>
                                                                <td class="text-right">Price</td>

                                                                <td></td>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr id="option-value-row0">
                                                                <td class="text-start"><select name="" class="form-control">
                                                                        <option value="101">Baby Blue &amp; Silver </option>
                                                                        <option value="67">Beige</option>
                                                                        <option value="71">Black</option>
                                                                        <option value="92">Blue</option>
                                                                        <option value="72">Brown</option>
                                                                        <option value="54">Burgundy</option>

                                                                    </select>
                                                                    <input type="hidden" name="" value=""></td>
                                                                <td class="text-right">
                                                                    <input type="text" name="" value="" placeholder="Quantity" class="form-control"></td>

                                                                <td class="text-right">

                                                                    <select name="" class="form-control" style="width: 30%;display: inline;">    <option value="+">+</option>    <option value="-">-</option>  </select>

                                                                    <input type="text" name="" value="" placeholder="Price" class="form-control"style="width: 67%;display: inline;"></td>

                                                                <td class="text-start">
                                                                    <button type="button" data-toggle="tooltip" rel="tooltip" title="" class="btn btn-danger btn-option" data-original-title="Remove">
                                                                    <i class="fa fa-minus-circle"></i>
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <td colspan="3"></td>
                                                                <td class="text-start">
                                                                    <button type="button" data-toggle="tooltip" title="" class="btn btn-primary btn-option" data-original-title="Add Option Value">
                                                                        <i class="fa fa-plus-circle"></i>
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                                    <select id="option-values0" style="display: none;">
                                                    <option value="101">Baby Blue &amp; Silver </option>
                                                    <option value="67">Beige</option>
                                                    <option value="44">Steel</option>
                                                    <option value="78">Teel Green</option>
                                                    <option value="23">Turquoise</option>
                                                    <option value="24">Violet</option>
                                                    <option value="58">Yellow</option>
                                                    <option value="77">ًWhite</option>
                                                </select>
                                            </div>
                                            <div class="tab-pane fade" id="profile-5" role="tabpanel" aria-labelledby="profile-tab-5">
                                                <div class="form-group row">
                                                    <label class="col-sm-2 control-label" for="input-required0">Required</label>
                                                    <div class="col-sm-10">
                                                        <select name="" id="input-required0" class="form-control">
                                                            <option value="1">Yes</option>
                                                            <option value="0">No</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="table-responsive">
                                                    <table id="option-value0" class="table table-striped table-bordered table-hover">
                                                        <thead>
                                                            <tr>
                                                                <td class="text-start">Option Value</td>
                                                                <td class="text-right">Quantity</td>
                                                                <td class="text-right">Price</td>

                                                                <td></td>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr id="option-value-row0">
                                                                <td class="text-start">
                                                                    <select name="" class="form-control">
                                                                        <option value="124">Dark Blue 45 x 45</option>
                                                                        <option value="125">Dark Blue 50 x 50</option>
                                                                        <option value="123">Gold 50 x 50</option>
                                                                        <option value="122">Gold 45 x 45</option>
                                                                        <option value="126">Green 45 x 45</option>
                                                                        <option value="127">Green 50 x 50</option>
                                                                        <option value="120">Off-White _ 400cm width x 275cm height</option>
                                                                        <option value="118">Off-White _300cm width x 275cm height</option>
                                                                        <option value="121">White _ 300cm width x 275cm height</option>
                                                                        <option value="119">ًWhite _ 400cm width x 275cm height</option>
                                                                    </select>
                                                                    <input type="hidden" name="" value=""></td>
                                                                <td class="text-right">
                                                                    <input type="text" name="" value="" placeholder="Quantity" class="form-control"></td>

                                                                <td class="text-right">



                                                                    <input type="text" name="" value="" placeholder="Price" class="form-control"></td>

                                                                <td class="text-start">
                                                                    <button type="button" data-toggle="tooltip" rel="tooltip" title="" class="btn btn-danger btn-option" data-original-title="Remove">
                                                                    <i class="fa fa-minus-circle"></i>
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <td colspan="3"></td>
                                                                <td class="text-start">
                                                                    <button type="button" data-toggle="tooltip" title="" class="btn btn-primary btn-option" data-original-title="Add Option Value">
                                                                        <i class="fa fa-plus-circle"></i>
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                                <select id="option-values0" style="display: none;">
                                                    <option value="124">Dark Blue 45 x 45</option>
                                                    <option value="125">Dark Blue 50 x 50</option>
                                                    <option value="123">Gold 50 x 50</option>
                                                    <option value="122">Gold 45 x 45</option>
                                                    <option value="126">Green 45 x 45</option>
                                                    <option value="127">Green 50 x 50</option>
                                                    <option value="120">Off-White _ 400cm width x 275cm height</option>
                                                    <option value="118">Off-White _300cm width x 275cm height</option>
                                                    <option value="121">White _ 300cm width x 275cm height</option>
                                                    <option value="119">ًWhite _ 400cm width x 275cm height</option>
                                                </select>
                                            </div> --}}

                                        </div>
                                    </div>
                                </div>



                            </div>

                            <div class="tab-pane fade" id="alternative-items" role="tabpanel" aria-labelledby="#alternative-items-tab">

                                <div class="row">

                                    <div class="form-group col-12">

                                        <!--begin: Datatable-->

                                        <div class="datatable datatable-bordered datatable-head-custom datatable-default datatable-primary datatable-loaded table-product alternative-table" id="kt_datatable_2" style="">
                                            <table class="datatable-table">
                                                <thead class="datatable-head">
                                                    <tr class="datatable-row" style="left: 0px;">

                                                        <th data-field="name" class="datatable-cell "><span style=""> product Name</span></th>
                                                        <th data-field="employee_id" class="datatable-cell "><span style="">cost price</span></th>
                                                        <th data-field="name" class="datatable-cell "><span style="">selling price</span></th>
                                                        <th data-field="hire_date" class="datatable-cell "><span style="">type</span></th>
                                                        <th data-field="gender" class="datatable-cell "><span style="">balance</span></th>
                                                        <th data-field="gender" class="datatable-cell  end-cell"><span style=""></span></th>
                                                    </tr>
                                                </thead>
                                                <tbody class="datatable-body ">

                                                    <tr class="datatable-row datatable-row-even" style="left: 0px;">

                                                        <td class="datatable-cell"><span>
                                                                <select class="form-control select2 select-relative" id="select_relative-0"  onchange="changeRelative(0)" name="param">
                                                                <option disabled selected>Select Product</option>
                                                                @foreach($products as $product)
                                                                    <option value="{{$product->id}}-{{$product->price}}-{{$product->cost_price}}-{{$product->stock}}" >{{$product->name_product}}</option>
                                                                @endforeach
                                                                    
                                                                </select>
                                                            </span></td>
                                                        <td class="datatable-cell"><span><input type="number" id="cost-price-0" placeholder="Cost Price" readonly="true" class="form-control"></span></td>
                                                        <td class="datatable-cell"><span><input type="number" id="sell-price-0" placeholder="Sell Price" readonly="true" class="form-control"></span></td>
                                                        <td class="datatable-cell"><span>
                                                            <select class="form-control" id="twosides-0" name="is_two_sides">
                                                                <option value=0>One side</option>
                                                                <option value=1>Two sides</option>
                                                            </select></span></td> 
                                                        <td class="datatable-cell"><span><input type="number" id="stock-0" readonly="true" class="form-control" placeholder="Balance"></span></td>
                                                        <td class="text-center end-td">
                                                            <button type="button" disabled data-toggle="tooltip" title="Remove" class="btn btn-danger btn-option">
                                                                <i class="fa fa-minus-circle"></i>
                                                            </button>
                                                        </td>



                                                    </tr>
                                                    <tr class="datatable-row datatable-row-even" style="left: 0px;">
                                                        <td class="datatable-cell"><span></span></td>
                                                        <td class="datatable-cell"><span></span></td>
                                                        <td class="datatable-cell"><span></span></td>
                                                        <td class="datatable-cell"><span></span></td>
                                                        <td class="datatable-cell"><span></span></td>
                                                        <td class="text-center end-td">
                                                            <button type="button" title="" class="btn btn-primary btn-option">
                                                                <i class="fa fa-plus-circle"></i>
                                                            </button>
                                                        </td>


                                                    </tr>




                                                </tbody>
                                            </table>

                                        </div>
                                        <!--end: Datatable-->


                                    </div>

                                </div>



                            </div>

                        
                           <button class=" btn btn-primary" type="submit">Submit</button>

                    </div>
                    </form>
                </div>
            </div>



        </div>



        </div>
        <!--end::Container-->

        {{-- end main content --}}

    </x-dashboard.tap-content>

@endsection
