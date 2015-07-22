
@extends('template')
@section('title') {{$news->title}} @endsection
@section('content')
    <div class="content">
    	<div class="news news-show">
			<h2>{{$news->title}}</h2>
    		<div class="row row-news">
    			<div class="col-md-3"><img src="{{ asset($news->img) }}" alt="" class="img-responsive"></div>
    			<div class="col-md-9">
    				{!!$news->content!!}
    			</div> 
    		</div>
    	</div>
    </div>
@endsection