@props(['date'])

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Agbalumo' rel='stylesheet'>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<style>
    body {
        background-color: #235a91;
    }

    h1, h2 {
        font-family: 'Agbalumo', sans-serif;
        text-align: center;
    }

    h1 {
        font-size: 40px;
        margin-top: 40px;
        margin-bottom: 20px;
    }

    .time-box {
        background-color: #ffffff;
        border-radius: 15px;
        box-shadow: 0 0 15px rgba(0,0,0,0.1);
        padding: 30px;
        text-align: center;
    }

    .time-box .unit {
        font-size: 16px;
        font-weight: bold;
        color: #6c757d;
    }

    .time-box .value {
        font-size: 40px;
        font-weight: bold;
        color: #343a40;
    }

    #time-up {
        font-size: 20px;
        margin-top: 20px;
        color: red;
    }

    .button-container {
        display: none; /* Escondido por padrão */
        margin-top: 30px;
        text-align: center;
    }

    .button-container.show {
        display: block;
        animation: fadeIn 1s ease-in;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: scale(0.8);
        }
        to {
            opacity: 1;
            transform: scale(1);
        }
    }
</style>

<div>
    <h1>Juntos há exatos:</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="time-box d-flex justify-content-around">
                <div>
                    <div class="unit">Anos</div>
                    <div class="value" id="year">0</div>
                </div>
                <div>
                    <div class="unit">Dias</div>
                    <div class="value" id="day">0</div>
                </div>
                <div>
                    <div class="unit">Horas</div>
                    <div class="value" id="hour">0</div>
                </div>
                <div>
                    <div class="unit">Minutos</div>
                    <div class="value" id="minute">0</div>
                </div>
                <div>
                    <div class="unit">Segundos</div>
                    <div class="value" id="second">0</div>
                </div>
            </div>
            <p id="time-up" class="text-center"></p>

            <!-- Botão que aparece apenas após 1 ano -->
            <div id="button-container" class="button-container">
                <h2 style="color: #fff; margin-bottom: 20px;">🎉 1 Ano Juntos! 🎉</h2>
                <a href="{{ route('OneYear') }}">
                    <x-button-love></x-button-love>
                </a>
            </div>
        </div>
    </div>
</div>

<script>
    var deadline = new Date("{{ $date ?? '2025-01-12T00:00:00' }}").getTime();

    var x = setInterval(function() {
        var currentTime = new Date().getTime();
        var t = currentTime - deadline;
        var years = Math.floor(t / (1000 * 60 * 60 * 24 * 365));
        var days = Math.floor(t / (1000 * 60 * 60 * 24));
        var hours = Math.floor((t % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((t % (1000 * 60)) / 1000);

        document.getElementById("year").innerText = years;
        document.getElementById("day").innerText = days;
        document.getElementById("hour").innerText = hours;
        document.getElementById("minute").innerText = minutes;
        document.getElementById("second").innerText = seconds;

        // Mostra o botão quando completar 1 ano ou mais
        var buttonContainer = document.getElementById("button-container");
        if (years >= 1) {
            buttonContainer.classList.add("show");
        } else {
            buttonContainer.classList.remove("show");
        }

        if (t < 0) {
            clearInterval(x);
            document.getElementById("time-up").innerHTML = "O tempo ainda não começou.";
            document.getElementById("year").innerHTML = '0';
            document.getElementById("day").innerHTML = '0';
            document.getElementById("hour").innerHTML = '0';
            document.getElementById("minute").innerHTML = '0';
            document.getElementById("second").innerHTML = '0';
            buttonContainer.classList.remove("show");
        }
    }, 1000);
</script>
