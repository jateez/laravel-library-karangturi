{{-- Carousel --}}
{{-- 
    <div>
    <div id="carouselLayout" class="carousel slide my-4 shadow-sm" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" style="height: 200px;">
                <img class="d-block w-100"
                    style="position: absolute;
                top: 0;
                left: 0;
                min-height: 200px;"
                    src="..." alt="First slide">
            </div>
            <div class="carousel-item" style="height: 300px;">
                <img class="d-block w-100"
                    style="position: absolute;
                top: 0;
                left: 0;
                min-height: 200px;"
                    src="..." alt="Second slide">
            </div>
            <div class="carousel-item" style="height: 300px;">
                <img class="d-block w-100"
                    style="position: absolute;
                top: 0;
                left: 0;
                min-height: 200px;"
                    src="..." alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselLayout" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#carouselLayout" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
    </div>
</div>
 --}}

{{-- <div class="row text-center justify-content-center align-items-center bg-secondary"
    style="padding:0%; margin:0%; height: 20em; max-height:300px;">
    <h6 style="font-weight:bolder; font-size:2em">Perpustakaan Desa Karangturi</h6>
</div> --}}

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row gx-5 justify-content-center">
            {{-- Left Side of Column --}}
            <div class="col">
                <div class="row">
                    <div class="card mb-3 border border-info shadow" style="max-width:540px; height:20em">
                        <div class="card-body">
                            <div>
                                <h5 class="card-title" style="font-weight: bold;">Library News and Updates</h5>
                                <p class="card-text">Latest news, announcements, and updates from the library.</p>
                            </div>
                            <div>
                                <i class="bi bi-newspaper" style="font-size: 48px; color: #53CAFD;"></i>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- 2nd row --}}
                <div class="row">
                    <div class="card mb-3 border border-info shadow " style="max-width:540px; height:20em">
                        <div class="card-body">

                            <p class="card-text">
                                col kiri
                            </p>
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
                    <div class="card mb-3 border border-info" style="max-width:; height:10em">
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
                    <div class="card mb-3 border border-info shadow" style="max-width:540px; height:20em">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div>
                                <h5 class="card-title" style="font-weight: bold;">Total Books Count</h5>
                                <p class="card-text">Number of books available in the library.</p>
                            </div>
                            <div>
                                <i class="bi bi-book" style="font-size: 48px; color: #53CAFD;"></i>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Row 2 --}}
                <div class="row">
                    <div class="card mb-3 border border-info shadow" style="max-width:540px; height:20em">
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
