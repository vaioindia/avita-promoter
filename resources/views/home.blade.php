@extends('layouts.user-app')
{{-- @include('partials.navbar') --}}
@section('content')

<!-- Container -->
<div class="container mt-xl-50 mt-sm-30 mt-15">
    <!-- Title -->

        {{-- <button type="button" class="btn btn-gradient-success">Punch In</button>
        <button type="button" class="btn btn-gradient-success float-right">Punch Out</button> --}}

    <div class="hk-pg-header align-items-top mt-3">
        <div>
            <h2 class="hk-pg-title font-weight-600 mb-10">Welcome Back!</h2>
            {{-- <pSS>Questions about onboarding lead data? <a href="#">Learn more.</a></pSS> --}}
        </div>
    </div>
    <!-- /Title -->

    <!-- Row -->
    <div class="row">
        <div class="col-xl-12" >
            <img src="{{ asset('assets/dist/img/CES_Event_2019.jpg') }}" alt="Store" class="avatar-img rounded img-thumbnail">
        </div>
    </div>
    <!-- /Row -->
</div>
<!-- /Container -->


@endsection
