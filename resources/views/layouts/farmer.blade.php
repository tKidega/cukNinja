<?php
  define('TITLE','cukNinja Farmer');
  define('DESC', 'Under_construction');
  define('E_MAIL', 'timothykidega@gmail.com');
  define('SYS_ONE', 'cukNinja');
?>
<!DOCTYPE html>
<html lang='en'>
  <head>
    <title><?php echo TITLE; ?></title>
    <meta charset='UTF-8'>
    <meta name='Description' content = <?php echo DESC; ?> >
    <meta name='Developer' content = <?php print E_MAIL; ?> >
    <link rel='stylesheet' type='text/css' href='/css/app.css' />
  </head>
  <body>
    <div class='container'>
      <div class='pg_header' >
        <?php
          //Where 'header' describes the desired section in the view
          //Add some logic here
        ?>
        @yield('header')
        @include('scripts.header_02')
      </div>
      <div style='clear:both'></div>

      <div class='pg_navigator' >
        <?php
          //Where 'navigator' describes the desired section in the view
          //Add some logic here
        ?>
        @yield('navigator')
        @include('scripts.navbar_02')
      </div>
      <div style='clear:both'></div>

      <div class='pg_content' >
        <?php
          //Where 'content' describes the desired section in the view
          //Add some content here
        ?>
        @yield('login_content')
        @yield('home_content')
        @yield('guest_content')
        @yield('agent_content')
        @yield('siteAdmin_content')
      </div>
      <div style='clear:both'></div>

      <div class='pg_footer' >
        <?php
          //Where 'footer' describes the desired section in the view
          //Add some logic here
        ?>
        @yield('footer')
        @include('scripts.footer_02')
      </div>
      <div style='clear:both'></div>
    </div>
    <div style='clear:both'></div>
  </body>
</html>
