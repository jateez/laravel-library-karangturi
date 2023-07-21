@extends('layouts.app')

@section('cover')
@endsection

@section('css')
    @parent
@endsection
@section('content')
    {{-- Search Bar --}}
    <div class="container">
        <div class="row ms-auto" style="width:35%">
            <div class="col">
                <div class="input-group mb-5 py-3">
                    <input type="text" class="form-control input-text border border-black rounded" placeholder="Cari Buku"
                        aria-label="Book title" aria-describedby="Mencari buku pengguna">
                    <div class="input-group-append">
                        <button class="btn btn-info btn-lg border border-black shadow-lg"
                            style="background-color: # 53CAFD;" type="button">
                            <i class="fa fa-search" style="color: black; font-weight:500; font-style:normal;"> Cari</i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col">
                        <h6 class="heading-section mt-0 mb-4" style="font-weight: bolder; font-size:2em">Hasil Pencarian
                        </h6>
                    </div>
                    <div class="col justify-content-end text-end"> <a href="{{ route('news.create') }}"
                            class="btn btn-outline-info" style="color:black; border-width:3px;">Tambah Data Buku</a>
                    </div>
                </div>

                {{-- Table --}}
                <div class="wrap table-responsive">
                    <table class="table table-bordered table-hover table-rounded">
                        <thead class="text-center">
                            <tr>
                                <th scope="col" style="width: 50px;background-color: #53CAFD">No</th>
                                <th scope="col" style="background-color: #53CAFD">Judul Buku</th>
                                <th scope="col" style="background-color: #53CAFD">Pengarang</th>
                                <th scope="col" style="width: 100px; background-color: #53CAFD">Tahun Terbit</th>
                                <th scope="col" style="background-color: #53CAFD">Penerbit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($books as $key => $book)
                                <tr>
                                    <th scope="row">{{ $key + 1 }}</th>
                                    <td>{{ $book->title }}</td>
                                    <td>{{ $book->author }}</td>
                                    <td>{{ $book->publication_year }}</td>
                                    <td>{{ $book->publisher }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
