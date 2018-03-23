@extends('layouts.ui')

@section('main_container')
<section class="l-banner banner--home banner" id="garage">
    <div class="l-container">
        <h1 class="banner__title">BEST <span>CARS</span></h1>
        <div class="banner__car">
            <img src="{{ asset('images/car.png') }}" alt="">
        </div>
    </div>
    <div class="banner__btn-wrapper">
        <div class="l-container">
            <a href="{{ url('/shop') }}" class="primary-btn banner__btn  banner__btn--first">Go to shop</a><br><br><br>
            <a href="#about" class="arrow-down banner__btn"></a>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" width="1920" viewBox="0 0 1920 241" class="shape shape--bottom shape--bg">
        <path id="bottom" class="cls-1" d="M4116,3151H2196V2910l960,240,960-240v241Z"
              transform="translate(-2196 -2910)"/>
    </svg>
</section>
<section class="l-section l-section--color-bg l-section--about" id="about">
    <div class="l-container">
        <h2 class="title">about</h2>
        <div class="about">
            <div class="l-row">
                @foreach($abouts as $a)
                    <div class="l-col-lg-4 l-col-md-6">
                        <h3 class="title-thirdary about__title">
                            <div class="about__inner-title">
                                {{ getPropByLang($a,'title') }}
                            </div>
                        </h3>
                        <div class="about__desc">
                            <p>
                                {{ getPropByLang($a,'desc') }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <a href="#services" class="btn arrow-down banner__btn"></a>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" width="1920" viewBox="0 0 1920 241" class="shape shape--bottom">
        <path id="bottom" class="cls-1" d="M4116,3151H2196V2910l960,240,960-240v241Z"
              transform="translate(-2196 -2910)"/>
    </svg>
</section>
<section class="l-section l-section--services" id="services">
    <div class="l-container">
        <h2 class="title">services</h2>

        <ul class="nav tabs" id="pills-tab" role="tablist">
            @foreach($services as $k => $s)
                <li class="l-col-md-3 tabs__item">
                    <a class="tabs__link {{ !$k ? 'active' : '' }}" id="pills-home-tab" data-toggle="pill" href="#service_{{ $s->id }}"
                       role="tab"
                       aria-controls="pills-home" aria-selected="true">
                       @if($k == 0)
                            <span class="tabs__icon tabs__icon--buy "></span>
                       @elseif($k == 1)
                            <span class="tabs__icon tabs__icon--track"></span>
                       @elseif($k == 2)
                            <span class="tabs__icon tabs__icon--transport"></span>
                       @else
                            <span class="tabs__icon tabs__icon--insurance"></span>
                       @endif
                        <div class="tabs__label">
                            {{ getPropByLang($s,'title') }}
                        </div>
                    </a>
                </li>
            @endforeach
        </ul>

        <div class="tab-content" id="pills-tabContent">
            @foreach($services as $c => $s)
                <div class="tab-pane {{ !$c ? 'show active' : '' }}" id="service_{{ $s->id }}" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="l-row">
                        <div class="l-col-md-6">
                            <h3 class="title-thirdary">{{ getPropByLang($s,'desc_title') }}</h3>
                            <p>
                                {{ getPropByLang($s,'desc') }}
                            </p>
                        </div>
                        <div class="l-col-md-6">
                            <div class="tab-content__right">
                                <h3 class="title-thirdary">{{ getPropByLang($s,'features_title') }}</h3>
                                <ul class="tab-content__list">
                                    @if(getPropByLang($s,'features'))
                                        @foreach(unserialize(getPropByLang($s,'features')) as $us)
                                            <li class="tab-content__list-item">{{ $us }}</li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <a href="#get-in-touch" class="btn arrow-down banner__btn"></a>
    </div>
</section>
<section class="l-section l-section--statistics l-section--has-top-shape" >
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 241" class="shape shape--top">
        <path id="top" class="cls-1" d="M2196,2409H4116v1l-960,240-960-240v-1Z" transform="translate(-2196 -2409)"/>
    </svg>
    <div class="l-container">
        <h2 class="title-secondary title-secondary--light title-secondary--int">WE DEAL IN LARGE NUMBER OF VEHICLES</h2>
        <ul class="statistics">
            <li class="statistics__item">
                <span class="statistics__number">15</span>
                <h4 class="statistics__title">Motocrycle</h4>
            </li>
            <li class="statistics__item">
                <span class="statistics__number">58</span>
                <h4 class="statistics__title">Coupe</h4>
            </li>
            <li class="statistics__item">
                <span class="statistics__number">64</span>
                <h4 class="statistics__title">Sedan</h4>
            </li>
            <li class="statistics__item">
                <span class="statistics__number">120</span>
                <h4 class="statistics__title">Suv</h4>
            </li>
            <li class="statistics__item">
                <span class="statistics__number">7</span>
                <h4 class="statistics__title">Luxury car</h4>
            </li>
        </ul>
        <a href="{{ url('/shop') }}" class="primary-btn banner__btn">Go to shop</a>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" width="1920" viewBox="0 0 1920 241" class="shape shape--bottom">
        <path id="bottom" class="cls-1" d="M4116,3151H2196V2910l960,240,960-240v241Z"
              transform="translate(-2196 -2910)"/>
    </svg>
</section>
<section class="l-section" id="get-in-touch">
    <div class="l-container">
        <div class="title-wrapper">
            <h2 class="title title--smaller title--with-subtitle">GET IN TOUCH</h2>
            <div class="sub-title">
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                    been the industrys standard dummy text ever since the 1500s, when an unknown printer took a
                    galley of type and scrambled it to make a type specimen book.
                </p>
            </div>
        </div>
        <div class="l-row">
            <div class="l-col-md-7">
                <form action="#" class="form">
                    <div class="form__group">
                        <label for="name" class="form__label">Name <i class="fas fa-asterisk"></i></label>
                        <input type="text" class="form__field" id="name">
                    </div>
                    <div class="form__group">
                        <label for="email" class="form__label">E-mail <i class="fas fa-asterisk"></i></label>
                        <input type="text" class="form__field form__field--bg" id="email">
                    </div>
                    <div class="form__group">
                        <label for="message" class="form__label">Message <i class="fas fa-asterisk"></i></label>
                        <textarea class="form__field  form__field--message form__field--bg" id="message"></textarea>
                    </div>
                    <div class="form__group  form__group--btn">
                        <button class="primary-btn banner__btn">send</button>
                    </div>
                </form>
            </div>
            <div class="l-col-md-5">
                <div class="contacts">
                    <h3 class="title-thirdary">CONTACTS</h3>
                    <address class="contacts__info contacts__address">
                        <div class="contacts__line">
                            <span>Address:</span> 2 Kievyan st. Yerevan , Armenia
                        </div>
                        <div class="contacts__line">
                            <span>Phone:</span> +374 10 22 40 99
                        </div>
                        <div class="contacts__line">
                            <span>Mobile:</span> +374 96 57 80 09
                        </div>
                        <div class="contacts__line">
                            <span>E-mail:</span> info@platinum.am
                        </div>
                    </address>
                    <h3 class="title-thirdary">WORKING HOURS</h3>
                    <div class="contacts__info">
                        <div class="contacts__line">
                            <span>Monday to Friday:</span> 9 A.M. to 6 P.M
                        </div>
                        <div class="contacts__line">
                            <span>Saturday:</span> 9 A.M. to 1 P.M.
                        </div>
                        <div class="contacts__line">
                            <span>Mobile:</span> +374 96 57 80 09
                        </div>
                        <div class="contacts__line">
                            <span>No working hours on Sunday</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="l-section l-section--map l-section--has-top-shape">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 241" class="shape shape--top">
        <path id="top" class="cls-1" d="M2196,2409H4116v1l-960,240-960-240v-1Z" transform="translate(-2196 -2409)"/>
    </svg>
    <div class="l-map" id="map"></div>
</section>

<ul class="menu" id="myNavbar">
	<li class="menu__item">
			<a href="#garage" class="menu__link menu__link--active">Garage</a>
	</li>
	<li class="menu__item">
			<a href="#about" class="menu__link">About</a>
	</li>
	<li class="menu__item">
			<a href="#services" class="menu__link">Services</a>
	</li>
	<li class="menu__item">
			<a href="#get-in-touch" class="menu__link">Get in touch</a>
	</li>
</ul>
@endsection

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="{{ asset('js/map.js') }} "></script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCqEfohxeFk9xnGeu0w2j69-evkfuZxvD0&callback=initMap">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            $(window).scroll(function (event) {
                var scrollValue = $(window).scrollTop()+15;
                var aboutOffsetTop = $("#about").offset().top;
                var servicesOffsetTop = $("#services").offset().top;
                var getintouchOffsetTop = $("#get-in-touch").offset().top;

                if(scrollValue >= getintouchOffsetTop){
                    $("#myNavbar a").each(function(){
                        $(this).removeClass('menu__link--active')
                    });
                    $("#myNavbar a[href='#get-in-touch']").addClass('menu__link--active')
                }else if(scrollValue >= servicesOffsetTop){
                    $("#myNavbar a").each(function(){
                        $(this).removeClass('menu__link--active')
                    });
                    $("#myNavbar a[href='#services']").addClass('menu__link--active')
                }else if(scrollValue >= aboutOffsetTop){
                    $("#myNavbar a").each(function(){
                        $(this).removeClass('menu__link--active')
                    });
                    $("#myNavbar a[href='#about']").addClass('menu__link--active')
                }else{
                    $("#myNavbar a").each(function(){
                        $(this).removeClass('menu__link--active')
                    });
                    $("#myNavbar a[href='#garage']").addClass('menu__link--active')
                }
            })

            $("#myNavbar a").on('click', function(event) {
                if (this.hash !== "") {
                    event.preventDefault();
                    var hash = this.hash;
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 800, function(){
                        window.location.hash = hash;
                    });
                }  
                $("#myNavbar a").each(function(){
                    $(this).removeClass('menu__link--active')
                });
                $(this).addClass('menu__link--active')
            });
        });
    </script>
@endpush