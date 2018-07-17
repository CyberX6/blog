@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                <th>
                    Image name
                </th>
                <th>
                    Title
                </th>
                <th>
                    Edit
                </th>
                <th>
                    Restore
                </th>
                <th>
                    Delete
                </th>
                </thead>
                <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td><img src="{{$post->featured}}" style="width: 50px; height: 50px;" alt="{{$post->title}}"></td>
                        <td>{{$post->title}}</td>
                        <td>Edit</td>
                        <td><a href="{{route('posts.restore', ['id' => $post->id])}}" class="btn btn-success">Restore</a></td>
                        <td><a href="{{route('posts.kill', ['id' => $post->id])}}" class="btn btn-danger">Destroy</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop