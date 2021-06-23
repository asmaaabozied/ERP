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
						<h3 class="card-label">@lang('general.district')</h3>


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

						<form id="form1" autocomplete="off" method="POST" action="{{route('district.store')}}" >
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
													<label class="col-lg-12 col-form-label">@lang('general.district_name_'.$locale)</label>
													<div class=" col-lg-6">
														<div class="col-lg-12 input-group p-0">
															<input type="text" class="form-control" placeholder="@lang('general.district_name_'.$locale)"name="{{ $locale.'[name]'}}">

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
										<div class="form-group col-md-6 col-12">
											<label for="">@lang('general.city')</label>
												
											<select tobetranslated="Related" name="city_id" class="form-control select" required="required" tabindex="null">
												<option></option>
											@foreach($cities as $city)
													   <option style="border-radius:10px" value="{{$city->id}}">{{$city->name}}</option>
												 @endforeach
											</select>
													
									</div>





									</div>
								
							

							
								

				
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