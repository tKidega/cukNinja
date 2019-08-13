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
        <li class="{{Request::is('home') ? 'active' : ' ' }}">
          <a href="{{route('pubHome')}}"
          title='Return to home page'><h2 class='main5Title'>
          home</h2></a></li>

        <li class="{{Request::is('search') ? 'active' : ' ' }}">
          <a href="{{route('search')}}"
          title='Querry the database'><h2 class='main5Title'>
          search</h2></a></li>

        <li class="{{Request::is('about') ? 'active' : ' ' }}">
          <a href="{{route('about')}}"
          title='View "About Us"'><h2 class='main5Title'>
          about</h2></a></li>

        <li class="{{Request::is('contact') ? 'active' : ' ' }}">
          <a href="{{route('contact')}}"
          title='Contact us'><h2 class='main5Title'>
          contact</h2></a></li>
      </ul>

    </div>

  </div>

</nav>
