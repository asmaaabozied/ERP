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
						<h3 class="card-label">@lang('general.branch')</h3>


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
								<a class="nav-link" id="map-tab" data-toggle="tab" href="#page-map">
									<span class="nav-icon">
										<i class=" flaticon2-tag"></i>
									</span>
									<span class="nav-text">map</span>
								</a>
							</li>
					

						</ul>

						<form id="form1" autocomplete="off" method="POST" action="{{route('branch.store')}}" >
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
													<label class="col-lg-12 col-form-label">@lang('general.branch_name_'.$locale)</label>
													<div class=" col-lg-6">
														<div class="col-lg-12 input-group p-0">
															<input type="text" class="form-control" placeholder="@lang('general.branch_name_'.$locale)"name="{{ $locale.'[name]'}}">

														</div>

													</div>
												</div>


												

											</div>

										</div>
										@endforeach
										
									</div>
								</div>

								
								<div class="tab-pane fade" id="page-data" role="tabpanel" aria-labelledby="page-g-tab">

										<div class="row">{{-- start row --}}
											
											<div class="form-group col-md-6 col-12">
													<label for="">@lang('general.country')</label>
														
																<select id="country_dd" tobetranslated="Related" name="country_id" class="form-control select" required="required" tabindex="null">
																	<option value="">Select Country</option>
																	@foreach($countries as $data)
																<option style="border-radius:10px" value="{{$data->id}}">{{$data->name}}</option>
																@endforeach
																</select>
											</div>	
											
											<div id="city_div" class="form-group col-md-6 col-12 d-none">
												<label for="">@lang('general.city')</label>
													
															<select id="city_dd" tobetranslated="Related" name="city_id" class="form-control select" required="required" tabindex="null">
																
															</select>
											</div>
														
										
										<div id="district_div" class="form-group col-md-6 col-12 d-none">
											<label for="">@lang('general.district')</label>
												
														<select id="district_dd" tobetranslated="Related" name="district_id" class="form-control select" required="required" tabindex="null">
															
														</select>
													
									</div>
										
										
										</div>{{-- end row --}}

									
								</div>



								<div class="tab-pane fade" id="page-map" role="tabpanel" aria-labelledby="map-tab">

									<div class="row">{{-- start row --}}
										
										<div class="col-md-12">
											<div class="form-group col-md-6 col-12 p-0">
												<label for="projectinput1">Address</label>
												<input type="text"  class="form-control required" required="required" placeholder="address" name="address" id="pac">
												
			  
											</div>
											<div id="googleMap" style="width:100%;height:400px;"></div>
										</div>
									</div>{{-- end row --}}

									<div class="row mt-2">
                          
										<div class="form-group col-md-4 col-12">
										  <label>Lat:</label>
										 <input type="text" class="form-control" style="border-radius:20px" id="lat" name="lat" >
					
									  </div>
									  <div class="form-group col-md-4 col-12">
										<label>Long:</label>
									   <input type="text" class="form-control" style="border-radius:20px" id="lng" name="lng" >
					
									</div>
										  </div>

				
									
							</div>
									
									
								

				
							</div>
						
								

								
									

					
				

								<div class="col-12 text-start p-0 ">
									<button type="submit" class="btn btn-primary mb-2 mt-5">Save</button>
								</div>

							{{-- </div> --}}
						</form>
					</div>
			    </div>
									
									<!--end::Form-->
			</div>



		</div>
							<!--end::Container-->

        {{-- end main content --}}

    </x-dashboard.tap-content>
	<script>
		function myMap() {

		var map = new google.maps.Map(document.getElementById("googleMap"),{
		  center:new google.maps.LatLng(25.577944,30.993490),
		  zoom:5
		});


		var marker=new google.maps.Marker({
			position:new google.maps.LatLng(25.577944,30.993490),
			map,
			draggable:true
		  });

		  var search=new google.maps.places.SearchBox(document.getElementById("pac"));
		google.maps.event.addListener(marker,'position_changed',function(){
		  var lat=marker.getPosition().lat();
		  var lng=marker.getPosition().lng();

		  $('#lat').val(lat);
		  $('#lng').val(lng);
		});


		google.maps.event.addListener(search,'places_changed',function(){
		  var places=search.getPlaces();
		  var bounds=new google.maps.LatLngBounds();
		  var i,place;
		  for(i=0;place=places[i];i++){
			bounds.extend(place.geometry.location);
			marker.setPosition(place.geometry.location);
			  
		  }
		  
		  map.fitBounds(bounds);
			  map.setZoom(15);
		});




		}
		</script>

		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDZeOakAwelvfDJttUgUDjFL5btwXSyHu8&callback=myMap&libraries=places"></script>







		
	
		<script>
			$(document).ready(function () {
				$('#country_dd').on('change', function () {
					var idCountry = this.value;
					$('#city_dd').html('');
					$.ajax({
						url: "{{url('fetch-cities')}}",
						type: "GET",
						data: {
							country_id: idCountry,
							_token: '{{csrf_token()}}'
						},
						dataType: 'json',
						success: function (result) {
						
							if(result.cities.length != 0){
								$('#city_div').removeClass('d-none');
								$('#city_dd').html('<option value="">Select City</option>');
							$.each(result.cities, function (key, value) {
								$("#city_dd").append(`<option value="${value.id}"
									>  ${value.name}  </option>`);
							});
							}else{
								$('#city_div').addClass('d-none');
								$('#district_div').addClass('d-none');
							}
						
							
							
						}
					});
				});

				$('#city_dd').on('change', function () {
                var idCity = this.value;
                $("#district_dd").html('');
                $.ajax({
                    url: "{{url('fetch-districts')}}",
                    type: "GET",
                    data: {
                        city_id: idCity,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (res) {
						if(res.districts.length != 0){
					$('#district_div').removeClass('d-none');
					$('#district_dd').html('<option value="">Select District</option>');
					$.each(res.districts, function (key, value) {
						$("#district_dd").append(`<option value="${value.id}"
							>  ${value.name}  </option>`);
					});
				}else{
								$('#district_div').addClass('d-none');
							}
					
				}
                });
            });
				
			});
	
		</script>











@endsection