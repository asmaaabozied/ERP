<!DOCTYPE html>

<html lang="en">
    <!--begin::Head-->
        @include('dashboard.layouts.head') 

    <!--end::Head-->
<!--begin::Body--> 
    <body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
        <!--begin::Main-->
        <!--begin::Header Mobile-->
            @include('dashboard.layouts.mobile_header')
        <!--end::Header Mobile-->
        <div class="d-flex flex-column flex-root">
            <!--begin::Header-->
                @include('dashboard.layouts.header')
            <!--end::Header-->
            <x-dashboard.sidebar />
            <!--begin::Page-->
            <div class="main-tabs">
                {{-- main content --}}
                @include('dashboard.layouts._messages')
                @yield('content')
                <!--end::Page-->
            </div>
            <!--end::Main--> 
        </div>
            <!--begin::Footer && scrollTop-->
                @include('dashboard.layouts.footer')
            <!--end::Footer && scrollTop-->
    </body>
<!--end::Body--> 
</html>