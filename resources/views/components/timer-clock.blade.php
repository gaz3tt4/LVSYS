<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flipclock/0.7.8/flipclock.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/flipclock/0.7.8/flipclock.js"></script>

<div class="min-h-screen bg-gray-100 dark:bg-gray-900">
    <div class="clock" style="margin:2em;"></div>
    <div class="message"></div>

    <script type="text/javascript">
  var clock;

  $(document).ready(function() {

      var clock;

      clock = $('.clock').FlipClock({
          clockFace: 'HourlyCounter',
          autoStart: true,
          callbacks: {
              stop: function() {
                  $('.message').html('The clock has stopped!')
                }
            }
        });

        clock.setTime(180);
        clock.setCountup(true);
        clock.start();
    })
</script>

</div>
