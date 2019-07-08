
<?php
  //This template loads default settings that are re-usable by the system
?>
@extends('layouts.public')

@section('header')
<?php
  //This section is Universal to the sub-system and loaded via the layout
?>
@endsection

@section('navigator')
<?php
  //This section is Universal to the sub-system and loaded via the layout
?>
@include('scripts.navbar_00C')
@endsection

@section('search_content')
  <h3>Public Search Page - Custom Page Content Section</h3>
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
@endsection

@section('footer')
<?php
  //This section is Universal to the sub-system and loaded via the layout
?>
@endsection
