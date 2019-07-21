
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
  @include('scripts.structure.siteNav.public.navbar_00B')
@endsection

@section('about_content')

<div class='container' id='def_login'>

  <div id='dataSummary'>
    <h3 class='main2Title'>about us</h3>
    @include('scripts.content.genHappiness.about.mainContent')
  </div>
  <div style='clear:both'></div>

  <div id='sysLogin'>
    <div>
      <h3 class='main2Title'>core values</h3>
      @include('scripts.content.genHappiness.about.coreValues')
    </div>
    <div style='clear:both'></div>

    <div>
      <h3 class='main2Title'>mission statement</h3>
      @include('scripts.content.genHappiness.about.missionStatement')
    </div>
    <div style='clear:both'></div>

  </div>
  <div style='clear:both'></div>

</div>

@endsection

@section('footer')
<?php
  //This section is Universal to the sub-system and loaded via the layout
?>
@endsection
