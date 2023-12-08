$(document).ready(function () {
    // Configuração do Slick.js
    $('.carrosselDepoimento').slick({
        speed: 300,
        slidesToShow: 3,
        Infinity:true,
        arrows: true,
        dots: true,
        responsive: [
            {
                breakpoint: 900,
                settings: {
                    arrows: false,
                    dots:true,
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    dots:true,
                    slidesToShow: 1
                }
            }
        ]
    });
});


