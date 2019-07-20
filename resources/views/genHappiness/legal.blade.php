
<?php
  //This template loads default settings that are re-usable by the system
?>
@extends('layouts.public')

@section('header')
<?php
  //This section is Universal to the sub-system and loaded via the layout
?>
@endsection

@section('navigator')
<?php
  //This section is Universal to the sub-system and loaded via the layout
?>
@include('scripts.siteNav.public.navbar_00E')
@endsection

@section('legal_content')

<div class='container' id='def_login'>

  <div id='dataSummary'>
    <h3 class='main2Title'>legal notice</h3>
    @include('scripts.content.genHappiness.legal.legalNotice')
  </div>
  <div style='clear:both'></div>

  <div id='sysLogin'>
    <h3 class='main2Title'>disclaimer</h3>
    @include('scripts.content.genHappiness.legal.disclaimer')
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
