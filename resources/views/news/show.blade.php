@extends('layouts.app')
@section('cover')
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center my-5">
            <div class="col-md-8">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <h2 class="card-title mb-4" style="font-weight: bold; font-size: 2rem;">{{ $article->title }}</h2>
                        <p class="card-subtitle mb-3 text-muted">{{ $article->author }}
                            | {{ $article->created_at->format('l, F j, Y') }}</p>

                        <div class="my-5">
                            @if ($article->image)
                                <img src="{{ asset('storage/' . $article->image) }}" class="img-fluid rounded"
                                    alt="{{ $article->title }}">
                            @endif
                        </div>

                        <div class="card-text mb-4">
                            <div class="trix-content" style="line-height: 1.6; font-size: 1rem;">
                                {!! $article->content !!}
                            </div>
                        </div>

                        <div class="text-center mt-3">
                            <a href="{{ route('news.index') }}" class="btn btn-outline-primary">Back to Articles</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
