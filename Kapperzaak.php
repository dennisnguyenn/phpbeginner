<?php
/**
 * Created by PhpStorm.
 * User: denni_000
 * Date: 23-3-2017
 * Time: 09:51
 */
define("TITLE", "Kapperzaak Sander");

    $tijdstip["09.15"] = "Mevr. Pietersen";
    $tijdstip["09.30"] = "Mevr. Willems";
    $tijdstip["09.45"] = "";
    $tijdstip["10.00"] = "Paul van den Broek";
    $tijdstip["10.15"] = "Karel de Meeuw";
    $tijdstip["10.30"] = "";

?>

<html>
<title><?php TITLE ?></title>
<body>

    <?php
    print("De volgende momenten zijn nog beschikbaar:<ul>");
        foreach ($tijdstip as $tijd => $naam) {
            if ($naam == "") {
                print("<li>" . $tijd . "</li>");
    }
}
print("</ul>");
?>
</body>
</html>
