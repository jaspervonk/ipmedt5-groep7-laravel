<form action="/changeUser" method="POST">
    @csrf
    <label class="gebruiker__selecteer" for="naam">Selecteer gebruiker: </label>
    <select name="naam" onchange="this.form.submit()">
        <option value="" disabled selected hidden>Kies een gebruiker</option>
        @foreach($user as $user)
            <option value="{{$user->name}}">{{$user->name}}</option>
        @endforeach
    </select>
</form>