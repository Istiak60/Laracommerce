@extends('layout.master')
@section('title')
Create</title>
@endsection
@section('content')
<div class="card">
	<div class="card-header">
		<div class="card-title">
			Update a Slider
			<a href="{{route('sliders.index')}}" class="btn btn-sm btn btn-info">INDEX</a>
		</div>
		<div class="card-body">
			<form action="{{route('sliders.update',$slider->id)}}" method="post">
				@csrf
				@method('PUT')

				</div>
				<div class="form-group">
					<label for="col-md-10 control-lable">Title</label>
					<div class="col-md-8">
						<input type="text" name="title" value="{{$slider->title}}" placeholder="Enter your title" class ="form-control input-md"/>
					</div>

				</div>	<div class="form-group">
					<label for="col-md-10 control-lable">SubTitle</label>
					<div class="col-md-8">
						<input type="text" name="subtitle" value="{{$slider->subtitle}}" placeholder="Enter your subtitle" class ="form-control input-md"/>
					</div>

				</div>	<div class="form-group">
					<label for="col-md-10 control-lable">Price</label>
					<div class="col-md-8">
						<input type="text" name="price" value="{{$slider->price}}" placeholder="Enter price" class ="form-control input-md"/>
					</div>

				</div>	<div class="form-group">
					<label for="col-md-10 control-lable">Link</label>
					<div class="col-md-8">
						<input type="text" name="link" value="{{$slider->link}}" placeholder="Enter your Link" class ="form-control input-md"/>
					</div>

				</div>
				<div class="form-group">
					<label for="col-md-10 control-lable">Image</label>
					<div class="col-md-8">
						<input type="text" name="image" value="{{$slider->image}}" placeholder="Enter your Image" class ="form-control input-md"/>
					</div>

				</div>
				<div class="form-group">
				
					<div class="col-md-8">
					<button type="submit" class="btn btn-success">Just do It</button>
				</div>

				</div>

			</form>
		</div>
	</div>
</div>
@endsection


