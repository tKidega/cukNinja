<nav class='navbar navbar-inverse'>
  <div class=''>

    <div class='navbar-header'>
      <button type='button' class='navbar-toggle collapsed'>
        <span class='sr-only'>Toggle Navigation</span>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
      </button>
    </div>

    <div id='navbar' class='collapse navbar-collapse'>
      <ul class='nav navbar-nav'>

        <li class="{{Request::is('search') ? 'active' : ' ' }}">
          <a href="{{route('search')}}"
          title='Click to query database'><h2 class='main5Title'>
          search</h2></a></li>

        <li class="{{Request::is('about') ? 'active' : ' ' }}">
          <a href="{{route('about')}}"
          title='Click to view "About Us"'><h2 class='main5Title'>
          about</h2></a></li>

        <li class="{{Request::is('contact') ? 'active' : ' ' }}">
          <a href="{{route('contact')}}"
          title='Click to contact us'><h2 class='main5Title'>
          contact</h2></a></li>

        <?php // Defining JS to toggle sub-system menu ?>
        <li>
        <!--
        <div class='dropdown' id='subSys'>

          <div id='sysBtn'>
            <button onclick="myFunction()"
              class='dropbtn' title='Click to view more services'>
              <h3 class='mainTitle'>&bull;  &bull;  &bull;</h3>
            </button>
          </div>
          <div style='clear:both'></div>

          <script src='subSystem.js'></script>

          <?php
            // Defining sub-system menu
            // class='dropdown'
          ?>
          -->
          <div id='subSys'>

            <article id='sysBtn'>
              <h3 class='mainTitle' title='more services'>
              &bull;  &bull;  &bull;</h3>
            </article>

          </div>
          <div style='clear:both'></div>

          <ul>

            <li><a href="{{route('vslaLogin')}}"
              title='Login to Finance sub-sytem'>
              <h3 class='subTitle'>VSLA</h3></a></li>

            <li><a href="{{route('famrLogin')}}"
              title='Login to Farmers sub-system'>
              <h3 class='subTitle'>Farmer</h3></a></li>

            <li><a href="{{route('adverts')}}"
              title='Login to cukNinja Manager'>
              <h3 class='subTitle'>Classifieds</h3></a></li>

            <li><a href="{{route('mgrLogin')}}"
              title='Login to cukNinja Manager'>
              <h3 class='subTitle'>Manager</h3></a></li>

          </ul>

        </li>

      </ul>
    </div>
    <div style='clear:both'></div>

    </div>
    <div style='clear:both'></div>

</nav>
