@extends('layouts.app')

@section('cover')
@endsection

@section('content')
    <div class="container">
        <div class="row text-center justify-content-center align-items-center border border-black rounded shadow my-4"
            style="padding:0%; margin:0%; height: 15em; max-height:300px;background-color:deepskyblue;">
            <h2 class="display-4 text-white" style="font-weight: bold;">Frequently Asked Questions</h2>
        </div>

        <!-- New Row with FAQ Card -->
        <div class="row mt-5">
            <div class="col">
                <div class="card shadow border-black" style="border-radius: 15px;">
                    <div class="card-body">
                        <h5 class="card-title"> &nbsp;</h5>
                        <div class="accordion" id="faqAccordion">


                            <style>
                                .accordion-item {
                                    border: 1px solid #ddd;
                                    /* Add border */
                                    border-radius: 8px;
                                    /* Rounded corners */
                                    margin-bottom: 10px;
                                    /* Add margin between accordion items */
                                    border-collapse: separate;
                                }

                                /* Add some padding to the accordion body */
                                .accordion-body {
                                    padding: 10px;
                                }
                            </style>

                            <!-- Wrap the accordion inside a container for better spacing -->
                            <div class="container mt-4">
                                <div class="accordion" id="faqAccordion">

                                    <!-- First Accordion Item -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                aria-expanded="false" aria-controls="collapseOne">
                                                Siapa saja yang dapat menjadi anggota Perpustakaan Ki Hadjar Dewantara?
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse"
                                            aria-labelledby="headingOne">
                                            <div class="accordion-body">
                                                Seluruh Warga Desa Karangturi dapat menjadi anggota Perpustakaan Ki Hadjar
                                                Dewantara, tetapi
                                                keanggotaan terbuka bagi semua orang yang memiliki minat terhadap literasi.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseTwo" aria-expanded="false"
                                                aria-controls="collapseTwo">
                                                Bagaimana cara menjadi anggota Perpustakaan Ki Hadjar Dewantara?
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                            aria-labelledby="headingTwo">
                                            <div class="accordion-body">
                                                Anda bisa langsung datang ke Perpustakaan Ki Hadjar Dewantara yang berlokasi
                                                di
                                                Kantor Desa Karangturi, Jl. Raya Kampak Munjungan RT. 05 RW. 01 Dusun Krajan
                                                Desa
                                                Karangturi Kec. Munjungan Kab. Trenggalek.
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseThree" aria-expanded="false"
                                                aria-controls="collapseThree">
                                                Kapan Perpustakaan Ki Hadjar Dewantara buka?
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="headingThree">
                                            <div class="accordion-body">
                                                Perpustakaan Ki Hadjar Dewantara buka setiap hari mulai pukul 09.00 WIB
                                                hingga 13.00
                                                WIB.
                                            </div>
                                        </div>
                                    </div>


                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingFour">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseFour" aria-expanded="false"
                                                aria-controls="collapseFour">
                                                Apa keuntungan menjadi anggota Perpustakaan Ki Hadjar Dewantara?
                                            </button>
                                        </h2>
                                        <div id="collapseFour" class="accordion-collapse collapse"
                                            aria-labelledby="headingFour">
                                            <div class="accordion-body">
                                                Mendapatkan akses terhadap peminjaman buku yang menjadi
                                                koleksi Perpustakaan Ki Hadjar Dewantara.
                                            </div>
                                        </div>
                                    </div>


                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingFive">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseFive" aria-expanded="false"
                                                aria-controls="collapseFive">
                                                Saya berminat menjadi anggota Perpustakaan Ki Hadjar Dewantara, tetapi
                                                adakah
                                                kegiatan lainnya selain peminjaman koleksi?
                                            </button>
                                        </h2>
                                        <div id="collapseFive" class="accordion-collapse collapse"
                                            aria-labelledby="headingFive">
                                            <div class="accordion-body">
                                                Di Perpustakaan Ki Hadjar Dewantara terdapat berbagai kegiatan lain diluar
                                                peminjaman koleksi, antara lain Pembelajaran Komputer Dasar, Pembelajaran
                                                Bahasa
                                                Inggris, Senam Aerobik, dan berbagai kegiatan lainnya.
                                            </div>
                                        </div>
                                    </div>


                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingSix">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseSix" aria-expanded="false"
                                                aria-controls="collapseSix">
                                                Bagaimana cara bergabung pada kelas Pembelajaran Komputer Dasar dan kelas
                                                Pembelajaran Bahasa Inggris?
                                            </button>
                                        </h2>
                                        <div id="collapseSix" class="accordion-collapse collapse"
                                            aria-labelledby="headingSix">
                                            <div class="accordion-body">
                                                Anda dapat menghubungi nomor yang tertera di Contact Person.
                                            </div>
                                        </div>
                                    </div>


                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingSeven">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseSeven" aria-expanded="false"
                                                aria-controls="collapseSeven">
                                                Bagaimana cara meminjam buku di Perpustakaan Ki Hadjar Dewantara?
                                            </button>
                                        </h2>
                                        <div id="collapseSeven" class="accordion-collapse collapse"
                                            aria-labelledby="headingSeven">
                                            <div class="accordion-body">
                                                Anda dapat datang langsung dan mengisi formulir peminjaman, serta data
                                                peminjaman.
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Add similar HTML structure for other accordion items -->
                                    <!-- Second Accordion Item -->
                                    <!-- Third Accordion Item -->
                                    <!-- and so on... -->
                                </div>
                            </div>



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
