<?php
  define('TITLE','cukNinja VSLA sub-system');
  include'def.blade.php';
?>
<!DOCTYPE html>
<html lang='en'>
  <head>
    @include('scripts.structure.defaultOpt')
  </head>
  <body>
    <div class='container' id='wrapper'>
      <div id='pg_header' >
        <?php
          //Where 'header' describes the desired section in the view
          //Add some logic here
        ?>
        @yield('header')
        @include('scripts.structure.siteHeader.header_01')
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
        @yield('login_content')
        @yield('home_content')
        @yield('guest_content')
        @yield('admin_content')
        @yield('siteAdmin_content')

      </div>
      <div style='clear:both'></div>

      <div id='sysMaquee'>
        @include('scripts.structure.bulletin.finance_board')
      </div>
      <div style='clear:both'></div>

      <div id='pg_footer' >
      <?php
        //Where 'footer' describes the desired section in the view
        //Add some logic here
      ?>
        @yield('footer')
        @include('scripts.structure.siteFooter.footer_01')
      </div>
      <div style='clear:both'></div>
    </div>
    <div style='clear:both'></div>
  </body>
</html>
