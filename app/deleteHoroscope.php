<?php
session_start();

if($_SERVER["REQUEST_METHOD"] == "DELETE"){
    if(isset($_SESSION["horoscope"])){
        session_unset();
        session_destroy();   
    echo json_encode(true);
    }else{
        echo json_encode(false);
    
    }
} else {
    echo json_encode(false);
}

?>
