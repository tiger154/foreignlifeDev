@extends('layouts.base')

@section('header')
<style>
</style>
@stop

@section('content')
    <Slider></Slider>
    <div class="container-fluid line purple"></div>
    <div class="container-fluid front-content-layout">
        <div class="row">
            <div class="col-lg-1 visible-lg"></div>
            <div class="col-lg-7 front-content-center">
                <div class="col-lg-9">
                    <div class="panel panel-default">
                        <div class="panel-heading"> Questions </div>
                        <div class="panel-body panel-simple">
                            <Questionlist></Questionlist>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 no-padding">
                    <div class="panel panel-default">
                        <div class="panel-heading"> Tags </div>
                        <div class="panel-body">
                            tag tag tag
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 visible-lg front-content-right">
                @include('layouts.ad')
                <!-- Hot question -->
            </div>
            <div class="col-lg-1 visible-lg"> </div>
        </div>
    </div>
@endsection