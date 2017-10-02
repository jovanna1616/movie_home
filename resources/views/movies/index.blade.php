@extends('layouts.master')

@section('content')
@foreach($movies as $movie)
	<div class="col-md-8">
		<h1>ALL MOVIES</h1>
        <!-- Blog Post -->
        <div class="card mb-4">
	        <div class="card-body">
	            <h2 class="card-title">Title: {{ $movie->title }}</h2>
	            <p>Genre: {{ $movie->genre }}</p>
	            <p>Director: {{ $movie->director }}</p>
	            <p>Year of publishing: {{ $movie->year }}</p>
	            <p class="card-text">{{ substr($movie->storyline, 0, 100) }}...</p>
	            <a href="{{ route('single-movie', ['id' => $movie->id]) }}" class="btn btn-primary">Read More &rarr;</a>     
	        </div>
	        <div class="card-footer text-muted">
		        {{ $movie->created_at->diffForHumans() }} by
		        <a href="#">Start Bootstrap</a>
	        </div>	        
 		</div>		
    </div>
    @endforeach
@endsection