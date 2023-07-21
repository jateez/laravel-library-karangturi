@extends('layouts.app')
@section('content')
    <div class="container">

        <div class="row">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Create New Post</h1>
            </div>
        </div>
        <div class="row">
            @csrf
            <form action="{{ route('educational.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group my-3">
                    <label for="title" class="form-label">Judul Artikel</label>
                    <input type="text" class="form-control" id="title" name="title"
                        placeholder="Masukkan judul artikel">
                </div>

                <div class="form-group mb-3">
                    <label for="slug" class="form-label">Slug</label>

                    <input type="text" class="form-control" id="slug" name="slug" readonly>
                </div>

                <div class="form-group mb-3">
                    <label for="content" class="form-label">Materi</label>
                    <textarea id="content" class="form-control" name="content" style="min-height: 400px"></textarea>
                </div>

                <div class="form-group my-3">
                    <label for="file-gambar">Image File</label> <br>
                    <input type="file" class="form-control-file" id="file-gambar" name="image">
                </div>

                <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>
        </div>
    </div>

    <script>
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
    </script>
@endsection
