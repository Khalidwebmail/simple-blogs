@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">Create new post</div>

    <div class="card-body">
		<form action="{{route('post.store')}}" method="post">
			{{csrf_field()}}
			<div class="form-group">
				<label for="title">Title</label>
				<input type="text" name="title" class="form-control">
			</div>

			<div class="form-group">
				<label for="feature">Featute image</label>
				<input type="file" name="feature" class="form-control">
			</div>

			<div class="form-group">
				<label for="content">Content</label>
				<textarea name="content" cols="5" rows="5" class="form-control"></textarea>
			</div>
	
			<div class="form-group">
				<div class="text-center">
					<input type="submit" class="btn btn-success" value="Save">
				</div>
			</div>
		</form>
    </div>
</div>
@endsection