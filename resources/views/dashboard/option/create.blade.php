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

						<form id="form1" autocomplete="off" method="POST" action="{{route('options.store')}}">
							@csrf
							<div class="tab-content" id="myTabContent">

								<div class="tab-pane fade active show" id="page-general" role="tabpanel" aria-labelledby="page-g-tab">

									<ul class="nav nav-tabs0" id="myTabs-general" role="tablist">
										@foreach(config('translatable.locales') as $key_locale => $locale)
										<li class="nav-item">
											<a @if($key_locale == 0) class="nav-link active"  @else class="nav-link" @endif id="{{$locale}}-tab" data-toggle="tab" href="#{{$locale}}-general">
												
												<span class="nav-text "> @lang('general.'.$locale)</span>
											</a>
										</li>
										@endforeach
										

									</ul>

									<div class="tab-content" id="myTabContent-general">
										@foreach(config('translatable.locales') as $key_locale => $locale)
										<div @if($key_locale == 0) class="tab-pane fade active show" @else  class="tab-pane fade" @endif id="{{$locale}}-general" role="tabpanel" aria-labelledby="{{$locale}}-tab">
											<div class="card-body p-0">

												<div class="form-group row">
													<label class="col-lg-12 col-form-label">@lang('general.option_name_'.$locale)</label>
													<div class=" col-lg-9">
														<div class="col-lg-12 input-group p-0">
															<input type="text" class="form-control" placeholder="@lang('general.option_name_'.$locale)"name="{{ $locale.'[name]'}}">

														</div>

													</div>
												</div>


												<div class="form-group row">
													<label class="col-lg-12 col-form-label">@lang('general.option_description_'.$locale)</label>
													<div class=" col-lg-9">
														
															<textarea cols="85" rows="8" id="kt-ckeditor-{{$key_locale+1}}" name="{{$locale.'[description]'}}" placeholder="@lang('general.option_description_'.$locale)" ></textarea>



													</div>
												</div>

											</div>

										</div>
										@endforeach
										
									</div>
								</div>

								<div class="tab-pane fade" id="page-data" role="tabpanel" aria-labelledby="page-g-tab">

									

										
									<div class="form-group row">
										<label class="col-lg-12 col-form-label">@lang('general.type')</label>
										<div class=" col-lg-9">
											<div class="col-lg-12 input-group p-0">
												<div class="dropdown form-control">
													<select tobetranslated="Related" name="type" class="form-control select" required="required" tabindex="null">
														<option value="NULL" disabled>@lang('general.choose_type')</option>
														<option value="checkbox">@lang('general.checkbox')</option>
														<option value="select">@lang('general.select')</option>
														<option value="color">@lang('general.color')</option>
														<option value="design">@lang('generals.design')</option>
													</select>
											
												</div>

											</div>

										</div>
										
									</div>
								

								
									

					
					<div class="option-value">

						<div class="separator separator-dashed my-5"></div>

						<table id="option-value" class="table table-striped table-bordered table-hover">
							<thead>
								<tr>
									<td class="text-left required">@lang('general.option_values')</td>
									<td></td>
								</tr>
							</thead>
							<tbody>
								{{-- Hidden input to send the locales languages to JS --}}
								<input type="hidden" id="translates" value="{{json_encode(config('translatable.locales'))}}">

								<tr id="option-value-row0">

									<td class="text-left option-left">
										@foreach(config('translatable.locales') as $key_locale => $locale)
										<div class="col-lg-12 input-group mt-2">
											<div class="input-group-prepend">
											<span class="input-group-text">
												@lang('general.'.$locale)
											</span>
											</div>
											<input type="text" class="form-control" name="values[{{$locale}}][name][]">
										</div>
										@endforeach
										
									</td>

									<td class="text-right">
									<button type="button" onclick="" disabled data-toggle="tooltip" title="Remove" class="btn btn-danger btn-option">
									<i class="fa fa-minus-circle"></i>
									</button></td>
								</tr>
							</tbody>

							<tfoot>
								<tr>
									<td ></td>
									<td class="text-right">
									<button type="button" number=0 onclick="appendValueRow(this)" class="btn btn-primary btn-option" >
									<i class="fa fa-plus-circle"></i>
									</button>
									</td>
								</tr>
							</tfoot>
						</table>



					</div>

								</div>
								<div class="col-12 text-start p-0 ">
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