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
        <!-- <div class="container"> -->
        <div class="card card-custom mb-9 mt-10">



            <div class="card-header flex-wrap border-0 pb-0">

                <!--begin::Subheader-->
                <div class="subheaderpage py-2 subheader-solid" id="kt_subheader">
                    <div class="subheader-box">
                        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap p-0">

                            <!--begin::Toolbar-->
                            <div class="d-flex align-items-center Pagination-top">
                                <div class="d-flex justify-content-between align-items-center flex-wrap">
                                    <div class="d-flex flex-wrap py-2">
                                        <a href="#" class="btn btn-icon btn-sm  double-arrow-back ">
                                            <i class="ki ki-bold-double-arrow-back icon-xs"></i>
                                        </a>
                                        <a href="#" class="btn btn-icon btn-sm  arrow-back">
                                            <i class="ki ki-bold-arrow-back icon-xs"></i>
                                        </a>

                                        <a href="#" class="btn btn-icon btn-sm border-0  btn-hover-primary active ">24</a>




                                        <a href="#" class="btn btn-icon btn-sm  arrow-next">
                                            <i class="ki ki-bold-arrow-next icon-xs"></i>
                                        </a>
                                        <a href="#" class="btn btn-icon btn-sm  double-arrow-next">
                                            <i class="ki ki-bold-double-arrow-next icon-xs"></i>
                                        </a>
                                    </div>

                                </div>

                            </div>
                            <!--end::Toolbar-->

                        </div>
                        <div class="align-items-center d-flex flex-sm-nowrap flex-wrap justify-content-between">
                            <!--begin::Toolbar-->
                            <div class="d-flex align-items-center">
                                @if (auth()->user()->hasPermission('create_products'))

                                <a href="{{route('products.create')}}" class="btn btn-outline-primary mr-1">
                                    New <i class="icon-lg la la-file-medical"></i></a>
                                @endif
                                <a href="#" class="btn btn-outline-primary mr-1">
                                    update <i class="icon-lg la la-redo-alt"></i></a>
                                <a href="#" class="btn btn-outline-primary mr-1">
                                    delete <i class=" icon-lg la la-trash"></i></a>
                                <a href="#" class="btn btn-outline-primary mr-1">
                                    Copy <i class="icon-lg la la-copy"></i></a>
                                <a href="#" class="btn btn-outline-primary mr-1">
                                    print <i class=" icon-lg la la-print"></i></a>
                                <div class="dropdown dropdown-inline mr-2">
                                    <a href="#" class="btn btn-outline-primary mr-1 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        export <i class=" icon-lg la la-file-export"></i></a>

                                    <!--begin::Dropdown Menu-->
                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                        <!--begin::Navigation-->
                                        <ul class="navi flex-column navi-hover py-2">
                                            <li class="navi-header font-weight-bolder text-uppercase font-size-sm text-primary pb-2">Choose an option:</li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="la la-print"></i>
                                                    </span>
                                                    <span class="navi-text">Print</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="la la-copy"></i>
                                                    </span>
                                                    <span class="navi-text">Copy</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="la la-file-excel-o"></i>
                                                    </span>
                                                    <span class="navi-text">Excel</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="la la-file-text-o"></i>
                                                    </span>
                                                    <span class="navi-text">CSV</span>
                                                </a>
                                            </li>
                                            <li class="navi-item">
                                                <a href="#" class="navi-link">
                                                    <span class="navi-icon">
                                                        <i class="la la-file-pdf-o"></i>
                                                    </span>
                                                    <span class="navi-text">PDF</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <!--end::Navigation-->
                                    </div>

                                </div>
                                <a href="#" class="btn btn-outline-primary mr-1">
                                    more<i class="icon-lg la la-ellipsis-v"></i></a>

                                <!--end::Entry-->
                            </div>
                            <!--end::Content-->
                            <div class="d-flex align-items-center right-side-box">
                                <div class="input-icon mr-1">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span><i class="flaticon2-search-1 icon-md"></i></span>
                                </div>
                                <a href="#" class="btn btn-outline-primary">
                                    setting <i class=" text-dark-50 flaticon2-settings"></i></a>
                            </div>
                        </div>


                        <!--end::Wrapper-->
                    </div>
                    <!--end::Page-->
                </div>
                <!--end::Main-->
            </div>



            <!--begin: Datatable-->
            <div class="card-body">
                <!--begin: Datatable-->
                <div class="datatable datatable-bordered datatable-head-custom datatable-default datatable-primary datatable-scroll datatable-loaded"
                    id="kt_datatable_2" style="">
                    <table class="datatable-table">
                        <thead class="datatable-head">
                            <tr class="datatable-row" style="left: 0px;">
                                <th data-field="employee_id" class="datatable-cell "><span style=""> id </span></th>
                                <th data-field="employee_id" class="datatable-cell "><span style=""> name </span></th>
                                <th data-field="name" class="datatable-cell "><span style="">category</span></th>
                                <th data-field="gender" class="datatable-cell "><span style="">cost_way</span></th>
                                <th data-field="status" class="datatable-cell "><span style="">price</span></th>
                                <th data-field="Actions" class="datatable-cell "><span style="">details</span></th>

                            </tr>
                        </thead>
                        <tbody class="datatable-body ">
                            @foreach ($Products as $Ord)

                                <tr class="datatable-row datatable-row-even" style="left: 0px;">
                                    <td class="datatable-cell"><span>{{ $Ord->id }}</span></td>

                                    <td class="datatable-cell"><span>{{ $Ord->name_product }}</span></td>
                                    <td class="datatable-cell">
                                        <span>{{ $Ord->category ? $Ord->category->name : '' }}</span></td>
                                    <td class="datatable-cell">
                                        <span>{{ $Ord->discount ? $Ord->discount->name : '' }}</span></td>
                                    <td class="datatable-cell"><span>

                                            <?php
                                            $one = $Ord->price;
                                            if ($Ord->discount) {
                                            $discou = $Ord->discount->amount;
                                            $total = $one - $discou;
                                            echo $total;
                                            }
                                            ?>

                                        </span></td>

                                    <td class="datatable-cell"><span style="overflow: visible; position: relative;">
                                            <div class="dropdown dropdown-inline">
                                                <a href="javascript:;" class="btn btn-sm btn-clean btn-icon mr-2"
                                                    data-toggle="dropdown">
                                                    <span class="svg-icon svg-icon-md">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                            height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                                <path
                                                                    d="M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z"
                                                                    fill="#000000"></path>
                                                            </g>
                                                        </svg> </span> </a>
                                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                    <ul class="navi flex-column navi-hover py-2">
                                                        <li
                                                            class="navi-header font-weight-bolder text-uppercase font-size-xs text-primary pb-2">
                                                            Choose an action: </li>
                                                        <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                    class="navi-icon"><i class="la la-print"></i></span>
                                                                <span class="navi-text">Print</span> </a> </li>
                                                        <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                    class="navi-icon"><i class="la la-copy"></i></span>
                                                                <span class="navi-text">Copy</span> </a> </li>
                                                        <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                    class="navi-icon"><i
                                                                        class="la la-file-excel-o"></i></span> <span
                                                                    class="navi-text">Excel</span> </a> </li>
                                                        <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                    class="navi-icon"><i
                                                                        class="la la-file-text-o"></i></span> <span
                                                                    class="navi-text">CSV</span> </a> </li>
                                                        <li class="navi-item"> <a href="#" class="navi-link"> <span
                                                                    class="navi-icon"><i
                                                                        class="la la-file-pdf-o"></i></span> <span
                                                                    class="navi-text">PDF</span> </a> </li>
                                                    </ul>
                                                </div>
                                            </div> <a href="{{ route('products.show', $Ord->id) }}"
                                                class="btn btn-sm btn-clean btn-icon mr-2" title="Edit details"> <span
                                                    class="svg-icon svg-icon-md"> <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <path
                                                                d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z"
                                                                fill="#000000" fill-rule="nonzero"
                                                                transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) ">
                                                            </path>
                                                            <rect fill="#000000" opacity="0.3" x="5" y="20" width="15"
                                                                height="2" rx="1"></rect>
                                                        </g>
                                                    </svg> </span> </a> <a href="javascript:;"
                                                class="btn btn-sm btn-clean btn-icon" title="Delete"> <span
                                                    class="svg-icon svg-icon-md"> <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"></rect>
                                                            <path
                                                                d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z"
                                                                fill="#000000" fill-rule="nonzero"></path>
                                                            <path
                                                                d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                                fill="#000000" opacity="0.3"></path>
                                                        </g>
                                                    </svg> </span> </a>
                                        </span></td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>

                    <div class="datatable-pager datatable-paging-loaded">
                        <ul class="datatable-pager-nav mb-5 mb-sm-0">

                            {{ $Products->links() }}

                        </ul>
                        <div class="datatable-pager-info">
                            <span class="datatable-pager-detail">Showing 1 - 5 of {{ $Product->count() }}</span>
                        </div>
                    </div>
                </div>
                <!--end: Datatable-->



            </div>
        </div>




        {{-- end main content --}}


    </x-dashboard.tap-content>



@endsection
