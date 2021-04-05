@extends('default')

@section('title')
 {{'Progress'}}
@endsection

@section('content')

<form action="/selectDeskjob" method="POST">
    @method('POST')
    {{ csrf_field() }}
    <label class="u-text-color-black" for="deskjobs">Choose your browser from the list:</label>
    <input list="deskjobs" name="deskjob" id="deskjob">

    <datalist id="deskjobs">
        @foreach($alle_deskjobs as $alle_deskjobs)
            <option value="{{$alle_deskjobs->deskjob}}">
        @endforeach
    </datalist>

    <button type="submit">selecteer</button>
</form>


<form action="/addDeskjob" method="POST">
    @method('POST')
    {{ csrf_field() }}
    <label class="u-text-color-black" for="deskjob_name">Deskjob</label>
    <input type="text" name="deskjob_name">
    <button type="submit">Aanmaken</button>
</form>

<p class="u-text-color-black"> actieve deskjob: {{$actieve_deskjob}}</p>
<p class="u-text-color-black">{{$test}}</p>


    <section class="deskprogress">
        <ul class="deskprogress__list">
        @foreach($alle_tijden as $alle_tijden)
            <li class="deskprogress__listitem">
            <h1 class="deskprogress__listitem__header">{{$alle_tijden->datum}}</h1>
            <p class="deskprogress__listitem__text"> gewerkte tijd: {{$alle_tijden->total_work_hours}} : {{$alle_tijden->total_work_minutes}} : {{$alle_tijden->total_work_seconds}} </p>
            <p class="deskprogress__listitem__text"> gepauzeerde tijd: {{$alle_tijden->total_pause_hours}} : {{$alle_tijden->total_pause_minutes}} : {{$alle_tijden->total_pause_seconds}} </p>
            <p class="deskprogress__listitem__text"> totaal aantal pauzes: {{$alle_tijden->aantal_pauzes}} </p>
            <p class="deskprogress__listitem__text u-progress-text-grid"> {{$alle_tijden->feedback}} </p>
            </li>
        @endforeach
        </ul>
    <button class="desktimer__button" type="button" onclick="window.location.assign('/desk')">ga terug</button>
    </section>
@endsection