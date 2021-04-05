@extends('default')

@section('content')
<article class='recept u-box-shadow'>
    <header class='recept__header u-flex-v-center'>
        <h1 class='recept__heading'>{{$recepten->naam}}</h1>
    </header>

    <a href="/change">Andere gebruiker kiezen</a>

    <p>{{$activeUser[0]->name}} </p>
</article>
@endsection