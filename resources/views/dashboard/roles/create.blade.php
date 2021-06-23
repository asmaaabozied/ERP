@extends('dashboard.layouts.app')
@section('content')


    <x-dashboard.tap-content>
        <x-slot name="breadcrumb">
            <x-dashboard.breadcrumb/>
        </x-slot>
        <x-slot name="taps">
            <li class="nav-item ">
                <a class="nav-link active" id="group-card-tab" data-toggle="tab" href="#group-card-0">
                    <span class="nav-text">Group card</span>
                </a>
            </li>
        </x-slot>
        <x-slot name="tap_id"> group-card-0</x-slot>


    {{-- begin main content --}}

    <!--begin::Container-->
        <div class="container">
            <div class="card card-custom mb-9 mt-10">
                <div class="card-header flex-wrap border-0 pb-0">

                    <div class="card-title">
                        <h3 class="card-label">Roles</h3>


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


                        </ul>

                        <form id="form1" autocomplete="off" method="POST" action="{{route('roles.store')}}">
                            @csrf
                            <div class="tab-content" id="myTabContent">

                                <div class="tab-pane fade active show" id="page-general" role="tabpanel"
                                     aria-labelledby="page-g-tab">

                                    <ul class="nav nav-tabs0" id="myTabs-general" role="tablist">
                                        @foreach(config('translatable.locales') as $key_locale => $locale)
                                            <li class="nav-item">
                                                <a @if($key_locale == 0) class="nav-link active" @else class="nav-link"
                                                   @endif id="{{$locale}}-tab" data-toggle="tab"
                                                   href="#{{$locale}}-general">

                                                    <span class="nav-text "> @lang('general.'.$locale)</span>
                                                </a>
                                            </li>
                                        @endforeach


                                    </ul>

                                    <div class="tab-content" id="myTabContent-general">

                                        <div class="card-body p-0">


                                            <div class="form-group">
                                                <label class="col-lg-12 col-form-label">Name</label>
                                                <div class=" col-lg-6">
                                                    <div class="input-group ">
                                                        <input type="text" class="form-control" placeholder="Name"
                                                               name="name">

                                                    </div>


                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label class="col-lg-12 col-form-label">display_name</label>
                                                <div class=" col-lg-6">
                                                    <div class="input-group ">
                                                        <input type="text" class="form-control"
                                                               placeholder="display_name" name="display_name">

                                                    </div>


                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-lg-12 col-form-label">description</label>
                                                <div class=" col-lg-6">
                                                    <div class="input-group ">
                                                        <textarea name="description" class="form-control" placeholder="description"></textarea>
                                                    </div>


                                                </div>
                                            </div>



                                            <div class="row">
                                                <label class="col-lg-12 col-form-label">Permissions</label>
                                                @foreach ($models as $index=>$model)

                                                <div class="input-group ">

{{--                                                            <div class="row justify-content-center">--}}
                                                                <div class="col-lg-12 d-flex justify-content-between">
                                                                    <label class="control-label">{{$model}} *</label>
                                                                    @foreach ($maps as $map)
                                                                     {{$map}}
                                                                        <label class="switch">
                                                                            <input type="checkbox" name="section[]" value="{{ $map . '_' . $model }}">
                                                                            <span class="slider round"></span>
                                                                        </label>




                                                                    @endforeach

                                                    </div>

                                                                @endforeach

{{--                                                </div>--}}




                                        </div>

                                    </div>


                                </div>


                            </div>




                    </div>
                    <div class="col-12 text-start ">
                        <button type="submit" class="btn btn-primary mb-2 mt-5">Save</button>
                    </div>
                </div>
                </form>
            </div>


            <!--end::Form-->
        </div>


        </div>


        </div>
        <!--end::Container-->

        {{-- end main content --}}

    </x-dashboard.tap-content>

@endsection
