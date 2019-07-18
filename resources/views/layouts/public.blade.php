<?php
  define('TITLE','cukNinja Public');
  define('DESC', 'Under_construction');
  define('E_MAIL', 'timothykidega@gmail.com');
  define('SYS_ONE', 'cukNinja');
  define('PHONE', '+256-756-023-283');
?>
<!DOCTYPE html>
<html lang='en'>
  <head>
    <title><?php echo TITLE; ?></title>
    <meta charset='UTF-8'>
    <meta name='Description' content = <?php echo DESC; ?> >
    <meta name='Developer'   content = <?php echo E_MAIL; ?> >
    <meta name='Contact'   content = <?php echo PHONE; ?> >
    <link rel='stylesheet' type='text/css' href='css/app.css' />
  </head>
  <body>
    <div class='container' id='wrapper'>
      <div id='pg_header' >
        <?php
          //Where 'header' describes the desired section in the view
          //Add some logic here
        ?>
        @yield('header')
        @include('scripts.siteHeader.header_00')
      </div>
      <div style='clear:both'></div>

      <div id='pg_navigator' >
        <?php
          //Where 'navigator' describes the desired section in the view
          //Add some logic here....
        ?>
        @yield('navigator')
      </div>
      <div style='clear:both'></div>

      <div id='def_content' >
        <?php
          //Where 'home_content' describes the desired section in the view
          //Add some logic here....
        ?>
        @yield('home_content')
        @yield('search_content')
        @yield('about_content')
        @yield('contact_content')
        @yield('faq_content')
        @yield('legal_content')
        @yield('tc_content')
        
      </div>
      <div style='clear:both'></div>

      <div id='sysMaquee'>
        @include('scripts.bulletin.public_board')
      </div>
      <div style='clear:both'></div>

      <div id='pg_footer' >
        @yield('footer')
      <?php
        //Where 'footer' describes the desired section in the view
        //Add some logic here
      ?>
        @include('scripts.siteFooter.footer_00')
      </div>
      <div style='clear:both'></div>
    </div>
    <div style='clear:both'></div>
  </body>
</html>
