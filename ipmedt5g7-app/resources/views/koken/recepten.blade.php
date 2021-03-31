@extends('default')

@section('title')
 {{'Recepten'}}
@endsection

@section('content')
    <ul class='u-grid-12 u-grid-gap-2'>
        @foreach($recepten as $recepten)
            <li class='receptKaart u-list-style-none'> 
                    <header class='receptKaart__header u-flex-v-center'>  
                        <h2 class='receptKaart__heading'> {{$recepten->naam}} </h2>
                    </header>
                    <figure class='receptKaart__figure'>
                        <img class='receptKaart__img' src="{{$recepten->afbeelding}}" alt="{{$recepten->afbeelding}}">
                    </figure>
                    <section class='receptKaart__btnSection u-flex-v-center'>
                        <button class='receptKaart__button' onclick="window.location='{{ url('/recepten/' . $recepten->id) }}'"> Lees meer </button>
                    </section>
            </li>
        @endforeach
    </ul>
@endsection