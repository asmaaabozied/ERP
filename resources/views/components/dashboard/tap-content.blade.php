<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
        <a class="nav-link" id="home-tab" data-toggle="tab" href="#home">
            <span class="nav-text">start</span>
        </a>
    </li>
    {{-- <li class="nav-item ">
        <a class="nav-link active" id="group-card-tab" data-toggle="tab" href="#group-card-0">
            <span class="nav-text">Group card</span>
        </a>
    </li> --}}

    {{$taps}}

</ul>
<div class="tab-content mt-5" id="myTabContent">
 
    <div class="tab-pane fade active show" id="{{$tap_id}}" role="tabpanel" aria-labelledby="group-card-tab">


        <div class="d-flex flex-row flex-column-fluid page">
            <!--begin::Aside--> 
                {{--  --}}
            <!--end::Aside-->
            <!--begin::Wrapper-->
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                <!--begin::Page Heading-->
                {{-- <x-dashboard.breadcrumb /> --}}
                {{$breadcrumb}}
                <!--end::Page Heading-->
                <!--begin::Container-->
                <div class="container">
                    

                    {{$slot}}
                </div>
                <!--end::Container-->

            </div>
            <!--end::Wrapper-->
        </div>
    </div>

    <!--begin::Footer-->
        <x-dashboard.footer/>
    <!--end::Footer-->
</div> 