<!DOCTYPE html>
<html lang="eng">
<include="kolo.php">
<head>
    <meta charset="utf-8" />
    <title>COKOLWIEKk</title>
</head>
<body>
<h3>FORMULARZ DO KOŁA</h3>
<form action="kolo.php" method="POST">

    <table>

    <label>
        <input type="radio" name="okrag" value="okrag"> okrag
    </label>
    <label>
        <input type="radio" name="linia" value="linia"> linia
    </label>
    <label>
        <input type="radio" name="prostokat" value="prostokat"> prostokat
    </label><label>
        <input type="radio" name="wielokat" value="wielokat">  wielokat
    </label>
    <td>&nbsp;</td>
    <td><input type="submit" value="Wyślij"></td>

</table>



</form>




</body>
</html>