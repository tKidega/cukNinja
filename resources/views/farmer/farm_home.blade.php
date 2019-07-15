
<?php
  //This template loads default settings that are re-usable by the system
?>
@extends('layouts.farmer')

@section('header')
<?php
  //This section is Universal to the sub-system and loaded via the layout
?>
@endsection

@section('navigator')
<?php
  //This section is Universal to the sub-system and loaded via the layout
?>
@endsection

@section('home_content')
<div class='container' id='def_login'>
  <h3>cikNinja Farmer home page - Custom Page Content Section</h3>
  <?php
    //This section is customizable based on system requirements
    $t = rand(2,8);
    if( $t > 5){
      print("t is greater than five" . ' ' . "where t =" . ' '. $t);
    }else if( $t < 5){
      print("t is less than five"  . ' ' . "where t =" . ' ' .$t);
    }else{
      print("t is equal to five" . ' ' . "where t =" . ' '. $t);
    }
  ?>
</div>
@endsection

@section('footer')
<?php
  //This section is Universal to the sub-system and loaded via the layout
?>
@endsection
