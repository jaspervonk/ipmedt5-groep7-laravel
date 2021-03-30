<form action="/changeUser" method="POST">
    @csrf
    <label for="naam">Selecteer gebruiker</label>
    <select name="naam">
        @foreach($user as $user)
            <option value="{{$user->name}}">{{$user->name}}</option>
        @endforeach
    </select>
    <button class="button" type="submit">Veranderen</button>
</form>