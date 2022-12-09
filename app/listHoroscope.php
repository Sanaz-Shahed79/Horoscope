<?php

function hitta_horoscope($födelsedatum){

    foreach ($GLOBALS["getHoroscope"] as $stjärntecken)  {

        if($födelsedatum <= $stjärntecken["slutdatum"] && $födelsedatum >= $stjärntecken["startdatum"]) {
            return $stjärntecken;
        }
    };   
};
    

    $GLOBALS["getHoroscope"] = array(
        array(
            "startdatum" => "0121",
            "slutdatum" => "0218",
            "namn" => "Vattumannen",
            "image" => "aquarius.png",
            "datum" => "21 januari - 18 februari"
        ),
        array(
            "startdatum" => "0219",
            "slutdatum" => "0319",
            "namn" => "Fiskarna",
            "image" => "pisces.png",
            "datum" => "19 februari - 19 mars"
        ),
        array(
            "startdatum" => "0320",
            "slutdatum" => "0419",
            "namn" => "Väduren",
            "image" => "aries.png",
            "datum" => "20 mars - 19 april"
        ),
        array(
            "startdatum" => "0420",
            "slutdatum" => "0520",
            "namn" => "Oxen",
            "image" => "taurus.png",
            "datum" => "20 april - 20 maj"
        ),
        array(
            "startdatum" => "0521",
            "slutdatum" => "0620",
            "namn" => "Tvillingarna",
            "image" => "gemin.png",
            "datum" => "21 maj - 20 juni"
        ),
        array(
            "startdatum" => "0621",
            "slutdatum" => "0721",
            "namn" => "Kräftan",
            "image" => "cancer.png",
            "datum" => "21 juni - 21 juli"
        ),
        array(
            "startdatum" => "0722",
            "slutdatum" => "0822",
            "namn" => "Lejonet",
            "image" => "leo.png",
            "datum" => "22 juli - 22 augusti"
        ),
        array(
            "startdatum" => "0823",
            "slutdatum" => "0922",
            "namn" => "Jungfrun",
            "image" => "virgo.png",
            "datum" => "23 augusti - 22 september"
        ),
        array(
            "startdatum" => "0923",
            "slutdatum" => "1022",
            "namn" => "Vågen",
            "image" => "libra.png",
            "datum" => "23 september - 22 oktober"
        ),
        array(
            "startdatum" => "1023",
            "slutdatum" => "1121",
            "namn" => "Skorpionen",
            "image" => "scorpio.png",
            "datum" => "23 oktober - 21 november"
        ),
        array(
            "startdatum" => "1122",
            "slutdatum" => "1221",
            "namn" => "Skytten",
            "image" => "sagittarius.png",
            "datum" => "22 november - 21 december"
        ),
        array(
            "startdatum" => "1222",
            "slutdatum" => "1231",
            "namn" => "Stenbocken",
            "image" => "capricorn.png",
            "datum" => "22 december - 31 december"
        ),
        array(
            "startdatum" => "0101",
            "slutdatum" => "0120",
            "namn" => "Stenbocken",
            "image" => "capricorn.png",
            "datum" => "1 januari - 20 januari"
        )
    );

?>