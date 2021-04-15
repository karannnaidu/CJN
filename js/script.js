$(document).ready(function () {


    //  for checking 
    //$('h1').click(function () {
    //    $(this).css('background-color', '#ff0000');
    //})
    $('#primary').hide();
    $('#secondary').hide();
    $('#fade1').hide();
    $('#fade4').hide();
    $('.section-about').waypoint(function (direction) {
        if (direction == 'down') {



            $('#primary').fadeIn(1000);
        } else {
            // $('#primary').hide(400);
        }
    }, {
        offset: '450px'

    });
    $('.section-development').waypoint(function (direction) {
        if (direction == 'down') {

            $('#secondary').fadeIn(1000);
        } else {
            //   $('#secondary').hide(400);
        }
    }, {
        offset: '450px'

    });

    $('.section-projects').waypoint(function (direction) {
        if (direction == 'down') {


            $('#fade1').fadeIn(600);
        } else {
            //   $('#secondary').hide(400);
        }
    }, {
        offset: '450px'

    });

    $('.section-images').waypoint(function (direction) {

        if (direction == "down") {

            $(".white-heading").animate({
                bottom: '500px',
                opacity: '1'
            }, 2000, function () { });

            //  $('nav').addClass('u-popup');
            // $('#').fadeIn(600);
        } else {
            // $('nav').removeClass('u-popup');
        }
    }, {
        offset: '450px'
    });

    $('.section-sai-fortune').waypoint(function (direction) {
        if (direction == 'down') {
            $("#fade2").animate({
                left: '0px',
                opacity: '1'
            }, 2000, function () { });
            $("#fade3").animate({
                left: '320px',
                opacity: '.9'
            }, 1700, function () { });
            $("#fade4").delay(1500).fadeIn(800);
        } else {
            //   $('#secondary').hide(400);
        }
    }, {
        offset: '450px'

    });

    $('.js-nav-icon').on('click', function () {
        var nav = $('.js-main-nav');
        nav.slideToggle(200);
        var icon = $('.js-nav-icon i');
        if (icon.hasClass('ion-md-menu')) {
            icon.addClass('ion-md-close');
            icon.removeClass('ion-md-menu');
        }
        else {
            icon.addClass('ion-md-menu');
            icon.removeClass('ion-md-close');

        }


    });
    $('.js-nav-icon-fortune').on('click', function () {
        var nav = $('.js-main-nav-fortune');
        nav.slideToggle(200);
        var icon = $('.js-nav-icon-fortune i');
        if (icon.hasClass('ion-md-menu')) {
            icon.addClass('ion-md-close');
            icon.removeClass('ion-md-menu');
        }
        else {
            icon.addClass('ion-md-menu');
            icon.removeClass('ion-md-close');

        }


    });

    var windowWidth = $(window).width();
    if (windowWidth <= 500) {
        //Means the screen is mobile add a class
        $("#view").addClass("colorchange");
    }
    else {
        //Means screen is desktop or tablet
        $("#view").removeClass("colorchange");

    }

    $('#cjnlogobluesmall').click(function () {
        window.location.href = this.id + '.html';
    });


});