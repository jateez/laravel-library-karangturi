@extends('layouts.app')

@section('cover')
@endsection
@section('content')
    <div class="container">



        <div class="row gx-5 justify-content-center text-center">

            <h1 class="p-4" style="font-weight: bold">Publikasi</h1>



        </div>


        <div class="row">
            <div class="col">

                <div class="input-group mb-3">
                    <input type="text" class="form-control input-text border border-black rounded" placeholder="Search news"
                        aria-label="News name" aria-describedby="Search News">
                    <div class="input-group-append">
                        <button class="btn btn-info btn-lg border border-black shadow-lg"
                            style="background-color: # 53CAFD;" type="button">
                            <i class="fa fa-search" style="color: black; font-weight:500; font-style:normal;"> Cari</i>
                        </button>
                    </div>
                </div>
            </div>
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
                @foreach ($articles as $index => $article)
                    <div class="col">
                        <div class="card mb-4" style="height: 30em">
                            <img class="card-img-top" src="..." alt="Card image cap" style="height: 15em">
                            <div class="card-body">
                                <h5 class="card-title">{{ $article->title }}</h5>
                                <h6 class="card-subtitle mb-2 text-muted">
                                    By {{ $article->author }} on {{ $article->created_at->format('l, F j, Y') }}
                                </h6>
                                <p class="card-text">
                                <div class="trix-content">
                                    {{ Str::words($article->content, 100, '...') }}
                                </div>

                                </p>
                                <a href="{{ route('news.show', ['id' => $article->id, 'slug' => $article->slug]) }}"
                                    class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>

                    @if (($index + 1) % 4 == 0)
            </div>
            <div class="row g-4">
                @endif
                @endforeach
            </div>


        </div>
    @endsection
