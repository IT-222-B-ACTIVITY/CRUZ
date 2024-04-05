<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUZ
    </title>
</head>
<body>
   
<?php
    // heart star 
    $size = 7;
    
    for ($i = $size / 3; $i < $size; $i += 2) {
        // print first spaces
        for ($j = 1; $j < $size - $i; $j += 2) {
            echo "&nbsp;&nbsp;";
        }
        // print first stars
        for ($j = 3; $j < $i + 2; $j++) {
            echo "*";
        }
        // print second spaces
        for ($j = 1; $j < $size - $i + 1; $j++) {
            echo "&nbsp;&nbsp;";
        }
        // print second stars
        for ($j = 3; $j < $i + 2; $j++) {
            echo "*";
        }
        echo "<br>";
    }
    // lower part
    // inverted pyramid
    for ($i = $size; $i > 0; $i--) {
        for ($j = 0; $j < $size - $i; $j++) {
            echo "&nbsp;&nbsp;";
        }
        for ($j = 1; $j < $i * 2; $j++) {
            echo "*";
        }
        echo "<br>";
    }
?>
<br>

<?php
// hexagonn 

    for($i=6;$i<=11;$i++){ 
        for($j=20;$j>=$i+2;$j--){ 

  echo '&nbsp;'; } 
   
  for($k=0;$k<=$i+10;$k++){ 
  
    echo '*'; } 
  echo '<br />'; } 
    
  for($i=-5;$i<=-1;$i++){ 
 
      for($k=-11;$k+0<=$i+1;$k++){ 

    echo '&nbsp;'; } 
      
    for($j=16;$j>=$i+0;$j--){ 
  
    echo '*'; } 
  echo '<br />'; } 
  
  ?>
  <br>
  <br>

<?php
    // hollow square pattern
    $size = 5;
    for($i = 0; $i < $size; $i++) {
        // print column
        for($j = 0; $j < $size; $j++) {
            // print only star in first and last row
            if($i === 0 || $i === $size - 1) {
                echo "*";
            }
            else {
                // print star only in first and last position row
                if($j === 0 || $j === $size - 1) {
                    echo "*";
                }
                else {
                    // use &nbsp; for space
                    echo "&nbsp;&nbsp;";
                }
            }
        }
        echo "<br>";
    }
?>
<br>

<?php

// pentagon 

    for($i=-12;$i<=1;$i++){ 
        for($j=15;$j>=$i+1;$j--){ 

  echo '&nbsp;'; } 
   
  for($k=0;$k<=$i+12;$k++){ 
  
    echo '*'; } 
  echo '<br />'; } 
    
  for($i=-11;$i<=-3;$i++){ 
 
      for($k=-7;$k+-11<=$i+6;$k++){ 

    echo '&nbsp;'; } 
      
    for($j=1;$j>=$i+-1;$j--){ 
  


      echo '*'; } 
  echo '<br />'; } 
  
  ?>
<br>
<br>
<br>
<br>
<?php


// trapezoid shape

    for($i=5;$i<=11;$i++){ 
        for($j=20;$j>=$i+2  ;$j--){ 

  echo '&nbsp;'; } 
   
  for($k=0;$k<=$i+10;$k++){ 
  
    echo '*'; } 
  echo '<br />'; } 
    
  for($i=-1;$i<=-1;$i++){ 
 
      for($k=-5;$k+-1<=$i+1;$k++){ 

    echo '&nbsp;'; } 
      
    for($j=20;$j>=$i+-1;$j--){ 
  


      echo '*'; } 
  echo '<br />'; } 
  
  ?>






</body>
</html>