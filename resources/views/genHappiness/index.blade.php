
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
@include('scripts.siteNav.navbar_00A')
@endsection

@section('home_content')
<div class='container' id='def_login'>
  <h3>Public Home Page - Custom Page Content Section</h3>
  <?php
    //This section is customizable based on sub-system requirements
    $t = rand(2,8);
    $p = 'a.k.a';
    if( $t > 5){
      print('T = ' . ' ' . $t . ' ' . $p . " T is greater than five");
    }else if( $t < 5){
      print('T = ' . ' ' . $t . ' ' . $p . " T is less than five");
    }else{
      print('T = ' . ' ' . $t . ' ' . $p . " T is equal to five");
    }
  ?>
</div>
@endsection

@section('footer')
<?php
  //This section is Universal to the sub-system and loaded via the layout
?>
@endsection
