const resizeDelay = 200;
const floorHoverColor = '947245';
const floorHoverOpacity = 0.6;

function onWindowResize() {
    window.setTimeout(function () {
        const e = $('#plan-holder').width();
        $("#invesmentplan").mapster("resize",e);
    }, resizeDelay);
}

$(function () {
    function applyGridView() {
        $('#grid img').addClass('active');
        $('#list img').removeClass('active');
        $('#offerList').removeClass('list').addClass('grid');
    }

    $('#list').click(function () {
        $('#list img').addClass('active');
        $('#grid img').removeClass('active');
        $('#offerList').removeClass('grid').addClass('list');
    });

    $('#grid').click(function () {
        applyGridView();
    });

    // Trigger once on load if window is less than 1000px
    if ($(window).width() < 1000) {
        applyGridView();
    }

    // Trigger on resize only if crossing the 1000px boundary
    let wasBelowThreshold = $(window).width() < 1000;

    $(window).on('resize', function () {
        const isBelowThreshold = $(window).width() < 1000;

        if (isBelowThreshold && !wasBelowThreshold) {
            applyGridView();
        }

        wasBelowThreshold = isBelowThreshold;
    });
});

$(document).ready(function(){
    // Sidemenu for floors
    $(".plan-control a").hover(function() {
        const e = $(this).attr("data-floornumber");
        $("area[alt='floor-"+ e +"']").mapster("set", true, {
            fillColor: floorHoverColor,
            fillOpacity: floorHoverOpacity
        })
    }, function() {
        $("area").mapster("set", false);
    });

    $('#invesmentplan').mapster({
        fillColor: floorHoverColor,
        fillOpacity: floorHoverOpacity,
        clickNavigate: true
    });
});

$(window).bind('resize', onWindowResize);
