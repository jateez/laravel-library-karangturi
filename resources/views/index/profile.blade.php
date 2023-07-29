@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <section class="vh-100">
                <div class="container py-5 h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-sm-6">
                            <div class="card" style="border-radius: 15px;">
                                <div class="card-body text-center">
                                    <div class="mt-3 mb-4">
                                        <img src="{{ asset('images/profile-picture.png') }}"
                                            class="rounded-circle img-fluid" style="width: 100px;" />
                                    </div>
                                    <h4 class="mb-2">{{ Auth::user()->name }}</h4>
                                    {{ Auth::user()->email }}</p>
                                    {{-- <div class="mb-4 pb-2">
                                        <button type="button" class="btn btn-outline-primary btn-floating">
                                            <i class="bi bi-facebook"></i>
                                        </button>
                                        <button type="button" class="btn btn-outline-primary btn-floating">
                                            <i class="bi bi-twitter"></i>
                                        </button>
                                        <button type="button" class="btn btn-outline-primary btn-floating">
                                            <i class="bi bi-skype"></i>
                                        </button>
                                    </div> --}}
                                    {{-- <a href="{{ route('tasks.index') }}" class="btn btn-primary btn-rounded btn-lg"> --}}
                                        {{-- See My Tasks --}}
                                    {{-- </a> --}}
                                    <div class="d-flex justify-content-between text-center align-items-center mt-5 mb-2">
                                        <div>
                                            <p class="mb-2 h5">{{ $newsArticleCount }}</p>
                                            <a href="{{route('news.create')}}" class="btn btn-outline-info btn-rounded">Buat Berita Baru</a>
                                            {{-- <p class="text-muted mb-0">Total Group</p> --}}
                                        </div>
                                        <div class="px-3">
                                            <p class="mb-2 h5">{{ $educationalArticleCount }}</p>
                                            <a href="{{route('educational.create')}}" class="btn btn-outline-info btn-rounded">Buat Bacaan Edukasi Baru</a>
                                            {{-- <p class="text-muted mb-0">Group Tasks</p> --}}
                                        </div>
                                        <div>
                                            <p class="mb-2 h5">{{ $bookCount }}</p>
                                            <a href="{{route('books.create')}}" class="btn btn-outline-info btn-rounded">Tambahkan Katalog Buku</a>
                                            {{-- <p class="text-muted mb-0">Individual Tasks</p> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
