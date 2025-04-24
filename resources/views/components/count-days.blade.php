<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
   <div class="row">
      <div class="col-lg-6 offset-3">
         <div class="timer">
            <div>
               <span class="days" id="day"></span>
               <div class="smalltext">Days</div>
            </div>
            <div>
               <span class="hours" id="hour"></span>
               <div class="smalltext">Hours</div>
            </div>
            <div>
               <span class="minutes" id="minute"></span>
               <div class="smalltext">Minutes</div>
            </div>
            <div>
               <span class="seconds" id="second"></span>
               <div class="smalltext">Seconds</div>
            </div>
            <p id="time-up"></p>
         </div>
      </div>
   </div>
</div>
<script type="text/javascript">
var deadline = new Date("January 31, 2025 20:30:25").getTime();
var x = setInterval(function() {
   var currentTime = new Date().getTime();
   var t = deadline - currentTime;
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
