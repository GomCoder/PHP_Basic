<?php 
    /**
     * 다차원 배열 
     */

     $cars = array(
        array("Volvo", 10, 300),
        array("BMW", 11, 250),
        array("Saab", 12, 350),
        array("Kia", 13, 200),
     );

     echo $cars[0][0]. ": stock: " .$cars[0][1] .", sold: ".$cars[0][2].".<br>";
     echo $cars[1][0]. ": stock: " .$cars[1][1] .", sold: ".$cars[1][2].".<br>";
     echo $cars[2][0]. ": stock: " .$cars[2][1] .", sold: ".$cars[2][2].".<br>";
     echo $cars[3][0]. ": stock: " .$cars[3][1] .", sold: ".$cars[3][2].".<br>";
?>