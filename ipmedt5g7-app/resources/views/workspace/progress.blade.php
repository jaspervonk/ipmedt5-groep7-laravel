@extends('default')

@section('title')
 {{'Recepten'}}
@endsection

@section('content')
    <section class="deskprogress">
        <ul class="deskprogress__list">
        @foreach($alle_tijden as $alle_tijden)
            <li class="deskprogress__listitem">
            <h1 class="deskprogress__listitem__header">{{$alle_tijden->datum}}</h1>
            <p class="deskprogress__listitem__text"> gewerkte tijd: {{$alle_tijden->total_work_hours}} : {{$alle_tijden->total_work_minutes}} : {{$alle_tijden->total_work_seconds}} </p>
            <p class="deskprogress__listitem__text"> gepauzeerde tijd: {{$alle_tijden->total_pause_hours}} : {{$alle_tijden->total_pause_minutes}} : {{$alle_tijden->total_pause_seconds}} </p>
            <p class="deskprogress__listitem__text"> {{$alle_tijden->aantal_pauzes}} </p>
            </li>
        @endforeach
        </ul>
    <button class="desktimer__button" type="button" onclick="window.location.assign('/desk')">ga terug</button>
    </section>
@endsection