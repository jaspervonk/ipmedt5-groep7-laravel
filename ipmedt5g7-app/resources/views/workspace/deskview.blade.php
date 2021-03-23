<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/main.css">
    <title>Document</title>
</head>
<body>
    <main>
    <section class="clock">
        <article id="js--hours" class="clock__digits">01</article>
        <article class="clock__digits clock__digits--dots">&#58;</article>
        <article id="js--minutes" class="clock__digits">25</article>
        <article class="clock__digits clock__digits--dots">&#58;</article>
        <article id="js--seconds" class="clock__digits">13</article>
    </section>

    <h1 id="js--sessiontext" class="sessiontext"> niet gestart </h1>

    <button class="buttons buttons--start" type="button" onclick="start_timer()"> Start de tijd </button>
    <button class="buttons buttons--pause" type="button" onclick="pause_timer()"> start / stop pauze </button>
    <button class="buttons buttons--stop" type="button" onclick="end_timer()"> Stop de tijd </button>
    </main>
    <script src="/js/main.js"></script>
</body>
</html>