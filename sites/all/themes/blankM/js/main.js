$(document).ready(function () {
    load_home_js();
});

function load_home_js() {
    $('.home-search__go input').click(function () {
        $(this).parents('.home-search__go').children('.search-default').toggleClass('d-none');
        $('.home-search__to .search-default').addClass('d-none');

    });

    $(".destination__body").slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        //autoplay: true,
        speed: 500,
        autoplaySpeed: 5000,
        arrows: false,
        dots: true,
        responsive: [
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    $('.fly-offers__slide').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        //autoplay: true,
        speed: 500,
        arrows: false,
        dots: true
    });


}