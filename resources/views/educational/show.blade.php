@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title mb-3" style="font-weight: bold">{{ $article->title }}</h2>
                        <p class="card-subtitle mb-4"> By {{ $article->author }} on
                            {{ $article->created_at->format('l, F j, Y') }}</p>
                        <p class="card-text text-justify" style="min-height: 400px">{{ $article->content }}</p>
                        {{-- <p class="card-text"><small class="text-muted">Author: {{ $article->author }}</small></p> --}}
                        @if ($article->image)
                            <img src="{{ asset($article->image) }}" class="img-fluid" alt="Article Image">
                        @endif
                    </div>
                </div>
                <div class="text-center mt-3">
                    <a href="{{ route('news.index') }}" class="btn btn-outline-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
