

$(function() {

    $("button").click(function() {
        $('#box').fadeOut(1000);
    });

    /*  ------------------
         JQUERY SELECTORS
        ------------------  */

    //$('h1, h2, h3').css('border', 'solid 1px blue');

    //$('div#container').css('border', 'solid 1px red');

    //$('p.lead').css('border', 'solid 1px blue');

    //$('li:first').css('border', 'solid 1px blue');

    //$('p:even').css('border','solid 1px blue');

    //$('p:odd').css('border','solid 1px blue');

    //$('div em').css('border','solid 1px blue');

    //$('div > p').css('border','solid 1px blue');

    //$(':header').css('border','solid 1px blue');

    $('div:contains("Brad")').css('border','solid 1px blue'); //It searchs for the word given 


    /*  ---------------
         EVENT METHODS
        ---------------  */

    $('#box').click(function() {
        alert('you clicked the box');
    });

    $('input').blur(function() {

        if( $(this).val() == "" ) {
            $(this).css({'border': 'solid 1px red', 'padding': '5.5px', 'border-radius': '3px'});
            $("#box").text("forgot something?");
        }

    });

    $('input').keydown(function() {

        if( $(this).val() !== "" ) {
            $(this).css({'border': 'solid 1px #777', 'padding': '5.5px', 'border-radius': '3px'});
            $('#box').text("thank you!");
        }

    });

    $('#box').hover(function() {

        $(this).text("You're in");

    }, function() {

        $(this).text("You're out");
        
    });


    /* -----------------
        jQUERY CHAINING
       ----------------- */

    $('.notification-bar').delay(3000).slideDown().delay(3000).fadeOut();



    /* ---------------
        jQUERY HIDING
       --------------- */

    //$('h1').hide();
    //$('div.hidden').show();

    //$('p').fadeOut();
    //$('div.hidden').fadeIn(8000);

    $('#box1').click(function() {
        $(this).fadeTo( 1000, 0.25, function() {
            $(this).slideUp();
        });
    });

    $('div.hidden').slideDown();

    $('button').click(function() {
        $('#box1').slideToggle();
    });

    /* ----------------
        jQUERY ANIMATE
       ---------------- */
       
    $('#left').click(function() {
        $('.box').animate({
            left: '-=40px',
            fontSize: '+=2px'
        }, function() {
            //animation complete
        });
    });

    $('#right').click(function() {
        $('.box').animate({
            left: '+=40px',
            fontSize: '-=2px'
        }, function() {
            //animation complete
        });
    });

    $('#up').click(function() {
        $('.box').animate({
            top: '-=40px',
            opacity: '+=0.1'
        }, function() {
            //animation complete
        });
    });

    $('#down').click(function() {
        $('.box').animate({
            top: '+=40px',
            opacity: '-=0.1'
        }, function() {
            //animation complete
        });
    });


<<<<<<< HEAD
    /* -------------
        jQUERY RACE
       ------------- */

    $('#go').click(function() {

        //get the width of the cars
        var carWidth = $('#car1').width(); 

        //get the width of the racetrack
        var raceTrackWidth = $(window).width() - carWidth;

        //Generate a random number between 1 and 5000
        var raceTime1 = Math.floor( (Math.random() * 5000) +1);
        var raceTime2 = Math.floor( (Math.random() * 5000) +1);

        //set a flago variable to FALSE
        var isComplete = false;

        var place = 'first';

    });
=======
    /* ------------
        jQUERY CSS
       ------------ */

    $('#circle2').css({
        'background': '#8a8d22', 
        'display': 'inline-block',
        'color': 'white',
        'text-align': 'center',
        'line-height': '140px',
        'height': '140px',
        'width': '140px'
    }).addClass('circleShape');
>>>>>>> 41edc3b5e8e694a13f77b27308d42002d4efb5e2

});

