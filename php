<?php
$polaczenie = mysqli_connect("localhost", "root", "", "przewozy");

if (!$polaczenie) {
    die("Błąd połączenia z bazą danych");
}
