<form action="/changeshoppinglist" method="POST">
    @csrf
    <label class="blackFont" for="naam">Selecteer lijstje: </label>
    <select name="naam" onchange="this.form.submit()">
        <option value="" disabled selected hidden>Kies een lijstje</option>
        @foreach($userShoppinglists as $usershoppinglist)
            <option value="{{$usershoppinglist->shoppinglist}}">{{$usershoppinglist->shoppinglist}}</option>
        @endforeach
    </select>
</form>