
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
@include('scripts.siteNav.public.navbar_00C')
@endsection

@section('search_content')
<div class='container' id='def_login'>

  <div id='dataSummary'>
    <h3 class='main2Title'>current market prices</h3>
    @include('scripts.content.genHappiness.search.tblResults')
  </div>
  <div style='clear:both'></div>

  <div id='sysLogin'>
    <h3 class='main2Title'>customize your search below</h3>
    @include('scripts.content.genHappiness.search.frmSearch')
  </div>
  <div style='clear:both'></div>

</div>
@endsection

@section('footer')
<?php
  //This section is Universal to the sub-system and loaded via the layout
?>
@endsection
