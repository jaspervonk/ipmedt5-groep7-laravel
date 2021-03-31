<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/main.css">
    <title>desktimer</title>
</head>
<body onload="refreshen()">
    <main class="desktimer" >
                
        <h1 class="desktimer__status"> {{$working_status}} </h1>

        <button class="desktimer__button u-desk-grid-button" type="button" onclick="window.location.assign('/desk/progress')">bekijk alle sessies</button>

    </main>
    <script src="/js/main.js"></script>
</body>
</html>