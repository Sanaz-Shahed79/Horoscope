<?php
session_start();

require_once "listHoroscope.php";
if(isset($_SESSION["horoscope"])){
    $datum = explode("-", $_POST["födelsedatum"]);
    $födelsedatum = $datum[1] . $datum[2];
    if(hitta_horoscope($födelsedatum)){
        $_SESSION['horoscope'] = hitta_horoscope($födelsedatum);
        echo json_encode($_SESSION["horoscope"]);
    } else {
        echo json_encode(false);
    }
} else {
    echo json_encode(false);
}

?>
