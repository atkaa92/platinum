@extends('layouts.ui')
@push('stylesheets')
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
@endpush

@section('main_container')

    <section class="l-banner l-banner--shop banner banner--inner">
        <div class="l-container">
            <a href="{{ url('/shop') }}" class="primary-btn primary-btn--inner">{{ trans('data.go-to-shop') }}</a>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" width="1920" viewBox="0 0 1920 241" class="shape shape--bottom shape--bg">
            <path id="bottom" class="cls-1" d="M4116,3151H2196V2910l960,240,960-240v241Z"
                  transform="translate(-2196 -2910)"/>
        </svg>
    </section>

    <section class="l-section l-section--space l-section--color-bg">
        <div class="l-container">
            <div class="l-row">
                <div class="l-col-lg-6 l-col-lg-int">
                    <div class='minSlider'>
                        <div id='slider1_container'>
                            <div class='slideCont' u='slides'>
                                <div class="urgent">
                                    <img u='image' src="{{ $product->main_image }}"/>
                                    <img u='thumb' src="{{ $product->main_image }}"/>
                                </div>
                                @foreach(unserialize($product->images) as $image)
                                    @if($image != $product->main_image)
                                        <div>
                                            <img u='image' src="{{ $image }}"/>
                                            <img u='thumb' src="{{ $image }}"/>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                            <div u="thumbnavigator" class="jssort07" id="thumb">
                                <div class="thumbWrap"></div>
                                <div u="slides">
                                    <div u="prototype" class="p">
                                        <div u="thumbnailtemplate" class="i"></div>
                                        <div class="o">
                                        </div>
                                    </div>
                                </div>
                                <span u="arrowleft" class="jssora11l">
                                <i class="fa fa-angle-left"></i>
                            </span>
                                <span u="arrowright" class="jssora11r">
                                <i class="fa fa-angle-right"></i>
                            </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="l-col-lg-6 l-col-lg-int">
                    <h3 CLASS="title-secondary title-secondary--left">{{ getPropByLang($product->manufacturer,'name'). ' ' . getPropByLang($product->models, 'name') }}</h3>
                    <div class="car-info">
                        <div class="car-info__header">
                            <div class="car-info__left">
                                <span class="car-info__price car-info__price--urgent">${{ $product->price }}</span>
                            </div>
                            <div class="car-info__right">
                                fb share
                            </div>
                        </div>
                        <div class="car-info__body">
                            <ul class="car-info__list">
                                <li class="car-info__list-item">
                                    {{ trans('data.year') }}: <span>{{ $product->year }}</span>
                                </li>
                                <li class="car-info__list-item">
                                    {{ trans('data.transmission-pack') }}: <span>{{ trans("details.gearbox.$product->gearbox") }}</span>
                                </li>
                                <li class="car-info__list-item">
                                    {{ trans('data.exterior-color') }}: <span style="background-color:{{ $product->color }}" class="colorSpan"></span>
                                </li>
                                <li class="car-info__list-item">
                                    {{ trans('data.interior-type') }}: <span>{{ trans("details.interior.$product->interior") }}</span>
                                </li>
                                <li class="car-info__list-item">
                                    {{ trans('data.location') }}: <span>{{ trans("details.location.$product->location") }}</span>
                                </li>
                                <li class="car-info__list-item">
                                    {{ trans('data.body-type') }}: <span>{{ $product->body ? trans("details.body.$product->body") : '------------' }}</span>
                                </li>
                                <li class="car-info__list-item">
                                    {{ trans('data.doors') }}: <span>{{ $product->doors }}</span>
                                </li>
                                <li class="car-info__list-item">
                                    {{ trans('data.fuel-used') }}: <span>{{ $product->fuel ? trans("details.fuel.$product->fuel") : '------------' }}</span>
                                </li>
                                <li class="car-info__list-item">
                                    {{ trans('data.custom-clearance') }}: <span>Passed</span>
                                </li>
                            </ul>
                            <article class="car-info__desc">
                                <h4 class="car-info__title">{{ trans('data.description') }}</h4>
                                <p>
                                    Prior-Design has released new pics of their PD75SC wide-body kit. We got
                                    our first look at this product a few months back. Looking at the exterior, it’s
                                    hard to miss all the changes brought forth by the aero kit. It adds new front
                                    & rear bumpers, a front add-on lip spoiler, rear diffuser, front vent
                                    inserts/frames, wide-body fenders, rear lower add-on spoiler and side skirts
                                    with an add-on lip spoiler.
                                </p>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <svg xmlns="http://www.w3.org/2000/svg" width="1920" viewBox="0 0 1920 241" class="shape shape--bottom">
            <path id="bottom" class="cls-1" d="M4116,3151H2196V2910l960,240,960-240v241Z"
                  transform="translate(-2196 -2910)"/>
        </svg>
    </section>

    <section class="l-section">
        <h3 class="title-secondary title-secondary--int">{{ trans('data.releted-offers') }}</h3>
        <div class="l-container">
            <div class="carousel">
                <button class="secondary-btn secondary-btn--prev carousel__btn carousel__btn--prev js-car-prev">prev
                </button>
                <button class="secondary-btn secondary-btn--next carousel__btn carousel__btn--next js-car-next">next
                </button>
                <div class="owl-carousel">
                    <div class="product">
                        <a href="#" class="product__link">
                            <div class="product__cover product__cover--urgent">
                                <img src="{{ asset('images/1.jpg') }}" alt="">
                            </div>

                            <h4 class="product__name">Ferrari 812 Superfast – 789 hp</h4>

                            <div class="product__info">
                                <div class="product__info-col">
                                    <span class="product__info-item">2017</span>
                                </div>
                                <div class="product__info-col">
                                    <span class="product__info-item">Automat</span>
                                </div>
                                <div class="product__info-col">
                                    <span class="product__info-item">170000km</span>
                                </div>
                            </div>

                            <div class="product__desc">
                                <p>
                                    Morbi enim mauris, commodo vitae sapien eu,
                                    condimentum congue leo. . Phasellus porttitor
                                </p>
                            </div>

                            <span class="product__price product__price--urgent">$34000</span>
                        </a>
                    </div>
                    <div class="product">
                        <a href="#" class="product__link">
                            <div class="product__cover product__cover--urgent">
                                <img src="{{ asset('images/1.jpg') }}" alt="">
                            </div>

                            <h4 class="product__name">Ferrari 812 Superfast – 789 hp</h4>

                            <div class="product__info">
                                <div class="product__info-col">
                                    <span class="product__info-item">2017</span>
                                </div>
                                <div class="product__info-col">
                                    <span class="product__info-item">Automat</span>
                                </div>
                                <div class="product__info-col">
                                    <span class="product__info-item">170000km</span>
                                </div>
                            </div>

                            <div class="product__desc">
                                <p>
                                    Morbi enim mauris, commodo vitae sapien eu,
                                    condimentum congue leo. . Phasellus porttitor
                                </p>
                            </div>

                            <span class="product__price product__price--urgent">$34000</span>
                        </a>
                    </div>
                    <div class="product">
                        <a href="#" class="product__link">
                            <div class="product__cover product__cover--urgent">
                                <img src="{{ asset('images/1.jpg') }}" alt="">
                            </div>

                            <h4 class="product__name">Ferrari 812 Superfast – 789 hp</h4>

                            <div class="product__info">
                                <div class="product__info-col">
                                    <span class="product__info-item">2017</span>
                                </div>
                                <div class="product__info-col">
                                    <span class="product__info-item">Automat</span>
                                </div>
                                <div class="product__info-col">
                                    <span class="product__info-item">170000km</span>
                                </div>
                            </div>

                            <div class="product__desc">
                                <p>
                                    Morbi enim mauris, commodo vitae sapien eu,
                                    condimentum congue leo. . Phasellus porttitor
                                </p>
                            </div>

                            <span class="product__price product__price--urgent">$34000</span>
                        </a>
                    </div>
                    <div class="product">
                        <a href="#" class="product__link">
                            <div class="product__cover product__cover--urgent">
                                <img src="{{ asset('images/1.jpg') }}" alt="">
                            </div>

                            <h4 class="product__name">Ferrari 812 Superfast – 789 hp</h4>

                            <div class="product__info">
                                <div class="product__info-col">
                                    <span class="product__info-item">2017</span>
                                </div>
                                <div class="product__info-col">
                                    <span class="product__info-item">Automat</span>
                                </div>
                                <div class="product__info-col">
                                    <span class="product__info-item">170000km</span>
                                </div>
                            </div>

                            <div class="product__desc">
                                <p>
                                    Morbi enim mauris, commodo vitae sapien eu,
                                    condimentum congue leo. . Phasellus porttitor
                                </p>
                            </div>

                            <span class="product__price product__price--urgent">$34000</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
    <script src="{{ asset('js/owl.carousel.js')}}"></script>
    <script src="{{ asset('js/jssor.js')}}"></script>
    <script src="{{ asset('js/slider.js')}}"></script>
    <script src="{{ asset('js/script.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('#slider1_container').css('opacity', 1);

            var options = {
                $AutoPlay: false,                          			//[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $SlideDuration: 500,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
                $UISearchMode: 0,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).

                $ThumbnailNavigatorOptions: {
                    $Class: $JssorThumbnailNavigator$,              //[Required] Class to create thumbnail navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always

                    $Loop: 2,                                       //[Optional] Enable loop(circular) of carousel or not, 0: stop, 1: loop, 2 rewind, default value is 1
                    $SpacingX: 3,                                   //[Optional] Horizontal space between each thumbnail in pixel, default value is 0
                    $SpacingY: 3,                                   //[Optional] Vertical space between each thumbnail in pixel, default value is 0
                    $DisplayPieces: 4,                              //[Optional] Number of pieces to display, default value is 1

                    $ArrowNavigatorOptions: {
                        $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                        $ChanceToShow: 2,                          //[Required] 0 Never, 1 Mouse Over, 2 Always
                        $AutoCenter: 2,                            //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                        $Steps: 3                                  //[Optional] Steps to go for each navigation request, default value is 1
                    }
                }
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
                minSlider = $('.minSlider').width();
                if (parentWidth)
                    jssor_slider1.$ScaleWidth(Math.min(parentWidth, minSlider));
                else
                    window.setTimeout(ScaleSlider, 30);
            }

            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>
@endpush

