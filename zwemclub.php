<?php
/**
 * Created by PhpStorm.
 * User: denni_000
 * Date: 22-3-2017
 * Time: 09:01
 */

    define("TITLE", "Zwemclubs");

    $htmlspartelkuikens = "De Spartelkuikens";
    $htmlwaterbuffel = "De waterbuffels";
    $htmlplons = "Plonsmderin";
    $htmlbommetje = "Bommetje";

    $spartel = 25;
    $waterbuffel = 32;
    $plonsm = 11;
    $bommetje = 23;

?>

<html>
<title> <?php echo TITLE; ?></title>
<body>
<table>
    <tr>
        <td> <?php echo $htmlspartelkuikens ?></td>
        <td class="waardewidth">25</td>
        <td class="plaatje">  <?php for ($i =5 ; $i <= $spartel; $i += 5) {
           echo "<img src ='zwemclub.png'>";
           echo "<td class = 'plaatje'>";
            }  ?></td>

    </tr>
    <tr>

        <td> <?php echo $htmlwaterbuffel ?></td>
        <td class="waardewidth">32 </td>
        <td class="plaatje"> <?php for ($i = 5; $i <= $waterbuffel; $i+= 5) {
            echo "<img src ='zwemclub.png'>";
            echo "<td class = 'plaatje'>";
            } ?></td>

    </tr>
    <tr>
        <td> <?php echo $htmlplons ?></td>
        <td class="waardewidth">11</td>
        <td class="plaatje"> <?php for ($i =5; $i <= $plonsm; $i+= 5){
            echo "<img src ='zwemclub.png'>";
            echo "<td class ='plaatje'>";
            } ?>
        </td>
    </tr>
    <tr>

        <td><?php echo $htmlbommetje ?></td>
        <td class="waardewidth">23</td>
        <td class="plaatje"> <?php for ($i =5; $i <= $bommetje; $i+= 5) {
            echo "<img src ='zwemclub.png'>";
            echo "<td class='plaatje'>";
        }?>
        </td>
    </tr>
</table>

</body>
</html>

<style type="text/css">
    table {
        width: 50%;
        border-collapse: collapse;
    }
    td {
        border: 1px solid black;
    }
    .plaatje {
        border: none;
        padding: 5px;
    }
    .waardewidth {
        width: 10%;
    }
</style>
