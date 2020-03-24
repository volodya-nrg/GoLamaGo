$(function(){
    $('.golamago-video').on('click', function () {
        showModal($(this).data('modal'));
    });
    $('.golamago-topmenu-li_menu').on('click', function(){
        $('.golamago-topmenu').addClass('golamago-topmenu_opened');
    });
    $('.golamago-topmenu-li_times').on('click', function(){
        $('.golamago-topmenu').removeClass('golamago-topmenu_opened');
    });
    $('.golamago-topmenumob__bars_and_close').on('click', function(){
        $('.golamago-topmenumob').toggleClass('golamago-topmenumob_opened');
    })
    $('.golamago-iphone-scroller__arrow').on('click', function(){

        if ($(this).hasClass('golamago-iphone-scroller__arrow_disabled')) {
            return;
        }

        var isNext = $(this).hasClass('golamago-iphone-scroller__arrow_next')? true: false;
        var $parent = $(this).closest('.golamago-iphone-scroller');
        var $slides = $parent.find('.golamago-iphone-scroller__step');
        var $active = $parent.find('.golamago-iphone-scroller__step_active');
        var $arrows = $parent.find('.golamago-iphone-scroller__arrow');
        var curIndex = $active.index();
        var total = $slides.length;
        var index;
        var index_twin;

        $arrows.removeClass('golamago-iphone-scroller__arrow_disabled');
        index = curIndex + (isNext? 1: -1);

        if (index <= 0 || index >= total-1) {
            index = isNext? total-1: 0;
            $(this).addClass('golamago-iphone-scroller__arrow_disabled');
        }

        $active.removeClass('golamago-iphone-scroller__step_active').removeClass('visible').addClass('hidden');
        $slides.eq(index).addClass('golamago-iphone-scroller__step_active').removeClass('hidden').addClass('visible');
        index_twin = index;

        if (index_twin > 1) {
            index_twin--;
        }

        $('.golamago-faster .golamago__h2').addClass('golamago__h2_gray')
            .eq(index_twin)
            .removeClass('golamago__h2_gray');
        $('.golamago-faster__text').removeClass('golamago-faster__text_active')
            .eq(index_twin)
            .addClass('golamago-faster__text_active');
    });
    $('.golamago-clients__h2s .golamago__h2').on('click', function(){
        if ($(this).hasClass('active')) {
            return;
        }

        $(this).closest('.golamago-clients__h2s').find('.golamago__h2.active').removeClass('active');
        $(this).addClass('active');
        $('.golamago-market.active').removeClass('active');
        $('.golamago-market[data-kind=' + $(this).data('kind') + ']').addClass('active');
    });

    if ($('.golamago-page-pressa__items').length) {
        $('.golamago-page-pressa__items').masonry({
            columnWidth: '.golamago-page-pressa-item',
            itemSelector: '.golamago-page-pressa-item'
        });
    }

    if ($('.golamago').hasClass('golamago_about')) {
        var hash = window.location.hash.substr(1);

        $('.golamago-page-about__menu').find('a').on('click', function(e){
            e.preventDefault();
            var id = $(this).attr('href');
            var marginTop = parseInt($(id).css('marginTop'));
            var x = $(id).offset().top - $('.golamago-topmenu').height() - marginTop;

            $('html,body').animate({scrollTop: x + 'px'}, 500);
        });
        $('.golamago-topmenu-li a[href^="about#"], .golamago-topmenumob a[href^="about#"], .golamago__section_footer a[href^="about#"]').on('click', function(e){
            e.preventDefault();
            var href = $(this).attr('href');
            var hashPos = href.indexOf("#");
            var hash = href.substr(hashPos);
            var $el = $('.golamago-page-about__menu').find('a[href="' + hash + '"]');

            if ($el.length) {
                $el.click();

                if ($(this).closest('.golamago-topmenumob').length) {
                    $('.golamago-topmenumob').removeClass('golamago-topmenumob_opened');
                }
            }
        });

        if (!isMobile) {
            $('.golamago__h3').on('scrollSpy:enter', function () {
                $('.golamago-page-about__menu').find('a').removeClass('active');
                $('.golamago-page-about__menu').find('a[href="#' + $(this).attr('id') + '"]').addClass('active');
            }).on('scrollSpy:exit', function () {
            }).scrollSpy();
        }
        if (hash) {
            var $el = $('.golamago-page-about__menu').find('a[href="#' + hash + '"]');

            if ($el.length) {
                $el.click();

            } else {
                $('html,body').animate({ scrollTop: 1}, 1);
            }
        }
    }

    if (window.isIndex) {
        var hash = window.location.hash.substr(1);

        if (!window.isMobile) {
            setPluginFullPage();
            setTrueSizeImgOnRight();
        }

        $('.golamago-topmenumob__logo').on('click', function(){
            $('html,body').animate({scrollTop: 0}, 500);
            $('.golamago-topmenumob').removeClass('golamago-topmenumob_opened');
        });
        $('.golamago_index').animate({opacity: 1}, 'fast');
        $('.slick').slick({
            dots: false,
            infinite: false,
        });
        $('.golamago-intro__download-app, .golamago-topmenu__download-app').on('click', function(){
            if (window.isMobile) {
                $('.golamago-topmenumob__download').click();

            } else {
                $.fn.fullpage.moveTo(5);
            }
        });
        $('.golamago-topmenumob__download').on('click', function(){
            var x = $('.golamago__section_clients').offset().top - $('.golamago-topmenumob').height();
            $('html,body').animate({scrollTop: x + 'px'}, 500);
            $('.golamago-topmenumob').removeClass('golamago-topmenumob_opened');
        });

        if (hash == 'clients' && window.isMobile) {
            $('.golamago-topmenumob__download').click();
        }
    }

    $(window).resize(function(){
        if (window.isIndex && !window.isMobile) {
            if ($('.golamago').hasClass('golamago_index')) {
                $.fn.fullpage.reBuild();
            }
            setTrueSizeImgOnRight();
        }
    });
    $(window).scroll(function(){
        var y = $(this).scrollTop();

        if (!isMobile && $('.golamago-page-about__menu').length) {
            var offsetTop = $('.golamago-page-about__left-menu').offset().top - $('.golamago-topmenu').height();

            if (y > offsetTop) {
                $('.golamago-page-about__menu').addClass('golamago-page-about__menu_fixed');

            } else {
                $('.golamago-page-about__menu').removeClass('golamago-page-about__menu_fixed');
            }
        }
    });
});

var stop = false;
var section4AnimTime = 1000;
var isMobile = $(window).width() > 1024? false: true;
var isIndex = $('.golamago').hasClass('golamago_index')? true: false;
var isDidAnimPartners = 0;
var keyScrollSpy = false;

function showModal(target) {
    var $modalSrc = $('.golamago-modal[data-modal="' + target + '"]').eq(0);
    
    if (!$modalSrc.length) {
        return;
    }

    var $modal = $modalSrc.clone();

    $('body').addClass('hidden').append($modal);
    $modal.css({
        opacity: 0,
        display: 'flex'
    }).animate({
        opacity: 1,
    }, 200, function () {

        $(document).on("keydown", function(event){
            if (event.which == 27) {
                $modal.click();
            }
        });

        $(this).on('click', function (e) {
            var $el = $(e.target);
            
            if ($el.hasClass('golamago-modal') || $el.hasClass('golamago-modal__close')) {
                $modal.off('click');
                $(document).off("keydown");
                
                $(this).animate({
                    opacity: 0
                }, 150, function () {
                    $(this).remove();
                    $('body').removeClass('hidden');
                });
            }
        });
    });
}
function onAfterLoadSlide(anchorLink, index){
    $('.golamago-pager__basic').text(index);

    if (anchorLink == 'intro') {
        $('.golamago__section_intro .golamago-iphone').animateCss('pulse');
    }
    if (anchorLink == 'work' && !window.isDidAnimPartners) {
        var effect = 'fadeIn';
        var coof = 0;
        var time = 100;
        $('.golamago-partners__item_metro').animateCss(effect, function(){ $('.golamago-partners__item_metro').css('opacity', 1); });

        setTimeout(function(){
            $('.golamago-partners__item_lenta').animateCss(effect, function(){ $('.golamago-partners__item_lenta').css('opacity', 1); });
        }, time * ++coof);
        setTimeout(function(){
            $('.golamago-partners__item_karusel').animateCss(effect, function(){ $('.golamago-partners__item_karusel').css('opacity', 1); });
        }, time * ++coof);
        setTimeout(function(){
            $('.golamago-partners__item_globus').animateCss(effect, function(){ $('.golamago-partners__item_globus').css('opacity', 1); });
        }, time * ++coof);
        setTimeout(function(){
            $('.golamago-partners__item_more').animateCss(effect, function(){ $('.golamago-partners__item_more').css('opacity', 1); });
        }, time * ++coof);

        window.isDidAnimPartners = 1;
    }
    if (anchorLink == 'video' || anchorLink == 'clients' || anchorLink == 'footer') {
        $('.golamago__text-scroll').addClass('golamago__text-scroll_black');
        $('.golamago-topmenu__soc').addClass('dark');
        $('#fp-nav').addClass('dark');
        $('.golamago-video').animateCss('pulse');

    } else {
        $('.golamago__text-scroll').removeClass('golamago__text-scroll_black');
        $('.golamago-topmenu__soc').removeClass('dark');
        $('#fp-nav').removeClass('dark');
    }

    if (anchorLink == 'faster') {

    }
    if (anchorLink == 'clients') {

    }

    if (anchorLink == 'footer') {
        $('.golamago__text-scroll').hide();
        $('.golamago-pager').hide();

    } else {
        $('.golamago__text-scroll').show();
        $('.golamago-pager').show();
    }
}
function setTrueSizeImgOnRight(){
    $('.golamago__img').each(function(){
        var windowW = $(window).width();
        var windowH = $(window).height();
        var imgW = $(this).width();
        var imgH = $(this).height();

        if (imgH < windowH) {
            $(this).height(windowH);
            $(this).css('width', 'auto');
        }
    });
}
function setPluginFullPage(){
    $('.golamago__main').fullpage({
        //Навигация
        //menu: '#menu',
        menu: '.golamago-scroll-points',
        //lockAnchors: false,
        anchors: ['intro', 'work', 'video', 'faster', 'clients', 'footer'],
        navigation: true,
        // navigationPosition: 'right',
        //navigationTooltips: ['firstSlide', 'secondSlide'],
        //showActiveTooltip: false,
        //slidesNavigation: false,
        //slidesNavPosition: 'bottom',

        //Скроллинг
        // css3: true,
        // scrollingSpeed: 700,
        // autoScrolling: true,
        // fitToSection: true,
        // fitToSectionDelay: 1000,
        // scrollBar: false,
        // easing: 'easeInOutCubic',
        // easingcss3: 'ease',
        // loopBottom: false,
        // loopTop: false,
        // loopHorizontal: true,
        // continuousVertical: false,
        // continuousHorizontal: false,
        // scrollHorizontally: false,
        // interlockedSlides: false,
        // dragAndMove: false,
        // offsetSections: false,
        // resetSliders: false,
        // fadingEffect: false,
        // normalScrollElements: '#element1, .element2',
        // scrollOverflow: false,
        // scrollOverflowReset: false,
        // scrollOverflowOptions: null,
        // touchSensitivity: 15,
        // normalScrollElementTouchThreshold: 5,
        // bigSectionsDestination: null,

        //Доступ
        // keyboardScrolling: true,
        // animateAnchor: true,
        // recordHistory: true,

        //Дизайн
        // controlArrows: true,
        // verticalCentered: true,
        // sectionsColor : ['#ccc', '#fff'],
        // paddingTop: '3em',
        // paddingBottom: '10px',
        // fixedElements: '#header, .footer',
        fixedElements: '',
        // responsiveWidth: 0,
        // responsiveHeight: 0,
        // responsiveSlides: false,
        // parallax: false,
        // parallaxOptions: {type: 'reveal', percentage: 62, property: 'translate'},

        //Настроить селекторы
        sectionSelector: '.section',
        slideSelector: '.slide',

        //lazyLoading: true,

        //события
        onLeave: function(index, nextIndex, direction){
            if (direction == 'down') {
                if (nextIndex == 2) {
                    $('.golamago-work').animateCss('fadeInDown');
                    $('.golamago__section_work .golamago__img').animateCss('slideInUp');

                } else if (nextIndex == 3) {

                } else if (nextIndex == 4) {
                    $('.golamago-iphone-scroller').animateCss('slideInUp');

                } else if (nextIndex == 5) {
                    $('.golamago-clients').animateCss('slideInUp');
                }
            }
            if (direction == 'up') {
                if (nextIndex == 1) {
                    $('.golamago__section_intro .golamago__img').animateCss('slideInDown');
                    $('.golamago-intro').animateCss('fadeInDown');
                }
            }
            if ( (index == 4 && nextIndex == 5) || (index == 4 && nextIndex == 3) ) {
                if (!window.stop) {
                    var index = $('.golamago-iphone-scroller__step_active').index();

                    if (direction == 'down') {
                        if (index == $('.golamago-iphone-scroller__step').length-1) {
                            return true;

                        } else {
                            $('.golamago-iphone-scroller__arrow_next').click();
                            window.stop = true;
                            setTimeout(function(){ window.stop = false; }, window.section4AnimTime);
                        }

                    } else {
                        if (index == 0) {
                            return true;

                        } else {
                            $('.golamago-iphone-scroller__arrow_prev').click();
                            window.stop = true;
                            setTimeout(function(){ window.stop = false; }, window.section4AnimTime);
                        }
                    }
                }

                return false;
            }
        },
        afterLoad: function(anchorLink, index){
            onAfterLoadSlide(anchorLink, index);
        },
        afterRender: function(){
            var total_section = $('.golamago__section').length;
            $('.golamago-pager__total').text(total_section);

            $('.golamago-topmenu__logo, .golamago-footer__logo').on('click', function(){
                $.fn.fullpage.moveTo(1);
            });
        },
        afterResize: function(){},
        afterResponsive: function(isResponsive){},
        afterSlideLoad: function(anchorLink, index, slideAnchor, slideIndex){},
        onSlideLeave: function(anchorLink, index, slideIndex, direction, nextSlideIndex){}
    });
}