<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="utf-8" />
    <title>froms</title>
    <h1>Supportformulär</h1>
</head>
<body>
    <form action="svar.php" method="post">
        Ditt namn: <input type="text" name="namn" /><br />
        Telefon: <input type="number" name="telefon" /><br />
    <p>Prioritet:<br>
<select name="prio">
<option value="1" selected>Låg</option>
<option value="2">Normal</option>
<option value="3">Hög</option>
</select>
</p>
    <p>Tilldela till ort:</p>
        <input type="radio" name="radio" id="ort_gbg" value="gbf"/>
        <label for="ort_gbg">Göteborg</label>
        <br>
        <input type="radio" name="radio" id="ort_sthml" value="sthml"/>
        <label for="ort_gbg">Stockholm</label>
        <br>
        <input type="radio" name="radio" id="ort_ume" value="ume"/>
        <label for="ort_gbg">Umeå</label>
        <br>
        <input type="radio" name="radio" id="ort_lule" value="lule"/>
        <label for="ort_gbg">Luleå</label>
    
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
        <input type="submit" name="Submit" value="Submit">
        <input type="reset" name="Reset" value="Reset">
    
    </form>




</body>
</html>
