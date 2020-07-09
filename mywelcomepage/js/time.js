function startTime() {

    var clock = setInterval(clockTiming, 1000)

    function clockTiming() {
        // Show Full Date With Time
        // var date = new Date();

        // document.getElementById("txt1").innerHTML = "1. " + date;
        //Show only month
        // var month = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        // document.getElementById("txt2").innerHTML = "2. " + month[date.getMonth()];
        //Show Day
        // var days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
        // document.getElementById("txt3").innerHTML = "3. " + days[date.getDay()];
        //Show Time
        // var time = date.toLocaleTimeString();
        // document.getElementById("txt1").innerHTML = "4. " + time;
        // Date
        // document.getElementById("txt5").innerHTML = "5. " + date.getUTCDate();


        // Show Time
        // var time = date.toLocaleTimeString();
        // document.getElementById("txt1").innerHTML = date.getHours() + ":" + date.getMinutes();

        // Show Time
        var date = new Date(),
            hour = date.getHours(),
            minute = checkTime(date.getMinutes()),
            ss = checkTime(date.getSeconds());

        function checkTime(i) {
            if (i < 10) {
                i = "0" + i;
            }
            return i;
        }

        if (hour > 12) {
            hour = hour - 12;
            if (hour == 12) {
                hour = checkTime(hour);
                document.getElementById("txt1").innerHTML = hour + ":" + minute + " AM";
            } else {
                hour = checkTime(hour);
                document.getElementById("txt1").innerHTML = hour + ":" + minute + " PM";
            }
        } else {
            document.getElementById("txt1").innerHTML = hour + ":" + minute + " AM";
            // document.getElementById("txt1").innerHTML = hour + ":" + minute + ":" + ss + " AM";
        }
        // var time = setTimeout(startTime, 1000);

        // Show Time Ends

        var month = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        document.getElementById("txt2").innerHTML = date.getDate() + " " + month[date.getMonth()] + " " + date.getFullYear();

        // Show Day
        var days = ["SUNDAY", "MONDAY", "TUESDAY", "WEDNESDAY", "THURSDAY", "FRIDAY", "SATURDAY"];
        document.getElementById("txt3").innerHTML = days[date.getDay()];


    }
}