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
        <li class="{{Request::is('search') ? 'active' : ' ' }}">
          <a href="{{route('#')}}"
          title='Something about this link'><h2 class='main5Title'>
          View_Name</h2></a></li>

        <li class="{{Request::is('about') ? 'active' : ' ' }}">
          <a href="{{route('#')}}"
          title='Something about this link'><h2 class='main5Title'>
          View_Name</h2></a></li>

        <li class="{{Request::is('contact') ? 'active' : ' ' }}">
          <a href="{{route('#')}}"
          title='Something about this link'><h2 class='main5Title'>
          View_Name</h2></a></li>

        <li class="{{Request::is('contact') ? 'active' : ' ' }}">
          <a href="{{route('#')}}"
          title='Something about this link'><h2 class='main5Title'>
          View_Name</h2></a></li>
      </ul>

    </div>

  </div>

</nav>
