@extends('layout.master')
@section('title')
index</title>
@endsection
@section('content')
<h1>Hello</h1>

<div class="card">
	<div class="card-header">
		<div class="card-title">
			<a href="{{route('sliders.create')}}" class="btn btn-sm btn btn-info">CREATE</a>
		</div>
		<div class="card-body">
			<table class="table-striped">
				<thead>
					<tr>
						<th>ID</th>
						<th>Title</th>
						<th>Subtitle</th>
						<th>Price</th>
						<th>Link</th>
						<th>Image</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($sliders as $slider)
					<tr>
						<td scope="row">{{$loop->iteration}}</td>
						<td>{{$slider->title}}</td>
						<td>{{$slider->subtitle}}</td>
						<td>{{$slider->price}}</td>
						<td>{{$slider->link}}</td>
						<td>{{$slider->image}}</td>
						<!-- <td></td>-->
						<td>
							<a href="{{route('sliders.edit',$slider->id)}}" class="btn btn-info">Edit</a>
							<!-- <form action="{{route('sliders.destroy',$slider->id)}}" method="">
								@csrf
								<button type="submit"class="btn btn-danger">Delete</button>
							</form> -->
							<a href="{{route('sliders.destroy',$slider->id)}}" class="btn btn-info">Destroy</a>

						</td> 
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>






@endsection