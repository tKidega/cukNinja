
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

@section('login_content')

<div class='container' id='def_login'>

  <div id='dataSummary'>

  </div>
  <div style='clear:both'></div>

  <div id='sysLogin'>
    @include('scripts.content.manager.login.secHeader')
    @include('scripts.content.manager.login.mgrLogin')
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
