!function(t){function e(o){if(n[o])return n[o].exports;var r=n[o]={i:o,l:!1,exports:{}};return t[o].call(r.exports,r,r.exports,e),r.l=!0,r.exports}var n={};e.m=t,e.c=n,e.i=function(t){return t},e.d=function(t,n,o){e.o(t,n)||Object.defineProperty(t,n,{configurable:!1,enumerable:!0,get:o})},e.n=function(t){var n=t&&t.__esModule?function(){return t.default}:function(){return t};return e.d(n,"a",n),n},e.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},e.p="",e(e.s=5)}([,function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var o=n(3);$(".bxslider").bxSlider({mode:"fade",speed:2e3,pager:!1,controls:!1,auto:!0}),function(){o.a.start({wrapper:document.querySelector(".Countdown"),wrapperVisibleClass:"Countdown--is-visible",startDate:"2017-7-22 12:30:00",countdownDaysLeft:document.querySelector(".Countdown__days"),countdownHoursLeft:document.querySelector(".Countdown__hours"),countdownMinutesLeft:document.querySelector(".Countdown__minutes"),countdownSecondsLeft:document.querySelector(".Countdown__seconds")})}()},,function(t,e,n){"use strict";e.a=function(){function t(t){n=t,n.wrapper.classList.add(n.wrapperVisibleClass),clearInterval(o);var r=new Date(n.startDate).getTime();e(Math.round((r-Date.now())/1e3)),o=setInterval(function(){var t=Math.round((r-Date.now())/1e3);t<=0&&clearInterval(o),e(t)},1e3)}function e(t){var e=Math.floor(t/86400),o=t%86400,r=Math.floor(o/3600);o%=3600;var u=Math.floor(o/60);o%=60,n.countdownDaysLeft.textContent=e,n.countdownHoursLeft.textContent=r,n.countdownMinutesLeft.textContent=u,n.countdownSecondsLeft.textContent=o}var n={},o=void 0;return{start:t}}()},,function(t,e,n){t.exports=n(1)}]);