/*


       444444444  DDDDDDDDDDDDD       lllllll                             lllllll
      4::::::::4  D::::::::::::DDD    l:::::l                             l:::::l
     4:::::::::4  D:::::::::::::::DD  l:::::l                             l:::::l
    4::::44::::4  DDD:::::DDDDD:::::D l:::::l                             l:::::l
   4::::4 4::::4    D:::::D    D:::::D l::::l         ppppp   ppppppppp    l::::l
  4::::4  4::::4    D:::::D     D:::::Dl::::l         p::::ppp:::::::::p   l::::l
 4::::4   4::::4    D:::::D     D:::::Dl::::l         p:::::::::::::::::p  l::::l
4::::444444::::444  D:::::D     D:::::Dl::::l         pp::::::ppppp::::::p l::::l
4::::::::::::::::4  D:::::D     D:::::Dl::::l          p:::::p     p:::::p l::::l
4444444444:::::444  D:::::D     D:::::Dl::::l          p:::::p     p:::::p l::::l
          4::::4    D:::::D     D:::::Dl::::l          p:::::p     p:::::p l::::l
          4::::4    D:::::D    D:::::D l::::l          p:::::p    p::::::p l::::l
          4::::4  DDD:::::DDDDD:::::D l::::::l         p:::::ppppp:::::::pl::::::l
        44::::::44D:::::::::::::::DD  l::::::l ......  p::::::::::::::::p l::::::l
        4::::::::4D::::::::::::DDD    l::::::l .::::.  p::::::::::::::pp  l::::::l
        4444444444DDDDDDDDDDDDD       llllllll ......  p::::::pppppppp    llllllll
                                                       p:::::p
                                                       p:::::p
                                                      p:::::::p
                                                      p:::::::p
                                                      p:::::::p
                                                      ppppppppp

	http://www.4dl.pl/
*/

// Slider
(function(c,I,B){c.fn.responsiveSlides=function(l){var a=c.extend({auto:!0,speed:100,timeout:4E3,pager:!1,nav:!1,random:!1,pause:!1,pauseControls:!0,prevText:"Previous",nextText:"Next",maxwidth:"",navContainer:"",manualControls:"",namespace:"rslides",before:c.noop,after:c.noop},l);return this.each(function(){B++;var f=c(this),s,r,t,m,p,q,n=0,e=f.children(),C=e.size(),h=parseFloat(a.speed),D=parseFloat(a.timeout),u=parseFloat(a.maxwidth),g=a.namespace,d=g+B,E=g+"_nav "+d+"_nav",v=g+"_here",j=d+"_on",
    w=d+"_s",k=c("<ul class='"+g+"_tabs "+d+"_tabs' />"),x={"float":"left",position:"relative",opacity:1,zIndex:2},y={"float":"none",position:"absolute",opacity:0,zIndex:1},F=function(){var b=(document.body||document.documentElement).style,a="transition";if("string"===typeof b[a])return!0;s=["Moz","Webkit","Khtml","O","ms"];var a=a.charAt(0).toUpperCase()+a.substr(1),c;for(c=0;c<s.length;c++)if("string"===typeof b[s[c]+a])return!0;return!1}(),z=function(b){a.before(b);F?(e.removeClass(j).css(y).eq(b).addClass(j).css(x),
        n=b,setTimeout(function(){a.after(b)},h)):e.stop().fadeOut(h,function(){c(this).removeClass(j).css(y).css("opacity",1)}).eq(b).fadeIn(h,function(){c(this).addClass(j).css(x);a.after(b);n=b})};a.random&&(e.sort(function(){return Math.round(Math.random())-0.5}),f.empty().append(e));e.each(function(a){this.id=w+a});f.addClass(g+" "+d);l&&l.maxwidth&&f.css("max-width",u);e.hide().css(y).eq(0).addClass(j).css(x).show();F&&e.show().css({"-webkit-transition":"opacity "+h+"ms ease-in-out, 5s transform linear","-moz-transition":"opacity "+
        h+"ms ease-in-out, 5s transform linear","-o-transition":"opacity "+h+"ms ease-in-out, 5s transform linear",transition:"opacity "+h+"ms ease-in-out, 5s transform linear"});if(1<e.size()){if(D<h+100)return;if(a.pager&&!a.manualControls){var A=[];e.each(function(a){a+=1;A+="<li><a href='#' class='"+w+a+"'>"+a+"</a></li>"});k.append(A);l.navContainer?c(a.navContainer).append(k):f.after(k)}a.manualControls&&(k=c(a.manualControls),k.addClass(g+"_tabs "+d+"_tabs"));(a.pager||a.manualControls)&&k.find("li").each(function(a){c(this).addClass(w+(a+1))});if(a.pager||a.manualControls)q=
    k.find("a"),r=function(a){q.closest("li").removeClass(v).eq(a).addClass(v)};a.auto&&(t=function(){p=setInterval(function(){e.stop(!0,!0);var b=n+1<C?n+1:0;(a.pager||a.manualControls)&&r(b);z(b)},D)},t());m=function(){a.auto&&(clearInterval(p),t())};a.pause&&f.hover(function(){clearInterval(p)},function(){m()});if(a.pager||a.manualControls)q.bind("click",function(b){b.preventDefault();a.pauseControls||m();b=q.index(this);n===b||c("."+j).queue("fx").length||(r(b),z(b))}).eq(0).closest("li").addClass(v),
a.pauseControls&&q.hover(function(){clearInterval(p)},function(){m()});if(a.nav){g="<a href='#' class='"+E+" prev'><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"10\" height=\"17\" viewBox=\"0 0 10 17\"><path d=\"M8.389,2.891,14.73,9.237a1.193,1.193,0,0,0,1.693,0,1.209,1.209,0,0,0,0-1.7L9.237.349A1.2,1.2,0,0,0,7.585.314L.35,7.534a1.2,1.2,0,1,0,1.693,1.7Z\" transform=\"translate(0 16.771) rotate(-90)\" fill=\"#978c7d\"/></svg>\</a><a href='#' class='"+E+" next'><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"10\" height=\"17\" viewBox=\"0 0 10 17\"><path d=\"M8.389,6.7,14.73.352a1.193,1.193,0,0,1,1.693,0,1.209,1.209,0,0,1,0,1.7L9.237,9.24a1.2,1.2,0,0,1-1.653.035L.35,2.055A1.2,1.2,0,0,1,2.042.357Z\" transform=\"translate(0 16.771) rotate(-90)\" fill=\"#978c7d\"/></svg></a>";l.navContainer?c(a.navContainer).append(g):f.after(g);var d=c("."+d+"_nav"),G=d.filter(".prev");d.bind("click",function(b){b.preventDefault();b=c("."+j);if(!b.queue("fx").length){var d=e.index(b);b=d-1;d=d+1<C?n+1:0;z(c(this)[0]===G[0]?b:d);if(a.pager||a.manualControls)r(c(this)[0]===G[0]?b:d);a.pauseControls||m()}});a.pauseControls&&d.hover(function(){clearInterval(p)},function(){m()})}}if("undefined"===typeof document.body.style.maxWidth&&l.maxwidth){var H=function(){f.css("width","100%");f.width()>u&&f.css("width",u)};H();c(I).bind("resize",function(){H()})}})}})(jQuery,this,0);

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
