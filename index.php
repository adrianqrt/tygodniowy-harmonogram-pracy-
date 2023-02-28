<?php
$servername = "localhost";
$username = "";
$password = "";

$conn = mysqli_connect($servername, $username, $password);
if ($conn) echo "Połączono z bazą danych<br />";
?>
<!DOCTYPE html>

<html lang="PL" >
<head>
    <meta charset="utf-8" />
    <title>Tygodniowy-Harmonogram-Pracy</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<form action="" method="post">
imie: <br>
<input type="text" name="imie"><br>
nazwisko: <br>
<input type="text" name="nazwisko"><br>
<input type="submit">
<br>
</form>


<?php
    $query = mysql_query('SELECT * FROM tabela') or die();
while ($rec = mysql_fetch_array($query))
{
 echo '<tr>
 <td>'.$rec['data'].'</td>
 <td>'.$rec['znak'].'</td>
 <td>'.$rec['qth'].'</td>
 <td>'.$rec['czestotliwosc'].'</td>
 <td>'.$rec['uwagi'].'</td>
 </tr>';
}
?>
    <table class="tabela">
        <tr>
           <td>imie</td> <td>nazwisko</td> <td>godzina</td> <td>czynność</td>
        </tr>
        <tr>
            <td>imie</td> <td>nazwisko</td> <td>godzina</td> <td>czynność</td>
        </tr>
        <tr>
            <td>imie</td> <td>nazwisko</td> <td>godzina</td> <td>czynność</td>
        </tr>
     </table>
</body>
</html>
<?php

mysqli_close($conn);
?>