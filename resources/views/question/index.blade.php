@extends('layouts.base')
@section('header')
<style>
.question-header {
    height: 15em;
    background-color: black;
    margin-bottom: 0.5em;
    background-image: url('{{ URL::asset('img/question/question_bg2.jpg') }}');
}
.question-header-des {
    margin: 0 auto;
    width: 6em;
    font-size: 5em;
    font-weight: bold;
    color: white;
    text-align: center;
}
.question-search-container {
    padding: 10px;
    background-color: rgba(255, 255, 255, 0.67);
    border-radius: 5px;
    box-shadow: 0 0 15px 0 rgba(0,0,0,0.6);
}
.question-search-right {
    padding: 0px;
}
.question-search-label-tag {
    background-color: white;
}
.question-manage {
    margin-bottom: 1em;
}
</style>
@stop

@section('content')
        <div class="container-fluid question-header">
            <div class="row question-header-des">
                 Question
            </div>
            <div class="question-search-container  col-lg-6 col-lg-offset-3 col-xs-10 col-xs-offset-1">
                <div>
                    <div class="col-lg-4">
                        <div class="input-group">
                           <span class="input-group-addon question-search-label-tag">Tag</span>
                           <input type="text" name="question[tag]" class="form-control" placeholder="Type tag">
                        </div>
                    </div>
                    <div class="col-lg-8 question-search-right">
                        <div>
                            <div class="input-group">
                               <input type="text" name="question[text]" class="form-control" placeholder="Search text">
                               <span class="input-group-btn">
                                  <button class="btn btn-success" type="button" > Search </button>
                               </span>
                            </div><!-- /input-group -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid front-content-layout">
            <div class="row">
                <div class="col-lg-1 visible-lg"></div>
                <div class="col-lg-7 front-content-center">
                    <div class="question-manage row">
                        <ul class="nav nav-pills col-lg-6">
                          <li class="active"><a href="#">All</a></li>
                          <li><a href="#">Place</a></li>
                          <li><a href="#">Study</a></li>
                          <li><a href="#">Visa</a></li>
                          <li><a href="#">Tags</a></li>
                        </ul>
                        <div class="col-lg-6">
                            <button class="btn btn-primary pull-right"><i class="fa fa-pencil" aria-hidden="true"></i> Write</button>
                        </div>
                    </div>
                    <Questionlist></Questionlist>
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