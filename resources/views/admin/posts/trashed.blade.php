@extends('layouts.app')

@section('content')
    <table class="table table-hover">
        <thead>
            <th>Image</th>
            <th>Title</th>
            <th>Restore</th>
            <th>Destroy</th>
        </thead> 
        <tbody>
            @if($posts->count() > 0)
                @foreach($posts as $post)
                    <tr>
                        <td><img src="{{$post->featured}}" alt="{{$post->title}}" width="100px" height="50px"></td>
                        <td>{{$post->title}}</td>
                        <td>
                            <a class="btn btn-xs btn-success" href="{{route('posts.restore', ['id'=>$post->id])}}">Restore</a>
                        </td>
                        <td>
                            <a class="btn btn-xs btn-danger" href="{{route('posts.burn', ['id'=>$post->id])}}">Destroy</a>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <th colspan="5">No Trashed Posts</th>
                </tr>
            @endif
        </tbody>   
    </table>
@stop

