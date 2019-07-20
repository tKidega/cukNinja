
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
@include('scripts.siteNav.farmer.navbar_00A')
@endsection

@section('login_content')
<div class='container' id='def_login'>

    <div id='dataSummary'>
      @include('scripts.content.farmer.login.sysNutShell')
    </div>
    <div style='clear:both'></div>

    <div id='sysLogin'>
      <h3 class='main4Title'>cukNinja-Farmer User Login</h3>
      @include('scripts.content.farmer.login.frmLogin')
    </div>
    <div style='clear:both'></div>

</div>
@endsection

@section('footer')
<?php
  //This section is Universal to the sub-system and loaded via the layout
?>
@endsection
