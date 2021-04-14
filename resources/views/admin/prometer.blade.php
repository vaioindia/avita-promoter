@extends('layouts.admin-app')

{{-- @include('partials.navbar') --}}

@section('content')
<!-- Breadcrumb -->
<nav class="hk-breadcrumb" aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-light bg-transparent">
        <li class="breadcrumb-item"><a href="#">Promoters</a></li>
        <li class="breadcrumb-item active" aria-current="page">Promoters Lists</li>
    </ol>
</nav>
<!-- /Breadcrumb -->

<!-- Container -->
<div class="container">

    <!-- Title -->
    <div class="hk-pg-header">
        <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="database"></i></span></span>Promoters Lists</h4>
    </div>
    <!-- /Title -->

    <!-- Row -->
    <div class="row">
        <div class="col-xl-12">
            <section class="hk-sec-wrapper">
                <h5 class="hk-sec-title">Promoters Lists</h5>
                <div class="row">
                    <div class="col-sm">
                        <div class="table-wrap mb-30">
                            <div class="table-responsive">
                                <table id="datable_3" class="table table-hover w-100 display">
                                    <thead>
                                        <tr>
                                            <th><span style='font-weight:bold; font-size: 16px;'>Name</span></th>
                                            <th><span style='font-weight:bold; font-size: 16px;'>Email</span></th>
                                            {{-- <th><span style='font-weight:bold; font-size: 16px;'>Password</span></th> --}}
                                            <th><span style='font-weight:bold; font-size: 16px;'>Store</span></th>
                                            <th><span style='font-weight:bold; font-size: 16px;'>Role</span></th>
                                            {{-- <th>Country</th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->name}}</td>
                                            <td>{{ $user->email}}</td>
                                            {{-- <td class="w-5">{{ $user->password}}</td> --}}
                                            <td>{{ $user->store}}</td>
                                            <td>
                                                @if($user->is_admin == 1)
                                                    <span class="badge badge-success">admin</span>
                                                @else
                                                    <span class="badge badge-info">Member</span>
                                                @endif
                                            </td>
                                            {{-- <td>EN</td> --}}
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
        </div>
    </div>
    <!-- /Row -->

</div>
<!-- /Container -->
@endsection
