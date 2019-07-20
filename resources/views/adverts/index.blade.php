
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
  <div id='dataSummary'>
    <h3 class='main4Title'>cukNinja classifieds</h3>
    @include('scripts.content.adverts.home.mainContent')
  </div>
  <div style='clear:both'></div>

  <div id='sysLogin'>
    <h3 class='main4Title'>controll panel</h3>
    @include('scripts.content.adverts.home.controllPanel')
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
