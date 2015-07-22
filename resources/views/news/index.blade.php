
@extends('template')
@section('title') Notícia @endsection
@section('content')
    <div class="content">
    	<div class="news">
			<h2>Notícias</h2>
    		@foreach($news as $key => $row)
	    		<div class="row row-news">
	    			<div class="col-md-3"><img src="{{ asset($row->img) }}" alt="" class="img-responsive"></div>
	    			<div class="col-md-9">
	    				<h2>{{$row->title}}</h2>
	    				<p>{{$row->excerpt}}</p>
	    				<div class="row">
	    					<div class="col-md-12 text-right">
	    						<a href="/news/{{$key}}" class="btn btn-primary" title="Ler Notícia">Ler Notícia</a>
	    					</div>
	    				</div>
	    			</div> 
	    		</div>
	    	@endforeach
    	</div>
    </div>
@endsection