@extends('default')

@section('title')
 {{'Scores'}}
@endsection

@section('content')
    <header class="mainHeader u-opstaan-gradient u-box-shadow">
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

    <section class="u-flexbox">

        <section class="u-flexbox-column">
            <h1 class='wakingup--header'>Sleepgun Resultaten</h1>
            <ul class='scoresList u-opstaan-gradient u-list-style-none u-box-shadow u-vertical-scroll'>
                @foreach($sleepgunScores as $score)
                    <li class='scoresList__scoreCard u-box-shadow a-popup'>
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


        <section class="u-flexbox-column">
            <h1 class='wakingup--header'>Wekkers</h1>
            <section class='u-opstaan-gradient u-list-style-none u-box-shadow u-vertical-scroll'>
                <form class="wekker__form" action="/changeWekker" method="POST">
                @csrf    
                    <section class="wekker__form__labelSection">
                        <label for="dag">Selecteer een Dag: </label>
                        <select name="dag" required>
                            <option value="" disabled selected hidden>Kies een dag...</option>
                            <option value="maandag">Maandag</option>
                            <option value="dinsdag">Dinsdag</option>
                            <option value="woensdag">Woensdag</option>
                            <option value="donderdag">Donderdag</option>
                            <option value="vrijdag">Vrijdag</option>
                            <option value="zaterdag">Zaterdag</option>
                            <option value="zondag">Zondag</option>
                        </select>
                    </section>
                    <section class="wekker__form__labelSection">
                        <label for="uren">Uren: </label>
                        <select name="uren" required>
                            <option value="" disabled selected hidden>Aantal uren...</option>
                            <?php for ($num=0; $num<=23; $num++){
                                echo '<option value="' .$num. '">' .$num. '</option>';
                            } 
                            ?>
                        </select>
                    </section>
                    <section class="wekker__form__labelSection">
                        <label for="minuten">Minuten: </label>
                        <select name="minuten" required>
                            <option value="" disabled selected hidden>Aantal minuten...</option>
                            <?php for ($num=0; $num<=59; $num++){
                                echo '<option value="' .$num. '">' .$num. '</option>';
                            } 
                            ?>
                        </select>
                    </section>
                    <button class="wekker__form__button u-box-shadow" type="submit">Submit</button>
                </form>
                
                <ul class="wekkers u-body-padding">
                @foreach($wekkers as $wekker)
                    <li class="wekkerList">
                        <h1 class="wekkerList__item--h1">
                            {{$wekker->day}}
                        </h1>
                        <p class="wekkerList__item--p">
                        <?php if($wekker->hours < 10) : ?>
                            0{{$wekker->hours}} :
                        <?php else : ?>
                            {{$wekker->hours}} :
                        <?php endif; ?>

                        <?php if($wekker->minutes < 10) : ?>
                            0{{$wekker->minutes}}
                        <?php else : ?>
                            {{$wekker->minutes}}
                        <?php endif; ?>
                        </p>
                    </li>
                @endforeach
                </ul>
            </section>
        </section>



    </section>

@endsection