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
            <form action="{{ url('/filter')}}" method="post" class="form">
                {{ csrf_field() }}
                <div class="l-row l-row--int">
                    <div class="l-col-md-4 l-col-md-int">
                        <label class="form__label">{{ trans('data.make') }}</label>
                        <select class="selectpicker filters__select">
                            <option>Mustard</option>
                            <option>Ketchup</option>
                            <option>Relish</option>
                        </select>
                    </div>
                    <div class="l-col-md-4 l-col-md-int">
                        <label class="form__label">{{ trans('data.model') }}</label>
                        <select class="selectpicker filters__select">
                            <option>-------</option>
                            <option>Mustard</option>
                            <option>Ketchup</option>
                            <option>Relish</option>
                        </select>
                    </div>
                    <div class="l-col-md-4 l-col-md-int">
                        <div id="js-daterange">
                            <div class="l-row">
                                <div class="l-col">
                                    <label class="form__label">{{ trans('data.year-from') }}</label>
                                    <input type="text" class="form__field js-datepicker" id="js-date-picker-from"
                                           placeholder="-------">
                                </div>
                                <div class="l-col">
                                    <label class="form__label">{{ trans('data.year-to') }}</label>
                                    <input type="text" class="form__field js-datepicker" id="js-date-picker-to"
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
                                <input type="checkbox" class="form__checkbox" id="mechanical">
                                <label class="form__label form__label--checkbox" for="mechanical">{{ trans('data.mechanical') }}</label>
                            </li>
                            <li class="filters__checkboxes-item">
                                <input type="checkbox" class="form__checkbox" id="automat">
                                <label class="form__label form__label--checkbox" for="automat">{{ trans('data.automat') }}</label>
                            </li>
                            <li class="filters__checkboxes-item">
                                <input type="checkbox" class="form__checkbox" id="other">
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
                    <button class="primary-btn primary-btn--search">18639</button>
                </div>
            </form>
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
                <div class="product">
                    <a href="#" class="product__link">
                        <div class="product__cover urgent">
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
                        <div class="product__cover urgent">
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
                        <div class="product__cover urgent">
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
                        <div class="product__cover urgent">
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

<section class="l-section">
    <div class="l-container">
        <h3 class="title-secondary title-secondary--int">{{ trans('data.search-result') }}</h3>
        <div class="l-row">
            <div class="l-col-lg-4 l-col-md-6 l-col-int">
                <div class="product">
                    <a href="#" class="product__link">
                        <div class="product__cover">
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
                        <span class="product__price">$34000</span>
                    </a>
                </div>
            </div>
            <div class="l-col-lg-4 l-col-md-6 l-col-int">
                <div class="product">
                    <a href="#" class="product__link">
                        <div class="product__cover">
                            <img src="{{ asset('images/2.jpg') }}" alt="">
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
                        <span class="product__price">$34000</span>
                    </a>
                </div>
            </div>
            <div class="l-col-lg-4 l-col-md-6 l-col-int">
                <div class="product">
                    <a href="#" class="product__link">
                        <div class="product__cover">
                            <img src="{{ asset('images/3.jpg') }}" alt="">
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
                        <span class="product__price">$34000</span>
                    </a>
                </div>
            </div>
            <div class="l-col-lg-4 l-col-md-6 l-col-int">
                <div class="product">
                    <a href="#" class="product__link">
                        <div class="product__cover">
                            <img src="{{ asset('images/3.jpg') }}" alt="">
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

                        <span class="product__price">$34000</span>
                    </a>
                </div>
            </div>

            <div class="l-col-lg-4 l-col-md-6 l-col-int">
                <div class="product">
                    <a href="#" class="product__link">
                        <div class="product__cover">
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

                        <span class="product__price">$34000</span>
                    </a>
                </div>
            </div>

            <div class="l-col-lg-4 l-col-md-6 l-col-int">
                <div class="product">
                    <a href="#" class="product__link">
                        <div class="product__cover">
                            <img src="{{ asset('images/3.jpg') }}" alt="">
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

                        <span class="product__price">$34000</span>
                    </a>
                </div>
            </div>

            <div class="l-col-lg-4 l-col-md-6 l-col-int">
                <div class="product">
                    <a href="#" class="product__link">
                        <div class="product__cover">
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

                        <span class="product__price">$34000</span>
                    </a>
                </div>
            </div>

            <div class="l-col-lg-4 l-col-md-6 l-col-int">
                <div class="product">
                    <a href="#" class="product__link">
                        <div class="product__cover">
                            <img src="{{ asset('images/2.jpg') }}" alt="">
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

                        <span class="product__price">$34000</span>
                    </a>
                </div>
            </div>

            <div class="l-col-lg-4 l-col-md-6 l-col-int">
                <div class="product">
                    <a href="#" class="product__link">
                        <div class="product__cover">
                            <img src="{{ asset('images/3.jpg') }}" alt="">
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

                        <span class="product__price">$34000</span>
                    </a>
                </div>
            </div>
        </div>

        <ul class="pagination">
            <li class="pagination__item">
                <a href="#" class="pagination__link pagination__link--prev secondary-btn secondary-btn--prev"
                   disabled></a>
            </li>

            <li class="pagination__item">
                <a href="#" class="pagination__link secondary-btn">1</a>
            </li>

            <li class="pagination__item">
                <a href="#" class="pagination__link secondary-btn">2</a>
            </li>

            <li class="pagination__item">
                <span class="pagination__link pagination__dotes secondary-btn">...</a>
            </li>

            <li class="pagination__item">
                <a href="#" class="pagination__link secondary-btn">5</a>
            </li>

            <li class="pagination__item">
                <a href="#" class="pagination__link pagination__link--next secondary-btn secondary-btn--next"></a>
            </li>
        </ul>
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
    <script src="{{ asset('js/filter.js')}}"></script>
    <script src="{{ asset('js/script.js')}}"></script>
    
    <script>
        $(document).ready(function () {
            $('.selectpicker').selectpicker({
                style: 'btn-info',
                size: 4
            });
    
            $('#js-date-picker-from, #js-date-picker-to').datepicker({
                autoclose: true
            });
            var snapSlider = document.getElementById('slider-snap');
            noUiSlider.create(snapSlider, {
                start: [20000, 80000],
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
            });
        });
    </script>
@endpush