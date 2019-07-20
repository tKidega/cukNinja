<header>
  <?php
    $access = true;
    $msg1 = '<h2 class="mainTitle">Access Denied!</h2>';
    $msg2 = '<h2 class="main4Title">The Management sub-system is not available at the momment.</h2>';
    $msg3 = '<h2 class="main2Title">Please check again at a later time.</h2>';
    $msg4 = '<h2 class="mainTitle">THANK YOU.</h2>';
    if($access != true){
      print $msg3;
      die();
    }else{
      print'<h3 class="mainTitle">Registered User Login</h3>' ;
    }
  ?>
</header>
