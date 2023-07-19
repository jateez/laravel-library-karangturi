<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    {{-- Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    {{-- Trix Rich Text Editor --}}
    {{-- <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css"> --}}
    {{-- <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script> --}}

    {{-- TinyMCE --}}
    <script src="{{ asset('js/tinymce/tinymce.min.js') }}" referrerpolicy=”origin”></script>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        .navbar-nav .nav-link.active {
            color: #fff;
            opacity: 100%;
            font-weight: 600;
            /* background-color: blue; */
            border-bottom: 3.5px solid whitesmoke;
            border-color: #fff;

        }

        .navbar-nav .nav-link {
            color: black;
            font-weight: 600;
            opacity: 80%;
            border-radius: 2px;
        }

        .navbar-nav .nav-link:hover {
            /* color: black; */
            /* font-weight: 600; */
            opacity: 100%;
            /* background-color: #067EB0; */
            background-color: #C1E6FF;
            border-radius: 5px;


        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100">
    <div id="app">

        {{-- Cover --}}
        @section('cover')
            {{-- Cover for Medium to Large Screen --}}
            <div class="d-none d-md-block row text-center justify-content-center align-items-center position-relative border border-black"
                style="padding: 0%; margin: 0%; height: 20em; max-height: 300px;">
                <div class="position-absolute w-100 h-100 m-0 p-0">
                    <img class="img-fluid w-100 m-0 p-0" src="{{ asset('images/cover.jpg') }}" alt="Cover Image"
                        style="max-height: 100%; max-width: 100%;">
                </div>

                <h6 class="position-absolute top-50 start-50 translate-middle"
                    style="font-weight: bolder; font-size: 3rem; color:#067EB0; background-color:#C1E6FF; max-width:45%; border-radius:10px">
                    Perpustakaan Desa Karangturi
                </h6>
            </div>

            {{-- Cover for medium screen --}}
            <div class="d-none d-sm-block d-md-none row text-center justify-content-center align-items-center position-relative border border-black"
                style="padding: 0%; margin: 0%; height: 20em; max-height: 75px;">
                <div class="position-absolute w-100 h-100 m-0 p-0">
                    <img class="img-fluid w-100 m-0 p-0" src="{{ asset('images/cover.jpg') }}" alt="Cover Image"
                        style="max-height: 100%; max-width: 100%;">
                </div>

                <h6 class="position-absolute top-50 start-50 translate-middle"
                    style="font-weight: bolder; font-size: 1.1em; color:#067EB0; background-color:#C1E6FF; max-width:45%; border-radius:10px">
                    Perpustakaan Desa Karangturi
                </h6>
            </div>

            {{-- cover for smaller screen --}}
            <div class="d-block d-sm-none row text-center justify-content-center align-items-center position-relative border border-black"
                style="padding: 0%; margin: 0%; height: 20em; max-height: 75px;">
                <div class="position-absolute w-100 h-100 m-0 p-0">
                    <img class="img-fluid w-100 m-0 p-0" src="{{ asset('images/cover.jpg') }}" alt="Cover Image"
                        style="max-height: 100%; max-width: 100%;">
                </div>

                <h6 class="position-absolute top-50 start-50 translate-middle"
                    style="font-weight: bolder; font-size: 1em; color:#067EB0; background-color:#C1E6FF; max-width:45%; border-radius:10px">
                    Perpusdes Karangturi
                </h6>
            </div>




            {{-- <div class="row text-center justify-content-center align-items-center"
                style="padding: 0%; margin: 0%; height: 20em; max-height: 300px; ">
                <div>

                    <img class="img-fluid m-0 p-0" src="{{ asset('images/cover.jpg') }}" alt="Cover Image"
                        style="max-height: 100%; max-width: 100%;">
                    <h6 style="font-weight: bolder; font-size: 2em; color:black;">Perpustakaan Desa Karangturi</h6>
                </div>
            </div> --}}

        @show

        {{-- Navbar --}}
        <nav class="navbar navbar-expand-lg navbar-light shadow" style="background-color: #6CD2FE;">
            <div class="container">
                <div>
                    {{-- <img src="https://raw.githubusercontent.com/Hanzz14/jawir/2ecb8ebec7b174365da22b05a3e84ef97190d346/Logo%20Bunnies.svg" --}}
                    {{-- alt="Logo-Todoo-Apps"> --}}
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarUtama"
                    aria-controls="navbarUtama" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse mt-md-2 mt-sm-2" id="navbarUtama">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto align-items-lg-center">
                        {{-- <li class="navbar-brand" href="{{ url('/home') }}"> --}}
                        {{-- {{ config('app.name', 'MMDJaya') }} --}}
                        {{-- </li> --}}
                        <li class="nav-item ps-lg-5 px-md-0">
                            {{-- <i class="bi bi-house w-100 h-100"></i> --}}
                            <a class="nav-link {{ Route::currentRouteNamed('beranda') ? 'active' : '' }}"
                                aria-current="page" href="{{ route('beranda') }}">{{ config('-', 'Beranda') }}</a>
                        </li>
                    </ul>
                    <!-- Center Side Of Navbar -->
                    <ul class="navbar-nav mx-auto mx-md-0 align-items-lg-center">
                        <li class="nav-item px-lg-5 px-md-0">
                            <a class="nav-link {{ Route::currentRouteNamed('katalog') ? 'active' : '' }}"
                                aria-current="page" href="{{ route('katalog') }}">{{ config('-', 'Katalog') }}
                            </a>
                        </li>
                        <li class="nav-item px-lg-5 px-md-0">
                            <a class="nav-link {{ Route::currentRouteNamed('news.index') ? 'active' : '' }}"
                                aria-current="page" href="{{ route('news.index') }}">{{ config('-', 'Berita') }}</a>
                        </li>
                        <li class="nav-item px-lg-5 px-md-0">
                            <a class="nav-link {{ Route::currentRouteNamed('educational.index') ? 'active' : '' }}"
                                aria-current="page"
                                href="{{ route('educational.index') }}">{{ config('-', 'Bacaan Materi') }}</a>
                        </li>
                        <li class="nav-item px-lg-5 px-md-0">
                            <a class="nav-link {{ Route::currentRouteNamed('tentangkami') ? 'active' : '' }}"
                                aria-current="page"
                                href="{{ route('tentangkami') }}">{{ config('-', 'Tentang Kami') }}</a>
                        </li>
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto align-items-lg-center">
                        <!-- Authentication Links -->
                        @guest
                            <li class="d-none d-lg-block nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle align-items-center" href="#"
                                    role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    style="font-weight: 600;" v-pre> <i class="bi bi-person"
                                        style="font-weight: 600; font-size:0px; margin-bottom:0px; margin-top:0; padding-bottom:0px; padding-top:0px;"></i>
                                    Profile </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    @if (Route::has('login'))
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    @endif
                                    @if (Route::has('register'))
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    @endif
                                </div>
                            </li>
                            <div class="d-block d-lg-none">
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            </div>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('profile.show') }}">Profile</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>

            </div>
    </div>
    </nav>
    {{-- {{-- <div class="container d-flex flex-row-reverse navbar-light bg-grey my-5"> --}}

    </div>


    <main class="py-4 mb-4" style="">
        @yield('content')
    </main>

    </div>
    @section('footer')
        <div class=" d-none d-sm-block mt-auto w-100">
            <footer class="d-flex flex-wrap justify-content-between align-items-center border-top border-black me-0 pe-0"
                style="background-color:#067EB0; height:7em;">
                <div class="col-md-4 d-flex align-items-center mx-4 ps-lg-5 ms-lg-5 ps-md-4 ms-md-4">
                    <h6 class="ps-3" style="color: white; font-weight:500;">Perpustakaan Ki Hadjar Dewantara <br>Desa
                        Karangturi,
                        Kecamatan Munjungan</h6>
                    {{-- <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                        <i class="bi bi-instagram" width="30" height="30">
                        </i>
                    </a>
                    <span class="text-muted">Made with ♡ by MMD UB 470</span> --}}
                </div>

                <ul
                    class="nav col-md-4 justify-content-end list-unstyled d-flex flex-column mx-4 me-lg-5 pe-lg-5 me-md-4 pe-md-4">
                    <div class="d-flex flex-row ms-auto">
                        <h6 class="text-end me-3" style="color: white; font-weight:500; width:7em">Hubungi Kami</h6>
                    </div>
                    <div class="d-flex flex-row ms-auto me-3" style="width: 7.9em">
                        <li class="ms-3"><a class="text-muted border" style="border-color:#DEF5FF; font-size:20px;"
                                href="#">
                                <i class="bi bi-youtube">
                                    {{-- <use href="#twitter"></use> --}}
                                </i></a></li>
                        <li class="ms-3"><a class="text-muted" href="#">
                                <i class="bi bi-instagram border" style="border-color: #DEF5FF; font-size:20px;">
                                    {{-- <use href="#instagram"></use> --}}
                                </i></a></li>
                        <li class="ms-3"><a class="text-muted border" style="border-color: #DEF5FF; font-size:20px;"
                                href="#">
                                <i class="bi bi-facebook">
                                    {{-- <use href="#facebook"></use> --}}
                                </i></a></li>
                    </div>

                </ul>
            </footer>
            <div class="border-top border-white text-center align-items-center py-2"
                style="background-color:#067EB0; height: 4em;">
                <i class="bi bi-c-square" style="color: white; font-style:normal;"> <span>Perpustakaan Ki Hadjar Dewantara
                        <br>Made
                        with ♡ by MMD UB
                        470</span></i>
            </div>
        </div>
        {{-- smaller screen --}}
        <div class="d-block d-sm-none mt-auto w-100">
            <footer class="d-flex flex-wrap justify-content-center align-items-center border-top border-black me-0 pe-0"
                style="background-color:#067EB0; height:7em;">
                <div class="row d-flex align-items-center mx-4 mt-3 text-justify">
                    <h6 style="color: white; font-weight: 500;">More about us :</h6>
                </div>
                <div class="row d-flex align-items-center mx-4">
                    <div class="d-flex flex-row">
                        <a class="text-muted me-3" href="#">
                            <i class="bi bi-youtube py-0 my-0" style="font-size: 45.5px;"></i>
                        </a>
                        <a class="text-muted me-3" href="#">
                            <i class="bi bi-instagram py-0 my-0" style="font-size: 40px;"></i>
                        </a>
                        <a class="text-muted" href="#">
                            <i class="bi bi-facebook py-0 my-0" style="font-size: 40px;"></i>
                        </a>
                    </div>
                </div>
            </footer>

            <div class="border-top border-white text-center align-items-center py-2"
                style="background-color:#067EB0; height: 3em;">
                <i class="bi bi-c-square" style="color: white; font-style:normal"> <span>Perpustakaan Ki Hadjar
                        Dewantara <br>Made
                        with ♡ by MMD UB
                        470</span></i>
            </div>
        </div>
    @show
</body>

</html>
