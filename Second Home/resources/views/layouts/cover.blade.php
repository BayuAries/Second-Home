<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset( 'vendor/bootstrap/css/bootstrap.min.css' ) }}" rel="stylesheet">

    <!-- fonts for this template -->
    <link href="{{ asset( 'vendor/fontawesome-free/css/all.min.css' ) }}" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- styles for this template -->
    <link href="{{ asset( 'css/clean-blog.min.css' ) }}" rel="stylesheet">



    <title>@yield('title')</title>
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="/">Second Home</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link {{ Request::is('utama*') ? 'bg-primary' : ''}}"  href="{{url('/utama')}}">Cari Home Stay</a>
              </li>
              @guest
              <li class="nav-item">
                <a class="nav-link {{ Request::is('guest/history*') ? 'bg-primary' : ''}}" href="{{url('/konfirmasi')}}">Booking History</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">{{ __('Masuk') }}</a>
              </li>
              @if (Route::has('register'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('register') }}">{{ __('Daftar') }}</a>
                  </li>
              @endif
          @else
              <li class="nav-item">
                 <a class="nav-link {{ Request::is('guest/history*') ? 'bg-primary' : ''}}" href="{{url('/guest/history')}}">Booking History</a>
              </li>
              <li class="nav-item dropdown">
                 <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }} <span class="caret"></span>
                 </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                  {{ __('Keluar') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                   @csrf
                </form>
              </div>
              </li>
          @endguest
            </ul>
        </div>
      </div>
    </nav>

    @yield('container')

   <!-- Bootstrap core JavaScript -->
    <script src="{{ asset( 'vendor/jquery/jquery.min.js' ) }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- scripts for this template -->
    <script src="{{ asset('js/clean-blog.min.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>


    @yield('footer')
  </body>
</html>
