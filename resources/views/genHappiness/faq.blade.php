
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
@include('scripts.siteNav.public.navbar_00D')
@endsection

@section('faq_content')
<div class='container' id='def_login'>
  <h3>Public FAQ Page - Custom Page Content Section. </h3>
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
</div>
@endsection

@section('footer')
<?php
  //This section is Universal to the sub-system and loaded via the layout
?>
@endsection
