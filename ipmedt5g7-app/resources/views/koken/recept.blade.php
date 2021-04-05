@extends('default')

@section('content')
<article class='recept u-box-shadow'>
    <header class='recept__header u-flex-v-center'>
        <h1 class='recept__heading'>{{$recepten->naam}}</h1>
    </header>
    <section class='recept__section1'>
        <figure class='recept__figure'>
            <img class='recept__img u-box-shadow-content' src="{{$recepten->afbeelding}}" alt="{{$recepten->afbeelding}}">
        </figure>
        <section class='recept__informatie'>
            <section class='recept__informatie__kaart u-box-shadow-content'>
                <p class='recept__informatie__tekst'> Recept voor: {{$recepten->hoeveelheid}} </p>
                <p class='recept__informatie__tekst'> Tijd: {{$recepten->tijd}} minuten </p>
                <p class='recept__informatie__tekst'> Maximum te behalen punten: {{$recepten->punten}}</p>   
            </section>
            <section class='recept__informatie__kaart2'>
                <!-- <section class='recept__timer'>
                    <h2 class='recept__timer__tekst u-box-shadow-content'> 00:00:00 </h1>
                </section> -->
                <section class='recept__btnSection u-flex-v-center'>
                    <button class='recept__button recept__start' onclick='receptStart()' id='receptStart'> Start recept </button>
                    <button class='recept__button recept__stop' onclick="window.location='{{ url('/recepten/' . $recepten->id . '/klaar/') }}'" id='receptStop' > Stop recept </button>
                </section>
            </section>
        </section>
    </section>
    <section class=recept__section2>
        <section class='recept__bereiden' id='bereiden'>
            <h2 class='recept__bereiden__heading'> Hoe te bereiden </h2>
            <p class='recept__bereiden__tekst'> {{$recepten->bereiden_1}}</p> <br>
            <p class='recept__bereiden__tekst'> {{$recepten->bereiden_2}}</p> <br>
            <p class='recept__bereiden__tekst'> {{$recepten->bereiden_3}}</p> <br>
        </section>
        <!-- Slider container -->
        <article id='slider' class="swiper-container">
            <h2 class='swiper-container__heading'> Hoe te bereiden </h2>
            <!-- slider wrapper -->
            <section class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <section class='swiper-slide__time'>
                        <button class='swiper-slide__button' onclick="countdown(0,{{$recepten->timer_1}},1), 1"> Start </button>
                        <h3 id="timer" class='swiper-slide__timer u-box-shadow-content'> {{$recepten->timer_1}} minuten </h3> <br> 
                    </section>
                    <p class='recept__bereiden__tekst'> {{$recepten->bereiden_1}}</p>    
                </div>
                <div class="swiper-slide">
                    <section class='swiper-slide__time'>
                        <button class='swiper-slide__button' onclick="countdown1(0,{{$recepten->timer_2}},1), 2"> Start </button>
                        <h3 id="timer2" class='swiper-slide__timer u-box-shadow-content'> {{$recepten->timer_2}} minuten </h3> <br>
                    </section>
                    <p class='recept__bereiden__tekst'> {{$recepten->bereiden_2}}</p>  
                </div>
                <div class="swiper-slide">
                    <section class='swiper-slide__time'>
                        <button class='swiper-slide__button' onclick="countdown2(0,{{$recepten->timer_3}},1), 3"> Start </button>
                        <h3 id="timer3" class='swiper-slide__timer u-box-shadow-content'> {{$recepten->timer_3}} minuten </h3> <br>
                    </section>
                    <p class='recept__bereiden__tekst'> {{$recepten->bereiden_3}}</p>     
                </div>
            </section>  
            <!-- slider paginatie -->
            <div class="swiper-pagination"></div>
            <!-- slider navigatieknoppen -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
            <!-- If we need scrollbar -->
            <!-- <div class="swiper-scrollbar"></div> -->
        </article>
        <section class='recept__ingredienten'>
            <section class='recept__ingredienten__kaart'>
                <h2 class='recept__ingredienten__heading'> Ingrediënten </h2>
                <p class='recept__ingredienten__tekst'> {!! nl2br(e($recepten->ingredienten)) !!} </p>
            </section>
        </section>
    </section>
</article>

<script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src='/js/timer.js'></script>
@endsection