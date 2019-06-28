<?php
  define('TITLE','cukNinja Manager');
  define('DESC', 'Under_construction');
  define('SENSEI', 'timothykidega@gmail.com');
?>
 <!DOCTYPE html>
 <html lang='en'>
    <head>
      <title><?php echo TITLE; ?></title>
      <meta charset='UTF-8'>
      <meta name='Description' content = <?php echo DESC; ?> >
      <meta name='Developer' content = <?php print SENSEI; ?> >
    </head>
    <body>
        <div class='container'>
            <?php //Where 'header' describes the desired section in the view ?>
            <div class='pg_header' >
                @yield('header')
                <h2>cukNinja Manager - Universal Header Section</h2>
                <?php //Include source code for site header here ?>
            </div>
            <div style='clear:both'></div>

            <?php //Where 'navigator' describes the desired section in the view ?>
            <div class='pg_navigator' >
                @yield('navigator')
                <h2>cukNinja Manager - Universal Navigator Section</h2>
            </div>
            <div style='clear:both'></div>

            <?php //Where 'content' describes the desired section in the view ?>
            <div class='pg_content' >
                @yield('login_content')
                @yield('home_content')
                @yield('guest_content')
                @yield('admin_content')
                @yield('super_content')
            </div>
            <div style='clear:both'></div>

            <?php //Where 'footer' describes the desired section in the view ?>
            <div class='pg_footer' >
                @yield('footer')
                <h2>cukNinja Manager - Universal Footer Section</h2>
            </div>
            <div style='clear:both'></div>
        </div>
    </body>
 </html>
