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



        <div class="card card-custom mb-9 mt-10">
            <div class="card-header flex-wrap border-0 pb-0">

                <div class="card-title">
                    <h3 class="card-label">Add proudct</h3>


                </div>



                <div class="add-tabs w-100 sub-tabs">
                    <ul class="nav nav-tabs0" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="general-tab" data-toggle="tab" href="#page-general">
                                <span class="nav-icon">
                                    <i class="flaticon2-gear"></i>
                                </span>
                                <span class="nav-text">General</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="data-tab" data-toggle="tab" href="#page-data">
                                <span class="nav-icon">
                                    <i class=" flaticon2-contract"></i>
                                </span>
                                <span class="nav-text">Data</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="unit-tab" data-toggle="tab" href="#page-unit">
                                <span class="nav-icon">
                                    <i class=" flaticon2-tag"></i>
                                </span>
                                <span class="nav-text">unit</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="option-tab" data-toggle="tab" href="#page-option">
                                <span class="nav-icon">
                                    <i class=" flaticon2-console"></i>
                                </span>
                                <span class="nav-text">option</span>
                            </a>
                        </li>

                    </ul>

                    <form id="form1" autocomplete="off" method="POST">

                        <div class="tab-content main-tab-content" id="myTabContent">

                            <div class="tab-pane fade active show" id="page-general" role="tabpanel" aria-labelledby="page-g-tab">

                                <ul class="nav nav-tabs0" id="myTabs-general" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link  active" id="EnglishT-tab" data-toggle="tab" href="#en-general">

                                            <span class="nav-text "> English</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="EnglishT-tab" data-toggle="tab" href="#ar-general">

                                            <span class="nav-text"> Arabic</span>
                                        </a>
                                    </li>

                                </ul>

                                <div class="tab-content" id="myTabContent-general">

                                    <div class="tab-pane fade active show" id="en-general" role="tabpanel" aria-labelledby="EnglishT-tab">
                                        <div class="card-body p-0">

                                            <div class="form-group row">
                                                <label class="col-lg-12 col-form-label">Name in English</label>
                                                <div class=" col-lg-6">
                                                    <div class="col-lg-12 input-group p-0">
                                                        <input type="text" mesg="couldn't be empty!" class="form-control required" required="required" tobetranslated=" Name in English" placeholder="Name in English" name="">

                                                    </div>

                                                </div>
                                            </div>


                                            <div class="form-group row">
                                                <label class="col-lg-12 col-form-label">description in English</label>
                                                <div class=" col-lg-8">

                                                    <textarea cols="85" rows="8" id="kt-ckeditor-1" name="" placeholder="description in English"></textarea>



                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="tab-pane fade " id="ar-general" role="tabpanel" aria-labelledby="EnglishT-tab">
                                        <div class="card-body p-0">

                                            <div class="form-group row">
                                                <label class="col-lg-12 col-form-label"> Name in Arabic</label>
                                                <div class=" col-lg-6">
                                                    <div class="col-lg-12 input-group p-0">
                                                        <input type="text" mesg="couldn't be empty!" class="form-control required" required="required" tobetranslated=" Name in Arabic" placeholder=" Name in Arabic" name="">



                                                    </div>

                                                </div>
                                            </div>


                                            <div class="form-group row">
                                                <label class="col-lg-12 col-form-label">description in Arabic</label>
                                                <div class=" col-lg-8">


                                                    <textarea cols="85" rows="8" id="kt-ckeditor-2" name="" placeholder=" description in Arabic" style="display: none;"></textarea>






                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="page-data" role="tabpanel" aria-labelledby="data-tab">

                                <form class="w-100 main-form">
                                    <!-- <div class="card-body"> -->
                                        <div class="row">
                                            <div class="form-group col-md-6 col-12">
                                                <label for="inputState">categorey</label>
                                                <select id="inputState" class="form-control  " name="">
                                                    <option selected value="">Choose...</option>


                                                    <option value="">categor name </option>


                                                </select>
                                            </div>
                                            <div class="form-group col-md-6 col-12">
                                                <label for="exampleSelectl">ProductType</label>
                                                <select id="inputState" class="form-control " name="">
                                                    <option value="">Product type</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6 col-12">
                                                <label for="inputState">Cost_Way</label>
                                                <select id="inputState" class="form-control " name="">
                                                    <option selected value="">Choose...</option>


                                                    <option value="">Cost name</option>

                                                </select>
                                            </div>
                                            <div class="form-group col-md-6 col-12">
                                                <label for="inputState">discount</label>
                                                <select id="inputState" class="form-control " name="discount_id">
                                                    <option selected value="">Choose...</option>


                                                    <option value="">Discount name</option>


                                                </select>
                                            </div>
                                            <div class="form-group col-md-6 col-12">
                                                <label>code product type</label>
                                                <input id="inputcode" type="text" name="code_product_type" placeholder="code product type" class="form-control">
                                            </div>
                                            <div class="form-group col-md-6 col-12">
                                                <label>parcode product type</label>
                                                <input type="inputparcodeproducttype" name="parcode_product_type" placeholder="parcode product type" class=" form-control">

                                            </div>
                                            <div class="form-group col-md-4 col-12">

                                                <label>model</label>
                                                <input type="text" name="model_product" placeholder="model" class=" form-control" id="inputmodel_product">
                                            </div>
                                            <div class="form-group col-md-4 col-12">

                                                <label>price</label>
                                                <input type="number" name="price" placeholder="price" class=" form-control " id="inputprice">
                                            </div>
                                            <div class="form-group col-md-4 col-12">
                                                <label>Consumer price</label>
                                                <input type="number" name="Consumer_price" placeholder="Consumer price" class=" form-control  " id="Consumer_price">
                                            </div>
                                            <div class="form-group col-md-4 col-12">
                                                <label>max limit</label>

                                                <input type="number" name="greet_numper" placeholder="max limit" class=" form-control  " id="greet_numper">
                                            </div>
                                            <div class="form-group col-md-4 col-12">
                                                <label>min limit</label>

                                                <input type="number" name="small_numper" placeholder="min limit" class=" form-control  " id="small_numper">
                                            </div>
                                            <div class="form-group col-md-4 col-12">
                                                <label>order limit</label>

                                                <input type="number" name="order_limit" placeholder="order limit" class=" form-control  " id="order_limit">


                                            </div>
                                            <div class="form-group col-md-6 col-12">
                                                <label>min price sell</label>

                                                <input type="number" name="min_price_sell" placeholder="min price sell" class="form-control ">

                                            </div>
                                            <div class="form-group col-md-6 col-12">
                                                <label>price buy</label>

                                                <input type="number" name="price_buy" placeholder="price buy" class="form-control " >


                                            </div>


                                        </div>

                                    <!-- </div> -->
                                </form>


                            </div>

                            <div class="tab-pane fade" id="page-unit" role="tabpanel" aria-labelledby="unit-tab">

                                                <div class="row">
                                                    <div class="form-group col-md-6 col-12">
                                                        <label for="inputState">unit</label>
                                                        <select id="inputState" class="form-control  rounded-pill" name="unit_id">
                                                            <option selected="" value="">Choose...</option>

                                                        </select>
                                                    </div>


                                                    <div class="form-group col-12">
                                                         <!-- table button show -->

                                             <table id="bulk-0" class="table table-striped table-bordered ">
                                                 <tbody>

                                                     <tr>
                                                         <td class="text-center"> <button type="button" class="btn btn-primary mb-4 mt-5" onclick="addBulk()">Add BulkUnit</button></td>
                                                         <td class="text-start option-left" colspan="2">

                                                             <label>bulk_unit</label><select id="bulkunit-0" onchange="changePrice(0)" class="form-control" name="bulkunits[]"></select>
                                                             <label>calculation</label>
                                                             <select id="calculation-0" onchange="changePrice(0)" class="form-control" name="symbols[]">
                                                                 <option value="multiply" selected="">*</option>
                                                                 <option value="divide">/</option>
                                                             </select>
                                                             <label>quantity</label><input type="number" id="quantity-0" onchange="changePrice(0)" name="quantaties[]" min="1" value="1" style="/* width:100%; */display: inline;" class="form-control required">

                                                             <label>price</label><input type="number" id="price-0" name="prices[]" style="width:100%;display: inline;" class="form-control required">
                                                             <label>consumer_price</label><input type="number" name="consumer_prices[]" value="" class="form-control required">

                                                         </td>
                                                         <td colspan="3">
                                                             <label>great_number</label><input type="number" name="great_numbers[]" value="" class="form-control required">
                                                             <label>small_numbers</label><input type="number" name="small_numbers[]" value="" class="form-control required">
                                                             <label>min_price_sell</label><input type="number" name="min_prices_sell[]" value="" class="form-control required">
                                                             <label>order_limits</label><input type="number" name="order_limits[]" value="" class="form-control required">
                                                             <label>prices_buy</label><input type="number" name="prices_buy[]" value="" class="form-control required">
                                                         </td>
                                                         <td class="text-center">
                                                             <button type="button" data-toggle="tooltip" title="Remove" class="btn btn-danger btn-option mt-5">
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
                                        <ul class="nav flex-column nav-pills" >

                                                        <li class="nav-item  active">
                                                            <a class="nav-link active" id="home-tab-5" data-toggle="tab" href="#home-5">
                                                                <span class="nav-icon">
                                                                    <i class="fa fa-minus-circle"></i>
                                                                </span>
                                                                <span class="nav-text">Color</span>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item ">
                                                            <a class="nav-link" id="profile-tab-5" data-toggle="tab" href="#profile-5" aria-controls="profile">
                                                                <span class="nav-icon">
                                                                    <i class="fa fa-minus-circle"></i>
                                                                </span>
                                                                <span class="nav-text"> Color & size</span>
                                                            </a>
                                                        </li>



                                            <li class="col-md-12 p-0">
                                                <select class="form-control"  >
                                                    <option value="">Select</option>
                                                    <option value="co">color</option>
                                                    <option value="D">Date</option>
                                                    <option value="s">size</option>
                                                </select>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-9">

                                        <div class="tab-content" id="myTabContent5">

                                            <div class="tab-pane fade show active" id="home-5" role="tabpanel" aria-labelledby="home-tab-5">
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
                                            </div>

                                        </div>
                                    </div>
                                </div>



                            </div>
                        </div>
                        <div class="col-12 text-start p-0 ">
                        <button type="button" class="btn btn-primary mb-2 mt-5">Save</button>
                        </div>



                    </form>
                </div>

            </div>



        </div>







        {{-- end main content --}}

    </x-dashboard.tap-content>


@endsection
