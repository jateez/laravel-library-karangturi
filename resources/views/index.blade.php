@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row gx-5 justify-content-center">
            {{-- Left Side of Column --}}
            <div class="col">
                <div class="row">
                    <div class="card mb-3 border border-info shadow" style="max-width:540px; height:25em">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div>
                                <h5 class="card-title" style="font-weight: bold;">Berita Terbaru</h5>
                                <p class="card-text">Berita yang paling baru kami publikasikan.</p>
                            </div>

                            <div class="recent-articles mb-2 mt-3">
                                @foreach ($recentNewsArticles as $article)
                                    <a href="{{ route('news.show', ['id' => $article->id, 'slug' => $article->slug]) }}"
                                        class="article-link text-muted">
                                        <h6 class="card-title" style="font-weight: bold;">
                                            {{ Str::limit($article->title, 40, '...') }}
                                        </h6>
                                    </a>
                                @endforeach
                            </div>

                            <div>
                                <i class="bi bi-newspaper" style="font-size: 48px; color: #53CAFD;"></i>
                            </div>
                        </div>


                    </div>
                </div>
                {{-- 2nd row --}}
                <div class="row">
                    <div class="card mb-3 border border-info shadow" style="max-width: 540px; height: 25em">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div>
                                <h5 class="card-title" style="font-weight: bold;">Frequently Asked Questions</h5>
                                {{-- <p class="card-text">Find answers to common questions here.</p> --}}
                            </div>

                            <!-- FAQ Content -->
                            <div class="faq-content mt-2 mb-0 pb-0">
                                <!-- FAQ 1 -->
                                <h6 class="card-title" style="font-weight: bold;">FAQ 1 - Kapan Perpustakaan dibuka?</h6>
                                <p class="card-text">Perpustakaan Ki Hadjar Dewantara buka setiap hari mulai pukul 09.00 WIB
                                    hingga 13.00
                                    WIB.</p>

                                <!-- FAQ 2 -->
                                {{-- <div class="d-block d-sm-none d-xl-block">
                                    <h6 class="card-title" style="font-weight: bold;">FAQ 2 - Bagaimana cara bergabung pada Kelas Pembelajaran ?
                                    </h6>
                                    <p class="card-text mb-0 pb-0">   Anda dapat menghubungi nomor yang tertera di Contact Person.</p>
                                </div> --}}

                                <!-- FAQ 3 -->
                                {{-- <h6 class="card-title" style="font-weight: bold;">FAQ 3 - How do I borrow books?</h6>
                                <p class="card-text">To borrow books, you need to be a registered member of our library.</p> --}}
                            </div>

                            <!-- See More Link -->
                            <div class="row justify-content-between align-items-center mt-3">
                                <div class="col-auto">
                                    <i class="bi bi-question"
                                        style="font-size: 70px; color: #53CAFD; margin: 0em; padding: 0em;"></i>
                                </div>
                                <div class="col-auto">
                                    <a href="{{ route('userFAQ') }}" class="btn btn-link text-muted"
                                        style="font-weight:bold">See More</a>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>



            </div>


            {{-- Center Side of Columns --}}
            <div class=" col-lg-6 gb-2 mx-auto">
                <div class="row">
                    <div class="card mb-3 border border-info" style="height:50em;">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <p class="card-text">
                            <h5 class="text-center pb-4" style="font-weight: bold">
                                Selamat datang di Perpustakaan Ki Hadjar Dewantara Desa Karangturi!</h5>
                            <p style="text-align:justify">Kami adalah perpustakaan utama di lingkungan Desa Karangturi,
                                berkomitmen untuk menjadi referensi terbaik dalam pendidikan dan kebudayaan. Dengan koleksi
                                tercetak yang lengkap, kami menyediakan akses informasi dan pengetahuan yang Anda butuhkan.
                                <br><br>
                                Tak hanya itu, kami juga ingin mendorong minat baca dan literasi di kalangan masyarakat,
                                terutama anak-anak dan remaja. Oleh karena itu, kami menghadirkan berbagai program menarik,
                                seperti Kelas Bahasa Inggris dan Kelas Komputer, untuk masyarakat aktif dalam membaca dan
                                berbagi pengetahuan.
                                <br><br>
                                Kami percaya bahwa dengan dukungan dari seluruh komunitas, kami bisa menjadi pusat
                                pengetahuan yang ramah dan inklusif, menginspirasi generasi untuk terus berkembang dan
                                berinovasi. Bersama, mari ciptakan generasi cerdas, kreatif, dan berdaya saing tinggi di era
                                globalisasi ini.
                                <br><br>
                                Selamat datang, mari bergabung dan nikmati layanan terbaik dari Perpustakaan Ki Hadjar
                                Dewantara Desa Karangturi!
                            </p>
                            </p>
                            <div class="d-none d-xl-block justify-content-center align-items-center">
                                <img src="{{ asset('images/home-2.jpg') }}" style="max-height:200px; max-width:500px"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Right Side of Column --}}

            <div class="col">
                {{-- Row 1 --}}
                <div class="row">
                    <div class="card mb-3 border border-info shadow" style="max-width: 540px; height: 25em">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div>
                                <h5 class="card-title" style="font-weight: bold;">Katalog Buku</h5>
                                <div class="my-3">
                                    <p class="card-text">Total buku yang dimiliki Perpustakaan:</p>
                                    <h6 class="mt-2" style="font-weight: bold"> {{ $totalBooksCount }}</h6>
                                </div>
                                <div class="my-3">
                                    <p class="card-text">Jumlah judul buku yang tersedia:</p>
                                    <h6 class="mt-2" style="font-weight: bold;"> {{ $totalBooksTitle }}</h6>
                                </div>
                            </div>
                            <div class="">
                                <i class="bi bi-book" style="font-size: 48px; color: #53CAFD;"></i>
                            </div>
                        </div>
                    </div>

                </div>
                {{-- Row 2 --}}
                <div class="row">
                    <div class="card mb-3 border border-info shadow" style="max-width:540px; height:25em">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div>
                                <h5 class="card-title" style="font-weight: bold;">Jadwal Kegiatan</h5>
                                <p class="card-text mt-3">
                                    <span class="text-bg-info" style="font-weight:600">Setiap Hari Minggu</span>
                                </p>
                                <p class="card-text">
                                    Kelas Bahasa Inggris Pukul 09.00
                                    <br><br>Kelas Komputer Dasar Pukul 10.00
                                    <br><br>Kelas Tari Pukul 14.00

                                </p>
                            </div>
                            <div>
                                <i class="bi bi-calendar-event-fill" style="font-size: 48px; color: #53CAFD;"></i>
                            </div>
                        </div>
                    </div>
                </div>


            </div>




        </div>
    @endsection
