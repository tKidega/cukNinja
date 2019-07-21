
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
  @include('scripts.structure.siteNav.public.navbar_00F')
@endsection

@section('contact_content')

<div class='container' id='def_login'>

  <div id='dataSummary'>
    <h3 class='main2Title'>contact us</h3>
    @include('scripts.content.genHappiness.contact.sysContact')
  </div>
  <div style='clear:both'></div>

  <div id='sysLogin'>
    <h3 class='main2Title'>system developer</h3>
    @include('scripts.content.genHappiness.contact.sysDeveloper')
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
