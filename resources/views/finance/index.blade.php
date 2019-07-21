
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
    //This section is customizable based on sub-system requirements.
  ?>
  @include('scripts.structure.siteNav.finance.navbar_00A')
@endsection

@section('login_content')

<div class='container' id='def_login'>

  <div id='dataSummary'>
    @include('scripts.content.finance.login.sysNutShell')
  </div>
  <div style='clear:both'></div>

  <div id='sysLogin'>
    @include('scripts.structure.animation.secHeader')
    @include('scripts.content.finance.login.frmLogin')
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
