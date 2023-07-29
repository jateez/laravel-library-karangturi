@extends('layouts.app')
@section('cover')
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title" style="font-weight: bold; font-size: 24px;">{{ $book->title }}</h2>
                        <p class="card-subtitle mb-3">By {{ $book->author }} on
                            {{ $book->publication_year }}</p>
                        <hr>

                        {{-- Book Details --}}
                        <div class="book-details">
                            <p><strong>Author:</strong> {{ $book->author }}</p>
                            <p><strong>Publisher:</strong> {{ $book->publisher }}</p>
                            <p><strong>Stock:</strong> {{ $book->stock }}</p>
                        </div>
                        {{-- End of Book Details --}}

                        @if ($book->image)
                            <div class="book-image">
                                <img src="{{ asset($book->image) }}" class="img-fluid" alt="Book Image">
                            </div>
                        @endif
                    </div>
                </div>
                <div class="text-center mt-3">
                    <a href="{{ route('books.index') }}" class="btn btn-outline-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
