@extends('layouts.room.base')

@section('room.content')
    @include('room.nav')
    <div class="room-from-container">

        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Create</h4>
            </div>
            <div class="panel-body">
                {!! Form::open(array('route' => array('room.store',Regions::getSubDomain()))) !!}
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>
                <div class="form-group">
                    <textarea id="summernote" name="content" class="from-group">

                    </textarea>
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