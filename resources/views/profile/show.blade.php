{{-- @extends('layouts.app')
@section('cover')
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <section class="vh-100">
                <div class="container py-5 h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-sm-6">
                            <div class="card shadow border-black" style="border-radius: 15px;">
                                <div class="card-body text-center">
                                    <div class="mt-3 mb-4">
                                        <img src="{{ asset('images/profile-picture.png') }}"
                                            class="rounded-circle img-fluid" style="width: 100px;" />
                                    </div>
                                    <h4 class="mb-2">{{ Auth::user()->name }}</h4>
                                    {{ Auth::user()->email }}</p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
        </div>
    </div>
@endsection
 --}}



@extends('layouts.app')

@section('cover')
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            {{-- <section class="vh-100"> --}}
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-sm-6">
                        <div class="card shadow border-black mb-5" style="border-radius: 15px;">
                            <div class="card-body text-center">
                                <div class="mt-3 mb-4">
                                    <img src="{{ asset('images/profile-picture.png') }}" class="rounded-circle img-fluid"
                                        style="width: 100px;" />
                                </div>
                                <h4 class="mb-2">{{ Auth::user()->name }}</h4>
                                {{ Auth::user()->email }}</p>

                                <div class="d-flex justify-content-between text-center align-items-center mt-5 mb-2">
                                    <div>
                                        <p class="mb-2 h5">{{ $newsArticleCount }}</p>
                                        <p class="text-muted mb-3">Total Berita</p>
                                        <a href="{{ route('news.create') }}" class="btn btn-outline-info btn-rounded">Buat
                                            Berita Baru</a>

                                    </div>
                                    <div class="px-3">
                                        <p class="mb-2 h5">{{ $educationalArticleCount }}</p>
                                        <p class="text-muted mb-3">Total Bacaan Edukasi</p>
                                        <a href="{{ route('educational.create') }}"
                                            class="btn btn-outline-info btn-rounded">Buat Bacaan Edukasi Baru</a>

                                    </div>
                                    <div>
                                        <p class="mb-2 h5">{{ $bookCount }}</p>
                                        <p class="text-muted mb-3">Total Data Buku</p>
                                        <a href="{{ route('books.create') }}"
                                            class="btn btn-outline-info btn-rounded">Tambahkan Katalog Buku</a>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- New Row with FAQ Card -->
                <div class="row mt-5">
                    <div class="col">
                        <div class="card shadow border-black" style="border-radius: 15px;">
                            <div class="card-body">
                                <h5 class="card-title text-center">Frequently Asked Questions</h5>
                                <div class="accordion" id="faqAccordion">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                Cara Membuat Artikel?
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                            aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                Silakan menyaksikan video berikut untuk tutorial pembuatan artikel baru:
                                                <span> <a href="https://bit.ly/Buat-Artikel-Baru-Lib">Video</a></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseTwo" aria-expanded="true"
                                                aria-controls="collapseTwo">
                                                Cara Menambah Data Buku?
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse show"
                                            aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">

                                                Silakan menyaksikan video berikut untuk tutorial penambahan data buku baru:
                                                <span> <a href="https://bit.ly/Buat-Data-Buku-Baru-Lib">Video</a></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseThree" aria-expanded="true"
                                                aria-controls="collapseThree">
                                                Cara Mengubah Data Artikel/Buku?
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse show"
                                            aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">

                                                Silakan menyaksikan video berikut untuk tutorial pengubahan data artikel
                                                atau buku:
                                                <span> <a href="https://bit.ly/Edit-Data-Artikel-Lib">Video</a></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingFour">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseFour" aria-expanded="true"
                                                aria-controls="collapseFour">
                                                Cara Menghapus Data Artikel/Buku?
                                            </button>
                                        </h2>
                                        <div id="collapseFour" class="accordion-collapse collapse show"
                                            aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">

                                                Silakan menyaksikan video berikut untuk tutorial penghapusan data artikel
                                                atau buku:
                                                <span> <a href="https://bit.ly/Hapus-Data-Artikel-Lib">Video</a></span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Add more FAQ items here -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of New Row with FAQ Card -->

            </div>
            {{-- </section> --}}
        </div>
    </div>
@endsection
