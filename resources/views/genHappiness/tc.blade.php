
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

@section('tc_content')

<div class='container' id='def_login'>
  <div id='dataSummary'>

    <h3 class='main2Title'>terms and conditions</h3>
    @include('scripts.content.genHappiness.tnc.mainContent')
  </div>
  <div style='clear:both'></div>

  <div id='sysLogin'>
    <h3 class='main2Title'>public notice</h3>
    @include('scripts.content.genHappiness.tnc.publicNotice')
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
