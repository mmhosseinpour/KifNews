(function ($) {
    "use strict";
    $(".mobile-toggle").click(function () {
        $(".nav-menus").toggleClass("open");
    });
    $(".mobile-search").click(function () {
        $(".form-control-plaintext").toggleClass("open");
    });
    $(".form-control-plaintext").keyup(function (e) {
        if (e.target.value) {
            $("body").addClass("offcanvas");
        } else {
            $("body").removeClass("offcanvas");
        }
    });
})(jQuery);

$('.loader-wrapper').fadeOut('slow', function () {
    $(this).remove();
});

$(window).on('scroll', function () {
    if ($(this).scrollTop() > 600) {
        $('.tap-top').fadeIn();
    } else {
        $('.tap-top').fadeOut();
    }
});
$('.tap-top').click(function () {
    $("html, body").animate({
        scrollTop: 0
    }, 600);
    return false;
});

function toggleFullScreen() {
    if ((document.fullScreenElement && document.fullScreenElement !== null) ||
        (!document.mozFullScreen && !document.webkitIsFullScreen)) {
        if (document.documentElement.requestFullScreen) {
            document.documentElement.requestFullScreen();
        } else if (document.documentElement.mozRequestFullScreen) {
            document.documentElement.mozRequestFullScreen();
        } else if (document.documentElement.webkitRequestFullScreen) {
            document.documentElement.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);
        }
    } else {
        if (document.cancelFullScreen) {
            document.cancelFullScreen();
        } else if (document.mozCancelFullScreen) {
            document.mozCancelFullScreen();
        } else if (document.webkitCancelFullScreen) {
            document.webkitCancelFullScreen();
        }
    }
}
(function ($, window, document, undefined) {
    "use strict";
    var $ripple = $(".js-ripple");
    $ripple.on("click.ui.ripple", function (e) {
        var $this = $(this);
        var $offset = $this.parent().offset();
        var $circle = $this.find(".c-ripple__circle");
        var x = e.pageX - $offset.left;
        var y = e.pageY - $offset.top;
        $circle.css({
            top: y + "px",
            left: x + "px"
        });
        $this.addClass("is-active");
    });
    $ripple.on(
        "animationend webkitAnimationEnd oanimationend MSAnimationEnd",
        function (e) {
            $(this).removeClass("is-active");
        });
})(jQuery, window, document);

$(".chat-menu-icons .toogle-bar").click(function () {
    $(".chat-menu").toggleClass("show");
});


/*=====================
 05. Image to background js
 ==========================*/
$(".bg-img").parent().addClass('bg-size');

jQuery('.bg-img').each(function () {

    var el = $(this),
        src = el.attr('src'),
        parent = el.parent();

    parent.css({
        'background-image': 'url(' + src + ')',
        'background-size': 'cover',
        'background-position': 'center',
        'display': 'block'
    });

    el.hide();
});


/*=====================
 06. Product page
 ==========================*/
$('.color-selector ul li > div').on('click', function (e) {
    $(".color-selector ul li > div").removeClass("active");
    $(this).addClass("active");
});

$('.size-box ul li').on('click', function (e) {
    $(".size-box ul li").removeClass("active");
    $('#selectSize').removeClass('cartMove');
    $(this).addClass("active");
    $(this).parent().addClass('selected');
});

var qtyDecs = document.querySelectorAll(".qty-minus");
var qtyIncs = document.querySelectorAll(".qty-plus");
qtyDecs.forEach((qtyDec) => {
    qtyDec.addEventListener("click", function (e) {
        if (e.target.nextElementSibling.value > 0) {
            e.target.nextElementSibling.value--;
        } else {
            // delete the item, etc
        }
    })
})
qtyIncs.forEach((qtyDec) => {
    qtyDec.addEventListener("click", function (e) {
        e.target.previousElementSibling.value++;
    })
})