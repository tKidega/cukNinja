
<?php
  //This template loads default settings that are re-usable by the system
?>
@extends('layouts.finance')

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

@section('login_content')
<div class='container' id='def_login'>
  <div id='sysLogin'>
    <header>
      <h3 class='mainTitle'>Registered User Login</h3>
    </header>
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
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </div>
</div>
@endsection

@section('footer')
<?php
  //This section is Universal to the sub-system and loaded via the layout
?>
@endsection
