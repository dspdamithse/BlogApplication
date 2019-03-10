@extends('layouts.app')


@section('content')

@if(count($errors)>0)
        <ul class="list-group">
            @foreach($errors->all() as $error)
                <li class="list-group-item text-danger">
                    {{$error}}
                </li>
            @endforeach
        </ul>
    @endif
	<div class="panel panel-default">
		<div class="panel-heading">
			Edit Your Profile
		</div>
		<div class="panel-heading">
			<form action="{{ route('user.profile.update') }}" method="post" enctype="multipart/form-data">
				{{ csrf_field() }}
				<div class="form-group">
					<label for="name">Username : </label>
					<input class="form-control" value="{{ $user->name }}" type="text" name="name">
				</div>
				<div class="form-group">
					<label for="name">Email : </label>
					<input class="form-control" value="{{$user->email}}" type="email" name="email">
				</div>
				<div class="form-group">
					<label for="name">New Password : </label>
					<input class="form-control" type="password" name="password">
				</div>	
				<div class="form-group">
					<label for="name">Profile Image : </label>
					<input class="form-control" type="file" name="avatar">
				</div>
				<div class="form-group">
					<label for="name">Facebook Profile : </label>
					<input class="form-control" value="{{$user->profile->facebook}}" type="text" name="facebook">
				</div>
				<div class="form-group">
					<label for="name">Youtube Profile : </label>
					<input class="form-control" value="{{$user->profile->youtube}}" type="text" name="youtube">
				</div>
				<div class="form-group">
					<label for="name">About Me : </label>
					<textarea class="form-control" name="about" id="about" cols="6" rows="5">{{ $user->profile->about }}</textarea>
				</div>
				<div class="form-group">
					<div class="text-left">
						<button class="btn btn-success" type="submit">Update Profite</button>
					</div>
				</div>		
			</form>
		</div>
	</div>

@stop