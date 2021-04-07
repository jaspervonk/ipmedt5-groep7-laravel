<form action="/changeUser" method="POST">
    @csrf
    <label class="gebruiker__selecteer" for="naam">Selecteer gebruiker: </label>
    <select name="naam" onchange="this.form.submit()">
        @foreach($user as $user)
            <option value="{{$user->name}}">{{$user->name}}</option>
        @endforeach
    </select>
</form>