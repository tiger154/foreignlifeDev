@extends('layouts.room.base')

@section('room.content')
    @include('room.nav')
    <div class="room-from-container">

        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Edit</h4>
            </div>
            <div class="panel-body">
                {!! Form::model($room, array('route' => array('room.update', Regions::getSubDomain(), $room->id), 'method' => 'put' )) !!}
                <div class="form-group">
                    <label for="title">Title</label>
                    {!! Form::text('title', null, array('class' => 'form-control','id' => 'title', 'placeholder' => 'Enter title', 'aria-describedby' => 'title')) !!}
                </div>
                <div class="form-group">
                    {!! Form::textarea('content', null, array('class' => 'from-group','id' => 'summernote', 'placeholder' => 'Content area', 'rows' => 3)) !!}
                </div>
                <div class="form-group">
                    <label for="inputFile">ROOM IMAGE UPLOAD</label>
                    <input type="file" class="form-control-file" id="inputFile" aria-describedby="fileHelp">
                    <small id="fileHelp" class="form-text text-muted">2 MB is maximum and we don't allow any file can be dangerous </small>
                </div>
                {!! Form::token() !!}
                <button type="submit" class="btn btn-primary">Submit</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection

@section('js')
    <!-- include summernote js-->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#summernote').summernote({
                height:300
            });
        });
    </script>
@stop