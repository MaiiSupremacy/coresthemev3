/**
 * CORES Theme V3 Main JavaScript
 * Handles all interactive elements, animations, and 3rd party library initializations.
 *
 * @package CORES_Theme
 * @version 3.0.0
 */

(function($) {
    'use strict';

    // =========================================
    // 1. INITIALIZATION & UTILS
    // =========================================
    $(document).ready(function() {
        initNavbar();
        initSwipers();
        initScrollAnimations();
        initResearchMap();
        initChart();
        initHoverEffects();
    });

    // =========================================
    // 2. NAVBAR SCROLL EFFECT (Glassmorphism)
    // =========================================
    function initNavbar() {
        const navbar = $('nav');
        const scrollThreshold = 50;

        $(window).on('scroll', function() {
            if ($(window).scrollTop() > scrollThreshold) {
                navbar.addClass('scrolled');
            } else {
                navbar.removeClass('scrolled');
            }
        });

        // Mobile Menu Toggle
        $('.hamburger').on('click', function() {
            $('.slide-menu').toggleClass('active');
            $(this).toggleClass('active');
        });

        $('.menu-close').on('click', function() {
            $('.slide-menu').removeClass('active');
            $('.hamburger').removeClass('active');
        });
    }

    // =========================================
    // 3. SWIPER CAROUSELS
    // =========================================
    function initSwipers() {
        // Hero Activity Carousel (Home)
        if ($('.activity-carousel').length) {
            new Swiper('.activity-carousel', {
                slidesPerView: 1,
                spaceBetween: 30,
                loop: true,
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                breakpoints: {
                    768: {
                        slidesPerView: 2,
                    },
                    1024: {
                        slidesPerView: 3,
                    },
                }
            });
        }

        // News Carousel (Home)
        if ($('.news-carousel').length) {
            new Swiper('.news-carousel', {
                slidesPerView: 1,
                spaceBetween: 20,
                loop: true,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                breakpoints: {
                    768: {
                        slidesPerView: 2,
                    },
                    1024: {
                        slidesPerView: 3, // Show 3 news items on desktop
                    },
                }
            });
        }

        // About Gallery Carousel (About)
        if ($('.about-carousel').length) {
            new Swiper('.about-carousel', {
                effect: 'coverflow',
                grabCursor: true,
                centeredSlides: true,
                slidesPerView: 'auto',
                coverflowEffect: {
                    rotate: 50,
                    stretch: 0,
                    depth: 100,
                    modifier: 1,
                    slideShadows: true,
                },
                pagination: {
                    el: '.swiper-pagination',
                },
                autoplay: {
                    delay: 3000,
                }
            });
        }

        // Project Gallery Carousel (Projects)
        if ($('.project-carousel').length) {
            new Swiper('.project-carousel', {
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                loop: true,
                autoplay: {
                    delay: 5000,
                }
            });
        }
        
        // Alumni Stories (Supervision)
        if ($('.alumni-carousel').length) {
            new Swiper('.alumni-carousel', {
                slidesPerView: 1,
                spaceBetween: 30,
                loop: true,
                autoplay: {
                    delay: 6000,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                }
            });
        }
    }

    // =========================================
    // 4. LEAFLET MAP (Research Page)
    // =========================================
    function initResearchMap() {
        const mapId = 'research-map';
        if (!document.getElementById(mapId)) return;

        // Default: Malang/Clungup Coordinates
        const lat = -8.4384848;
        const lng = 112.6678858;

        const map = L.map(mapId).setView([lat, lng], 13);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Custom Gradient Pin Icon
        const customIcon = L.divIcon({
            className: 'custom-map-pin',
            html: `<div style="
                width: 30px;
                height: 30px;
                background: linear-gradient(135deg, #0A4D68, #05BFDB);
                border-radius: 50% 50% 0 50%;
                transform: rotate(45deg);
                border: 2px solid white;
                box-shadow: 0 5px 15px rgba(0,0,0,0.3);
                display: flex;
                align-items: center;
                justify-content: center;
            ">
                <div style="
                    width: 10px;
                    height: 10px;
                    background: white;
                    border-radius: 50%;
                "></div>
            </div>`,
            iconSize: [30, 42],
            iconAnchor: [15, 42],
            popupAnchor: [0, -42]
        });

        L.marker([lat, lng], { icon: customIcon }).addTo(map)
            .bindPopup('<b>CORES Research Site</b><br>Clungup Mangrove Conservation')
            .openPopup();
    }

    // =========================================
    // 5. SCROLL ANIMATIONS (Fade In)
    // =========================================
    function initScrollAnimations() {
        const observerOptions = {
            root: null,
            rootMargin: '0px',
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target); // Only animate once
                }
            });
        }, observerOptions);

        // Select elements to animate
        const animatedElements = document.querySelectorAll('.section-title, .card, .people-card, .news-card, .focus-card, .equipment-item');
        
        animatedElements.forEach(el => {
            el.classList.add('fade-in-up'); // Add base class
            observer.observe(el);
        });
    }

    // =========================================
    // 6. CHART.JS (Research Data Dummy)
    // =========================================
    function initChart() {
        // Chart initialization logic (optional, if needed later)
    }

    // =========================================
    // 7. HOVER EFFECTS (People Page)
    // =========================================
    function initHoverEffects() {
        $('.people-card').hover(
            function() {
                $(this).find('.people-overlay').css('opacity', '1');
            },
            function() {
                $(this).find('.people-overlay').css('opacity', '0');
            }
        );
    }

})(jQuery);