@extends('layouts.base')
@section('header')
<link href="{{ URL::asset('css/question/question.css') }}" rel="stylesheet">
@stop

@section('content')
        <div class="container-fluid question-header">
            @include('question.header')
        </div>
        <div class="container-fluid front-content-layout">
            <div class="row">
                <div class="col-lg-1 visible-lg"></div>
                <div class="col-lg-7 front-content-center">
                    @yield('question.content')
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