@extends('default')

@section('title')
 {{'Progress'}}
@endsection

@section('content')
<section class="desklabels">
    <h1 class="desklabels__actief u-text-color-black u-grid-center"> actieve deskjob: {{$actieve_deskjob}}</h1>

    <form class="desklabels__form u-grid-center" action="/selectDeskjob" method="POST">
        @method('POST')
        {{ csrf_field() }}
        <label class="u-text-color-black" for="deskjobs">Kies een bestaande deskjob:</label>
        <input list="deskjobs" name="deskjob" id="deskjob">

        <datalist id="deskjobs">
            @foreach($alle_deskjobs as $alle_deskjobs)
                <option value="{{$alle_deskjobs->deskjob}}">
            @endforeach
        </datalist>

        <button class="u-desk-button" type="submit">selecteer</button>
    </form>


    <form class="desklabels__form u-grid-center" action="/addDeskjob" method="POST">
        @method('POST')
        {{ csrf_field() }}
        <label class="u-text-color-black" for="deskjob_name">Maak een nieuwe Deskjob aan:</label>
        <input type="text" name="deskjob_name">
        <button class="u-desk-button" type="submit">Aanmaken</button>
    </form>

    <button class="deskprogress__button u-desk-button" type="button" onclick="window.location.assign('/desk')">ga terug</button>


</section>


    <section class="deskprogress">
        <ul class="deskprogress__list">
        @foreach($alle_tijden as $alle_tijden)
            <li class="deskprogress__listitem u-box-shadow"><br />
            <h1 class="deskprogress__listitem__header">{{$alle_tijden->datum}}</h1><br />
            <p class="deskprogress__listitem__text"> gewerkte tijd: {{$alle_tijden->total_work_hours}} : {{$alle_tijden->total_work_minutes}} : {{$alle_tijden->total_work_seconds}} </p><br />
            <p class="deskprogress__listitem__text"> gepauzeerde tijd: {{$alle_tijden->total_pause_hours}} : {{$alle_tijden->total_pause_minutes}} : {{$alle_tijden->total_pause_seconds}} </p><br />
            <p class="deskprogress__listitem__text"> totaal aantal pauzes: {{$alle_tijden->aantal_pauzes}} </p><br />
            <p class="deskprogress__listitem__text u-progress-text-grid"> {{$alle_tijden->feedback}} </p>
            </li>
        @endforeach
        </ul>
    </section>
@endsection