@extends('layouts.app')
@section('cover')
@endsection
@section('content')
    <div class="container">

        <div class="row">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Create New Post</h1>
            </div>
        </div>
        <div class="row">
            <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group my-3">
                    <label for="title" class="form-label">Judul Artikel</label>
                    <input type="text" class="form-control" id="title" name="title"
                        placeholder="Masukkan judul artikel" required>
                </div>

                <div class="form-group mb-3">
                    <label for="slug" class="form-label">Slug</label>
                    <input type="text" class="form-control" id="slug" name="slug" readonly required>
                </div>

                {{-- <div class="form-group mb-3">
                    <label for="content" class="form-label">Konten</label>
                    <textarea id="content" class="form-control" name="content" style="min-height: 400px"></textarea>
                </div> --}}

                <div class="form-group mb-3">
                    <label for="content" class="form-label">Konten</label>
                    <input id="x" type="hidden" name="content">
                    <trix-editor input="x" style="min-height: 400px" required></trix-editor>
                </div>

                <div class="form-group my-3">
                    <label for="file-gambar">Image File</label><br>
                    <input type="file" class="form-control @error('image') is-invalid @enderror" id="file-gambar"
                        name="image" accept="image/*" required>
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
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

        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        });
    </script>
@endsection
