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
                                <h6 class="card-title" style="font-weight: bold;">FAQ 1 - What is Lorem Ipsum?</h6>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                                <!-- FAQ 2 -->
                                <h6 class="card-title" style="font-weight: bold;">FAQ 2 - How can I become a member?</h6>
                                <p class="card-text mb-0 pb-0">To become a member, please visit our membership page.</p>

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
                                    <a href="{{ route('userFAQ') }}" class="btn btn-link text-muted" style="font-weight:bold">See More</a>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>



            </div>


            {{-- Center Side of Columns --}}
            <div class=" col-lg-6 col-sm-4 gb-2 mx-auto my-auto">
                <div class="row">
                    <div class="card mb-3 border border-info" style="max-width:;height:30em">
                        <div class="card-body">
                            <p class="card-text">
                            <h5 class="text-center pb-4" style="font-weight: bold">Welcome</h5>
                            <p style="text-align:justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam
                                pharetra eros at lectus placerat
                                feugiat. Maecenas iaculis erat blandit urna pellentesque consequat. Mauris dapibus lobortis
                                dolor, quis tempor nisi sagittis semper. Suspendisse ac eros at magna aliquam commodo. Sed
                                et quam blandit nibh eleifend interdum. Sed eget sollicitudin risus.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="card mb-3 border border-info" style="max-width:; height:20em">
                        <div class="card-body">
                            <p class="card-text">
                                col tengah row 2
                            </p>
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
                        {{-- <div class="card-body">
                            <div class="card-title" style="font-weight: 600; font-size: 24px;">Jadwal Kegiatan Mingguan
                            </div>
                            <div class="d-flex align-items-center mt-3">
                                <i class="bi bi-calendar-event-fill me" style="font-size: 28px; color: #53CAFD;"></i>
                                <p class="card-text" style="font-size: 16px; line-height: 1.6;">
                                    Setiap Hari Sabtu: Pengajaran Bahasa Inggris.<br>
                                    Setiap Hari Minggu: Pengajaran Komputer Dasar.
                                </p>
                            </div>
                        </div> --}}
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div>
                                <h5 class="card-title" style="font-weight: bold;">Jadwal Kegiatan</h5>
                                <p class="card-text"><span class="text-bg-info" style="font-weight:600">Setiap Hari
                                        Sabtu</span><br>Pengajaran Bahasa Inggris.<br><br> <span class="text-bg-info"
                                        style="font-weight:600">Setiap Hari Minggu</span> <br>Pengajaran Komputer Dasar.</p>
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
