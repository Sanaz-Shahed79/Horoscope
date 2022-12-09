<?php
session_start();

require_once ("listHoroscope.php");

/*if(isset($_POST["födelsedatum"]));  
if(!isset($_SESSION["horoscope"])){*/
    if((isset($_POST["födelsedatum"]))&&(!isset($_SESSION["horoscope"]))){
    $datum = explode("-", $_POST["födelsedatum"]);
    $födelsedatum = $datum[1] . $datum[2];
    if(hitta_horoscope($födelsedatum)){
    
        $_SESSION["horoscope"] = hitta_horoscope($födelsedatum);
        echo json_encode(true);
    } else {
        echo json_encode(false) ;  
    }

} else {
    echo json_encode(false) ;
} 


?>
