@extends('dashboard.layouts.app') 
@section('content') 
     
    <x-dashboard.tap-content>
        <x-slot name="breadcrumb">
            <x-dashboard.breadcrumb />
        </x-slot> 
        <x-slot name="taps">
           
        </x-slot>
        <x-slot name="tap_id">  </x-slot>


        {{-- begin main content --}}

        {{-- end main content --}}

    </x-dashboard.tap-content>
@endsection