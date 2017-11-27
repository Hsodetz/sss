<!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>SDJ</b>3</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"> Servicios DJJM 3000  </span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>                       

      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <!-- Authentication Links -->
          @if (Auth::guest())
              <li><a href="{{ route('login') }}">  @lang('auth.login_button') </a></li>
              <li><a href="{{ route('register') }}">  @lang('auth.register_button') </a></li>
          @else
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                  {{ Auth::user()->name }} <span class="caret"></span>
              </a>

              <ul class="dropdown-menu" role="menu">
                  <li>
                      <a href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                            @lang('auth.logout_button')
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                      </form>
                  </li>
              </ul>
            </li>
          @endif
          
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                Lenguaje <span class="caret"></span>
            </a>

            <ul class="dropdown-menu" role="menu">
                <li> <a href="{{ url('lang', ['es']) }}"> Espanol </a>  </li>
            <li> <a href="{{ url('lang', ['en']) }}"> Ingles </a> </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>