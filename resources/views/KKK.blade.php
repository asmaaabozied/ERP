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
											<h3 class="card-label">Add opation</h3>


										</div>

										
																		
										<div class="add-tabs w-100 sub-tabs">
											<ul class="nav nav-tabs0" id="myTab" role="tablist">
												<li class="nav-item">
													<a class="nav-link active" id="general" data-toggle="tab" href="#page-general">
														<span class="nav-icon">
															<i class="flaticon2-gear"></i>
														</span>
														<span class="nav-text">General</span>
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" id="data" data-toggle="tab" href="#page-data">
														<span class="nav-icon">
															<i class=" flaticon2-contract"></i>
														</span>
														<span class="nav-text">Data</span>
													</a>
												</li>
										

											</ul>

											<form id="form1" autocomplete="off" method="POST" >
												
												<div class="tab-content" id="myTabContent">

													<div class="tab-pane fade active show" id="page-general" role="tabpanel" aria-labelledby="page-g-tab">

														<ul class="nav nav-tabs0" id="myTabs-general" role="tablist">
															<li class="nav-item">
																<a class="nav-link  active" id="EnglishT-tab" data-toggle="tab" href="#en-general">
																	
																	<span class="nav-text "> English</span>
																</a>
															</li>
															<li class="nav-item">
																<a class="nav-link" id="EnglishT-tab" data-toggle="tab" href="#ar-general">
																	
																	<span class="nav-text">  Arabic</span>
																</a>
															</li>

														</ul>

														<div class="tab-content" id="myTabContent-general">

															<div class="tab-pane fade active show" id="en-general" role="tabpanel" aria-labelledby="EnglishT-tab">
																<div class="card-body p-0">

																	<div class="form-group row">
																		<label class="col-lg-12 col-form-label">Option Name in English</label>
																		<div class=" col-lg-9">
																			<div class="col-lg-12 input-group p-0">
																				<input type="text" mesg="couldn't be empty!" class="form-control required" required="required" tobetranslated="Option Name in English" placeholder="Option Name in English" name="OptionLang|option_name[en]">

																			</div>

																		</div>
																	</div>


																	<div class="form-group row">
																		<label class="col-lg-12 col-form-label">Option description in English</label>
																		<div class=" col-lg-9">
																			
																				<textarea cols="85" rows="8" id="kt-ckeditor-1" name="OptionLang|option_description[en]" placeholder="Option description in English" style="display: none;"></textarea>



																		</div>
																	</div>

																</div>

															</div>
															<div class="tab-pane fade " id="ar-general" role="tabpanel" aria-labelledby="EnglishT-tab">
																<div class="card-body p-0">

																	<div class="form-group row">
																		<label class="col-lg-12 col-form-label">Option Name in Arabic</label>
																		<div class=" col-lg-9">
																			<div class="col-lg-12 input-group p-0">
																				<input type="text" mesg="couldn't be empty!" class="form-control required" required="required" tobetranslated="Option Name in Arabic" placeholder="Option Name in Arabic" name="OptionLang|option_name[ar]">



																			</div>

																		</div>
																	</div>


																	<div class="form-group row">
																		<label class="col-lg-12 col-form-label">Option description in Arabic</label>
																		<div class=" col-lg-9">


																				<textarea cols="85" rows="8" id="kt-ckeditor-2" name="OptionLang|option_description[ar]" placeholder="Option description in Arabic" style="display: none;"></textarea>
																			





																		</div>
																	</div>

																</div>

															</div>
														</div>
													</div>

													<div class="tab-pane fade" id="page-data" role="tabpanel" aria-labelledby="page-g-tab">

														

															
															<div class="form-group row">
																<label class="col-lg-12 col-form-label">Related</label>
																<div class=" col-lg-9">
																	<div class="col-lg-12 input-group p-0">
																		<div class="dropdown bootstrap-select form-control select required"><select mesg="couldn't be empty!" tobetranslated="Related" name="Option|type" id="Option|type" class="form-control select required" required="required" tabindex="null">
																				<option value="NULL">choose Related</option>
																				<option value="check_box">checkbox</option>
																				<option value="text">text</option>
																				<option value="text_area">text area</option>
																				<option value="select">select</option>
																				<option value="number">number</option>
																				<option value="image">image</option>
																			</select><button type="button" tabindex="-1" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="combobox" aria-owns="bs-select-1" aria-haspopup="listbox" aria-expanded="false" data-id="Option|type" title="choose Related">
																				<div class="filter-option">
																					<div class="filter-option-inner">
																						<div class="filter-option-inner-inner">choose Related</div>
																					</div>
																				</div>
																			</button>
																			<div class="dropdown-menu" style="max-height: 347px; overflow: hidden; min-height: 130px;">
																				<div class="inner show" role="listbox" id="bs-select-1" tabindex="-1" aria-activedescendant="bs-select-1-0" style="max-height: 335px; overflow-y: auto; min-height: 118px;">
																					<ul class="dropdown-menu inner show" role="presentation" style="margin-top: 0px; margin-bottom: 0px;">
																						<li class="selected active"><a role="option" class="dropdown-item active selected" id="bs-select-1-0" tabindex="0" aria-setsize="7" aria-posinset="1" aria-selected="true"><span class="text">choose Related</span></a></li>
																						<li><a role="option" class="dropdown-item" id="bs-select-1-1" tabindex="0"><span class="text">checkbox</span></a></li>
																						<li><a role="option" class="dropdown-item" id="bs-select-1-2" tabindex="0"><span class="text">text</span></a></li>
																						<li><a role="option" class="dropdown-item" id="bs-select-1-3" tabindex="0"><span class="text">text area</span></a></li>
																						<li><a role="option" class="dropdown-item" id="bs-select-1-4" tabindex="0"><span class="text">select</span></a></li>
																						<li><a role="option" class="dropdown-item" id="bs-select-1-5" tabindex="0"><span class="text">number</span></a></li>
																						<li><a role="option" class="dropdown-item" id="bs-select-1-6" tabindex="0"><span class="text">image</span></a></li>
																					</ul>
																				</div>
																			</div>
																		</div>

																	</div>

																</div>
																
															</div>
													

													
														

										
										<div class="option-value">

											<div class="separator separator-dashed my-5"></div>

											<table id="option-value" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<td class="text-left required">Option Value Name</td>
														<td></td>
													</tr>
												</thead>
												<tbody>

													<tr id="option-value-row0">
														<td class="text-left option-left">
																<div class="col-lg-12 input-group">
																	<div class="input-group-prepend">
																	<span class="input-group-text">
																	<img class="h-16px w-25px" src="assets/media/svg/flags/USA.svg" alt=""></span>
																	</div>
																	<input type="text" class="form-control" placeholder="Option Value Name">
																</div>
																<div class="col-lg-12 input-group mt-2">
																	<div class="input-group-prepend"><span class="input-group-text">
																			<img class=" w-25px h-16px" src="assets/media/svg/flags/egypt.svg" alt=""></span></div>
																	<input type="text" class="form-control" placeholder="Option Value Name">
																</div>
															
														</td>

														<td class="text-right">
														<button type="button" onclick="$('#option-value-row0').remove();" data-toggle="tooltip" title="Remove" class="btn btn-danger btn-option">
														<i class="fa fa-minus-circle"></i>
														</button></td>
													</tr>
												</tbody>

												<tfoot>
													<tr>
														<td ></td>
														<td class="text-right">
														<button type="button" title="" class="btn btn-primary btn-option" >
														<i class="fa fa-plus-circle"></i>
														</button>
														</td>
													</tr>
												</tfoot>
											</table>



										</div>

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