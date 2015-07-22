@extends('template')
@section('content')
    <div class="content">
    	<div class="home text-center">
    		<img src="{{ asset($img) }}" alt="">
        	<div class="title text-center">{{$title}}</div>
        	<div class="title text-center">{{$subTitle}}</div>
    	</div>
    </div>
@endsection