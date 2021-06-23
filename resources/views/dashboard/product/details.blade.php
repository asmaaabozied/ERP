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


    <!--begin::Wrapper-->
    <div class="d-flex flex-column flex-row-fluid " id="kt_wrapper">


        <!--begin::Container-->
        <div class="container">
            <div class="card card-custom mb-9 mt-10">
                <div class="card-header flex-wrap border-0 pb-0">
                    <div class="card-title">
                        <h3 class="card-label"> product details</h3>


                    </div>
                    <div class="card-body product-view-card">
                        <div class="row ">
                            <div class="col-md-4 " style="">
                                <div class="product-img-box">
                                    <img src="{{ asset('uploads/' . $Product->image) }}" class="w-100">
                                    {{-- <img src="{{asset("uploads/$guarantee->image")}}" class="w-100"> --}}
                                </div>
                                <div class="button-group-product">
                                    <div class="d-flex flex-column flex-md-row justify-content-between">
                                        <button type="button" class="btn btn-primary">Edit</button>
                                        <button type="button" class="btn btn-danger">Delete</button>


                                    </div>
                                </div>

                            </div>




                            <div class="col-md-8">
                                <div class="">

                                    <div class="product-details-tabs">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#product-t1">
                                                <span class="nav-icon">
                                                    <i class="flaticon2-chat-1"></i>
                                                </span>
                                                <span class="nav-text">product-tab1</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="product-t2-tab" data-toggle="tab" href="#product-t2" aria-controls="product-t2">
                                                <span class="nav-icon">
                                                    <i class="flaticon2-layers-1"></i>
                                                </span>
                                                <span class="nav-text">product-t2</span>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link" id="product-t3-tab" data-toggle="tab" href="#product-t3" aria-controls="product-t3">
                                                <span class="nav-icon">
                                                    <i class="flaticon2-rocket-1"></i>
                                                </span>
                                                <span class="nav-text">product-t3</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content mt-5" id="myTabContent">
                                        <div class="tab-pane fade active show" id="product-t1" role="tabpanel" aria-labelledby="product-t1-tab">

                                    <table class="w-100">
                                        <tbody>
                                            <tr>
                                                <td><strong>name</strong></td>
                                                <td>{{ $Product->name_product }}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>parcode_product</strong></td>
                                                <td>{{ $Product->parcode_product_type }}</td>
                                            </tr>

                                            <tr>
                                                <td><strong>Model name</strong></td>
                                                <td>{{ $Product->model_product }}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Category name</strong></td>
                                                <td>{{ $Product->category ? $Product->category->name : '' }}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>price</strong></td>
                                                <td>

                                                    <?php
                                                    $one = $Product->price;
                                                    $discou = $Product->discount->amount;
                                                    $total = $one - $discou;
                                                    echo $total;
                                                    ?>
                                                    <span class="label label-inline label-light-success font-weight-bold">{{ $Product->currency->name }}</span>
                                                </td>

                                            </tr>



                                        </tbody>
                                    </table>
                                        </div>
                                        <div class="tab-pane fade" id="product-t2" role="tabpanel" aria-labelledby="product-t2-tab"><table class="w-100">
                                        <tbody>


                                            <tr>
                                                <td><strong>type</strong></td>
                                                <td>{{ $Product->productType->name }}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>Discount</strong></td>
                                                <td>{{ $Product->discount->name }}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>small number</strong></td>
                                                <td>{{ $Product->small_numper }}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>order limit</strong></td>
                                                <td>{{ $Product->order_limit }}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>greet number</strong></td>
                                                <td>{{ $Product->greet_numper }}</td>
                                            </tr>

                                            <tr>
                                                <td><strong>costway</strong></td>
                                                <td>{{ $Product->costWay->name }}</td>
                                            </tr>


                                        </tbody>
                                    </table>
                                        </div>
                                        <div class="tab-pane fade" id="product-t3" role="tabpanel" aria-labelledby="product-t3-tab">
                                            <table class="w-100">
                                        <tbody>

                                            <tr>
                                                <td><strong>consumer price</strong></td>
                                                <td>{{ $Product->Consumer_price }}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>min price sell</strong></td>
                                                <td>{{ $Product->min_price_sell }}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>price buy</strong></td>
                                                <td>{{ $Product->price_buy }}</td>
                                            </tr>
                                            <tr>
                                                <td><strong>guarantee</strong></td>
                                                <td> <span
                                                        class="label label-inline label-light-success font-weight-bold">{{ $Product->guarantee->guarantee_day }}
                                                        days</span> </td>
                                            </tr>
                                            <tr>
                                                <td><strong>kind guarantee</strong></td>
                                                <td> <span
                                                        class="label label-inline label-light-danger font-weight-bold">{{ $Product->guarantee->kind_guarantee }}</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><strong>image guarantee</strong></td>
                                                <td> <span class="label font-weight-bold">

                                                        <!-- Button trigger modal -->
                                                        <a type="button" class="btn" data-toggle="modal"
                                                            data-target="#exampleModal">
                                                            <i class="fas fa-paperclip"></i>
                                                        </a>

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="exampleModal" tabindex="-1"
                                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <img style="width: 650px !important ; margin-right:1000px !important" src="{{ asset("uploads/$guarantee->image") }}" class="w-100">

                                                                </div>
                                                            </div>
                                                        </div>



                                                    </span> </td>
                                            </tr>

                                        </tbody>
                                    </table>

                                        </div>
                                    </div>
                                </div>








                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Wrapper-->
</x-dashboard.tap-content>


@endsection
