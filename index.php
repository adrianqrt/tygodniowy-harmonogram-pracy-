
<!DOCTYPE html>

<html lang="PL" >
<head>
    <meta charset="utf-8" />
    <title>Tygodniowy-Harmonogram-Pracy</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<?php
$conn = new mysqli ("localhost", "root", "", "tygodniowy-harmonogram-pracy") or die("błąd");

$wynik = $conn->query("SELECT * FROM harmonogram");

     if($wynik->num_rows > 0) {

    while($wiersz = $wynik-> fetch_assoc() ) 
    {
        echo "<table>";

//////////////////////////////////////////////////////////
echo "<th> imie </th>";
echo "<th> nazwisko </th>";
echo "<th> godzina rozpoczęcia </th>";
echo "<th> godzina zakonczenia </th>";
echo "<th> data </th>";
echo "<th> dzien tygodnia </th>";
echo "<tr>";
        
        echo "<td>" . $wiersz["imie"] . ";<br>"; 

        echo "<td>" . $wiersz["nazwisko"] . ";<br>";

        echo "<td>" . $wiersz["godzina"] . ";<br>";

        echo "<td>" . $wiersz["godzina_"] . ";<br>";

        echo "<td>" . $wiersz["data"] . ";<br>";

        echo "<td>" . $wiersz["dzien_tygodnia"] . ";<br>";
        
        echo "</tr>";
    }

    echo "</table>";
}
else {echo "baza jest pusta";}





$conn->close();
?>







</body>
</html>
