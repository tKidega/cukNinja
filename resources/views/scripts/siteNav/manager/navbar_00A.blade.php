<nav class='navbar navbar-inverse'>
  <div class=''>
    <div class='navbar-header'>
      <button type='button' class='navbar-toggle collapsed'>
        <span class='sr-only'>Toggle Navigation</span>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
      </button>
    </div>
    <div id='navbar' class='collapse navbar-collapse'>
      <ul class='nav navbar-nav'>
        <li><a class='navbar-brand' href='/search'
          title='Click to query database'>Search</a></li>
        <li><a href='/about'
          title='Click to view "About Us" '>About</a></li>
        <li><a href='/contact'
          title='Click to contact us'>Contact</a></li>
        <?php // Defining JS to toggle sub-system menu ?>
        <li>
          <div class='dropdown' id='subSys'>
            <button onclick="myFunction()"
              class='dropbtn' title='Click to view more services'>
              <h3 class='subSys'>Services</h3>
            </button>
            <script src='custom/subSystem.js'></script>
            <?php // Defining sub-system menu ?>
            <div id="myDropdown" class='dropdown-list'>
              <a href='/finance'
                title='Login to Finance sub-sytem'>Finance</a>
              <a href='/farmer'
                title='Login to Farmers sub-system'>Farmer</a>
              <a href='/manager'
                title='Login to cukNinja Manager'>Manager</a>
            </div>
            <div style='clear:both'></div>
          </div>
       </li>
      </ul>
    </div>
  </div>
</nav>
