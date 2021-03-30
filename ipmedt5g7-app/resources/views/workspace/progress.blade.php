@extends('default')

@section('title')
 {{'Recepten'}}
@endsection

@section('content')
    <section class="deskprogress">
        <ul class="deskprogress__list">
        @foreach($alle_tijden as $alle_tijden)
            <li class="deskprogress__list__item">gewerkte tijd: {{$alle_tijden->total_work_minutes}} : {{$alle_tijden->total_work_seconds}} / gepauzeerde tijd: {{$alle_tijden->total_pause_minutes}} : {{$alle_tijden->total_pause_seconds}} </li>
        @endforeach
        </ul>
    </section>
    <button class="desktimer__button" type="button" onclick="window.location.assign('/desk')">ga terug</button>
@endsection