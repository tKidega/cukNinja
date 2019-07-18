
<?php
  //This template loads default settings that are re-usable by the system
?>
@extends('layouts.adverts')

@section('header')
<?php
  //This section is Universal to the sub-system and loaded via the layout
?>
@endsection

@section('navigator')
<?php
  //This section is Universal to the sub-system and loaded via the layout
?>
@include('scripts.siteNav.adverts.navbar_00')
@endsection

@section('advert_content')
<div class='container' id='def_login'>
  <div id='graphSummary'>


  </div>
  <div style='clear:both'></div>

  <div id='sysLogin'>
    <h3>Classifieds sub-system - Custom Page Content Section</h3>
    <?php
      //sub-system content here
    ?>
  </div>
  <div style='clear:both'></div>

</div>
<div style='clear:both'></div>
@endsection

@section('footer')
<?php
  //This section is Universal to the sub-system and loaded via the layout
?>
@endsection
