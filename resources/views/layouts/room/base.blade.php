@extends('layouts.base')
@section('header')
<link href="{{ URL::asset('css/room/room.css') }}?v=@staticversion(new DateTime()))" rel="stylesheet">
<!-- include summernote css-->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.css" rel="stylesheet">
@stop

@section('content')
        <div class="container-fluid question-header">
            @include('room.header')
        </div>
        <div class="container-fluid front-content-layout">
            <div class="row">
                <div class="col-lg-1 visible-lg"></div>
                <div class="col-lg-7 front-content-center">
                    @yield('room.content')
                    <!-- Pagenation needed -->
                </div>
                <div class="col-lg-3 visible-lg front-content-right">
                    @include('layouts.ad')
                    <!-- Hot question -->
                </div>
                <div class="col-lg-1 visible-lg"> </div>
            </div>
        </div>
@endsection