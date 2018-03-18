$(document).ready(function () {

    var owl = $('.owl-carousel');

    owl.owlCarousel({
        loop: true,
        margin: 30,
        responsiveClass: true,
        navText: '',
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            768: {
                items: 2,
                nav: false
            },
            992: {
                items: 3,
                nav: false
            }
        }
    });

    $('.js-car-prev').click(function () {
        owl.trigger('next.owl.carousel');
    });

    $('.js-car-next').click(function () {
        owl.trigger('prev.owl.carousel');
    })

});