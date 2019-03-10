"use strict";


//ANIMATED HEADER
//-------------------------------------------------
(function($) {
    var fixedItem = $('#header'),
        animeClass = 'animated',
        fixedClass = 'fixed',
        window_width = 768,
        is_fixed = $('.header-fixed').size(),
        minMarginTop;

    if (fixedItem.size()) {

        var scrollTopValue = function() {
            return $(window).scrollTop()
        };

        var addCustomClass = function(cls) {
            fixedItem.addClass(cls);
        };

        var removeCustomClass = function(cls) {
            fixedItem.removeClass(cls);
        };

        var toggleAnimeFunc = function() {

            minMarginTop = fixedItem.height();

            if (scrollTopValue() > minMarginTop) {
                addCustomClass(animeClass);
            } else if (scrollTopValue() === 0) {
                removeCustomClass(animeClass);
            }
        };

        $(window).on('scroll', toggleAnimeFunc);
        $(window).on('load', toggleAnimeFunc);

        if (!is_fixed) {
            var toggleFixedFunc = function() {
                minMarginTop = fixedItem.height();
                if (scrollTopValue() > 0) {
                    addCustomClass(fixedClass);
                    $('body').css({marginTop:minMarginTop})
                } else if (scrollTopValue() === 0) {
                    removeCustomClass(fixedClass);
                    $('body').css({marginTop:0});
                }
            };

            $(window).on('scroll', toggleFixedFunc);
            $(window).on('load', toggleFixedFunc);
        }
    }

})(jQuery);


//SCROLL TOP BUTTON
//-------------------------------------------------
(function ($) {
    var findWindowHeight = function () {
        return windowHeight = $(window).height();
    };

    var addScrollButton = function () {
        if ($(window).scrollTop() > windowHeight && !$('#scrollButton').size()) {
            var scrollButton = '<div id="scrollButton" class="scroll-button"/>';
            $('body').append(scrollButton);
        } else if ($(window).scrollTop() < windowHeight && $('#scrollButton').size()) {
            $('#scrollButton').remove();
        }
    };

    var scrollPage = function () {
        $('body, html').animate({
            scrollTop: 0
        }, 50);
    };

    var windowHeight = findWindowHeight();

    $(window).scroll(addScrollButton);
    $(window).resize(findWindowHeight);

    $('body').on('click', '#scrollButton', scrollPage);
})(jQuery);

//SLIDER FRONT
//-------------------------------------------------

$(document).ready(function () {
    /*$('.top-block__slider').slick({
        dots: true,
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 6000,
        arrows: false,
        adaptiveHeight: true,
        responsive: [
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            }
        ]
    });*/
});

//SIDEBAR MENU
//-------------------------------------------------

$("#sidebar-nav > ul > li > a").click(function (e) {
    $("#sidebar-nav li > ul").slideUp();
    $(this).next().is(":visible") || $(this).next().slideDown();

    e.preventDefault();

});

/*$("#sidebar-nav > ul > li").click(function (e) {
    e.preventDefault();
    console.log('pre');
    if (!$(this).hasClass('open')) { // если класса нет
        $(e.target).addClass('open'); // добавляем класс
        // $(this).next().is(":visible") || $(this).next().slideDown();
        console.log('no');
    } else if ($(this).hasClass('open')) { // если есть
        $(this).removeClass('open'); // убираем класс
        // $("#sidebar-nav li > ul").slideUp()
        console.log('yes');

    }
});*/


//SEARCH
//-------------------------------------------------

jQuery(document).ready(function ($) {
    $('input').attr('autocomplete', 'false');
    $('.header__search-text').keyup(function (eventObject) {
        var searchTerm = $(this).val();
        // проверим, если в поле ввода более 2 символов, запускаем ajax
        if (searchTerm.length > 1) {
            $.ajax({
                url: '/wp-admin/admin-ajax.php',
                type: 'POST',
                data: {
                    'action': 'ies_ajax_search',
                    'term': searchTerm
                },
                success: function (result) {
                    $('.ajax-search').fadeIn().html(result);
                }
            });
        } else if (searchTerm.length < 1) {
            $('.ajax-search').css('display', 'none');
        }
    });
});

//MOBILE MENU (plugin: slicknav)
//-------------------------------------------------
(function ($) {
    /*$('#nav').slicknav({
        prependTo: '#nav-block'
    });

    //close slicknav menu after click outside an element
    $(document).on('click', function(event) {
        if (!$(event.target).closest('.slicknav_menu').length && !$(event.target).is('.slicknav_menu')) {
            if ($('.slicknav_open').size()) {
                $('#nav').slicknav('close');
            }
        }
    });

    $('.slicknav_btn').on('click', function(){
        if ($(this).hasClass('slicknav_open')) $('#header').addClass('mmenu-open');
        else $('#header').removeClass('mmenu-open');
    })*/
})(jQuery);


//smoke top block


/*
console.clear();

canvasWidth = 1800;
canvasHeight = 150;

pCount = 0;


pCollection = new Array();

var puffs = 1;
var particlesPerPuff = 2000;
var img = '../wp-content/themes/klaus-ux/img/smoke-effect.png';

var smokeImage = new Image();
smokeImage.src = img;

for (var i1 = 0 ; i1 < puffs; i1++)
{
    var puffDelay = i1 * 1500; //300 ms between puffs

    for (var i2 = 0 ; i2 < particlesPerPuff; i2++)
    {
        addNewParticle((i2*50) + puffDelay);
    }
}


draw(new Date().getTime(), 3000)



function addNewParticle(delay)
{

    var p = {};
    p.top = canvasHeight;
    p.left = randBetween(-200,800);

    p.start = new Date().getTime() + delay;
    p.life = 8000;
    p.speedUp = 30;


    p.speedRight = randBetween(0,20);

    p.rot = randBetween(-1,1);
    p.red = Math.floor(randBetween(0,255));
    p.blue = Math.floor(randBetween(0,255));
    p.green = Math.floor(randBetween(0,255));


    p.startOpacity = .3
    p.newTop = p.top;
    p.newLeft = p.left;
    p.size = 200;
    p.growth = 10;

    pCollection[pCount] = p;
    pCount++;


}

function draw(startT, totalT)
{
    //Timing
    var timeDelta = new Date().getTime() - startT;
    var stillAlive = false;

    //Grab and clear the canvas
    var c=document.getElementById("myCanvas");
    var ctx=c.getContext("2d");
    ctx.clearRect(0, 0, c.width, c.height);
    c.width = c.width;

    //Loop through particles
    for (var i= 0; i < pCount; i++)
    {
        //Grab the particle
        var p = pCollection[i];

        //Timing
        var td = new Date().getTime() - p.start;
        var frac = td/p.life

        if (td > 0)
        {
            if (td <= p.life )
            { stillAlive = true; }

            //attributes that change over time
            var newTop = p.top - (p.speedUp * (td/1000));
            var newLeft = p.left + (p.speedRight * (td/1000));
            var newOpacity = Math.max(p.startOpacity * (1-frac),0);

            var newSize = p.size + (p.growth * (td/1000));
            p.newTop = newTop;
            p.newLeft = newLeft;

            //Draw!
            ctx.fillStyle = 'rgba(150,150,150,' + newOpacity + ')';
            ctx.globalAlpha  = newOpacity;
            ctx.drawImage(smokeImage, newLeft, newTop, newSize, newSize);
        }
    }



    //Repeat if there's still a living particle
    if (stillAlive)
    {
        requestAnimationFrame(function(){draw(startT,totalT);});
    }
    else
    {
        clog(timeDelta + ": stopped");
    }
}

function randBetween(n1,n2)
{
    var r = (Math.random() * (n2 - n1)) + n1;
    return r;
}

function randOffset(n, variance)
{
    //e.g. variance could be 0.1 to go between 0.9 and 1.1
    var max = 1 + variance;
    var min = 1 - variance;
    var r = Math.random() * (max - min) + min;
    return n * r;
}

function clog(s)
{
    console.log(s);
}*/
