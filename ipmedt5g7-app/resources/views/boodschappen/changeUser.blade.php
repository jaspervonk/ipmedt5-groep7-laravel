<form action="/changeUser" method="POST">
    @csrf
    <label class="blackFont" for="naam">Selecteer lijstje: </label>
    <select name="naam">
        @foreach($user as $user)
            <option value="{{$user->name}}">{{$user->name}}</option>
        @endforeach
    </select>
    <button class="button button--red button--small" type="submit">Veranderen</button>
</form>