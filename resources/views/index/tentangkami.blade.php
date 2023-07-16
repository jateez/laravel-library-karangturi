@extends('layouts.app')

@section('cover')
@endsection
@section('content')
    <div class="container">
        <div class="row text-center justify-content-center align-items-center border border-black
        rounded shadow mb-4"
            style="padding:0%; margin:0%; height: 15em; max-height:300px;background-color:deepskyblue;">
            <h6 style="font-weight:bolder; font-size:2em; color:azure;">Tentang Kami</h6>
        </div>

        <div class="row">
            <p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tellus eros, lobortis
                volutpat risus luctus,
                facilisis pellentesque risus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur
                ridiculus mus. Ut vehicula nulla laoreet, aliquam nisl quis, condimentum justo. In at arcu a est facilisis
                bibendum. Etiam felis sem, volutpat fermentum mattis non, molestie quis nunc. Duis ut elementum felis.
                Quisque quis diam id risus euismod consequat eu ac lorem. Praesent porta diam ac placerat lacinia. Nunc nec
                neque scelerisque, pellentesque mi ut, aliquet nibh. Vivamus risus nibh, tincidunt vel hendrerit eget,
                malesuada sit amet lorem. Nullam eu condimentum neque. Phasellus ac erat nunc. Duis sed lectus ligula. Morbi
                semper dictum ex sit amet tincidunt. Sed ante quam, consectetur ut blandit quis, vehicula commodo mauris.

                Pellentesque bibendum rutrum neque a finibus. Donec ut diam at dui sollicitudin gravida ut vitae odio.
                Vestibulum ante magna, rutrum vitae quam sit amet, consectetur vehicula ipsum. Nulla lacinia vitae nunc
                vitae placerat. Ut eget placerat turpis. Nulla sit amet nunc ac odio dignissim ornare. Praesent nunc leo,
                lacinia a risus et, consectetur sodales lectus. Vestibulum id erat sodales, pulvinar augue eu, vestibulum
                sem. Nunc ut ornare metus, eget dignissim nisi. Donec sit amet semper diam, eget scelerisque ipsum. Nunc
                ullamcorper elementum semper. Donec ultrices ac purus et convallis. Maecenas vel nulla ut urna tempor
                gravida.

                Morbi tempus, libero a consequat suscipit, nisl est rutrum libero, ut lacinia est felis id risus. Cras non
                nisl tempor, volutpat leo at, commodo massa. Suspendisse potenti. Vestibulum et rhoncus odio. Integer
                accumsan sit amet mauris eget aliquet. Suspendisse aliquet sodales enim vel vestibulum. Pellentesque posuere
                dignissim convallis. Pellentesque mattis rhoncus erat, a rhoncus sapien vehicula suscipit. Etiam nulla orci,
                interdum id metus a, euismod iaculis velit. Maecenas eu magna sit amet arcu cursus laoreet at accumsan
                magna. Morbi feugiat risus at commodo convallis. Aenean luctus sodales porta.</p>
        </div>
    </div>
@endsection


@section('footer')
    @parent
@endsection
