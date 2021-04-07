<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/main.css">
    <title>Desktimer</title>
</head>
<body onload="refreshen()">
    <header class="mainHeader u-bureau-gradient u-box-shadow">
        <nav class="mainHeader__nav">
            <img src="/img/logo.png"></img>
            <ul>
                <li><a href="/gebruiker">Account</a></li>
                <li><a href="/opstaan">Opstaan</a></li>
                <li><a href="/desk">Bureau</a></li>
                <li><a href="/boodschappenlijst">Boodschappen</a></li>
                <li><a href="/recepten">Koken</a></li>
            </ul> 
        </nav>
    </header>
    <main class="desktimer" >

        <h1 class="desktimer__actief u-text-color-black"> actieve deskjob: {{$actieve_deskjob}}</h1>
                
        <h1 class="desktimer__status"> {{$working_status}} </h1>

        <button class="desktimer__button u-desk-grid-button u-desk-button" type="button" onclick="window.location.assign('/desk/progress')">bekijk alle sessies</button>

    </main>
    <script src="/js/main.js"></script>
</body>
</html>