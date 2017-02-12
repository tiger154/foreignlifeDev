@extends('layouts.base')

@section('header')
<style>
/*  front-content-layout */
.front-content-left, .front-content-center, .front-content-right {
    text-align: center;
}
.front-content-left {
    /*background-color: #add8e6;*/
}
.front-content-center {
    /*background-color: #e9e9e9;*/
}
.front-content-right {
    /*background-color: lightcoral;*/
}
.line {
    background-color: #000000;
    height: 2em;
    margin-bottom: 0.5em;
}
.ad {
    background-color: white;
    margin: 0 0 0.5em 0;
    border: 1px solid #e9e8e6;
    border-bottom-color: #dad7c8;
    font-size: 12px;
}
.ad:hover {
    box-shadow: 0 0 8px 0 rgba(0,0,0,0.4);
}
.ad-img img{
    width: 98%;
}
</style>
@stop

@section('content')
    <Slider></Slider>
    <div class="container-fluid line"></div>
    <div class="container-fluid front-content-layout">
        <div class="row">
            <div class="col-lg-1 visible-lg"></div>
            <div class="col-lg-7 front-content-center">
                <Questionlist></Questionlist>
            </div>
            <div class="col-lg-3 visible-lg front-content-right">
                @include('layouts.ad')
                <!-- Hot question -->
            </div>
            <div class="col-lg-1 visible-lg"> </div>
        </div>
    </div>
@endsection