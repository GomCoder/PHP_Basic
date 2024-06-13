<?php 
    /**
     * 다차원 배열 이중 반복문 사용
     */

     $cars = array(
        array("Volvo", 10, 300),
        array("BMW", 11, 250),
        array("Saab", 12, 350),
        array("Kia", 13, 200),
     );

   for ($row = 0; $row < 4; $row++) {
      echo "<p><b>Row number $row</b></p>";
      echo "<ul>";
      
      for ($col = 0; $col < 3; $col++) {
         echo "<li>".$cars[$row][$col]."</li>";
      }
      echo "</ul>";      
   }
?>