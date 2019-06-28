<?php
  define('TITLE','cukNinja Public');
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
                <h3>cukNinja Public View - Universal Header Section</h3>
                <?php //Include source code for site header here ?>
            </div>
            <div style='clear:both'></div>

            <?php //Where 'navigator' describes the desired section in the view ?>
            <div class='pg_navigator' >
                @yield('navigator')
                <h3>cukNinja Public View - Universal Navigator Section</h3>
            </div>
            <div style='clear:both'></div>

            <?php //Where 'content' describes the desired section in the view ?>
            <div class='pg_content' >
                @yield('home_content')
                @yield('about_content')
                @yield('search_content')
                @yield('contact_content')
            </div>
            <div style='clear:both'></div>

            <?php //Where 'footer' describes the desired section in the view ?>
            <div class='pg_footer' >
                @yield('footer')
                <h3>cukNinja Public View - Universal Footer Section</h3>
            </div>
            <div style='clear:both'></div>
        </div>
    </body>
 </html>
