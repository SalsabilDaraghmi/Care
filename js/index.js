/*====================================================
               Exercises
=====================================================*/

$(function() {
    new WOW().init();
});

/*====================================================
               report
=====================================================*/
$(function() {
    $("#report").magnificPopup({
        delegate: 'a', // child items selector, by clicking on it popup will open
        type: 'image',
        gallery: {
            enabled: true
        }
    });
    $('.ajax-popup-link').magnificPopup({
        type: 'ajax',
        ajax: {
            // settings: null, // Ajax settings object that will extend default one - http://api.jquery.com/jQuery.ajax/#jQuery-ajax-settings
            // For example:
            // settings: {cache:false, async:false}

            cursor: 'mfp-ajax-cur', // CSS class that will be added to body during the loading (adds "progress" cursor)
            tError: '<a href="%url%">The content</a> could not be loaded.', //  Error message, can contain %curr% and %total% tags if gallery is enabled


        },
        closeOnContentClick: {
            enabled: false
        },
        showCloseBtn: {
            enabled: true
        }
    });
});


/*====================================================
               signin
=====================================================*/

// function doct() {
//     ///some conditions befor go to the next page
//     document.getElementById("contactdoc").innerHTML = " <b class='doc2''>سيم ارسال رسالة الى رقم هاتفك المحمول في حال قبولك</b>";
//     document.getElementById("contactdoc").style.marginTop = "-100px";
// }

// function docORper() {
//     let v1 = document.getElementById("doctor");
//     let v2 = document.getElementById("person");
//     if (v1.checked == true) {
//         document.getElementById("contact").style.display = "none";
//         document.getElementById("contactdoc").style.display = "block";
//     } else if (v2.checked == true) {
//         document.getElementById("linktopersonpage").href = "person.html"

//     } else {

//         alert("يجب عليك ان تختار ازا كنت زائر او طبيب قبل مغادرة الصفحة");
//     }
// }

/*====================================================
                login
=====================================================*/

function close_pop() {
    document.getElementById("logEr").style.display = "none";
    document.getElementById("login-pop").style.display = "none";

    // alert("close");
}

function open_pop() {
    document.getElementById("login-pop").style.display = "block";
    // alert("open");
}

/*====================================================
               doctors
=====================================================*/
$(function() {

    $("#doctors_team").owlCarousel({
        items: 3,
        autoplay: true,
        speed: 1000,
        loop: true,
        autoplayHoverPause: true,
        animateOut: 'slideOutDown',
        animateIn: 'flipInX'
    });

    $("#report-items").owlCarousel({
        items: 3,
        autoplay: true,
        speed: 1000,
        loop: true,
        autoplayHoverPause: true,
        animateOut: 'slideOutDown',
        animateIn: 'flipInX'
    });
});
/*====================================================
              stats
=====================================================*/
$(function() {
    $('.counter').counterUp({
        delay: 10,
        time: 2500,
        triggerOnce: true
    });
});
/*====================================================
              navbar
=====================================================*/






$(function() {

    var link = $('#care-menu a.ref');

    // Move to specific section when click on menu link
    link.on('click', function(e) {
        var target = $($(this).attr('href'));
        $('html, body').animate({
            scrollTop: target.offset().top
        }, 600);
        $(this).addClass('active');
        e.preventDefault();
    });

    // Run the scrNav when scroll
    $(window).on('scroll', function() {
        scrNav();
    });

    // scrNav function 
    // Change active dot according to the active section in the window
    function scrNav() {
        var sTop = $(window).scrollTop();
        $('section').each(function() {
            var id = $(this).attr('id'),
                offset = $(this).offset().top - 1,
                height = $(this).height();
            if (sTop >= offset && sTop < offset + height) {
                link.removeClass('active');
                $('#care-menu').find('[data-scroll="' + id + '"]').addClass('active');
            }
        });
    }
    scrNav();
});