
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

@section('guest_content')

<div class='container' id='def_login'>

  <div id='dataSummary'>
    <h3 class='main2Title'>VSLA user dashboard</h3>
    @include('scripts.content.finance.vslaUser.mainContent')
  </div>
  <div style='clear:both'></div>

  <div id='sysLogin'>
    <h3 class='main2Title'>user controll panel</h3>
    @include('scripts.content.finance.vslaUser.controllPanel')
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
