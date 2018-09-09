 <nav class="navbar navbar-expand-md navbar-light" style="background-color: #e3f2fd;">
      <a class="navbar-brand" href="/">REVIT</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav mr-auto">

        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
          @guest
            <li class="nav-item">
              <a href="{{route('login')}}" class="nav-link">Login <i class="fas fa-sign-in-alt"></i></a>
            </li>
            <li class="nav-item">
              <a href="{{route('register')}}" class="nav-link">Register <i class="fas fa-handshake"></i></a>
            </li>
          @else
            @if(Request::is('/'))
              <li class="nav-item">
                <a href="/dashboard" class="nav-link">DASHBOARD</a>
              </li>
            @endif
            <li class="nav-item dropdown float-right">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>{{ Auth::user()->name }} <i class="fas fa-globe-asia"></i> <span class="caret"></span></a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout <i class="fas fa-sign-out-alt"></i></a>
              <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">
                  @csrf
              </form>
            </div>
          </li>
          @endguest
        </ul>
      </div>
    </nav>