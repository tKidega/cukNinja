
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

@section('guest_content')
<div class='container' id='def_login'>

  <div id='dataSummary'>
    <h3>admin panel one</h3>
    @include('scripts.content.manager.guestAdmin.panelOne')
  </div>
  <div style='clear:both'></div>

  <div id='sysLogin'>
    <h3>admin panel two</h3>
    @include('scripts.content.manager.guestAdmin.panelTwo')
  </div>
  <div style='clear:both'></div>

</div>
@endsection

@section('footer')
<?php
  //This section is Universal to the sub-system and loaded via the layout
?>
@endsection
