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
                        <h3 class="card-label">@lang('general.add_option')</h3>


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


                        @if ($errors->any())
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $err)
                                    <p>{{ '* ' . $err }}</p>
                                @endforeach
                            </div>
                        @endif

                        <form id="form1" autocomplete="off" method="POST" action="{{ route('cart.store') }}">
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
                                            <div @if ($key_locale == 0) class="tab-pane fade active show" @else  class="tab-pane fade" @endif id="{{ $locale }}-general" role="tabpanel"
                                                aria-labelledby="{{ $locale }}-tab">
                                                <div class="card-body p-0">

                                                    <div class="form-group row">
                                                        <label
                                                            class="col-lg-12 col-form-label">@lang('general.option_name_'.$locale)</label>
                                                        <div class=" col-lg-9">
                                                            <div class="col-lg-12 input-group p-0">
                                                                <input type="text" class="form-control"
                                                                    placeholder="@lang('general.option_name_'.$locale)"
                                                                    name="{{ $locale . '[name]' }}">

                                                            </div>

                                                        </div>
                                                    </div>



                                                </div>

                                            </div>
                                        @endforeach

                                    </div>
                                </div>

                                <div class="tab-pane fade" id="page-data" role="tabpanel" aria-labelledby="page-g-tab">


                                    <div class="form-row">


                                        <div class="col" style="margin-top: 20px">
                                            <div class="formrow">
                                                <label for="inputState">employe</label>
                                                <select id="inputState" class="form-control rounded-pill" name="employe_id">
                                                    <option selected value="">Choose...</option>
                                                    @foreach ($Emploies as $Employ)
                                                        <option value="{{ $Employ->id }}">{{ $Employ->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>


                                        <div class="col" style="margin-top: 20px">
                                            <div class="formrow">
                                                <label for="inputState">Currency</label>
                                                <select id="inputState" class="form-control rounded-pill"
                                                    name="Currency_id">
                                                    <option selected value="">Choose...</option>
                                                    @foreach ($Currency as $Currenc)
                                                        <option value="{{ $Currenc->id }}">{{ $Currenc->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>


                                        <div class="col" style="margin-top: 20px">
                                            <div class="formrow">
                                                <label for="inputState">vip</label>
                                                <select id="inputState" class="form-control rounded-pill" name="vip_id">
                                                    <option selected value="">Choose...</option>
                                                    @foreach ($Vips as $Vip)
                                                        <option value="{{ $Vip->id }}">{{ $Vip->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>





                                    </div>


                                    <div class="row">

                                        <div class="form-group col-md-4 col-12">
                                            <label for="inputState">type</label>
                                            <select id="inputState" class="form-control  " name="type">
                                               <option selected value="">Choose...</option>
                                                <option value="رئيسي">رئيسي</option>
                                                <option value="فرعي">فرعي</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-md-4 col-12">
                                            <label for="inputState">Account_Category</label>
                                            <select id="inputState" class="form-control  " name="Account_Category">

                                                <option selected value="">Choose...</option>
                                                <option value="عميل">عميل</option>
                                                <option value="مورد"> مورد</option>
                                                <option value="موظف">موظف</option>
                                                <option value="مزدوج">مزدوج</option>
                                                <option value="نقدى">نقدى</option>
                                                <option value="اخرى">اخرى</option>


                                            </select>
                                        </div>

                                        <div class="form-group col-md-4 col-12">
                                            <label for="inputState">isActive</label>
                                            <select id="inputState" class="form-control  " name="isActive">
                                                <option selected value="">Choose...</option>
                                                <option value="1">تنشيط</option>
                                                <option value="0">حظر</option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="form-row">

                                        <div class="col">
                                            <input type="number" name="limited_money" placeholder="limited_money"
                                                class=" form-control rounded-pill">
                                        </div>



                                    </div>

                                    <div class="form-row">

                                        <div class="col">
                                            <input type="text" name="address" placeholder="address"
                                                class=" form-control rounded-pill">
                                        </div>

                                        <div class="col">
                                            <input type="number" name="phone_number1" placeholder="phone_number1"
                                                class=" form-control  rounded-pill">
                                        </div>

                                        <div class="col">
                                            <input type="number" name="phone_number2" placeholder="phone_number2"
                                                class=" form-control  rounded-pill">
                                        </div>

                                        <div class="col">

                                            <input type="email" name="email" placeholder="email"
                                                class=" form-control  rounded-pill">
                                        </div>

                                    </div>

                                    <div class="form-row">

                                        <div class="col">
                                            <input type="text" name="iban" placeholder="iban"
                                                class=" form-control rounded-pill">
                                        </div>

                                        <div class="col">
                                            <input type="text" name="bank_account_number" placeholder="bank_account_number"
                                                class=" form-control  rounded-pill">
                                        </div>

                                        <div class="col">
                                            <input type="text" name="tax_registration_number"
                                                placeholder="tax_registration_number" class=" form-control  rounded-pill">
                                        </div>



                                    </div>

                                    <div class="form-row">
                                        <div class="col">
                                            <input type="number" name="Credit_limit" placeholder="Credit_limit"
                                                class=" form-control  rounded-pill">
                                        </div>


                                        <div class="col">
                                            <input type="number" name="Balance_relay" placeholder="Balance_relay"
                                                class=" form-control  rounded-pill">
                                        </div>

                                    </div>


                                    <div class="form-group row">
                                        <label
                                            class="col-lg-12 col-form-label">Note</label>
                                        <div class=" col-lg-12">

                                            <textarea cols="85" rows="8" id="kt-ckeditor-{{ $key_locale + 1 }}"
                                                name="Note"
                                                placeholder="Note"></textarea>
                                        </div>
                                    </div>



                                </div>
                                <button class=" btn btn-primary" type="submit">Submit</button>

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
