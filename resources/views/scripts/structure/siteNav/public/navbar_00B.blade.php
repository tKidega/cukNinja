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
          <a href="{{route('pubHome')}}"
          title='Click to go to home page'><h2 class='main5Title'>
          home</h2></a></li>

        <li class="{{Request::is('faq') ? 'active' : ' ' }}">
          <a href="{{route('faq')}}"
          title='View FAQ'><h2 class='main5Title'>
          F.A.Q</h2></a></li>

        <li class="{{Request::is('legal') ? 'active' : ' ' }}">
          <a href="{{route('legal')}}"
          title='View legal'><h2 class='main5Title'>
          legal</h2></a></li>

      </ul>

    </div>

  </div>
</nav>
