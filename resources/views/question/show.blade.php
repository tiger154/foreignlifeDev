@extends('layouts.question.base')


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
</style>

@section('question.content')
    @include('question.nav')
    <div class="row question-form-container">
        <div class="row question-show-header">
           <h2>{{ $question->title }}</h2>
         </div>
         <div class="row ad-on-show">
            <img border="0" class="ad-on-show-img" src="/img/ad/show/ad_on_show1.png">
         </div>
         <div class="row question-show-content">
            <div>{{ $question->content  }}</div>
         </div>
        <div class="row question-show-tags">
            <label for="tagsTextInput">TAGS</label>
            <div>{{ $question->tags }}</div>
        </div>
         <div class="row question-show-files">
           Show File area
         </div>
    </div>
@endsection