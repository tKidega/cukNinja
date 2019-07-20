
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

@section('super_content')
<div class='container' id='def_login'>

  <div id='dataSummary'>
    <h3 class='main4Title'>super admin page</h3>
    @include('scripts.content.manager.superAdmin.superContent')
  </div>
  <div style='clear:both'></div>

  <div id='sysLogin'>
    <h3 class='main4Title'>super admin controll panel</h3>
    @include('scripts.content.manager.superAdmin.superControll')
  </div>
  <div style='clear:both'></div>

</div>
@endsection

@section('footer')
<?php //This section is Universal to the sub-system and loaded via the layout ?>
@endsection
