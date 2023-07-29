@extends('layouts.app')

@section('cover')
@endsection

@section('css')
    @parent
@endsection
@section('content')
    {{-- Search Bar --}}
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

        <div class="row ms-auto" style="width:35%">
            <div class="col">
                <div class="input-group mb-5 py-3">
                    <input type="text" class="form-control input-text border border-black rounded"
                        placeholder="Cari Buku" aria-label="Book title" aria-describedby="Mencari buku pengguna">
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
                    @auth
                        <div class="col justify-content-end text-end edit-delete-container">
                            <a href="{{ route('books.create') }}" class="btn btn-outline-info"
                                style="color:black; border-width:3px;">
                                <span class="">Tambah Data Buku</span></a>
                        </div>
                    @endauth
                </div>

                {{-- Table --}}
                <div class="wrap table-responsive" style="max-height: 500px; overflow-y: auto;">
                    <table class="table table-bordered table-hover table-rounded">
                        <thead class="text-center" style="position: sticky; top: 0; background-color: #53CAFD; z-index: 1;">
                            <tr>
                                <th scope="col" style="width: 50px;background-color: #53CAFD">No</th>
                                <th scope="col" style="width: 354px;background-color: #53CAFD">Judul Buku</th>
                                <th scope="col" style="width: 300px;background-color: #53CAFD">Pengarang</th>
                                <th scope="col" style="width: 100px; background-color: #53CAFD">Tahun Terbit</th>
                                <th scope="col" style="width: 300px;background-color: #53CAFD">Penerbit</th>
                                <th scope="col" style="width: 100px; background-color: #53CAFD">Jumlah</th>
                                @auth
                                    <th scope="col" style="width: 110px; background-color: #53CAFD"
                                        class="edit-delete-container">Actions</th>
                                @endauth
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($books as $key => $book)
                                <tr class="clickable-row" data-href="{{ route('books.show', ['id' => $book->id]) }}">
                                    <th scope="row">{{ $key + 1 }}</th>
                                    <td>{{ $book->title }}</td>
                                    <td>{{ $book->author }}</td>
                                    <td>{{ $book->publication_year }}</td>
                                    <td>{{ $book->publisher }}</td>
                                    <td>{{ $book->stock }}</td>
                                    @auth
                                        <td class="edit-delete-container" style="width: 110px">
                                            <div class="d-flex justify-content-around">
                                                <a href="{{ route('books.edit', ['id' => $book->id]) }}"
                                                    class="btn btn-outline-warning btn-sm">Edit</a>
                                                <form action="{{ route('books.destroy', ['id' => $book->id]) }}" method="POST"
                                                    onsubmit="return confirmDelete()">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-danger btn-sm">Delete</button>
                                                </form>
                                            </div>
                                        </td>
                                    @endauth
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const rows = document.querySelectorAll(".clickable-row");
            rows.forEach(row => {
                row.addEventListener("click", function() {
                    const href = this.dataset.href;
                    if (href) {
                        window.location.href = href;
                    }
                });
            });
        });

        function confirmDelete() {
            return confirm('Are you sure you want to delete this book row data?'); // The confirmation message
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
