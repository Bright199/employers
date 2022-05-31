<!DOCTYPE html>
<html lang="en">
<title>CALENDAR</title>
<?php require_once 'includes/header.php' ?>

<body>

    <div class="row">
        <div class="col-md-3">
        </div>
        <div class="col-md-6">
            <h2>Calendar </h2>
            <div class="calendar-container shadow ">
                <div class="calendar-header">
                    <p>
                        <span class="month-name"></span>
                        <span class="displayed-year"></span>
                    </p>
                    <ul>
                        <li class="calendar-prev-btn calendar-btn">
                            <span class="fa-solid fa-angle-left"></span>
                        </li>

                        <li class="calendar-next-btn calendar-btn">
                            <span class="fa-solid fa-angle-right"></span>
                        </li>
                    </ul>
                </div>
                <div class="calendar-week-days">
                    <ul>
                        <li>MON</li>
                        <li>TUE</li>
                        <li>WED</li>
                        <li>THUR</li>
                        <li>FRI</li>
                        <li>SAT</li>
                        <li>SUN</li>
                    </ul>
                </div>

                <div class="calendar-dates">
                    <ul class="calendar-dates-list">
                        <li></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <span class="today-date"></span>
            <span class="today-day"></span>
        </div>
    </div>



    <script>
        var days = [
            "Sun", "Mon", "Tues", "Wed", "Thu", "Fri", "Sat"
        ];
        var dates = [
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
            "December",
        ];
        const displayedYearDiv = document.querySelector('.displayed-year');
        const monthNameDiv = document.querySelector('.month-name');
        const todayDateDiv = document.querySelector('.today-date');
        const todayDayDiv = document.querySelector('.today-day');
        const datesDiv = document.querySelector('.calendar-dates-list');
        const calendarPrevBtn = document.querySelector('.calendar-prev-btn');
        const calendarNextBtn = document.querySelector('.calendar-next-btn');


        var date = new Date();
        var fullYear = date.getFullYear();
        var monthNumber = date.getMonth(); //this gives us a number of the month
        var monthName = dates[monthNumber]; //get the name of the month using the index
        var todayDate = date.getDate();
        var dayNumber = date.getDay() ;// this gives us a number of the day
        var todayDay = days[dayNumber];
        var lastDayOfMonth = new Date(fullYear, monthNumber + 1, 0).getDate() ;
        var lastDayOfLastMonth = new Date(fullYear, monthNumber, 0).getDate() ;
        var firstDay = new Date(fullYear, monthNumber, 1).toLocaleDateString('en-us',{
            weekday: 'short',
        });

        // console.log(lastDayOfLastMonth);
        // console.log(days.indexOf(firstDay));
        var indexOfFirstDay = days.indexOf(firstDay); 
        var dateList = "";
        // for (let index = 6; index > indexOfFirstDay ; index--) {
        //     dateList += '<li></li>'
        // }
        // this sets the previous days 
        //if you want to remove previous days you can just add only list items without anything inside them
        for (let index = 6; index > days.indexOf(firstDay); index--) {
            dateList += '<li class="prev-dates">'+(lastDayOfLastMonth-index +1)+'</li>'
        }

        //this sets the main calender dates
        for (let index = 1; index <= lastDayOfMonth; index++) {
            dateList += '<li>'+index+'</li>'
            
        }

        //this sets the next dates
        for (indexOfFirstDay; 6 > indexOfFirstDay; indexOfFirstDay++) {
            dateList += '<li class="next-dates">'+(1 + indexOfFirstDay)+'</li>'
        }


        datesDiv.innerHTML = dateList

        function setDefaultDate(){
            return monthNameDiv.innerHTML = monthName
        }
        function setDefaultFullYear(){
            return displayedYearDiv.innerHTML = fullYear
        }

        calendarNextBtn.addEventListener('click', function(){
            alert(monthNumber)
            if(monthNumber  === 11){
                monthNumber = 0
                fullYear +=1
            }else{
                monthNumber += 1
            }
        })
        calendarPrevBtn.addEventListener('click', function(){
            alert(monthNumber)
            if(monthNumber  === 0){
                monthNumber = 11
                fullYear -=1
            }else{
                monthNumber -= 1
            }
        })
        setDefaultDate();
        setDefaultFullYear();

        
    </script>
</body>

</html>
<style scoped>
    body {
        background-color: #fff;
    }

    .calendar-header {
        background-color: #020202;
        display: flex;
        justify-content: space-between;
        padding: 10px;
        color: #fff;
        font-size: 22px;
    }

    .calendar-header ul {
        list-style: none;
        display: flex;
        gap: 40px;
        padding: 0;
        margin: 0;
    }

    .calendar-header p {
        padding: 0;
        margin: 0;
    }

    .calendar-week-days {
        padding: 10px;
    }

    .calendar-week-days ul {
        display: flex;
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .calendar-week-days ul li {
        margin-right: 10px;
    }

    .calendar-dates {
        padding: 0px 10px 10px;
    }

    .calendar-dates ul {
        display: flex;
        flex-wrap: wrap;
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .calendar-week-days ul li,
    .calendar-dates ul li {
        width: 14.28%;
        text-align: center
    }

    .prev-dates, .next-dates {
        color: lightgray;
    }
</style>