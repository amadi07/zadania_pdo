<?php 
$serwer = "localhost";
$baza = "dane";
$uzytkownik = "root";
$haslo = "";

try {
    $connection = new PDO(
        "mysql:host=$serwer;dbname=$baza;charset=utf8",
        $uzytkownik,
        $haslo
    );
    print "Polaczono z baza danych";
} catch (PDOException $e) {
    print "Error: ". $e->getMessage();
}

// zad1
/*
$query = "Select imie,nazwisko FROM pracownicy";
$result = $connection->query($query);
echo "<br>";
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    echo $row['imie']." ".$row['nazwisko']."<br>";
}
*/
// cw 2
/*
$query = "SELECT nazwa,cena FROM dania"; 
$res = $connection->query($query);
echo "<hr>";
while ($row = $res->fetch(PDO::FETCH_ASSOC)){
    echo $row['nazwa']." ".$row['cena']."PLN <br>";
}
*/

// cw 3

/*
echo "<hr>";
$query = "SELECT * FROM filmy";
$res = $connection->query($query);
while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
    echo $row['tytul']." ".$row['rok']."r.  ".$row['ocena']."/10 <br>";
}
*/
?>