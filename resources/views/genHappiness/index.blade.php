
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
@include('scripts.siteNav.public.navbar_00A')
@endsection

@section('home_content')
<div class='container' id='def_login'>
  <div id='graphSummary'>

    <div id='wklySummary'>
      <div class='graph'>
        <img src='graphix/graph_A.jpg' type='graphics/jpg' alt='graph'/>
      </div>
      <div class='graphTitle'>
        <h2 class="main4Title"><a href=''>
          Weekly Summary Graph</a></h2>
      </div>
    </div>
    <div style='clear:both'></div>

    <div id='monthlySummary'>
      <div class='graph'>
        <img src='graphix/graph_B.jpg' type='graphics/jpg' alt='graph'/>
      </div>
      <div class='graphTitle'>
        <h2 class="main4Title"><a href=''>
          Quarterly Summary Graph</a></h2>
      </div>
    </div>
    <div style='clear:both'></div>

    <div id='yrlySummary'>
      <div class='graph'>
        <img src='graphix/table_A.jpg' type='graphics/jpg' alt='table'/>
      </div>
      <div class='graphTitle' id='graphTitle'>
        <h2 class="main4Title"><a href=''>
          Annual Summary Data</a></h2>
      </div>
    </div>
    <div style='clear:both'></div>

  </div>
  <div style='clear:both'></div>

  <div id='sysLogin'>
    <h3 class='main2Title'>System Guide
      <article>
        <span class='dot_one'>&bull;</span>
  		  <span class='dot_two'>&bull;</span>
  		  <span class='dot_three'>&bull;</span>
      </article>
    </h3>
    <?php
      //sub-system Login form here
    ?>
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
