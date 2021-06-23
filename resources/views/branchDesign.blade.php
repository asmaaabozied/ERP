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



        <div class="card card-custom mb-9 mt-10">
            <div class="card-header flex-wrap border-0 pb-0">

                <div class="card-title">
                    <h3 class="card-label"> add branch</h3>


                </div>



                <div class="add-tabs w-100 sub-tabs">
                    <ul class="nav nav-tabs0" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="general-tab" data-toggle="tab" href="#page-general">
                                <span class="nav-icon">
                                    <i class="flaticon2-gear"></i>
                                </span>
                                <span class="nav-text">General</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="data-tab" data-toggle="tab" href="#page-data">
                                <span class="nav-icon">
                                    <i class=" flaticon2-contract"></i>
                                </span>
                                <span class="nav-text">Data</span>
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

                    <form id="form1" autocomplete="off" method="POST">

                        <div class="tab-content main-tab-content" id="myTabContent">

                            <div class="tab-pane fade active show" id="page-general" role="tabpanel" aria-labelledby="page-g-tab">

                                <ul class="nav nav-tabs0" id="myTabs-general" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link  active" id="EnglishT-tab" data-toggle="tab" href="#en-general">

                                            <span class="nav-text "> English</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="EnglishT-tab" data-toggle="tab" href="#ar-general">

                                            <span class="nav-text"> Arabic</span>
                                        </a>
                                    </li>

                                </ul>

                                <div class="tab-content" id="myTabContent-general">

                                    <div class="tab-pane fade active show" id="en-general" role="tabpanel" aria-labelledby="EnglishT-tab">
                                        <div class="card-body p-0">

                                            <div class="form-group row">
                                                <label class="col-lg-12 col-form-label">Name in English</label>
                                                <div class=" col-lg-6">
                                                    <div class="col-lg-12 input-group p-0">
                                                        <input type="text" mesg="couldn't be empty!" class="form-control required" required="required" tobetranslated=" Name in English" placeholder="Name in English" name="">

                                                    </div>

                                                </div>
                                            </div>


                                        </div>

                                    </div>
                                    <div class="tab-pane fade " id="ar-general" role="tabpanel" aria-labelledby="EnglishT-tab">
                                        <div class="card-body p-0">

                                            <div class="form-group row">
                                                <label class="col-lg-12 col-form-label"> Name in Arabic</label>
                                                <div class=" col-lg-6">
                                                    <div class="col-lg-12 input-group p-0">
                                                        <input type="text" mesg="couldn't be empty!" class="form-control required" required="required" tobetranslated=" Name in Arabic" placeholder=" Name in Arabic" name="">



                                                    </div>

                                                </div>
                                            </div>


                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="page-data" role="tabpanel" aria-labelledby="data-tab">

                                <form class="w-100 main-form">
                                    <!-- <div class="card-body"> -->
                                        <div class="row">
                                            <div class="form-group col-md-6 col-12">
                                                <label for="">Country name</label>
                                                <select  class="form-control  " name="">
                                                    <option selected value="">Choose...</option>


                                                    <option value="">Country name </option>


                                                </select>
                                            </div>
                                            <div class="form-group col-md-6 col-12">
                                                <label for="">City name</label>
                                                <select  class="form-control " name="">
                                                    <option value="">City name</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-6 col-12">
                                                <label for="">District name</label>
                                                <select  class="form-control " name="">
                                                    <option selected value="">Choose...</option>


                                                    <option value="">District name</option>

                                                </select>
                                            </div>



                                        </div>

                                    <!-- </div> -->
                                </form>


                            </div>

                            <div class="tab-pane fade" id="page-map" role="tabpanel" aria-labelledby="map-tab">


                            <div class="row">
                          <div class="col-md-12">
                              <div class="form-group col-md-6 col-12 p-0">
                                  <label for="projectinput1">Address</label>
                                  <input type="text"  class="form-control required" required="required" placeholder="address" name="" id="pac">
                                  

                              </div>
                              <div id="googleMap" style="width:100%;height:400px;"></div>
                          </div>

                      </div>
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
                        <button type="button" class="btn btn-primary mb-2 mt-5">Save</button>
                        </div>



                    </form>
                </div>

            </div>



        </div>



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
                  map.setZoom(5);
            });




            }
            </script>

            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDZeOakAwelvfDJttUgUDjFL5btwXSyHu8&callback=myMap&libraries=places"></script>




                    <script>
                      var start_date = new Date().toISOString().split('T')[0];
                    document.getElementsByName("start_date")[0].setAttribute('min', start_date);
                    var end_date = new Date().toISOString().split('T')[0];
                    document.getElementsByName("end_date")[0].setAttribute('min', end_date);
                      function addFunction() {
                          event.preventDefault();
                          var form = document.getElementById("fo1");
                          Swal.fire({
                    title: 'Are you sure?',
                    text: " work has been saved",

                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, save it!'

                  }).then((result) => {
                    if (result.value) {
                        console.log(form);

                      form.submit();
                      Swal.fire(
                        'SUCCESS',
                        'Your work has been saved.',

                      )
                    }
                  })
                      }
                  </script>



        {{-- end main content --}}

    </x-dashboard.tap-content>

    
@endsection