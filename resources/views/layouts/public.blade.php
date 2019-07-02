<?php
  define('TITLE','cukNinja Public');
  define('DESC', 'Under_construction');
  define('E_MAIL', 'timothykidega@gmail.com');
?>
<!DOCTYPE html>
<html lang='en'>
  <head>
    <title><?php echo TITLE; ?></title>
    <meta charset='UTF-8'>
    <meta name='Description' content = <?php echo DESC; ?> >
    <meta name='Developer'   content = <?php echo E_MAIL; ?> >
    <link rel='stylesheet' type='text/css'
          href='../assets/css/myStyle.css' />
    <style>
      .secTitle,.sec2Title{
        color: rgba(65,65,65,0.95);
      }.secTitle{
        font-size: 1.3em;
      }.sec2Title{
        font-size: 1.15em;
      }
    </style>
  </head>
  <body>
    <div class='container'>
      <div class='pg_header' >
        @yield('header')
        <?php
        //Where 'header' describes the desired section in the view
        //Add some logic here
        ?>
        <h3 class='secTitle' >
          cukNinja Public View - Universal Header Section</h3>
        <?php
          //Include source code for site header here
        ?>
      </div>
      <div style='clear:both'></div>

      <div class='pg_navigator' >
        <?php
          //Where 'navigator' describes the desired section in the view
          //Add some logic here....
        ?>
        @yield('navigator')
        <h3 class='secTitle' >
          cukNinja Public View - Universal Navigator Section</h3>
      </div>
      <div style='clear:both'></div>

      <div class='pg_content' >
        <?php
          //Where 'home_content' describes the desired section in the view
          //Add some logic here....
        ?>
        @yield('home_content')
        @yield('about_content')
        @yield('search_content')
        @yield('contact_content')
      </div>
      <div style='clear:both'></div>

      <div class='pg_footer' >
        @yield('footer')
      <?php
        //Where 'footer' describes the desired section in the view
        //Add some logic here
      ?>
        <h3 class='secTitle' >
          Copyright&copy; <?php echo date('Y'); ?></h3>
      </div>
      <div style='clear:both'></div>
    </div>
    <div style='clear:both'></div>
  </body>
</html>
