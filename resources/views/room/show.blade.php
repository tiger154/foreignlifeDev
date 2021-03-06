@extends('layouts.room.base')


 <style>
    .question-form-container {
         padding: 2em;
         border: 1px solid lightgray;
         background-color: white;
     }
    .question-show-header {
        clear: both;
        padding: 5px 0;
        border-bottom: 1px solid #e4e6e8;
        margin-bottom: 1em;
    }
    .question-show-content {
        clear: both;
        padding: 5px 0;
        border-bottom: 1px solid #e4e6e8;
        margin-bottom: 1em;
        margin-top: 1em;
    }
    .question-show-tags {

    }
    .question-show-files {

    }
    .ad-on-show-img {
        width: 100%;
    }
    .fa-2 {
       font-size: 2em !important;
    }
    .question-show-vote-box {
        text-align: center;
    }
    .question-show-vote-count {
        margin: 8px 0;
    }
</style>

@section('room.content')
    @include('room.nav')
    <div class="row question-form-container">
        <div class="row question-show-header">
           <h2>{{ $room->title }}</h2>
         </div>
         <div class="row ad-on-show">
            <img border="0" class="ad-on-show-img" src="/img/ad/show/ad_on_show1.png">
         </div>
         <div class="row question-show-content">
            <div class="col-lg-1 question-show-vote-box">
                <i class="fa fa-chevron-circle-up fa-2" aria-hidden="true"></i>
                <div class="question-show-vote-count"> 1 </div>
                <i class="fa fa-chevron-circle-down fa-2" aria-hidden="true"></i>
            </div>
            <div class="col-lg-11">{!! $room->content !!}</div>
         </div>
        <div class="row question-show-tags">
            <label for="tagsTextInput">TAGS</label>
            <div>
            </div>
        </div>
         <div class="row question-show-files">
           Show File area
         </div>
    </div>
@endsection