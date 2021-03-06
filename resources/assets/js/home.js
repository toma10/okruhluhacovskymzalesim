import countdown from './countdown'

$('.bxslider').bxSlider({
    mode: 'fade',
    speed: 2000,
    pager: false,
    controls: false,
    auto: true
});

(function() {
    countdown.start({
        wrapper: document.querySelector('.Countdown'),
        wrapperVisibleClass: 'Countdown--is-visible',
        startDate: "2018-7-21 12:30:00",
        countdownDaysLeft: document.querySelector('.Countdown__days'),
        countdownHoursLeft: document.querySelector('.Countdown__hours'),
        countdownMinutesLeft: document.querySelector('.Countdown__minutes'),
        countdownSecondsLeft: document.querySelector('.Countdown__seconds')
    });
})();
