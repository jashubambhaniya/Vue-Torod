$(document).ready(function () {
    $(window).scroll(function () {
        if ($(window).scrollTop() >= 10) {
            $(".new_navigation-bar").addClass("header-sticky animated");
        } else {
            $(".new_navigation-bar").removeClass("header-sticky animated");
        }
    });
});

$(document).on("click", "#clickmobmenu", function () {
    $(".nav-primary").toggleClass("open");
});

$(document).ready(function () {
    function myFunction(x) {
        if (x.matches) {
            // If media query matches
            $("ul.my_productul>li>a").on("click", function () {
                jQuery("body, html").animate(
                    {
                        scrollTop: jQuery("#tab_product").offset().top - 110,
                    },
                    2000
                );
            });
        } else {
        }
    }

    var x = window.matchMedia("(max-width: 700px)");
    myFunction(x); // Call listener function at run time
    x.addListener(myFunction); // Attach listener function on state changes
});
