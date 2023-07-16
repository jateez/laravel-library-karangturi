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
        {{-- Search --}}
        {{-- <div class="row py-4">
            <div class="col">

                <div class="input-group mb-3">
                    <input type="text" class="form-control input-text" placeholder="Search products...."
                        aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary btn-lg" type="button">
                            <i class="fa fa-search"> Search</i>
                        </button>
                    </div>
                </div>
            </div>

        </div> --}}

        <div class="row gx-5 justify-content-center">

            {{-- Left Side of Column --}}
            <div class="col">

                <div class="card" style="max-width:540px; height:40em">
                    <div class="card-body">

                        <p class="card-text">
                            col kiri
                        </p>
                    </div>
                </div>

            </div>


            {{-- Center Side of Columns --}}
            <div class=" col-lg-6 col-sm-4 gb-2 mx-auto my-auto">


                <div class="row">
                    <div class="card mb-3 border border-primary text-bg-info" style="max-width:;height:34.5em">
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
                    <div class="card mb-3" style="max-width:; height:34.5em">
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
                    <div class="card mb-3" style="max-width:540px; height:20em">
                        <div class="card-body">
                            <div class="card-title" style="font-weight: 600">Jumlah Buku</div>
                            <p class="card-text">
                                col kanan
                            </p>
                        </div>
                    </div>
                </div>
                {{-- Row 2 --}}
                <div class="row">
                    <div class="card mb-3" style="max-width:540px; height:20em">
                        <div class="card-body">
                            <div class="card-title" style="font-weight: 600">Jadwal Kegiatan Mingguan</div>
                            <p class="card-text">

                            </p>
                        </div>
                    </div>
                </div>


            </div>




        </div>
    @endsection
