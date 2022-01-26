@extends('layout.master')
@section('title')
Create</title>
@endsection
@section('content')
<div class="card">
	<div class="card-header">
		<div class="card-title">
			Details of a Slider
			<a href="{{route('sliders.index')}}" class="btn btn-sm btn btn-info">INDEX</a>
		</div>
		<div class="card-body">
	
			<h1>{{$slider->title}}</h1>
			<h2></h2>
			<h3></h3>
			<h4></h4>
		</div>
	</div>
</div>
@endsection


