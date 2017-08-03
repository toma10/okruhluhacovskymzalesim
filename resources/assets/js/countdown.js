export default (function() {
    let settings = {};
    let countdownInterval;

    function start(mySettings) {
        settings = mySettings

        settings.wrapper.classList.add(settings.wrapperVisibleClass);
        clearInterval(countdownInterval);

        let endTime = new Date(settings.startDate).getTime();
        let secondsLeft = Math.round((endTime - Date.now()) / 1000);

        if (secondsLeft <= 0) {
            secondsLeft = 0;
        }

        showTimeLeft(secondsLeft);

        countdownInterval = setInterval(() => {
            let secondsLeft = Math.round((endTime - Date.now()) / 1000);

            if (secondsLeft <= 0) {
                secondsLeft = 0;
                clearInterval(countdownInterval);
            }

            showTimeLeft(secondsLeft);
        }, 1000);
    }

    function showTimeLeft(seconds) {
        let daysLeft = Math.floor(seconds / 86400);
        let secondsLeft = seconds % 86400;

        let hoursLeft = Math.floor(secondsLeft / 3600);
        secondsLeft = secondsLeft % 3600;

        let minutesLeft = Math.floor(secondsLeft / 60);
        secondsLeft = secondsLeft % 60;

        settings.countdownDaysLeft.textContent = daysLeft;
        settings.countdownHoursLeft.textContent = hoursLeft;
        settings.countdownMinutesLeft.textContent = minutesLeft;
        settings.countdownSecondsLeft.textContent = secondsLeft;
    }

    return {
        start: start
    };
})();
