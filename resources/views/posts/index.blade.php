@extends('layouts.master')

@section('content')
    <h2> Posts list </h2>
    <table class="table table-striped">
        <tr>
            <th>
                title
            </th>
            <th>
                &nbsp;
            </th>
            <th>
                &nbsp;
            </th>
        </tr>

        @foreach ($posts as $key => $post)
            <tr>
                <td>
                    {{ $post->title }}
                </td>
                <td>
                    {{ link_to_route('posts.edit', 'Edit', array($post->id), array('class' => 'btn btn-primary'))}}
                </td>
                <td>
                    {!! Form::open(array('route' => array('posts.destroy', $post->id), 'method' => 'delete')) !!}
                        {!! Form::token() !!}
                        {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>
    {!! $posts->links() !!}
@endsection
