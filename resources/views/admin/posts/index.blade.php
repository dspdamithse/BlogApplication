@extends('layouts.app')

@section('content')
    <table class="table table-hover">
        <thead>
            <th>Image</th>
            <th>Title</th>
            <th>Edit</th>
            <th>Trash Posts</th>
        </thead> 
        <tbody>
        @if($posts->count()>0)
            @foreach($posts as $post)
                <tr>
                    <td><img src="{{$post->featured}}" alt="{{$post->title}}" width="100px" height="50px"></td>
                    <td>{{$post->title}}</td>
                    <td>
                        <a class="btn btn-xs btn-info" href="{{route('post.edit', ['id'=>$post->id])}}">Edit</a>
                    <td>
                    <a class="btn btn-xs btn-danger" href="{{route('post.delete', ['id'=>$post->id])}}">Trash</a>
                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <th colspan="5">No Posts Alive Yet</th>
            </tr>
        @endif    
        </tbody>   
    </table>
@stop

