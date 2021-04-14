@extends('layouts.admin-app')

{{-- @include('partials.navbar') --}}

@section('content')
<!-- Breadcrumb -->
<nav class="hk-breadcrumb" aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-light bg-transparent">
        <li class="breadcrumb-item"><a href="#">Notifications</a></li>
        <li class="breadcrumb-item active" aria-current="page">Admin Notifications</li>
    </ol>
</nav>
<!-- /Breadcrumb -->

<!-- Container -->
<div class="container">
    <!-- Title -->
    <div class="hk-pg-header">
        <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="align-left"></i></span></span>Admin Notifications</h4>
    </div>
    <!-- /Title -->

    <!-- Row -->
    <div class="row">
        <div class="col-xl-12">
            <section class="hk-sec-wrapper">
                <h5 class="hk-sec-title">Default Layout</h5>
                <p class="mb-25">More complex forms can be built using the grid classes. Use these for form layouts that require multiple columns, varied widths, and additional alignment options.</p>
                <div class="row">
                    <div class="col-sm">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div><br />
                        @endif

                        <form action="{{ route('admin.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="username">Title</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                    </div>
                                    <input class="form-control" id="title" placeholder="Tilte" type="text" name="title">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="address">Summery</label>
                                <input class="form-control" id="summery" placeholder="Summry" type="text" name="summery">
                            </div>

                            {{-- <div class="form-group">
                                <label for="state">file</label>
                                <input class="form-control" placeholder="State" type="file" name="file">
                            </div> --}}

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
