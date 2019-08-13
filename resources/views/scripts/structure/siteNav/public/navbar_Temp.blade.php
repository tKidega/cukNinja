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

        <li class="{{Request::is('#') ? 'active' : ' ' }}">
          <a href="{{route('#')}}"
          title='Return to home page'><h2 class='main5Title'>
          link_name</h2></a></li>

        <li class="{{Request::is('#') ? 'active' : ' ' }}">
          <a href="{{route('#')}}"
          title='Querry the database'><h2 class='main5Title'>
          link_name</h2></a></li>

        <li class="{{Request::is('#') ? 'active' : ' ' }}">
          <a href="{{route('#')}}"
          title='View "About Us"'><h2 class='main5Title'>
          link_name</h2></a></li>

        <li class="{{Request::is('#') ? 'active' : ' ' }}">
          <a href="{{route('#')}}"
          title='Contact us'><h2 class='main5Title'>
          link_name</h2></a></li>

      </ul>
    </div>

  </div>
</nav>
