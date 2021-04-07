@extends('default')

@section('title')
 {{'Scores'}}
@endsection

@section('content')
    <h1 class='wakingup--header'>Sleepgun Results</h1>
    <ul class='scoresList u-list-style-none u-box-shadow u-vertical-scroll'>
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
@endsection