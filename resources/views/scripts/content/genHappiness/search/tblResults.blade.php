<?php
  //This section is customizable based on sub-system requirements
  $t = rand(2,8);
  if( $t > 5){
    print("t is greater than five" . ' ' . "where t =" . ' '. $t);
  }else if( $t < 5){
    print("t is less than five"  . ' ' . "where t =" . ' ' .$t);
  }else{
    print("t is equal to five" . ' ' . "where t =" . ' '. $t);
  }
?>
