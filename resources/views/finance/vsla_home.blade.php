
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
@include('scripts.siteNav.finance.navbar_00A')
@endsection

@section('home_content')
<div class='container' id='def_login'>

  <div id='dataSummary'>
    <h3 class='main4Title'>VSLA home</h3>
    @include('scripts.content.finance.home.contentOne')
  </div>
  <div style='clear:both'></div>

  <div id='sysLogin'>
    <h3 class='main4Title'>VSLA home</h3>
    @include('scripts.content.finance.home.contentTwo')
  </div>
  <div style='clear:both'></div>

</div>
@endsection

@section('footer')
<?php //This section is Universal to the sub-system and loaded via the layout ?>
@endsection
