@extends('layouts.app')
@section('content')
    <div class="container">

        <div
            class="row d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <div class="col">
                <div class="">
                    <h1 class="h2">Add New Book</h1>
                </div>
            </div>
            {{-- <div class="col justify-content-end text-end"> <a href="{{ route('news.create') }}" class="btn btn-outline-info"
                    style="color:black; border-width:3px;">Edit Buku</a>
            </div> --}}
        </div>
        <div class="row">
            <form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group my-3">
                    <label for="title" class="form-label">Judul Buku</label>
                    <input type="text" class="form-control" id="title" name="title"
                        placeholder="Masukkan judul buku">
                </div>
                <div class="form-group my-3">
                    <label for="author" class="form-label">Penulis</label>
                    <input type="text" class="form-control" id="author" name="author"
                        placeholder="Masukkan penulis buku">
                </div>
                <div class="form-group my-3">
                    <label for="publication_year" class="form-label">Tahun Terbit</label>
                    <input type="text" class="form-control" id="publication_year" name="publication_year"
                        placeholder="Masukkan tahun buku terbit" pattern="[0-9]{3,4}" title="Masukkan hanya 4 digit angka">
                </div>

                <div class="form-group my-3">
                    <label for="publisher" class="form-label">Penerbit</label>
                    <input type="text" class="form-control" id="publisher" name="publisher"
                        placeholder="Masukkan penerbit buku">
                </div>
                <div class="form-group my-3">
                    <label for="stock" class="form-label">Stok</label>
                    <input type="text" class="form-control" id="stock" name="stock"
                        placeholder="Masukkan banyak stok buku yang ditambahkan" pattern="[0-9]+"
                        title="Masukkan angka yang valid">
                </div>

                {{-- 
                <div class="form-group mb-3">
                    <label for="slug" class="form-label">Slug</label>

                    <input type="text" class="form-control" id="slug" name="slug" readonly>
                </div> --}}

                {{-- <div class="form-group mb-3">
                    <label for="content" class="form-label">Materi</label>
                    <textarea id="content" class="form-control" name="content" style="min-height: 400px"></textarea>
                </div> --}}

                {{-- <div class="form-group my-3">
                    <label for="file-gambar">Image File</label> <br>
                    <input type="file" class="form-control-file" id="file-gambar" name="image">
                </div> --}}



                <button type="submit" class="btn btn-primary mt-3">Tambahkan</button>
            </form>
        </div>
    </div>

    {{-- <script>
        const title = document.querySelector("#title");
        const slug = document.querySelector("#slug");

        title.addEventListener("keyup", function() {
            let preslug = title.value;
            preslug = preslug.replace(/ /g, "-");
            slug.value = preslug.toLowerCase();
        });

        const contentInput = document.querySelector("#content");

        contentInput.addEventListener("keypress", function(event) {
            if (event.keyCode === 13) {
                event.preventDefault(); // Prevent the form from submitting
                contentInput.value += "\n"; // Add a new line to the content
            }
        });
    </script> --}}
@endsection
