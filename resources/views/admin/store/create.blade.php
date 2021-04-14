@extends('layouts.admin-app')

{{-- @include('partials.navbar') --}}

@section('content')
<!-- Breadcrumb -->
<nav class="hk-breadcrumb" aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-light bg-transparent">
        <li class="breadcrumb-item"><a href="#">Store </a></li>
        <li class="breadcrumb-item active" aria-current="page">Store Create</li>
    </ol>
</nav>
<!-- /Breadcrumb -->

<!-- Container -->
<div class="container">
    <!-- Title -->
    <div class="hk-pg-header">
        <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="align-left"></i></span></span>Store Create</h4>
    </div>
    <!-- /Title -->

    <!-- Row -->
    <div class="row">
        <div class="col-xl-12">
            <section class="hk-sec-wrapper">
                <div class="row">
                    <div class="col-sm">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <form action="{{ route('store.create') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="username">Store Name</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        {{-- <span class="input-group-text">@</span> --}}
                                    </div>
                                    <input class="form-control" id="username" placeholder="Username" type="text" name="store_name">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="address">Address</label>
                                <input class="form-control" id="address" placeholder="Store Address" type="text" name="address">
                            </div>

                            <div class="form-group">
                                <label for="city">City</label>
                                <input class="form-control" placeholder="City" type="text" name="city">
                            </div>

                            <div class="form-group">
                                <label for="state">State</label>
                                <input class="form-control" placeholder="State" type="text" name="state">
                            </div>

                            <div class="form-group">
                                <label for="pincode">Pin code</label>
                                <input class="form-control" placeholder="Pin-code" type="text" name="pincode">
                            </div>

                            <button class="btn btn-primary" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- /Row -->
</div>
<!-- /Container -->

@endsection
