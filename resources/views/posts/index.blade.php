@extends('layouts.master')

@section('content')
    <h2> Posts list </h2>
    <table class="table table-striped">
        <tr>
            <th>
                title
            </th>
        </tr>

        @foreach ($posts as $key => $post)
            <tr>
                <td>
                    {{ $post->title }}
                </td>
            </tr>
        @endforeach
    </table>

@endsection
