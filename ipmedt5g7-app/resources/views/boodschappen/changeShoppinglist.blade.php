<form action="/boodschappenlijst/change" method="POST">
    @csrf
    <label class="u-blackFont" for="naam">Selecteer lijstje: </label>
    <select name="naam" onchange="this.form.submit()">
        <option value="" disabled selected hidden>Kies een lijstje</option>
        @foreach($userShoppinglists as $usershoppinglist)
            @if($usershoppinglist->user == $ActiveUser->first()->name)
                <option value="{{$usershoppinglist->shoppinglist}}">{{$usershoppinglist->shoppinglist}}</option>
            @endif
        @endforeach
    </select>
</form>