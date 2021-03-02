@extends('master')
@section('title', 'About')
@section('main')

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />

    {{-- APPLY STYLE--}}
    <style>
        /*div {*/
        /*    border: 3px solid #4CAF50;*/
        /*    padding: 5px;*/
        /*}*/

        .clearfix {
            overflow: auto;
            padding-bottom: 10rem;
        }

        .lazy {
            float: right;
            outline: none;
            border: none;
        }
    </style>

    {{--CONTENT--}}
    <section class="ftco-section container">
        <h1 class="m-5" align='center'>ABOUT US</h1>
        {{--        @foreach($menu as $row)--}}
        {{--            <div class="row" align="center">--}}
        {{--                <div class="container">--}}
        {{--                    <div class="row">--}}
        {{--                        <div class="col-sm">--}}
        {{--                            @php--}}
        {{--                                if($row->idmenu % 2 != 0) {echo "<image width='400' src='$row->image'>";}--}}
        {{--                            @endphp--}}
        {{--                        </div>--}}
        {{--                        <div class="col-sm-6">--}}
        {{--                            @php--}}
        {{--                                if($row->idmenu % 2 != 0) {--}}
        {{--                                    echo "<h2 style='color:#c49b63;'>". $row->name ."</h2><br>";--}}
        {{--                                    echo "<h4>". $row->description ."</h4>";--}}
        {{--                                }--}}
        {{--                                else {--}}
        {{--                                    echo "<h2 style='color:#c49b63;'>". $row->name ."</h2><br>";--}}
        {{--                                    echo "<h4>". $row->description ."</h4>";--}}
        {{--                                }--}}
        {{--                            @endphp--}}
        {{--                            <a href="{{route('order')}}" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a>--}}
        {{--                        </div>--}}
        {{--                        <div class="col-sm">--}}
        {{--                            @php--}}
        {{--                                if($row->idmenu % 2 == 0) {echo "<image width='400' src='$row->image'>";}--}}
        {{--                            @endphp--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                    <br><br><br><br><br>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        @endforeach--}}

        @foreach($abouts as $about)
        <div class="clearfix">
            <img class="lazy" data-src="{{ asset($about->image) }}" width="350" height="250">
            <span>
                <h3>{{ $about->title }}</h3>
                <p>{{ $about->content }}</p>
            </span>
        </div>
        @endforeach

    </section>

    {{-- APPLY JAVASCRIPT--}}
    <script type="text/javascript">
        !function (window) {
            var $q = function (q, res) {
                    if (document.querySelectorAll) {
                        res = document.querySelectorAll(q);
                    } else {
                        var d = document
                            , a = d.styleSheets[0] || d.createStyleSheet();
                        a.addRule(q, 'f:b');
                        for (var l = d.all, b = 0, c = [], f = l.length; b < f; b++)
                            l[b].currentStyle.f && c.push(l[b]);

                        a.removeRule(0);
                        res = c;
                    }
                    return res;
                }
                , addEventListener = function (evt, fn) {
                    window.addEventListener
                        ? this.addEventListener(evt, fn, false)
                        : (window.attachEvent)
                        ? this.attachEvent('on' + evt, fn)
                        : this['on' + evt] = fn;
                }
                , _has = function (obj, key) {
                    return Object.prototype.hasOwnProperty.call(obj, key);
                }
            ;

            function loadImage(el, fn) {
                var img = new Image()
                    , src = el.getAttribute('data-src');
                img.onload = function () {
                    if (!!el.parent)
                        el.parent.replaceChild(img, el)
                    else
                        el.src = src;

                    fn ? fn() : null;
                }
                img.src = src;
            }

            function elementInViewport(el) {
                var rect = el.getBoundingClientRect()

                return (
                    rect.top >= 0
                    && rect.left >= 0
                    && rect.top <= (window.innerHeight || document.documentElement.clientHeight)
                )
            }

            var images = new Array()
                , query = $q('img.lazy')
                , processScroll = function () {
                    for (var i = 0; i < images.length; i++) {
                        if (elementInViewport(images[i])) {
                            loadImage(images[i], function () {
                                images.splice(i, i);
                            });
                        }
                    }
                    ;
                }
            ;
            // Array.prototype.slice.call is not callable under our lovely IE8
            for (var i = 0; i < query.length; i++) {
                images.push(query[i]);
            }
            ;

            processScroll();
            addEventListener('scroll', processScroll);

        }(this);
    </script>

    <script>
        $(document).ready(function () {
            $('.lazy').addClass('animate__animated animate__slideInLeft');
            $('.clearfix span').addClass('animate__animated animate__slideInDown');
        })
    </script>

    {{--    <script>--}}
    {{--        var scrollPositionToAnimate = 0;--}}
    {{--        var positionToAnimateTo = 700;--}}
    {{--        $(window).scroll(function () {--}}
    {{--            if ($(window).scrollTop() > scrollPositionToAnimate) {--}}
    {{--                $('.box-inner img').css('visibility', 'visible');--}}

    {{--                if ($('.box-inner').position().left < positionToAnimateTo) {--}}
    {{--                    $('.box-inner').clearQueue().animate({--}}
    {{--                        left: positionToAnimateTo--}}
    {{--                    });--}}
    {{--                }--}}
    {{--            } else {--}}
    {{--                if ($('.box-inner').position().left > 0) {--}}
    {{--                    $('.box-inner').clearQueue().animate({--}}
    {{--                        left: 0--}}
    {{--                    });--}}
    {{--                }--}}
    {{--            }--}}
    {{--        });--}}
    {{--    </script>--}}
@stop
