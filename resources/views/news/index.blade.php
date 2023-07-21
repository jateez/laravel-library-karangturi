@extends('layouts.app')

@section('cover')
@endsection
@section('content')
    <div class="container">



        <div class="row gx-5 justify-content-center text-center">

            <h1 class="p-4" style="font-weight: bold">News</h1>



        </div>

        <div class="row">
            <form action="{{ route('news.search') }}" method="GET" class="w-100 d-flex">
                <div class="input-group flex-grow-1">
                    <input type="text" class="form-control input-text border border-black rounded" name="search_query"
                        placeholder="Search article" aria-label="article name" aria-describedby="Search Article"
                        value="{{ $searchQuery ?? '' }}">
                    <button class="btn btn-info btn-lg border border-black shadow-lg" style="background-color: # 53CAFD;"
                        type="submit">
                        <i class="fa fa-search" style="color: black; font-weight: 500; font-style: normal;">
                            Cari</i>
                    </button>
                </div>
            </form>
        </div>




        <div class="row g-4">
            {{-- 1st side --}}
            {{-- <div class="col">
                <div class="card" style="height: 30em">
                    <img class="card-img-top" src="..." alt="Card image cap" style="height: 15em">
                    <div class="card-body">
                        <h5 class="card-title">{{ $article->title }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">By {{ $article->author }} on {{ $article->created_at->format('l, F j, Y') }}</h6>
                        <p class="card-text">
                            {{ Str::words($article->content, 100, '...') }}
                        </p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div> --}}
            {{-- 2nd side --}}
            {{-- <div class="col">
                <div class="card" style="height: 30em">
                    <img class="card-img-top" src="..." alt="Card image cap" style="height: 15em">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle py-2">Card subtitle</h6>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.
                        </p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div> --}}
            {{-- 3rd Side --}}
            {{-- <div class="col">
                <div class="card" style="height: 30em">
                    <img class="card-img-top" src="..." alt="Card image cap" style="height: 15em">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle py-2">By Jawir on July 26, 2023</h6>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This card has even longer content than the first to show that equal height
                            action.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>

            </div> --}}

            {{-- 4th side --}}
            {{-- <div class="col">
                <div class="card" style="height: 30em">
                    <img class="card-img-top" src="..." alt="Card image cap" style="height: 15em">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle py-2">By Jawir on July 26, 2023</h6>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This card has even longer content than the first to show that equal height
                            action.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>

            </div>
 --}}


            <div class="row g-4">
                <style>
                    .card-link {
                        text-decoration: none;
                        color: inherit;
                    }

                    .custom-card-style:hover {
                        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
                    }
                </style>

                @foreach ($articles as $index => $article)
                    <div class="col">
                        <a href="{{ route('news.show', ['id' => $article->id, 'slug' => $article->slug]) }}"
                            class="card-link">
                            <div class="card custom-card-style" style="height: 35em; transition: box-shadow 0.3s;">
                                <div class="overflow-hidden" style="max-height: 15; height:15em">
                                    <img class="card-img-top" src="..." alt="Card image cap">
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title" style="font-weight:bold">{{ $article->title }}</h5>
                                    <h6 class="card-subtitle my-2 text-muted">
                                        By {{ $article->author }} on {{ $article->created_at->format('l, F j, Y') }}
                                    </h6>
                                    <p class="card-text text-justify" style="max-height:17em; height:17em">
                                        {{ Str::limit($article->content, 64, '...') }}
                                        {{-- <div class="trix-content"> --}}
                                        {{-- </div> --}}
                                    </p>
                                </div>
                            </div>
                        </a>


                    </div>

                    @if (($index + 1) % 4 == 0)
            </div>
            <div class="row g-4">
                @endif
                @endforeach
            </div>

            <div class="d-flex flex-column justify-content-center align-items-center mt-4">
                {{ $articles->links() }}
            </div>

        </div>
    @endsection
