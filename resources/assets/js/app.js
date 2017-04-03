let trigger = document.querySelector('.Nav-trigger');
let nav = document.querySelector('.Nav');

trigger.addEventListener('click', function() {
    if (trigger.classList.contains('Nav-trigger--open')) {
        trigger.classList.remove('Nav-trigger--open');
        nav.classList.remove('Nav--open');
    } else {
        trigger.classList.add('Nav-trigger--open');
        nav.classList.add('Nav--open');
    }
});
