<form method="POST" action="/">
    @csrf
    <input type="text" placeholder="name" name="name"><br>
    <h3>Choice</h3>
    <input id="jelupang" type="radio" name="choice" value="Jelupang"><label for="jelupang">Jelupang</label><br>
    <input id="breeze" type="radio" name="choice" value="Breeze"><label for="breeze">Breeze</label><br>
    <input type="submit">
</form>
