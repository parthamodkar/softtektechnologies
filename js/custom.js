$(document).ready(function(){

    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
        if (scroll >= 400) {
            $("header").addClass("sticky");
        }
        else {
            $('header').removeClass("sticky");
        }
    }); 

    $('.banner-slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        autoplay: true, 
        fade: true,
        autoplaySpeed: 3000,
        speed: 2000,
        adaptiveHeight: true
    });

    new WOW().init();

    $('.testimonial-slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        autoplay: true, 
        fade: true,
        autoplaySpeed: 4000,
        speed: 1000,
        adaptiveHeight: true
    });

    $('.our-industry-slider').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        dots: true,
        autoplay: true, 
        autoplaySpeed: 4000,
        speed: 2000,
        responsive: [
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 479,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    $('.nav_toggle').click(function(){
        $(this).next().addClass('open-nav');
    });

    $('.close-nav').click(function(){
        $(this).parent().removeClass('open-nav');
    });

    $('.select-country').select2();
    $('.project-budget').select2();
    $('.service').select2();
    $('.select-job').select2();


});

