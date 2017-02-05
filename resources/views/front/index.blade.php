@extends('layouts.base')

@section('header')

<style>
    /*  front-content-layout */
    .front-content-left, .front-content-center, .front-content-right {
        text-align: center;
    }
    .front-content-left {
        background-color: #add8e6;
    }
    .front-content-center {
        background-color: lightgray;
    }
    .front-content-right {
        background-color: lightcoral;
    }

</style>

@stop

@section('content')
    <div class="container-fluid front-content-layout">
       <div class="row">
         <div class="col-sm-2 front-content-left">.col-sm-2</div>
         <div class="col-sm-8 front-content-center">.col-sm-8</div>
         <div class="col-sm-2 front-content-right">.col-sm-2</div>
       </div>
    </div>
@endsection