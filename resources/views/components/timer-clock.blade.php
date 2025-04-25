<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"  id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flipclock/0.7.8/flipclock.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/flipclock/0.7.8/flipclock.js"></script>

<div class="min-h-screen bg-gray-100 dark:bg-gray-900">
    <div class="days" style="margin:2em;"></div>
    <div class="message"></div>

    <script type="text/javascript">
  var clock;

  var currentdate = new Date("January 31, 2025 20:30:25").getTime();
  var sysdate = new Date("Dec 25, 2022 00:00:00").getTime();

  $(document).ready(function() {

      var clock;

      clock = $('.days').FlipClock({
          clockFace: 'HourlyCounter',
          autoStart: true,
          callbacks: {
              stop: function() {
                  $('.message').html('The clock has stopped!')
                }
            }
        });

        // clock.setTime(sysdate - currentdate);
        // clock.setCountup(true);
        clock.sysdate
    })
</script>

</div>
