$('.fotos').slick({
    dots: true,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 3000,
    speed: 500,
    prevArrow: true,
    nextArrow: true,
    slidesToShow: 3,
    slidesToScroll: 2,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 2,
                infinite: true,
                dots: false,
                prevArrow: true,
                nextArrow: true,
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                prevArrow: true,
                nextArrow: true,

            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                prevArrow: true,
                nextArrow: true,
                dots: false
            }
        }
    ]
});

$('.fotos2').slick({
    dots: true,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 3000,
    speed: 1000,
    slidesToShow: 3,
    slidesToScroll: 2,
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 2,
                infinite: true,
                dots: false,
                prevArrow: true,
                nextArrow: true,
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                prevArrow: false,
                nextArrow: false,
                dots: false
            }
        }
    ]
});

