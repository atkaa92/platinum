@extends('layouts.ui')

@push('stylesheets')
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
@endpush

@section('main_container')

<section class="l-banner l-banner--shop banner banner--shop">
    <svg xmlns="http://www.w3.org/2000/svg" width="1920" viewBox="0 0 1920 241" class="shape shape--bottom shape--bg">
        <path id="bottom" class="cls-1" d="M4116,3151H2196V2910l960,240,960-240v241Z"
              transform="translate(-2196 -2910)"/>
    </svg>
</section>
<section class="l-section l-section--color-bg">
    <div class="l-container">
        <h2 class="title">{{ trans('data.shop') }}</h2>
        <div class="filters">
                {{ csrf_field() }}
                <div class="l-row l-row--int">
                    <div class="l-col-md-4 l-col-md-int">
                        <label class="form__label">{{ trans('data.make') }}</label>
                        <select name="make" class="selectpicker filters__select">
                            <option value="make">-------</option>
                            @foreach($manufacturers as $m)
                                <option value="{{ $m->id }}">{{ getPropByLang($m,'name') }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="l-col-md-4 l-col-md-int ">
                        <label class="form__label">{{ trans('data.model') }}</label>
                        <div class="models-selectpicker">
                            <select name="model" class="selectpicker models-select filters__select">
                                <option  value="model">-------</option>
                            </select>
                        </div>
                    </div>
                    <div class="l-col-md-4 l-col-md-int">
                        <div id="js-daterange">
                            <div class="l-row">
                                <div class="l-col">
                                    <label class="form__label">{{ trans('data.year-from') }}</label>
                                    <input name="yfrom" type="text" class="form__field js-datepicker" id="js-date-picker-from"
                                           placeholder="-------">
                                </div>
                                <div class="l-col">
                                    <label class="form__label">{{ trans('data.year-to') }}</label>
                                    <input name="yto" type="text" class="form__field js-datepicker" id="js-date-picker-to"
                                           placeholder="-------">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="l-row l-row--int">
                    <div class="l-col-xl-6 l-col-lg-7 l-col-sm-12">
                        <label class="form__label">{{ trans('data.transmission-pack') }}</label>
                        <ul class="filters__checkboxes">
                            <li class="filters__checkboxes-item">
                                <input name="mech" type="checkbox" class="form__checkbox" id="mechanical">
                                <label class="form__label form__label--checkbox" for="mechanical">{{ trans('data.mechanical') }}</label>
                            </li>
                            <li class="filters__checkboxes-item">
                                <input name="auto" type="checkbox" class="form__checkbox" id="automat">
                                <label class="form__label form__label--checkbox" for="automat">{{ trans('data.automat') }}</label>
                            </li>
                            <li class="filters__checkboxes-item">
                                <input name="other" type="checkbox" class="form__checkbox" id="other">
                                <label class="form__label form__label--checkbox" for="other">{{ trans('data.other') }}</label>
                            </li>
                        </ul>
                    </div>
                    <div class="l-col-xl-6 l-col-lg-5 l-col-sm-12">
                        <label class="form__label form__label--left filters__label"
                               id="slider-snap-value-lower"></label>
                        <label class="form__label form__label--right filters__label"
                               id="slider-snap-value-upper"></label>
                        <div id="slider-snap" class="range"></div>
                    </div>
                </div>
                <div class="form__group form__group--center">
                    <button class="primary-btn primary-btn--search" id="primary-btn--search">18639</button>
                </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" width="1920" viewBox="0 0 1920 241" class="shape shape--bottom">
        <path id="bottom" class="cls-1" d="M4116,3151H2196V2910l960,240,960-240v241Z"
              transform="translate(-2196 -2910)"/>
    </svg>
</section>
<section class="l-section">
    <div class="l-container">
        <h3 class="title-secondary title-secondary--int">{{ trans('data.urgent-offers') }}</h3>
        <div class="carousel carousel--offers">
            <button class="secondary-btn secondary-btn--prev carousel__btn carousel__btn--prev js-car-prev">prev
            </button>
            <button class="secondary-btn secondary-btn--next carousel__btn carousel__btn--next js-car-next">next
            </button>
            <div class="owl-carousel">
                @foreach($urgents as $u)
                    <div class="product">
                        <a href="{{ url('/inner/'.$u->id) }}" class="product__link">
                            <div class="product__cover urgent">
                                <img src="{{ $u->main_image }}" alt="">
                            </div>
                            <h4 class="product__name">{{ getPropByLang($u->manufacturer,'name') }} {{ getPropByLang($u->models,'name') }}</h4>
                            <div class="product__info">
                                <div class="product__info-col">
                                    <span class="product__info-item">{{ $u->year }}</span>
                                </div>
                                <div class="product__info-col">
                                    <span class="product__info-item">{{ $u->gearbox }}</span>
                                </div>
                                <div class="product__info-col">
                                    <span class="product__info-item">{{ $u->odometer }}km</span>
                                </div>
                            </div>
                            <div class="product__desc">
                                <p>
                                    {{ substr(getPropByLang($u,'desc'), 0, 85)  . '...' }}
                                </p>
                            </div>
                            <span class="product__price product__price--urgent">${{ $u->price }}</span>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<section class="l-section">
    <div class="l-container forSearchLoad">
        <div class="forSearchLoadCover"></div>
        <h3 class="title-secondary title-secondary--int">{{ trans('data.search-result') }}</h3>
        <div class="l-row">

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
    <script src="{{ asset('js/nouislider.min.js')}}"></script>
    <script src="{{ asset('js/owl.carousel.js')}}"></script>
    <script src="{{ asset('js/script.js')}}"></script>
    
    <script>
        $(document).ready(function () {
            $('.selectpicker').selectpicker({
                style: 'btn-info',
                size: 1000
            });
            
            $('#js-date-picker-from, #js-date-picker-to').datepicker({
                autoclose: true,
                format: 'dd-mm-yyyy',
            });

            var myfprice = 20000;
            var mytprice = 80000;
            if(window.location.href.split('/')[5] != null){
                var filterPiece = window.location.href.split('shop')[1];
                segments = filterPiece.split('/')
                myfprice = segments[9]
                mytprice = segments[10].split('?')[0]
            }
            
            var snapSlider = document.getElementById('slider-snap');
            noUiSlider.create(snapSlider, {
                start: [myfprice, mytprice],
                step: 100,
                connect: true,
                range: {
                    'min': [0],
                    'max': [100000]
                }
            });
            var snapValues = [
                document.getElementById('slider-snap-value-lower'),
                document.getElementById('slider-snap-value-upper')
                ];
                snapSlider.noUiSlider.on('update', function (values, handle) {
                    snapValues[handle].innerHTML = values[handle];
                    if(handle){
                        filterQuery.tprice = values[handle].slice(0, values[handle].indexOf('.'))
                        
                    }else{
                        filterQuery.fprice = values[handle].slice(0, values[handle].indexOf('.'))
                    }
                });
            });
        </script>
        <script src="{{ asset('js/filter.js')}}"></script>
@endpush