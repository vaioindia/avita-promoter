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
        <li class="breadcrumb-item"><a href="#">Document</a></li>
        {{-- <li class="breadcrumb-item active" aria-current="page">Promoters Documents</li> --}}
    </ol>
</nav>
<!-- /Breadcrumb -->

<!-- Container -->
<div class="container">
    <!-- Title -->
    <div class="hk-pg-header">
        <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="upload"></i></span></span>Promoters Documents {{ Auth::user()->name }}</h4>
    </div>
    <!-- /Title -->

    <!-- Row -->
    <div class="row">
        <div class="col-xl-12">
            <section class="hk-sec-wrapper">
                <h5 class="hk-sec-title">Promoters Documents </h5>
                <p class="mb-40">A lightweight open source library that provides drag’n’drop file uploads with image previews.</p>
                <div  class="row">
                    <div class="col-sm">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form action="{{ route('user.store') }}" class="" role="form" method="POST" enctype="multipart/form-data">
                            @csrf
                            {{-- <div class="fallback {{ $errors->has('reference') ? ' has-error' : '' }}">
                                <input name="reference" type="file"value="{{ old('reference') }}" />

                                @if ($errors->has('reference'))
                                    <span class="help-block">
                                    <strong><span class="error">{{ $errors->first('reference') }}</span></strong>
                                    </span>
                                @endif
                            </div> --}}

                            {{-- name="reference[]" --}}

                            <div class="form-group {{ $errors->has('reference') ? ' has-error' : '' }} increment">
                                <label for="reference" class="col-md-10 control-label">Documents Upload</label>

                                <div class="col-md-10">
                                    <input id="reference" type="file" class="form-control clone" name="reference" {{-- name="reference[]" --}} value="{{ old('reference') }}">

                                    @if ($errors->has('reference'))
                                        <span class="help-block">
                                        <strong><span class="error">{{ $errors->first('reference') }}</span></strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-10 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i data-feather="upload"></i> Submit
                                </button>
                            </div>
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

@section('script')
{{-- <script type="text/javascript">
    $(document).ready(function() {
      $(".btn-primary").click(function(){
          var lsthmtl = $(".clone").html();
          $(".increment").after(lsthmtl);
      });
      $("body").on("click",".btn-danger",function(){
          $(this).parents(".hdtuto control-group lst").remove();
      });
    });
</script> --}}
@endsection

