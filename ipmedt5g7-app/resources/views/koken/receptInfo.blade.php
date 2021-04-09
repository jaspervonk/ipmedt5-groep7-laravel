@extends('default')

@section('content')
<header class="mainHeader u-koken-gradient u-box-shadow">
    <nav class="mainHeader__nav">
        <img src="/img/logo.png"></img>
        <ul>
            <li><a href="/gebruiker">Account</a></li>
            <li><a href="/wakingupresults">Opstaan</a></li>
            <li><a href="/desk">Bureau</a></li>
            <li><a href="/boodschappenlijst">Boodschappen</a></li>
            <li><a href="/recepten">Koken</a></li>
        </ul> 
    </nav>
</header>
<article class='informatie'>
    <a class='recept__informatie' href="javascript:history.back()"> < Ga terug</a>
    <section class='informatie__timer'>
        <h3 class='informatie__timer__header'> Hoe stel ik mijn timer in? </h2>
        <p class='informatie__timer__tekst'> Je kunt er voor kiezen om de digitale timer te gebruiken op de website, maar ook de fysieke timer. Wil je het liever ook op de fysieke timer? Volg dan deze stappen.</p>
        <p class='informatie__timer__tekst'> <b> Stap 1: </b> Bij de fysieke timer kun je de uren en minuten instellen. Om dit te doen klik je op 'C' van clock en krijgt op het schermpje te zien dat je de uren kunt invullen.</p>
        <p class='informatie__timer__tekst'> <b> Stap 2: </b> Vul vervolgens het aantal uren in. Je moet hierbij 2 cijfers invullen. vergeet dus niet één of twee nullen te zetten als dit nodig is. </p>
        <p class='informatie__timer__tekst'> <b> Stap 3: </b> Nadat je dit hebt gedaan klik je weer op 'C' en vult de minuten in. </p>
        <p class='informatie__timer__tekst'> <b> Stap 4: </b> Uiteindelijk druk je op '*' om de timer te starten. Heb je wat fouts ingevoerd of wil je de timer stoppen. Druk dan op 'A' van annuleren om de timer te stoppen.</p>
    </section>
    <section class='informatie__beoordelen'>
        <h3 class='informatie__timer__header'> Hoe geef ik een beoordeling? </h2>
        <p class='informatie__timer__tekst'> Heb je lekker gegeten? Nu kun je degene die heeft gekookt beoordelen op zijn kookkunsten! </p>
        <p class='informatie__timer__tekst'> <b> Stap 1: </b> Druk op de 'B' knop om een beoordeling te kunnen geven. Als je perongeluk op B hebt geklikt kun je op 'A' van annuleren klikken.</p>
        <p class='informatie__timer__tekst'> <b> Stap 2: </b> Druk op één van de cijfers tussen 0 en 9 wat je van het eten vond. Heb je perongeluk een foute beoordeling gegeven? Geen probleem! begin dan weer opnieuw bij stap 1.</p>
        <p class='informatie__timer__tekst'> <b> Stap 3: </b> Je hebt nu succesvol een beoordeling gegeven en kunt nu op de webpagina op verwerken klikken.</p>
    </section>
</article>

@endsection