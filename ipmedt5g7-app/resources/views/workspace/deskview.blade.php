@extends('default')
@section('content')
<section class="desktimer" >
    <h1 class="desktimer__actief u-text-color-black"> actieve deskjob: {{$actieve_deskjob}}</h1>
            
    <h1 class="desktimer__status u-text-color-black"> {{$working_status}} </h1>
    <button class="desktimer__button u-desk-grid-button u-desk-button" type="button" onclick="window.location.assign('/desk/progress')">bekijk alle deskjobs</button>
</section>
@endsection

