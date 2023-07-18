@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">{{ $article->title }}</h2>
                        <p class="card-text">{{ $article->content }}</p>
                        <p class="card-text"><small class="text-muted">Author: {{ $article->author }}</small></p>
                        @if ($article->image)
                            <img src="{{ asset($article->image) }}" class="img-fluid" alt="Article Image">
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
