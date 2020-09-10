let daysIND = document.getElementById('days');
let hoursIND = document.getElementById('hours');
let minutesIND = document.getElementById('minutes');
let secondsIND = document.getElementById('seconds');


// Set the date we're counting down to
let NewYears = "Jan 1, 2021";

// Update the count down every 1 second
let x = setInterval(function () {


    let countDownDate = new Date(NewYears);
    // Get todays date and time
    let currentDate = new Date().getTime();

    // Find the difference between todays day and count down date and divide it by 1000 to get seconds
    let totalseconds = (countDownDate - currentDate) / 1000;

    // Time calculations for days, hours, minutes and seconds
    let days = Math.floor(totalseconds / (60 * 60 * 24));
    let hours = Math.floor(totalseconds / (60 * 60) % 24);
    let minutes = Math.floor(totalseconds / 60) % 60;
    let seconds = Math.floor(totalseconds) % 60;

    daysIND.innerHTML = formatTime(days);
    hoursIND.innerHTML = formatTime(hours);
    minutesIND.innerHTML = formatTime(minutes);
    secondsIND.innerHTML = formatTime(seconds);

    function formatTime(time) {
        return (time < 10) ? ("0" + time) : time;
    }
});