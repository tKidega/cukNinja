<?php
  define('TITLE','cukNinja Manager');
  define('DESC', 'Under_construction');
  define('E_MAIL', 'timothykidega@gmail.com');
?>
<!DOCTYPE html>
<html lang='en'>
  <head>
    <title><?php echo TITLE; ?></title>
    <meta charset='UTF-8'>
    <meta name='Description' content = <?php echo DESC; ?> >
    <meta name='Developer' content = <?php print E_MAIL; ?> >
  </head>
  <body>
    <div class='container'>
      <div class='pg_header' >
        @yield('header')
        <?php
          //Where 'header' describes the desired section in the view
          //Add some logic here
        ?>
        <h2>cukNinja Manager - Universal Header Section</h2>
        <?php //Include source code for site header here ?>
      </div>
      <div style='clear:both'></div>

      <div class='pg_navigator' >
        <?php
          //Where 'navigator' describes the desired section in the view
          //Add some logic here
        ?>
        @yield('navigator')
        <h2>cukNinja Manager - Universal Navigator Section</h2>
      </div>
      <div style='clear:both'></div>

      <div class='pg_content' >
        <?php
          //Where 'content' describes the desired section in the view
          //Add some logic here
        ?>
        @yield('login_content')
        @yield('home_content')
        @yield('guest_content')
        @yield('admin_content')
        @yield('super_content')
      </div>
      <div style='clear:both'></div>

      <div class='pg_footer' >
        <?php
          //Where 'footer' describes the desired section in the view
          //Add some logic here
        ?>
        @yield('footer')
        <h2>cukNinja Manager - Universal Footer Section</h2>
      </div>
      <div style='clear:both'></div>
    </div>
    <div style='clear:both'></div>
  </body>
</html>
