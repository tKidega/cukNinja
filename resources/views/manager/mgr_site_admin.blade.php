
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

@section('admin_content')
<div class='container' id='def_login'>

  <div id='dataSummary'>
    <h3 class='main4Title'>site administrator</h3>
    @include('scripts.content.manager.siteAdmin.adminContent')
  </div>
  <div style='clear:both'></div>

  <div id='sysLogin'>
    <h3 class='main4Title'>admin controll panel</h3>
    @include('scripts.content.manager.siteAdmin.controllPanel')
  </div>
  <div style='clear:both'></div>

</div>
@endsection

@section('footer')
<?php //This section is Universal to the sub-system and loaded via the layout ?>
@endsection
