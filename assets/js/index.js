// ********************
// COUNTDOWN WIDGET
// ********************

const countdownWidget = document.querySelector('#countdown');
const retreatDate = new Date("July 21, 2021 12:00:00 EDT").getTime();

const timer = () => {
    const now = new Date().getTime();
    let diff = retreatDate - now;
    if(diff < 0) {
        countdownWidget.classList.add('is-hidden');
    }

let days = Math.floor(diff / (1000*60*60*24));
let hours = Math.floor(diff % (1000*60*60*24) / (1000*60*60));
let minutes = Math.floor(diff % (1000*60*60) / (1000*60));
let seconds = Math.floor(diff % (1000*60) / 1000);

days <= 9 ? days = `0${days}` : days;
hours <= 9 ? hours = `0${hours}` : hours;
minutes <= 9 ? minutes = `0${minutes}` : minutes;
seconds <= 9 ? seconds = `0${seconds}` : seconds;

document.querySelector('#days').textContent = days;
document.querySelector('#hours').textContent = hours;
document.querySelector('#minutes').textContent = minutes;
document.querySelector('#seconds').textContent = seconds;

}

timer();
setInterval(timer, 1000);