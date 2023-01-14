$(function() {
    $("#pictures").magnificPopup({
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

$(function() {
    $("#videos").magnificPopup({
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
              navbar
=====================================================*/
$(function() {
    $(window).scroll(function() {
        if ($(this).scrollTop() < 30) {
            //          hide
            $("nav").removeClass("care-top-nav");
        } else {
            $("nav").addClass("care-top-nav");

        }
    });
});
//close mobile menu in click
$(function() {
    $(".navbar-collapse ul li a").on("click touch", function() {
            $(".navbar-toggle").click();
        }

    );
});
/*====================================================
              smooth scrolling
=====================================================*/
$(function() {
    $("a.smooth-scroll").click(function(event) {

        event.preventDefault();
        var section = $(this).attr("href");
        $('html,body').animate({
            scrollTop: $(section).offset().top - 84
        }, 1250, "easeInOutExpo");
    });
});


$("#pictures-items").owlCarousel({
    items: 1,
    autoplay: true,
    smartSpeed: 1000,
    loop: true,
    autoplayHoverPause: true,
    animateOut: 'slideOutDown',
    animateIn: 'flipInX'
});


$("#videos-items").owlCarousel({
    items: 1,
    autoplay: true,
    smartSpeed: 1000,
    loop: true,
    autoplayHoverPause: true,
    animateOut: 'slideOutDown',
    animateIn: 'flipInX'
});

/*====================================================
               Exercises
=====================================================*/

$(function() {
    new WOW().init();
});


/*====================================================
                   timer
=====================================================*/

//
//var count=0;
// var timeLeft=300;
// function convTS(s){
//    var min =floor(s/60);
//    var sec = s %60
//    return min + 'h:s'+ sec;
// }
// // var ding;
// // function preload(){
// // //    ding= loadSound("")
// // }
//
//function setup(){
//
//    var timer =document.getElementById('timer');
//    timer.vlau=convTS(timeLeft-count);
//    function timeIt(){
//        count++;
//        timer.html(convTS(timeLeft-count));
//    
//    }
//    setInterval(timeIt,1000);
//}


var c = 0;
var st = true;
var star = 1;
var ide;
var timeLeft = 600;

function convTS(s) {
    var sec = s % 60;
    var min = (s - sec) / 60;
    if (min < 10 && sec > 9) {
        return '0' + min + 'm:' + sec + 's';
    } else if (sec < 10 && min > 9) {
        return min + 'm:' + '0' + sec + 's';
    } else if (sec < 10 && min < 10) {
        return ('0' + min + 'm:' + '0' + sec + 's');
    } else
        return min + 'm:' + sec + 's';
}

function timer() {
    setInterval("count()", 1000);
}

function count() {
    if (st === true) {
        c++;
        document.getElementById(ide).innerText = (convTS(timeLeft - c));

    }
    if (timeLeft === c) {
        stopT();
    }
}

function stopT() {
    st = false;
}

function startT(idtxt, tL) {
    st = true;
    ide = idtxt;
    timeLeft = tL;
    // alert("hello"+ide)
    if (star === 1) {
        timer();
    }
    star = 0;

}

function repeatT() {
    timeLeft = 600;
    c = 0;
    document.getElementById(ide).innerText = (convTS(timeLeft - c));
    stopT();
}

//=================العداد==============================
function startC() {

    if (document.getElementById("bt").innerHTML === "ابدأ") {
        document.getElementById("bt").innerHTML = " عد ";
        document.getElementById("counter1").innerHTML = "0/10";
        return;
    }
    let s = document.getElementById("counter1").innerHTML;
    let m = s.split("/");
    if (m[0] === "10") return;
    if (m[0] === "9") {
        document.getElementById("counter1").innerHTML = "10/10";
        document.getElementById("message1").innerHTML += "احسنت !!";


        return;
    }
    s = Number(m[0]);
    s++;
    document.getElementById("counter1").innerHTML = s + "/10";

}

function counter_1() {

    document.getElementById("bt").innerHTML = "ابدأ";
    document.getElementById("counter1").innerHTML = "";
    document.getElementById("message1").innerHTML = "";

}