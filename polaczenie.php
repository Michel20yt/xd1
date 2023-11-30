<?php
    $Imie = $_POST['Imie'];
    $Nazwisko = $_POST['Nazwisko'];
    $Email = $_POST['Email'];
    $Wiadomosc = $_POST['Wiadomosc']; 

    //Polaczenie z baza danych
    $conn = new mysqli('localhost','root','','logowanie');
    if($conn->connect_error){
        die('Brak Polaczenia : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into registration(Imie, Nazwisko, Email, Wiadomosc)
            values(?, ?, ?, ?)");
        $stmt->bind_param("ssss",$Imie, $Nazwisko, $Email, $Wiadomosc);
        $stmt->execute();
        echo "Wysłano...";
        $stmt->close();
        $conn->close();
    }
?>