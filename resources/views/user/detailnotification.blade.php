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
        <li class="breadcrumb-item"><a href="#">Noitification</a></li>
        {{-- <li class="breadcrumb-item active" aria-current="page">Promoters Documents</li> --}}
    </ol>
</nav>
<!-- /Breadcrumb -->

<!-- Container -->
<div class="container">
    <!-- Title -->
    <div class="hk-pg-header">
        <h4 class="hk-pg-title"><span class="pg-title-icon"><i class="fa fa-bell"></i></span>Noitification</h4>
    </div>
    <!-- /Title -->

    <!-- Row -->
    <div class="row">
        <div class="col-xl-12">
            <section class="hk-sec-wrapper">

                <h5 class="hk-sec-title">Noitification</h5>
                {{-- <p class="mb-40">Here are some suggestions on how to go about writing the stock report and ensuring it adds to the profitability of the business.</p> --}}
                <div class="dropdown-divider"></div>

                <div  class="row">
                    <div class="col-sm"><br>
                        <h5 class="hk-sec-title">Titlle:{{ $notification->title}}</h5>
                        <blockquote class="blockquote"><p>{{ $notification->summery}}</p></blockquote>
                        @if ($notification->file == "")

                        @else
                        <a href="public_path().'\uploads'{{$notification->file}}" target="_blank" class="btn btn-outline-primary" >Download</a>
                        @endif

                        <div class="dropdown-divider"></div>
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

