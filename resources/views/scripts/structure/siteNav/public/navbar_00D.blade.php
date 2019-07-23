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

        <li class="{{Request::is('/') ? 'active' : ' ' }}">
          <a href='/home'
          title='Return to home page'><h2 class='main5Title'>
          home</h2></a></li>

        <li class="{{Request::is('legal') ? 'active' : ' ' }}">
          <a href='/legal'
          title='View legal'><h2 class='main5Title'>
          legal</h2></a></li>

        <li class="{{Request::is('about') ? 'active' : ' ' }}">
          <a href='/about'
          title='View "About Us"'><h2 class='main5Title'>
          about</h2></a></li>

      </ul>

    </div>

  </div>
</nav>
