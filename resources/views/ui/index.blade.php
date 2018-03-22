@extends('layouts.ui')

@section('main_container')


<section class="l-banner banner--home banner" id="garage">
    <div class="l-container">
        <h1 class="banner__title">BEST <span>CARS</span></h1>
        <div class="banner__car">
            <img src="images/car.png" alt="">
        </div>
    </div>

    <div class="banner__btn-wrapper">
        <div class="l-container">
            <button class="primary-btn banner__btn  banner__btn--first">Go to shop</button>
            <button class="arrow-down banner__btn"></button>
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
                <div class="l-col-lg-4 l-col-md-6">
                    <h3 class="title-thirdary about__title">
                        <div class="about__inner-title">
                            <p>long-term</p>
                            <p>bussiness</p>
                        </div>
                    </h3>

                    <div class="about__desc">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin in enim nec dui aliquet
                            tincidunt vitae at lectus. Vestibulum et nibh vehicula ante sagittis tempor.
                            Pellentesque suscipit mattis sem quis fringilla. Nam auctor
                            velit at lorem posuere, iaculis volutpat felis sollicitudin. Nam blandit dapibus augue
                            quis sodales. Pellentesque eget mi quis urna lacinia pulvinar. Proin convallis commodo
                            lacus, sit
                            amet porttitor magna vestibulum a.
                        </p>
                    </div>
                </div>

                <div class="l-col-lg-4 l-col-md-6">
                    <h3 class="title-thirdary about__title about__title--info">
                        <div class="about__inner-title">
                            <p>maintaining</p>
                            <p>Your bussiness</p>
                        </div>
                    </h3>

                    <div class="about__desc">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin in enim nec dui aliquet
                            tincidunt vitae at lectus. Vestibulum et nibh vehicula ante sagittis tempor. Pellentesque
                            suscipit mattis sem quis fringilla. Nam auctor
                            velit at lorem posuere, iaculis volutpat felis sollicitudin. Nam blandit dapibus augue quis
                            sodales. Pellentesque eget mi quis urna lacinia pulvinar. Proin convallis commodo lacus, sit
                            amet porttitor magna vestibulum a. Pellentesque eget mi quis urna lacinia pulvinar. Proin
                            convallis commodo lacus, sit
                            amet porttitor magna vestibulum a.
                        </p>
                    </div>
                </div>

                <div class="l-col-lg-4 l-col-md-6">
                    <h3 class="title-thirdary about__title about__title--team">
                        <div class="about__inner-title">
                            our team
                        </div>
                    </h3>

                    <div class="about__desc">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin in enim nec dui aliquet
                            tincidunt vitae at lectus. Vestibulum et nibh vehicula ante sagittis tempor.
                            Pellentesque
                            suscipit mattis sem quis fringilla. Nam auctor
                            velit at lorem posuere, iaculis volutpat felis sollicitudin. Nam blandit dapibus augue
                            quis
                            sodales. Pellentesque eget mi quis urna lacinia pulvinar. Proin convallis commodo lacus,
                            sit
                            amet porttitor magna vestibulum a.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <button class="btn arrow-down banner__btn"></button>
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
            <li class="l-col-md-3 tabs__item">
                <a class="tabs__link active" id="pills-home-tab" data-toggle="pill" href="#buy"
                   role="tab"
                   aria-controls="pills-home" aria-selected="true">
                    <span class="tabs__icon tabs__icon--buy "></span>
                    <div class="tabs__label">
                        Buying car
                    </div>
                </a>
            </li>
            <li class="l-col-md-3 tabs__item">
                <a class="tabs__link " id="pills-profile-tab" data-toggle="pill" href="#track"
                   role="tab"
                   aria-controls="pills-profile" aria-selected="false">
                    <span class="tabs__icon tabs__icon--track"></span>
                    <div class="tabs__label">
                        International Tracking
                    </div>
                </a>
            </li>
            <li class="l-col-md-3 tabs__item">
                <a class="tabs__link" id="pills-contact-tab" data-toggle="pill" href="#transport"
                   role="tab"
                   aria-controls="pills-contact" aria-selected="false">
                    <span class="tabs__icon tabs__icon--transport"></span>
                    <div class="tabs__label">
                        Ocean Transportation
                    </div>
                </a>
            </li>
            <li class="l-col-md-3 tabs__item">
                <a class="tabs__link" id="pills-contact-tab" data-toggle="pill" href="#insurance"
                   role="tab"
                   aria-controls="pills-contact" aria-selected="false">
                    <span class="tabs__icon tabs__icon--insurance"></span>
                    <div class="tabs__label">Cargo Insuranace</div>
                </a>
            </li>
        </ul>

        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane show active" id="buy" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="l-row">
                    <div class="l-col-md-6">
                        <h3 class="title-thirdary">buying car</h3>

                        <p>
                            Platinum Motors Armenia is an exclusive broker that can provide you with a Car, Motorcycle,
                            Boat and
                            Heavy Machinery from USA that has quality, payment, and delivery guarantees Vehicle prices
                            from the
                            U.S. are much lower than prices in European markets, even after adding all costs ofimports.
                            Consultations with clients are conducted for free in our office, by phone, Skype or via
                            email. For
                            every sold car we provide a special Carfax or Autocheck report with fullguarantee of its
                            legality,
                            describing the entire history of the vehicle. Whether you are an experienced car dealer or
                            just an
                            individual interested in buying vehicles, we put our knowledge and experience at your
                            service. We
                            are ready to provide you with clear and detailed information about each lot so that you
                            could feel
                            confident
                            in what you are buying.
                        </p>
                    </div>

                    <div class="l-col-md-6">
                        <div class="tab-content__right">
                            <h3 class="title-thirdary">Buying sources</h3>

                            <ul class="tab-content__list">
                                <li class="tab-content__list-item">Manheim</li>
                                <li class="tab-content__list-item">Adesa</li>
                                <li class="tab-content__list-item">Laai</li>
                                <li class="tab-content__list-item">Copart</li>
                                <li class="tab-content__list-item">Npauctions</li>
                                <li class="tab-content__list-item">rbauction.com</li>
                                <li class="tab-content__list-item">ironplanet.com</li>
                                <li class="tab-content__list-item">ebay.com</li>
                                <li class="tab-content__list-item">autotrader.com</li>
                                <li class="tab-content__list-item">cars.com</li>
                                <li class="tab-content__list-item">any brand official dealer – for new cars</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="track" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="l-row">
                    <div class="l-col-md-6">
                        <h3 class="title-thirdary">INLAND TRACKING</h3>

                        <p>
                            The process of vehicle transportation to the warehouse or the port will begin as soon as the
                            vehicle is paid for. A Platinum Motors representative will verify the vehicle and the
                            title/ownership are ready for pick up and a vehicle will be dispatched to the location. We
                            are increasing loading terminal to reduce the distance and cost of Inland transportation.
                            Note: All vehicles are insured during ground transportation and are picked up by a flat bed
                            or tow truck. We 'use' qualified drivers approved and licensed by the U.S. Government. Our
                            transfer rates are among the best in the industry. This helps to keep your total costs as
                            low as possible.
                        </p>
                    </div>

                    <div class="l-col-md-6">
                        <div class="tab-content__right">
                            <h3 class="title-thirdary">Key Points</h3>

                            <ul class="tab-content__list">
                                <li class="tab-content__list-item">All vehicles are insured</li>
                                <li class="tab-content__list-item">Experienced and qualified drivers</li>
                                <li class="tab-content__list-item">Low cost</li>
                                <li class="tab-content__list-item">No Risk</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="transport" role="tabpanel" aria-labelledby="pills-contact-tab">
                <div class="l-row">
                    <div class="l-col-md-6">
                        <h3 class="title-thirdary">OCEAN TRANSPORTATION</h3>

                        <p>
                            Your vehicle will be delivered to one of our warehouses in Newark,NJ, Savannah,GA,
                            Houston,TX, Los Angeles,CA or Chicago,IL. You will be provided with a container number which
                            you can 'use' to get an updated position of your cargo. If you are shipping a single vehicle
                            then it will be consolidated into a container with other vehicles and loaded as soon as all
                            the vehicles are ready to export. Our experience and reputation allows us to have many cars
                            to consolidate containers to Armenia, Georgia and Russia from all terminals almost every
                            week, which helps us reduce the shipping duration. No Storage Fees - We guarantee that you
                            will not pay any storage fees on the purchased item if transportation is ordered with us and
                            the vehicle and shipping are paid at once on the sale date or next day from the sale date.
                            Please note Platinum Motors does not provide customs clearance services at the destination
                            country and it is the clients responsibility to clear their cargo.
                        </p>
                    </div>

                    <div class="l-col-md-6">
                        <div class="tab-content__right">
                            <h3 class="title-thirdary">Loading Terminals</h3>

                            <ul class="tab-content__list">
                                <li class="tab-content__list-item">Newark,NJ</li>
                                <li class="tab-content__list-item">Savannah,GA</li>
                                <li class="tab-content__list-item">Houston,TX</li>
                                <li class="tab-content__list-item">Los Angeles,CA</li>
                                <li class="tab-content__list-item">Chicago,IL</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="insurance" role="insurance" aria-labelledby="pills-contact-tab">
                <div class="l-row">
                    <div class="l-col-md-6">
                        <h3 class="title-thirdary">CARGO INSURANCE</h3>

                        <p>
                            Shipping lines and loading companies do not have insurance for your cargo. As a valued
                            customer, we want you to know the fact before you ship. If your container sinks to the
                            bottom of the ocean, or catches fire, the maximum payoff will be $500 per container from the
                            shipping line. You need your own insurance policy. Platinum Motors does not cover your
                            valuable cargo, while in transit. We offer insurance policy by RGS Armenia. Note: Case must
                            be claimed to Insurance Company in delivery terminal before taking cargo out.
                        </p>
                    </div>

                    <div class="l-col-md-6">
                        <div class="tab-content__right">
                            <h3 class="title-thirdary">Key Points</h3>

                            <ul class="tab-content__list">
                                <li class="tab-content__list-item">Cost – 1% of cargo value</li>
                                <li class="tab-content__list-item">Deductable per claim - $200</li>
                                <li class="tab-content__list-item">Covers total destruction of cargo</li>
                                <li class="tab-content__list-item">Covers accidents during transport</li>
                                <li class="tab-content__list-item">Covers rough handling by ports</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <button class="btn arrow-down banner__btn"></button>
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

        <button class="primary-btn banner__btn">Go to shop</button>
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