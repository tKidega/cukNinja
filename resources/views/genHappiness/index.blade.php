
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
    //This section is customizable based on sub-system requirements.
  ?>
  @include('scripts.structure.siteNav.public.navbar_00A')
@endsection

@section('home_content')

<div class='container' id='def_login'>

  <div id='dataSummary'>
    @include('scripts.content.genHappiness.home.weeklyGraph')
    @include('scripts.content.genHappiness.home.monthlyGraph')
    @include('scripts.content.genHappiness.home.yearlySummary')
  </div>
  <div style='clear:both'></div>

  <div id='sysLogin'>
    @include('scripts.structure.animation.sec2Header')
    @include('scripts.content.genHappiness.home.userGuide')
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
