
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
@include('scripts.siteNav.public.navbar_00D')
@endsection

@section('faq_content')
<div class='container' id='def_login'>

  <div id='dataSummary'>
    <h3 class='main2Title'>frequently asked questions</h3>
    @include('scripts.content.genHappiness.faq.mainContent')
  </div>
  <div style='clear:both'></div>

  <div id='sysLogin'>
    <div>
      <h3 class='main2Title'>ask us</h3>
      @include('scripts.content.genHappiness.faq.q&a')
    </div>
    <div style='clear:both'></div>
    <div>
      <h3 class='main2Title'>advertisment</h3>
      @include('scripts.content.genHappiness.faq.adverts')
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
