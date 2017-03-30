<?php
/**
 * Created by PhpStorm.
 * User: denni_000
 * Date: 29-3-2017
 * Time: 10:46
 */
?>

<?php
    $prijs12 = 10;
    $prijs65 = 10;
    $prijs3 = 0;

    $leeftijd12 = 12;
    $leeftijd65 = 65;
    $leeftijd3 = 0;

    if ($leeftijd65 > 65) {
        $prijs65 = 10 / 2;
    }
    if ($leeftijd12 <= 12) {
        $prijs12 = 10 / 2;
    }
    if (leeftijd3 <= 3) {
        $prijs3 = 0;
    }
    else {
        $prijs = 10;
    }
    echo ("10 = ".$prijs12."<br>"." 2 = ".$prijs3."<br>"."65 = ".$prijs65."<br>"."12 = ".$prijs12);
?>
