<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link href='https://fonts.googleapis.com/css?family=Agbalumo' rel='stylesheet'>
  <style>
        h1 {
          font-family: 'Agbalumo';font-size: 40px; text-align: center
        }
        h2{
          font-family: 'Agbalumo';font-size: 15px; text-align: center
        }
        </style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flipclock/0.7.8/flipclock.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div>
    <h1>Juntos a exatos:</h1>
</div>

<div class="container">
   <div class="row">
      <div class="col-lg-6 offset-3">
         <div class="timer">
            <div >
                <div class="smalltext">Days:
                    <span class="days" id="day"></span>
                </div>
            </div>
            <div>
                <div class="smalltext">Hours:
                    <span class="hours" id="hour"></span>
                </div>
            </div>
            <div>
                <div class="smalltext">Minutes:
                    <span class="minutes" id="minute"></span>
                </div>
            </div>
            <div>
                <div class="smalltext">Seconds:
                    <span class="seconds" id="second"></span>
                </div>
            </div>
            <p id="time-up"></p>
         </div>
      </div>
   </div>
</div>
<script type="text/javascript">
var deadline = new Date("January 12, 2025 01:30:25").getTime();
var x = setInterval(function() {
   var currentTime = new Date().getTime();
   var t = currentTime - deadline;
   var days = Math.floor(t / (1000 * 60 * 60 * 24));
   var hours = Math.floor((t%(1000 * 60 * 60 * 24))/(1000 * 60 * 60));
   var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
   var seconds = Math.floor((t % (1000 * 60)) / 1000);
   document.getElementById("day").innerHTML =days ;
   document.getElementById("hour").innerHTML =hours;
   document.getElementById("minute").innerHTML = minutes;
   document.getElementById("second").innerHTML =seconds;
   if (t < 0) {
      clearInterval(x);
      document.getElementById("time-up").innerHTML = "TIME UP";
      document.getElementById("day").innerHTML ='0';
      document.getElementById("hour").innerHTML ='0';
      document.getElementById("minute").innerHTML ='0' ;
      document.getElementById("second").innerHTML = '0';
   }
}, 1000);


</script>
