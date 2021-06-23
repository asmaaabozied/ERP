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
                        <a href="{{route('district.create')}}" class="btn btn-outline-primary mr-1">
                            New <i class="icon-lg la la-file-medical"></i></a>
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
									<div class="datatable datatable-bordered datatable-head-custom datatable-default datatable-primary datatable-scroll datatable-loaded" id="kt_datatable_2" style="">
										<table class="datatable-table">
                                        <thead class="datatable-head">
												<tr class="datatable-row" style="left: 0px;">
													<th data-field="id" class="datatable-cell-center datatable-cell datatable-cell-check"><span style=""><label class="checkbox checkbox-single checkbox-all"><input type="checkbox">&nbsp;<span></span></label></span></th>
													<th data-field="employee_id" class="datatable-cell "><span style="">#</span></th>
                                                    <th data-field="name" class="datatable-cell "><span style="">Log Name</span></th>
                                                    <th data-field="name" class="datatable-cell "><span style="">Log Description</span></th>
													<th data-field="name" class="datatable-cell "><span style="">User name</span></th>
                                                    <th data-field="name" class="datatable-cell "><span style="">properties</span></th>
													<th data-field="Actions"  class="datatable-cell "><span style="">Created at</span></th>
													
												</tr>
											</thead>
                                            <tbody class="datatable-body " >
                                                @foreach ($logs as $log)
                                                @php 
                                                
                                                    $user= \App\Models\User::find($log->causer_id);
                                                

                                                @endphp
                                                <tr  class="datatable-row datatable-row-even" style="left: 0px;">
                                                   
													<td class="datatable-cell-center datatable-cell datatable-cell-check"><span style=""><label class="checkbox checkbox-single">
                                                        <input type="checkbox" value="">&nbsp;<span></span></label></span></td>
                                                      
													<td  class="datatable-cell"><span >{{$log->id}}</span></td>
                                                    <td  class="datatable-cell"><span >{{$log->log_name}}</span></td>
                                                    <td  class="datatable-cell"><span >{{$log->description}}</span></td>
                                                    <td  class="datatable-cell"><span >{{$user ? $user->name : '-'}}</span></td>
                                                    <td  class="datatable-cell"><span >{{$log->properties}}</span></td>
													<td class="datatable-cell"><span >{{$log->created_at}}</td>

												</tr>
												 @endforeach
											</tbody>
										</table>

                                        
									</div>
									<!--end: Datatable-->



        </div>
</div>


{{$logs->links()}}

        {{-- end main content --}}
        

    </x-dashboard.tap-content>
    
  
@endsection
