
<?php
  //This template loads default settings that are re-usable by the system
?>
@extends('layouts.manager')

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
      <?php
        $access = true;
        if($access != true){
          print('Access Denied');
          die();
        }else{
          print'<h3 class="mainTitle">Registered User Login</h3>' ;
        }
      ?>
    </header>
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
  </div>
</div>
@endsection

@section('footer')
<?php
  //This section is Universal to the sub-system and loaded via the layout
?>
@endsection
