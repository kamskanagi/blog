<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="/">{{config('app.name')}}</a>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
              <a class="nav-link  {{Request::is('/') ? 'active' : ''}}" href="/">Home </a>
              </li>
              <li class="nav-item">
                <a class="nav-link  {{Request::is('about') ? 'active' : ''}}" href="/about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link  {{Request::is('contact') ? 'active' : ''}}" href="/contact">Contact</a>
              </li>
               <li class="nav-item ">
                <a class="nav-link {{Request::is('messages') ? 'active' : ''}}" href="/messages">Contact see</a>
              </li>
            </ul>
          </div>
      </div>
  </nav>