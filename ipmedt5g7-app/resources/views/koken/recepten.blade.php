@extends('default')

@section('title')
 {{'Recepten'}}
@endsection

@section('content')
    <ul class='u-grid-12 u-grid-gap-2'>
        @foreach($recepten as $recepten)
            <li class='receptKaart u-list-style-none'>
                <article>
                    <header class='receptKaart__header'>  
                        <h2 class='receptKaart__heading'> {{$recepten->naam}} </h2>
                    </header>
                    <figure class='receptKaart__figure'>
                        <img class='receptKaart_img' src="{{$recepten->afbeelding}}" alt="{{$recepten->afbeelding}}">
                    </figure>
                    <section class='receptKaart_btnSection'>
                        <button class='receptKaart_button'> Lees meer </button>
                    </section>
                </article>
            </li>
        @endforeach
    </ul>
@endsection