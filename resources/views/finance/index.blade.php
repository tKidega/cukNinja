
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

@section('login_content')
<div class='container' id='def_login'>

  <div id='dataSummary'>
    @include('scripts.content.finance.login.sysNutShell')
  </div>
  <div style='clear:both'></div>

  <div id='sysLogin'>
    <h3 class='main4Title'> VSLA user login</h3>
    @include('scripts.content.finance.login.frmVSLA')
  </div>
  <div style='clear:both'></div>

</div>
@endsection

@section('footer')
<?php
  //This section is Universal to the sub-system and loaded via the layout
?>
@endsection
