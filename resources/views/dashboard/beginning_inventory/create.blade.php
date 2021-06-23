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




<!--begin::Container-->
<div class="container">
    <div class="card card-custom mb-9 mt-10">
        <div class="card-header flex-wrap border-0 pb-0">

            <div class="card-title">
                <h3 class="card-label"></h3>


            </div>



            <div class="add-tabs w-100 sub-tabs">
                <ul class="nav nav-tabs0" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="Invoice-info-tab" data-toggle="tab" href="#Invoice-info">
                            <span class="nav-icon">
                                <i class="flaticon2-gear"></i>
                            </span>
                            <span class="nav-text">Invoice information</span>
                        </a>
                    </li>
                   <!-- <li class="nav-item">
                        <a class="nav-link" id="customer-info-tab" data-toggle="tab" href="#customer-info">
                            <span class="nav-icon">
                                <i class=" flaticon2-contract"></i>
                            </span>
                            <span class="nav-text">customer information</span>
                        </a>
                    </li>-->
                    <li class="nav-item">
                        <a class="nav-link" id="notes-tab" data-toggle="tab" href="#notes-info">
                            <span class="nav-icon">
                                <i class="flaticon-notes"></i>
                            </span>
                            <span class="nav-text">notes </span>
                        </a>
                    </li>

                </ul>

                <form id="form1" autocomplete="off" method="POST" action="{{route('Purchases.store')}}">
                    @csrf
                    <div class="tab-content" id="myTabContent">


                        <div class="tab-pane fade active show" id="Invoice-info" role="tabpanel" aria-labelledby="Invoice-info-tab">


                            @if ($errors->any())
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $err)
                                    <p>{{ '* ' . $err }}</p>
                                @endforeach
                            </div>
                        @endif
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-4 col-12">
                                        <label>warehouse name</label>
                                        <select tobetranslated="Related" name="warehouse_id" class="form-control select"  tabindex="null">
                                            <option></option>
                                            @foreach($warehouses as $warehouse)
                                                   <option class="form-control"  style="border-radius:10px" value="{{$warehouse->id}}">{{$warehouse->ware_name}}</option>
                                             @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4 col-12">
                                        <label>date</label>
                                        <input type="date" class="form-control" name="date" />
                                    </div>

                                    <div class="form-group col-md-4 col-12">
                                        <label for="exampleSelectl">Currancy</label>
                                        <select class="form-control" name="currency_id">
                                            <option></option>
                                            @foreach($currancies as $currancy)
                                                   <option class="form-control"  style="border-radius:10px" value="{{$currancy->id}}">{{$currancy->name}}</option>
                                             @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-md-12 col-12">
                                        <label for="exampleTextarea">Statement</label>
                                        <textarea class="form-control"   placeholder="Statement" name="statement">
                         </textarea>
                                    </div>

                                    <div class="form-group col-md-6 col-6">
                                        <label>break-even value</label>
                                        <input type="text" class="form-control" placeholder="break-even value" name="breakeevenvalue" />
                                    </div>
                                    <div class="form-group col-md-6 col-6">
                                        <label>Subproject</label>
                                        <input type="text" class="form-control" placeholder="Subproject"  name="subproject" />
                                    </div>



                                </div>
                            </div>


                        </div>
                        <div class="tab-pane fade" id="customer-info" role="tabpanel" aria-labelledby="customer-info-tab">


                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-4 col-6">
                                        <label>customer name</label>
                                        <input type="text" class="form-control" placeholder="customer name" />
                                    </div>
                                    <div class="form-group col-md-4 col-6">
                                        <label>customer</label>
                                        <input type="text" class="form-control" placeholder="customer " />
                                    </div>
                                    <div class="form-group col-md-4 col-6">
                                        <label>address</label>
                                        <input type="text" class="form-control" placeholder="address" />
                                    </div>
                                    <div class="form-group col-md-4 col-6">
                                        <label>email</label>
                                        <input type="email" class="form-control" placeholder="email" />
                                    </div>


                                    <div class="form-group col-md-4 col-6">
                                        <label for="exampleTextarea">The concerned party</label>
                                        <input class="form-control" placeholder="The concerned party" type="text">
                                    </div>

                                    <div class="form-group col-md-4 col-6">
                                        <label>phone number</label>
                                        <input type="text" class="form-control" placeholder="phone number" />
                                    </div>
                                    <div class="form-group col-md-4 col-6">
                                        <label>mobile number</label>
                                        <input type="text" class="form-control" placeholder="mobile number" />
                                    </div>
                                    <div class="form-group col-md-4 col-6">
                                        <label>fax</label>
                                        <input type="text" class="form-control" placeholder="fax" />
                                    </div>
                                    <div class="form-group col-md-4 col-6">
                                        <label>ID number</label>
                                        <input type="text" class="form-control" placeholder="id number" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="notes-info" role="tabpanel" aria-labelledby="notes-tab">
                            <div class="card-body">
                                <div class="row">
                                    @foreach(config('translatable.locales') as $key_locale => $locale)
                                    <div @if($key_locale == 0) class="form-group col-md-12 col-12" @else  class="tab-pane fade" @endif id="{{$locale}}-general" role="tabpanel" aria-labelledby="{{$locale}}-tab">
                                       
                                            
                                            <div class="form-group">
                                                <label  for="exampleTextarea"> @lang('general.note'.$locale)</label>
                                                
                                                        <textarea type="text" class="form-control" id="Textarea0" rows="2" placeholder="@lang('general.'.$locale)"name="{{ $locale.'[note]'}}"></textarea>
        
                                                   
                                            </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>


                        </div>

                    </div>



                    <!--begin: Datatable-->

                    <div class="datatable datatable-bordered datatable-head-custom datatable-default datatable-primary datatable-loaded table-product" id="kt_datatable_2" style="">
                        <table class="datatable-table">
                            <thead class="datatable-head">
                                <tr class="datatable-row" style="left: 0px;">

                                    <th data-field="id" class="datatable-cell-center datatable-cell"><span style=""><label class="">&nbsp;<span>#</span></label></span></th>
                                    <th data-field="name" class="datatable-cell "><span style=""> product Name</span></th>
                                    <th data-field="hire_date" class="datatable-cell "><span style="">unit</span></th>
                                    <th data-field="employee_id" class="datatable-cell "><span style="">price</span></th>
                                    <th data-field="gender" class="datatable-cell "><span style="">quantity</span></th>
                                    <th data-field="name" class="datatable-cell "><span style="">Total without tax</span></th>
                                    <th data-field="hire_date" class="datatable-cell "><span style="">value added tax</span></th>
                                    <th data-field="gender" class="datatable-cell "><span style="">total</span></th>
                                    <th data-field="gender" class="datatable-cell "><span style="">notes</span></th>
                                    <th data-field="gender" class="datatable-cell  end-cell"><span style=""></span></th>
                                </tr>
                            </thead>
                            <tbody class="datatable-body ">
                                <tr class="datatable-row datatable-row-even" style="left: 0px;" id="rowproduct-0">
                                    <td class="datatable-cell"><span>
                                        <select class="form-control select2" id="product-0" name="products[]" num=0 onchange="changed(0)">
                                        <option label="Label"></option>
                                        @foreach($products as $product)
                                        <option class="form-control"  style="border-radius:10px" value="{{$product->id}}">{{$product->name_product}}</option>
                                        
                                  @endforeach
                                  <input type="hidden" id="products" value="{{$products}}">
                                        </select>
                                        </span></td>
                                        <td class="datatable-cell"><span><input type="text" name="unit[0]" class="form-control" id="unit-0"></span></td>
                                    <td class="datatable-cell"><span><input type="number" name="price[0]" id="price-0" class="form-control" ></span></td>
                                    
                                    <td class="datatable-cell"><span><input type="text" name="qty[0]" class="form-control" id="quantity-0" onkeyup="changeQuantity(0)"></span></td>
                                    <td class="datatable-cell"><span><input type="text" name="totalwot[0]" class="form-control nn" id="Totalwithouttax-0" ></span></td>
                                    <td class="datatable-cell"><span><input type="text" name="totalat[0]" class="form-control mm" id="valueaddedtax-0" ></span></td>
                                    <td class="datatable-cell"><span><input type="text" name="total[0]" class="form-control tt" id="total-0"></span></td>
                                    <td class="datatable-cell"><span><input type="text" name="notes[0]" class="form-control" id="notes-0"></span></td>
                                    <td class="text-center end-td">
                                        <button type="button"  data-toggle="tooltip" title="Remove" class="btn btn-danger btn-option">
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
                                    <td class="datatable-cell"><span></span></td>
                                    <td class="datatable-cell"><span></span></td>
                                    <td class="datatable-cell"><span></span></td>
                                    <td class="text-center end-td">
                                        <button type="button" title="" class="btn btn-primary btn-option" number=0 onclick="appendProductRow(this)" id="add">
                                            <i class="fa fa-plus-circle"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                    <!--end: Datatable-->
                    <!--begin: Datatable-->

                    <div class="datatable datatable-bordered datatable-head-custom datatable-default datatable-primary datatable-loaded total-table" id="kt_datatable_2" style="">
                        <table class="datatable-table">
                            <tbody class="datatable-body ">
                                <tr class="datatable-row datatable-row-even" style="left: 0px;">
                                    <td class="datatable-cell font-weight-boldest" ><span>Total without tax</span></td>
                                    <td class="datatable-cell"><span><input type="text" class="form-control" name="total_without_taxs" id="TWithouttax"></span></td>
                                </tr>
                                <tr class="datatable-row datatable-row-even" style="left: 0px;">
                                    <td class="datatable-cell font-weight-boldest"><span>total</span></td>
                                    <td class="datatable-cell"><span><input type="text" class="form-control" name="total" id="Total1"></span></td>
                                </tr>
                                <tr class="datatable-row datatable-row-even" style="left: 0px;">
                                    <td class="datatable-cell font-weight-boldest"><span>Tax</span></td>
                                    <td class="datatable-cell"><span>15%</span></td>
                                </tr>
                                <tr class="datatable-row datatable-row-even" style="left: 0px;">

                                    <td class="datatable-cell font-weight-boldest"><span>VAT</span></td>
                                    <td class="datatable-cell"><span><input type="text" class="form-control" name="total_with_taxs" id="TAftertax"></span></td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                    <!--end: Datatable-->
                    <div class="col-12 text-end p-0 ">
                        <button type="submit" class="btn btn-primary mb-2 mt-5">Save</button>
                    </div>

                </form>
            </div>

            <!--end::Form-->
        </div>



    </div>



</div>
<!--end::Container-->

    </x-dashboard.tap-content>

    
<script>
    function appendProductRow(input) {
     var number = parseInt($(input).attr('number'));
     var new_number = number + 1;
     var new_div=   
        ` <tr class="datatable-row datatable-row-even" style="left: 0px;" id="rowproduct-${new_number}">                      
        <td class="datatable-cell"><span>
            <select class="form-control select2" id="product-${new_number}" num=${new_number} name="products[]" onchange="changed(${new_number})">
                <option label="Label"></option>
            </select>
            </span></td>
            <td class="datatable-cell"><span><input type="text" class="form-control" name="unit[${new_number}]" id="unit-${new_number}"></span></td>
        <td class="datatable-cell"><span><input type="text" name="price[${new_number}]" id="price-${new_number}" class="form-control" ></span></td>
        <td class="datatable-cell"><span><input type="text" class="form-control" name="qty[${new_number}]" id="quantity-${new_number}" onkeyup="changeQuantity(${new_number})"></span></td>
        <td class="datatable-cell"><span><input type="text" name="totalwot[${new_number}]" class="form-control nn" id="Totalwithouttax-${new_number}"></span></td>
        <td class="datatable-cell"><span><input type="text" class="form-control mm" name="totalat[${new_number}]" id="valueaddedtax-${new_number}"></span></td>
        <td class="datatable-cell"><span><input type="text" class="form-control tt" name="total[${new_number}]" id="total-${new_number}"></span></td>
        <td class="datatable-cell"><span><input type="text" class="form-control" name="notes[${new_number}]" ></span></td>
        <td class="text-center end-td">
            <button type="button" onclick="removeProduct(${new_number})" data-toggle="tooltip" title="Remove" class="btn btn-danger btn-option">
                <i class="fa fa-minus-circle"></i>
            </button>
        </td>
        </tr>
        `
        $(new_div).insertAfter("#rowproduct-" + number);
        var products = JSON.parse($('#products').val());
        $products = []
        for(let i=0; i < products.length ; i++){
                $("#product-" + new_number).append(`
                    <option value=${products[i].id}>${products[i].name_product}</option>
            ` );

            };
        $(input).attr('number', new_number);
        $('.select2').select2();
}

function removeProduct(number){
    
    $("#rowproduct-"+number).remove();
    
}
        
function changed(number)
    {
        var product_id = $("#product-"+number).val();
        var products = JSON.parse($('#products').val());
        for(let i=0; i < products.length ; i++){

           if(product_id == products[i].id){
               $product = products[i];
           }

        };
       $("#price-"+number).attr(`value`,$product.price);
       $("#unit-"+number).attr(`value`,$product.unit.name);

      
        
    }

function changeQuantity(number)
    {
        var Totalwithouttax =parseFloat($("#price-"+number).val()) * parseFloat($("#quantity-"+number).val()) ;
        var valueaddedtax =(parseFloat($("#price-"+number).val()) * parseFloat($("#quantity-"+number).val()) * 15)/100 ;
        var total=Totalwithouttax + valueaddedtax;
        
        $("#Totalwithouttax-"+number).attr(`value`,Totalwithouttax);  
        $("#valueaddedtax-"+number).attr(`value`,valueaddedtax);
        $("#total-"+number).attr(`value`,total); 

        var arr_Totalwithouttax =$(".nn");
        //console.log(arr);
       var total_Totalwithouttax=0;
       for(var i=0;i<arr_Totalwithouttax.length;i++){
        if(parseFloat(arr_Totalwithouttax[i].value))
        total_Totalwithouttax += parseFloat(arr_Totalwithouttax[i].value);
           // console.log(tot);
    }
        $("#TWithouttax").attr(`value`,total_Totalwithouttax); 

        

        var arr_valueaddedtax =$(".mm");
       // console.log(arr1);
       var total_valueaddedtax=0;
       for(var a=0;a<arr_valueaddedtax.length;a++){
        if(parseFloat(arr_valueaddedtax[a].value))
            total_valueaddedtax += parseFloat(arr_valueaddedtax[a].value);
          // console.log(tot1);
    }
        $("#TAftertax").attr(`value`,total_valueaddedtax); 

        var arr_total =$(".tt");
        //console.log(arr2);
       var total_total=0;
       for(var r=0;r<arr_total.length;r++){
        if(parseFloat(arr_total[r].value))
        total_total += parseFloat(arr_total[r].value);
          // console.log(tot2);
    }
        $("#Total1").attr(`value`,total_total); 
        

    }

    
    

</script>

@endsection