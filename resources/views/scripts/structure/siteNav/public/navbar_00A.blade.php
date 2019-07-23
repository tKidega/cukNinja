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
          <a href='/search'
          title='Click to query database'><h2 class='main5Title'>
          search</h2></a></li>

        <li class="{{Request::is('about') ? 'active' : ' ' }}">
          <a href='/about'
          title='Click to view "About Us"'><h2 class='main5Title'>
          about</h2></a></li>

        <li class="{{Request::is('contact') ? 'active' : ' ' }}">
          <a href='/contact'
          title='Click to contact us'><h2 class='main5Title'>
          contact</h2></a></li>

        <?php // Defining JS to toggle sub-system menu ?>
        <li>

          <div class='dropdown' id='subSys'>

            <div id='sysBtn'>
              <button onclick="myFunction()"
                class='dropbtn' title='Click to view more services'>
                <h3 class='mainTitle'>&bull;  &bull;  &bull;</h3>
              </button>
            </div>
            <div style='clear:both'></div>

            <script src='subSystem.js'></script>

            <?php // Defining sub-system menu ?>
            <div id="myDropdown" class='dropdown-list'>
              <a href='/vsla'
                title='Login to Finance sub-sytem'>VSLA</a>
              <a href='/farmer'
                title='Login to Farmers sub-system'>Farmer</a>
              <a href='/adverts'
                title='Login to cukNinja Manager'>Classifieds</a>
              <a href='/manager'
                title='Login to cukNinja Manager'>Manager</a>
            </div>
            <div style='clear:both'></div>

          </div>
          <div style='clear:both'></div>

       </li>
      </ul>
    </div>
  </div>
</nav>
