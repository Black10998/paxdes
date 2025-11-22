;(function($) {

    $(document).ready( function() {
        // Mobile Menu Toggle
        $(document).on('click', '.header-area .show-menu', function() {
            $(this).toggleClass('active');
            $(".header-area .navbar").toggleClass('active');
            
            // Add/remove overlay
            if (!$('.mobile-menu-overlay').length) {
                $('body').append('<div class="mobile-menu-overlay"></div>');
            }
            $('.mobile-menu-overlay').toggleClass('active');
            $('body').toggleClass('menu-open');
        });

        // Close menu when clicking overlay
        $(document).on('click', '.mobile-menu-overlay', function() {
            $('.header-area .show-menu').removeClass('active');
            $('.header-area .navbar').removeClass('active');
            $(this).removeClass('active');
            $('body').removeClass('menu-open');
        });

        // Close menu when clicking menu item (mobile)
        $(document).on('click', '.header-area .navbar .menu li a', function() {
            if ($(window).width() <= 991) {
                $('.header-area .show-menu').removeClass('active');
                $('.header-area .navbar').removeClass('active');
                $('.mobile-menu-overlay').removeClass('active');
                $('body').removeClass('menu-open');
            }
        });

        // Header scroll effect
        $(window).on('scroll', function() {
            if ($(window).scrollTop() > 50) {
                $('.header-area').addClass('scrolled');
            } else {
                $('.header-area').removeClass('scrolled');
            }
        });

        // Mobile submenu toggle
        $('.header-area .navbar .menu li.menu-item-has-children > a').on('click', function(e) {
            if ($(window).width() <= 991) {
                e.preventDefault();
                $(this).parent().toggleClass('active');
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
                    scrollTop: target.offset().top - 100
                }, 1000);
            }
        });
    });

})(jQuery);


// Remove preloader once the page is fully loaded
    window.onload = function() {
        document.getElementById("preloader").classList.add("off");
    };