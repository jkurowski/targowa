document.addEventListener("DOMContentLoaded", function() {
    const header = $('header');
    const aboveHeight = 20;

    function onScroll() {
        if ($(window).scrollTop() > aboveHeight && !header.hasClass('fixed')) {
            header.addClass('fixed');
            header.css({
                animation: "stickymenu 500ms",
                animationFillMode: "forwards"
            });
        }
        if ($(window).scrollTop() < aboveHeight && header.hasClass('fixed')) {
            header.removeClass('fixed');
            header.removeAttr('style');
        }
    }
    window.addEventListener('scroll', function() {
        requestAnimationFrame(onScroll);
    });

    onScroll();
});
