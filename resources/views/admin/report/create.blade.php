@extends('layouts.admin-app')
{{-- @include('partials.navbar') --}}
@section('content')

<!-- Breadcrumb -->
<nav class="hk-breadcrumb" aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-light bg-transparent">
        <li class="breadcrumb-item"><a href="">Report </a></li>
        <li class="breadcrumb-item active" aria-current="page">Stock Report</li>
    </ol>
</nav>
<!-- /Breadcrumb -->

<!-- Container -->
<div class="container">
    <!-- Title -->
    <div class="hk-pg-header">
        <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="align-left"></i></span></span>Stock Report</h4>
    </div>
    <!-- /Title -->

    <!-- Row -->
    <div class="row">
        <div class="col-xl-12">
            <section class="hk-sec-wrapper">
                <h5 class="hk-sec-title">Stock Report</h5>
                <p class="mb-25">Place an icon inside add-on on either side of an input. You may also place one on right side of an input.</p>
                <div class="row">
                    <div class="col-sm">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        {{-- @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div><br />
                        @endif --}}

                        <form action="{{ route('report.store') }}" role="form" method="post">
                            {!! csrf_field() !!}
                            <div class="form-group">
                                <label class="control-label mb-10" for="">Store Name</label>
                                <div class="input-group">
                                    <select type="store" class="form-control custom-select d-block w-100" id="store" name="store">
                                        <option value="">Choose...</option>
                                        @foreach ($users as $user)
                                            <option value="{{ $user->store }}">{{ $user->store }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label mb-10" for="">Promoters Name</label>
                                <div class="input-group">
                                    <select type="promoters_name" class="form-control custom-select d-block w-100" id="promoters_name" name="promoters_name">
                                        <option value="">Choose...</option>
                                            @foreach ($users as $user)
                                                <option value="{{ $user->name }}">{{ $user->name }}</option>
                                            @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label mb-10" for="">Employee Promoters ID</label>
                                <div class="input-group">
                                    <input type="text" class="form-control @error('promoters_id') is-invalid @enderror" name="promoters_id"  placeholder="Employee ID">
                                    @error('promoters_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label mb-10" for="">Sheet Link</label>
                                <div class="input-group">
                                    <input type="text" class="form-control @error('google_link') is-invalid @enderror" name="google_link"  placeholder="Link">
                                    @error('google_link')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mr-10">Submit</button>
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
