@extends('default')
@section('content')
    <h1>Mijn boodschappenlijstje:</h1>
    @foreach($user as $user)
        <a href="boodschappenlijst/{{$user->id}}">{{$user->name}}</a>
    @endforeach
    <form action="/remove" method="POST">
        @method('POST')
        {{ csrf_field() }}
        <ul>
            @foreach($product as $product)
                <li id="js--item">
                    <input type="checkbox" name="checked[]" value="{{ $product->id }}">
                    <label for="checked[]" class="isChecked" >{{ $product->merk }} {{ $product->product }} ({{ $product->aantal }})</label> 
                </li>
            @endforeach
            <button type="submit">Verwijder Geselecteerde producten</button>
        </ul>
    </form>
    <br>
    @include('boodschappen.form')
@endsection


