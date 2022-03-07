<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8" />
    <title>froms</title>
    <h1>Supportformulär</h1>
</head>
<body>
    <form action="https://staff.www.ltu.se/~susfah/VT19/parse_form.php" method="post">
        Ditt namn: <input type="text" name="namn" /><br />
        Telefon: <input type="number" name="telefon" /><br /> 
    <p>Prioritet:<br>
<select name="prioritet">
<option value="1" selected>Låg</option>
<option value="2">Normal</option>
<option value="3">Hög</option>
</select>
</p>
    <p>Tilldela till ort:</p>
        <input type="radio" name="ort" id="ort_gbg" value="gbg"/>
        <label for="ort_gbg">Göteborg</label>
        <br>
        <input type="radio" name="ort" id="ort_sthml" value="sthml"/>
        <label for="ort_sthml">Stockholm</label>
        <br>
        <input type="radio" name="ort" id="ort_ume" value="ume"/>
        <label for="ort_ume">Umeå</label>
        <br>
        <input type="radio" name="ort" id="ort_lule" value="lule"/>
        <label for="ort_lule">Luleå</label>
    
        <p>Kategori:<br>
<select name="kategori">
<option value="fakt" selected>Fakturering</option>
<option value="net">Internet</option>
<option value="tel">Telefoni</option>
<option value="epost">E-post</option>
</select>
</p>
        <br>
        <label for="rubrik">Rubrik</label> <br>
        <textarea id="rubrik" name="rubrik"></textarea>
        <br>
        <label for="beskrivning">Beskrivning</label> <br>
        <textarea id="beskrivning" name="Beskrivning" rows="5" cols="50"></textarea>
        <br>
        <input type="submit" name="skicka" value="Submit">
        <input type="reset" name="Reset" value="Reset">
    
    </form>




</body>
</html>
