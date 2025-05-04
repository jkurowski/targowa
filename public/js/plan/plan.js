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
    $('#list').click(function () {
        $('#list img').addClass('active');
        $('#grid img').removeClass('active');
        $('#offerList').removeClass('grid');
        $('#offerList').addClass('list');
    });
    $('#grid').click(function () {
        $('#grid img').addClass('active');
        $('#list img').removeClass('active');
        $('#offerList').removeClass('list');
        $('#offerList').addClass('grid');
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
