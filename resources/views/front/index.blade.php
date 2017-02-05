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
        background-color: #e9e9e9;
    }
    .front-content-right {
        background-color: lightcoral;
    }

.board-row {
    padding: 10px;
    margin-bottom: 5px;
    background-color: white;
}
.line {
    background-color: #000000;
    height: 2em;
}
</style>

@stop

@section('content')
    <div class="container-fluid line"></div>

    <div class="container-fluid front-content-layout">
        <div class="row">
            <div class="col-sm-2 front-content-left">.col-sm-2</div>
            <div class="col-sm-8 front-content-center">
                @for ($i = 0; $i < 15; $i++)
                    <div class="row board-row">
                        <div class="col-sm-2"><i class="fa fa-thumbs-o-up icon-user" aria-hidden="true"></i>upvote</div>
                        <div class="col-sm-6">Hi I want to buy pre-paied phone anyone can help me? I'm living Seoul! </div>
                    </div>
                @endfor
            </div>
            <div class="col-sm-2 front-content-right">.col-sm-2</div>
        </div>
    </div>
@endsection