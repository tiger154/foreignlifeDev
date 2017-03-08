@extends('layouts.question.base')


 <style>
    .question-form-container {
        padding: 2em;
        border: 1px solid lightgray;
        background-color: white;
    }
</style>

@section('question.content')
    @include('question.nav')
    <div class="row question-form-container">
        {!! Form::model($question, array('route' => array('question.update', Regions::getSubDomain(), $question->id), 'method' => 'put' )) !!}
            <div class="form-group">
               <label for="titleTextInput">TITLE</label>
               {!! Form::text('title', null, array('class' => 'form-control','id' => 'title', 'placeholder' => 'Enter title', 'aria-describedby' => 'title')) !!}
               <small id="titleHelp" class="form-text text-muted">Type your title</small>
             </div>
             <div class="form-group">
               <label for="contentTextArea">CONTENT</label>
               {!! Form::textarea('content', null, array('class' => 'form-control','id' => 'content', 'placeholder' => 'Content area', 'rows' => 3)) !!}
             </div>
            <div class="form-group">
                <label for="tagsTextInput">TAGS</label>
                <input type="text" class="form-control" id="tags" name="tags" placeholder="tags" aria-describedby="tags"  value="{{ implode(' ', $question->tags) }}">
                <small id="tagsHelp" class="form-text text-muted">Seperate by comma e.g) tag1, tag2 </small>
            </div>
             <div class="form-group">
               <label for="inputFile">UPLOAD FILE</label>
               <input type="file" class="form-control-file" id="inputFile" aria-describedby="fileHelp">
               <small id="fileHelp" class="form-text text-muted">2 MB is maximum and we don't allow any file can be dangerous </small>
             </div>
             {!! Form::token() !!}
             <button type="submit" class="btn btn-primary">Submit</button>
        {!! Form::close() !!}
    </div>
@endsection