<?php
  define('TITLE','cukNinja Farmer');
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
    <link rel='stylesheet' type='text/css'
          href='../assets/css/myStyle.css'/>
  </head>
  <body>
    <div class='container'>
      <div class='pg_header' >
        <?php
          //Where 'header' describes the desired section in the view
          //Add some logic here
        ?>
        @yield('header')
        <h2>cukNinja Farmer - Universal Header Section</h2>
        <?php //Include source code for site header here ?>
      </div>
      <div style='clear:both'></div>

      <div class='pg_navigator' >
        <?php
          //Where 'navigator' describes the desired section in the view
          //Add some logic here
        ?>
        @yield('navigator')
        <h2>cukNinja Farmer - Universal Navigator Section</h2>
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
        <h3>cukNinja Farmer - Universal Footer Section</h3>
      </div>
      <div style='clear:both'></div>
    </div>
    <div style='clear:both'></div>
  </body>
</html>
