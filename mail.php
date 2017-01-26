<?php

if(($_SERVER['REQUEST_METHOD'] === 'POST') && isset($_POST['imie']) && isset($_POST['nazwisko']) && isset($_POST['email']) && isset($_POST['telefon']) &&
isset($_POST['wiadomosc']) && isset($_POST['submit'])) {
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $email = $_POST['email'];
    $telefon = $_POST['telefon'];
    $wiadomość = $_POST['wiadomosc'];
} else {
    echo "Nie uzupełniłeś pól formularza";
}

$message = 'Dziękujemy za wysłanie formularza!';

$sender = mail($email1, "Wiadomość zwrotna", $message);

if($sender){
    echo "Wiadomość wysłana";
} else {
    echo "Błąd podczas wysyłania";
}
