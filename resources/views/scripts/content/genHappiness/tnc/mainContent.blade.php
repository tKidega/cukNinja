<?php
  //This section is customizable based on sub-system requirements
  $t = rand(12,18);
  if( $t > 15){
    print("t is greater than fifteen" . ' ' . "where t =" . ' '. $t);
  }else if( $t < 15){
    print("t is less than fifteen"  . ' ' . "where t =" . ' ' .$t);
  }else{
    print("t is equal to fifteen" . ' ' . "where t =" . ' '. $t);
  }
?>
