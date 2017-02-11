@extends('layouts.base')
@section('header')
<style>
.question-header {
    height: 10em;
    background-color: black;
}
</style>
@stop


@section('content')
        <div class="container-fluid question-header">
            top search area
        </div>
        <div class="container-fluid front-content-layout">
            <div class="row">
                <div class="col-lg-1 visible-lg"></div>
                <div class="col-lg-7 front-content-center">
                    <Questionlist></Questionlist>
                </div>
                <div class="col-lg-3 visible-lg front-content-right">
                    <!-- Ad -->
                    <div class="ad-box">
                        @for ($i = 0; $i < 3; $i++)
                        <div class="ad">
                            <div class="ad-img">
                                <img src="/img/ad/ad{{ $i+1 }}_345.jpg">
                            </div>
                            <div class="ad-des"> Visit this amazing place and get super deal now! </div>
                        </div>
                        @endfor
                    </div>
                    <!-- Hot question -->
                </div>
                <div class="col-lg-1 visible-lg"> </div>
            </div>
        </div>
@endsection