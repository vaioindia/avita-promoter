@extends('layouts.user-app')
{{-- @include('partials.navbar') --}}
@section('content')
{{-- <div class="container"><br><br>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are normal user.
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}

<!-- Breadcrumb -->
<nav class="hk-breadcrumb" aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-light bg-transparent">
        <li class="breadcrumb-item"><a href="#">Stock Report</a></li>
        {{-- <li class="breadcrumb-item active" aria-current="page">Promoters Documents</li> --}}
    </ol>
</nav>
<!-- /Breadcrumb -->

<!-- Container -->
<div class="container">
    <!-- Title -->
    <div class="hk-pg-header">
        <h4 class="hk-pg-title"><span class="pg-title-icon"><i class="glyphicon glyphicon-file"></i></span>Stock Report</h4>
    </div>
    <!-- /Title -->

    <!-- Row -->
    <div class="row">
        <div class="col-xl-12">
            <section class="hk-sec-wrapper">

                <h5 class="hk-sec-title">Stock Report</h5>
                <p class="mb-40">Here are some suggestions on how to go about writing the stock report and ensuring it adds to the profitability of the business.</p>
                <div  class="row">
                    <div class="col-sm">
                            <a class="btn btn-primary" target="_blank" href="{{ $url}}"><i class="glyphicon glyphicon-file"></i> Excle Link</a>
                      {{-- <button type="button" onclick="window.location='{{ url("$url") }}'">Button</button> --}}

                        </div>
                </div>
            </section>
        </div>
    </div>
    <!-- /Row -->
</div>
<!-- /Container -->


@endsection

@section('script')

@endsection

