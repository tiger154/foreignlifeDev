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
.footer {
    padding-top: 19px;
    color: #777;
    border-top: 1px solid #e5e5e5;
}

.line {
    background-color: #000000;
    height: 2em;
    margin-bottom: 0.5em;
}
.item-list-row {
    padding: 10px;
    margin-bottom: 0.7em;
    background-color: white;
    box-shadow: 0 0 4px 0 rgba(0,0,0,0.3);
}
.item-list-row:hover {
    box-shadow: 0 0 8px 0 rgba(0,0,0,0.4);
}

.item-list-right {
    padding: 0px;
}
.item-list-title {
    text-align: left;
}
.item-list-count {
    font-size: 2em;
}
.item-list-title-bottom {
    margin: 1em 0 0 0;
    text-align: left;
}
.item-list-author {
    text-align: right;
}
.item-list-tags {
    padding: 0px;
    text-align: left;
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
    <div class="container-fluid line"></div>
    <div class="container-fluid front-content-layout">
        <div class="row">
            <div class="col-lg-1 visible-lg"></div>
            <div class="col-lg-7 front-content-center">
                @for ($i = 0; $i < 20; $i++)
                    <div class="row item-list-row">
                        <div class="col-sm-3 item-list-left">
                            <div class="col-xs-4">
                                <div class="item-list-count">0</div>
                                <div class="item-list-header">votes</div>
                            </div>
                            <div class="col-xs-4">
                                <div class="item-list-count">0</div>
                                <div class="item-list-header">answers</div>
                            </div>
                            <div class="col-xs-4">
                                <div class="item-list-count">0</div>
                                <div class="item-list">views</div>
                            </div>
                        </div>
                        <div class="col-sm-9 item-list-right">
                            <div class="col-sm-12 item-list-title"><a href="#">I'm looking for cheap place to stay for 2 or 3 days in seoul, please anyone feel free to touch me! Don't forget to email me! </a></div>
                            <div class="col-sm-12 item-list-title-bottom">
                                <div class="item-list-tags col-sm-6">
                                    <span class="label label-info">tag1</span>
                                    <span class="label label-info">tag2bitlongone</span>
                                    <span class="label label-info">한글태그</span>
                                </div>
                                <div class="item-list-author col-sm-6">
                                    created 2017-02-10, Jeonhwan
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
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