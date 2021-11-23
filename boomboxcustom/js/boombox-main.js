(function ($) {
    "use strict";    
    // $() will work as an alias for jQuery() inside of this function
    $('.carousel-boombox').slick({
        dots: false,
        arrows: false,
        draggable: false,
        infinite: true,
        speed: 500,
        fade: true,
        adaptiveHeight: true,
        autoplay: true,
        autoplaySpeed: 2000,
        slidesToScroll: 1,
        cssEase: 'linear'
    });
    
    $('.carousel-testimonial').slick({
        infinite: true,
        arrows: true,
        dots: true,
        slidesToScroll: 1,
        adaptiveHeight: true,
        speed: 500,
    });
    
    var form = document.querySelector('.needsValidation');
    const submit = document.getElementById('newsletter-btn');
    
    form.addEventListener('submit', function(event) {
        if(form.checkValidity() === false){                    
            event.preventDefault();
            event.stopPropagation();
        }
        form.classList.add('was-validated');
    });    
})(jQuery);
