@extends('layouts.app')


@section('cover')
@endsection
@section('content')
    <div class="container">
        <div class="row text-center justify-content-center align-items-center border border-black rounded shadow my-4"
            style="padding:0%; margin:0%; height: 15em; max-height:300px;background-color:deepskyblue;">
            <h2 class="display-4 text-white" style="font-weight: bold;">Tentang Kami</h2>
        </div>

        <div class="row">
            <div class="col-md-8 offset-md-2">
                <p class="lead" style="text-align:justify;">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eget aliquet est. Aliquam in
                    volutpat urna. Fusce consectetur, enim vitae scelerisque euismod, odio purus ultricies purus, eget
                    luctus massa nibh et justo. Curabitur et justo nec mauris placerat aliquet. Pellentesque interdum
                    commodo lacus, a consectetur lorem luctus ac. Ut lobortis, quam non euismod tincidunt, arcu dui
                    bibendum felis, sit amet rutrum magna tellus sit amet tellus. Sed in aliquam tortor, at bibendum leo.

                    Vivamus nec sem in odio facilisis rhoncus. Donec et enim tristique, tristique risus in, pulvinar
                    felis. Fusce ut nunc vel nunc pulvinar ultrices. Duis lacinia convallis ligula, a rhoncus libero
                    fermentum a. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;
                    Aliquam erat volutpat. Etiam vitae nisi nibh. Vestibulum mollis dui neque, non malesuada lectus
                    placerat sed.

                    Suspendisse efficitur diam quis lectus euismod malesuada. In hac habitasse platea dictumst. Aenean
                    accumsan ligula ut leo facilisis, sed scelerisque arcu sollicitudin. Sed nec consequat metus. Nam
                    dignissim urna in risus viverra, eget tincidunt tortor convallis. Fusce pretium tellus a odio
                    congue, id hendrerit tellus bibendum. Nulla facilisi. Phasellus commodo ligula ac fringilla dapibus.
                    Aenean pellentesque odio non tellus feugiat, et lobortis urna posuere.

                    Nunc faucibus enim vel dolor varius, ut aliquam velit bibendum. Curabitur sem lectus, malesuada id
                    accumsan id, condimentum a mauris. Suspendisse fringilla dui id nunc euismod gravida. Nullam
                    porttitor rutrum ex. Nam at risus in dolor vulputate efficitur. Suspendisse scelerisque malesuada
                    nulla, ac consectetur nulla hendrerit vel. Proin sed malesuada tortor. Suspendisse interdum tellus
                    nec purus venenatis cursus. Sed consectetur, metus in iaculis pharetra, sem nulla pellentesque lacus,
                    a aliquam tellus sem et velit. Nulla facilisi. In lobortis tincidunt felis, eu rhoncus est posuere
                    sed. Cras fermentum, mi sed scelerisque faucibus, tellus elit varius urna, eget lacinia lacus quam
                    id enim. Integer a vestibulum tellus, id congue urna.
                </p>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @parent
@endsection
