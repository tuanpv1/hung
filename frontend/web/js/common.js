$(window).scroll(function () {

    var menuheight = $('.menu_top').height();

    var menu = $('.menu_top');

    var top = $(this).scrollTop();

    if (top >= (menuheight)) {

        menu.css({'position': 'fixed', 'background': '#fff', 'top': '0px', 'left': '0px', 'z-index': '8888'});

    } else {

        menu.css({'position': 'static', 'background': 'rgba(242,243,245,0.7)', 'border': 'none'});

    }

})

$(document).ready(function () {

    $('.link_image').on('click', function () {

        var url = $(this).attr('data-img');

        $('.box_images_details > img').remove();

        $('.box_images_details').append('<img  src="' + url + '"  id="img-detail"/>');

    });

})


$(document).ready(function () {

    $('.text_tn a').hover(function () {

        $('.images_absoultue1').css('display', 'block');

        $('.images_absoultue2').css('display', 'none');

        $('.text_tn a').css('opacity', '.35');

    }, function () {

        $('.images_absoultue2').css('display', 'block');

        $('.images_absoultue1').css('display', 'none');

        $('.text_tn a').css('opacity', '1');

    })


})

$(document).ready(function () {

    $('.dt-menu-toggle1').on('click', function () {

        $('.menu1').toggle('slow');

    })

    var wdt = $(window).width();

    if (wdt <= 768) {

        $('.menu1 li a').on('click', function () {

            $('.menu1').hide();

        })

        $('.menu2 li a').on('click', function () {

            $('.menu2').hide();

        })

    }

})

$(document).ready(function () {

    $('.dt-menu-toggle2').on('click', function () {

        $('.menu2').toggle('slow');

    })

})

$(document).ready(function () {

    $('.top_menu_icon').on('click', function () {

        $('.top_menu').toggle('slow');

    })

})




