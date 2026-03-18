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


?>