;(function($) {

    $(document).ready( function() {
        // Mobile Menu Toggle - ORIGINAL STYLE
        $(document).on('click', '.header-area .show-menu', function() {
            $(this).toggleClass('active');
            $(".header-area .navbar").toggleClass('active');
        });

        // Close menu when clicking menu item (mobile)
        $(document).on('click', '.header-area .navbar .menu li a', function() {
            if ($(window).width() <= 991) {
                $('.header-area .show-menu').removeClass('active');
                $('.header-area .navbar').removeClass('active');
            }
        });

        // AOS Animation
        AOS.init({
            duration: 1500,
            once: true,
        });

        // Smooth scroll for anchor links
        $('a[href^="#"]').on('click', function(e) {
            var target = $(this.getAttribute('href'));
            if (target.length) {
                e.preventDefault();
                $('html, body').stop().animate({
                    scrollTop: target.offset().top - 80
                }, 1000);
            }
        });
    });

})(jQuery);


// Remove preloader once the page is fully loaded
    window.onload = function() {
        document.getElementById("preloader").classList.add("off");
    };