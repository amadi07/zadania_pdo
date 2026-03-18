<?php 
$serwer = "localhost";
$baza = "dane";
$uzytkownik = "root";
$haslo = "";

try {
    $connection = new PDO(
        "mysql:host=$server;dbname=$baza;charset=utf8",
        $uzytkownik,
        $haslo
    );
    print "Polaczono z baza danych";
} catch (PDOException $e) {
    print "Error: ". $e->getMessage();
}

?>