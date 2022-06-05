// // masukkan script dari dashboard yang bisa diletakkan disini


// window.addEventListener('DOMContentLoaded', event => {

// const sidebarToggle = document.body.querySelector('#sidebarToggle');
// if (sidebarToggle) {
//     sidebarToggle.addEventListener('click', event => {
//         event.preventDefault();
//         document.body.classList.toggle('sb-sidenav-toggled');
//         localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
//     });
// }

// const datatablesSimple = document.getElementById('datatablesSimple');
// if (datatablesSimple) {
//     new simpleDatatables.DataTable(datatablesSimple);
// }
// });




window.addEventListener("load", () => {
    clock();
    function clock() {
        const today = new Date();

        // get time components
        const hours = today.getHours();
        const minutes = today.getMinutes();
        const seconds = today.getSeconds();

        //add '0' to hour, minute & second when they are less 10
        const hour = hours < 10 ? "0" + hours : hours;
        const minute = minutes < 10 ? "0" + minutes : minutes;
        const second = seconds < 10 ? "0" + seconds : seconds;

        //make clock a 12-hour time clock
        const hourTime = hour > 12 ? hour - 12 : hour;

        // if (hour === 0) {
        //   hour = 12;
        // }
        //assigning 'am' or 'pm' to indicate time of the day
        const ampm = hour < 12 ? "AM" : "PM";

        // get date components
        const month = today.getMonth();
        const year = today.getFullYear();
        const day = today.getDate();

        //declaring a list of all months in  a year
        const monthList = [
            "January",
            "February",
            "March",
            "April",
            "May",
            "June",
            "July",
            "August",
            "September",
            "October",
            "November",
            "December"
        ];

        //get current date and time
        const date = monthList[month] + " " + day + ", " + year;
        const time = hourTime + ":" + minute + ":" + second + ampm;

        //combine current date and time
        const dateTime = date + " - " + time;

        //print current date and time to the DOM
        document.getElementById("date-time").innerHTML = dateTime;
        setTimeout(clock, 1000);
    }
});

setInterval(() => {
    d = new Date();
    htime = d.getHours();
    mtime = d.getMinutes();
    stime = d.getSeconds();
    hrotation = 30 * htime + mtime / 2;
    mrotation = 6 * mtime;
    srotation = 6 * stime;

    hour.style.transform = `rotate(${hrotation}deg)`;
    minute.style.transform = `rotate(${mrotation}deg)`;
    second.style.transform = `rotate(${srotation}deg)`;
}, 1000);
