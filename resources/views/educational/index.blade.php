@extends('layouts.app')

@section('cover')
@endsection
@section('content')
    <div class="container">

        {{-- Switch Edit Mode --}}
        @auth
            <div class="row">
                <div class="col d-flex justify-content-end align-items-center">
                    <div class="form-check form-switch" style="display: flex; align-items: center;">
                        <input class="form-check-input switch-edit-mode" type="checkbox" role="switch" style="font-size: 25px">
                        <label class="form-check-label ms-2 pt-2" for="switchEditMode">Edit Mode</label>
                    </div>
                </div>
            </div>
        @endauth


        <div class="row gx-5 justify-content-center text-center">

            <h1 class="p-4" style="font-weight: bold">Bacaan Edukasi</h1>



        </div>

        <div class="row">
            <div class="col">
                <form action="{{ route('educational.search') }}" method="GET" class="w-100 d-flex">
                    <div class="input-group flex-grow-1">
                        <input type="text" class="form-control input-text border border-black rounded"
                            name="search_query" placeholder="Search article" aria-label="article name"
                            aria-describedby="Search Article" value="{{ $searchQuery ?? '' }}">
                        <button class="btn btn-info btn-lg border border-black shadow-lg"
                            style="background-color: # 53CAFD;" type="submit">
                            <i class="fa fa-search" style="color: black; font-weight: 500; font-style: normal;">
                                Cari</i>
                        </button>
                    </div>
                </form>
            </div>
        </div>




        <div class="row g-4">

            <div class="row g-4 mx-0 px-0 my-5">
                <style>
                    .custom-card-style {
                        height: 100%;
                    }

                    .card-image-container {
                        max-height: 15em;
                        height: 15em;
                    }

                    .card-content-container {
                        max-height: 10em;
                        overflow-y: auto;
                    }

                    .card-link {
                        text-decoration: none;
                        color: inherit;
                    }

                    .custom-card-style {
                        border-radius: 15px;
                        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
                        transition: box-shadow 0.3s;
                    }

                    .custom-card-style:hover {
                        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
                    }
                </style>

                @foreach ($articles as $index => $article)
                    <div class="col">

                        <a href="{{ route('educational.show', ['id' => $article->id, 'slug' => $article->slug]) }}"
                            class="card-link">
                            <div class="card custom-card-style">
                                <div class="card-image-container overflow-hidden">
                                    @if ($article->image)
                                        <img src="{{ asset('storage/' . $article->image) }}" class="card-img-top"
                                            alt="Article Image">
                                    @else
                                        <img src="https://source.unsplash.com/1200400?" class="card-img-top"
                                            alt="{{ $article->title }}">
                                    @endif
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title" style="font-weight:bold">{{ $article->title }}</h5>
                                    <h6 class="card-subtitle my-2 text-muted">
                                        By {{ $article->author }} on {{ $article->created_at->format('l, F j, Y') }}
                                    </h6>
                                    <div class="card-content-container">
                                        <div class="trix-content">
                                            {{ Str::limit(strip_tags($article->content), 200, '...') }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>

                        {{-- <a href="{{ route('educational.show', ['id' => $article->id, 'slug' => $article->slug]) }}"
                            class="card-link">
                            <div class="card custom-card-style" style="height: 35em; transition: box-shadow 0.3s;">
                                <div class="overflow-hidden" style="max-height: 15em; height:15em">
                                    @if ($article->image)
                                        <img src="{{ asset('storage/' . $article->image) }}" class="card-img-top"
                                            alt="Article Image">
                                    @else
                                        <img src="https://source.unsplash.com/1200400?" class="card-img-top"
                                            alt="{{ $article->title }}">
                                    @endif
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title" style="font-weight:bold">{{ $article->title }}</h5>
                                    <h6 class="card-subtitle my-2 text-muted">
                                        By {{ $article->author }} on {{ $article->created_at->format('l, F j, Y') }}
                                    </h6>
                                    <p class="card-text text-justify" style="max-height:15em; height:15em">
                                    <div class="trix-content">
                                        {!! $article->content !!}
                                        {{ Str::limit($article->content, 64, '...') }}
                                        {{ Str::limit(strip_tags($article->content), 64, '...') }}
                                    </div>
                                    </p>
                                </div>
                            </div>
                        </a> --}}
                        @auth
                            <div class="edit-delete-container">
                                <div class="card-footer">
                                    <div class="d-inline-flex mt-1 justify-content-center text-center">
                                        <div class="" style=""><a
                                                href="{{ route('educational.edit', ['id' => $article->id]) }}"
                                                class="btn btn-outline-warning btn-sm" style="width: 60px">Edit</a>
                                        </div>
                                        <div class="mx-3">
                                            <form action="{{ route('educational.destroy', ['id' => $article->id]) }}"
                                                method="POST" onsubmit="return confirmDelete()">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline-danger btn-sm"
                                                    style="width: 60px">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endauth
                    </div>

                    @if (($index + 1) % 4 == 0)
            </div>

            <div class="row g-4 mx-0 px-0 my-5">
                @endif
                @endforeach
            </div>
            @auth
                <div class="row mt-4 mb-5 edit-delete-container">
                    <div class="col justify-content-end text-end mt-5">
                        <a href="{{ route('educational.create') }}" class="btn btn-outline-info"
                            style="color:black; border-width:3px;">
                            <span class="">Buat Artikel Baru</span></a>
                    </div>
                </div>
            @endauth
            <div class="d-flex flex-column justify-content-center align-items-center mt-4">
                {{ $articles->links() }}
            </div>

        </div>

        <script>
            function confirmDelete() {
                return confirm('Are you sure you want to delete this article?'); // The confirmation message
            }

            document.addEventListener('DOMContentLoaded', function() {
                const switchEditMode = document.querySelector('.switch-edit-mode');
                const editDeleteContainers = document.querySelectorAll('.edit-delete-container');

                switchEditMode.addEventListener('change', function() {
                    if (this.checked) {
                        editDeleteContainers.forEach(container => {
                            container.style.display = 'block';
                        });
                    } else {
                        editDeleteContainers.forEach(container => {
                            container.style.display = 'none';
                        });
                    }
                });

                // Initially hide the containers when the page loads
                editDeleteContainers.forEach(container => {
                    container.style.display = 'none';
                });
            });
        </script>
    @endsection
