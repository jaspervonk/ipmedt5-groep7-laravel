@extends('default')

@section('title')
 {{'Scores'}}
@endsection

@section('content')
    <header class="mainHeader u-wakingup-gradient u-box-shadow">
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

    <section class="wakingup--left u-float-left">
        <h1 class='wakingup--header'>Wekkers</h1>
        <ul class='scoresList u-wakingup-gradient u-list-style-none u-box-shadow u-vertical-scroll'>
            @foreach($sleepgunScores as $score)
                <li class='scoresList__scoreCard u-box-shadow'>
                    <section class='scoresList__scoreCard__header'>
                        <h2 class='u-float-left'>{{$score->date}}</h2>
                        <h2 class='u-float-right'> {{$score->totalTime}}s</h2>
                    </section>
                    <section class='scoresList__scoreCard__paragraph'>
                        <hr class='scoresList__scoreCard__paragraph--horizontalLine'>
                        <p class='scoresList__scoreCard__paragraph--half u-float-left'>Totale target: {{$score->targetTotal}}<br>Targets Hit: {{$score->targetHits}}<br>Targets Missed: {{$score->targetMisses}}</p>
                        <p class='scoresList__scoreCard__paragraph--half u-float-left'>Target Accuracy: {{$score->targetAccuracy}}%<br>Reaction Time: {{$score->targetReactionTime}}ms</p>
                    </section>
                </li>
            @endforeach
        </ul>
    </section>

    <section class="wakingup--right">
        <h1 class='wakingup--header'>Sleepgun Resultaten</h1>
        <ul class='scoresList u-wakingup-gradient u-list-style-none u-box-shadow u-vertical-scroll'>
            @foreach($sleepgunScores as $score)
                <li class='scoresList__scoreCard u-box-shadow'>
                    <section class='scoresList__scoreCard__header'>
                        <h2 class='u-float-left'>{{$score->date}}</h2>
                        <h2 class='u-float-right'> {{$score->totalTime}}s</h2>
                    </section>
                    <section class='scoresList__scoreCard__paragraph'>
                        <hr class='scoresList__scoreCard__paragraph--horizontalLine'>
                        <p class='scoresList__scoreCard__paragraph--half u-float-left'>Totale target: {{$score->targetTotal}}<br>Targets Hit: {{$score->targetHits}}<br>Targets Missed: {{$score->targetMisses}}</p>
                        <p class='scoresList__scoreCard__paragraph--half u-float-left'>Target Accuracy: {{$score->targetAccuracy}}%<br>Reaction Time: {{$score->targetReactionTime}}ms</p>
                    </section>
                </li>
            @endforeach
        </ul>
    </section>

@endsection