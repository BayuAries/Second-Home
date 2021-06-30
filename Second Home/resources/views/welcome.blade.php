<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Second Home</title>

  <!-- Bootstrap core CSS -->
  <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/agency.min.css" rel="stylesheet">

</head>
    <body id="page-top">

      <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">Second Home</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              Menu
              <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav text-uppercase ml-auto">
                <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="#services">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="#team">Team</a>
                </li>
              @if (Route::has('login'))
                @auth
                    @if(Auth::user()->role=='owner')
                <li class="nav-item">
                  <a class="nav-link js-scroll-trigger"  href="{{ url('/owner') }}">Menu</a>
                </li>
                    @elseif(Auth::user()->role=='admin')
                <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="{{ url('/admin') }}">Menu</a>
                </li>
                    @elseif(Auth::user()->role=='user')
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu" aria-labelledby="navbarDropdown">
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
                    @endif
                @else
                <li class="nav-item js-scroll-trigger">
                  <a class="nav-link " href="{{ route('login') }}">Masuk</a>
                </li>
                  @if (Route::has('register'))
                  <li class="nav-item js-scroll-trigger">
                    <a class="nav-link "  href="{{ route('register') }}">Daftar</a>
                  </li>
                  @endif
                @endauth
              @endif
              </ul>
            </div>
          </div>
        </nav>

        <header class="masthead">
          <div class="container">
            <div class="intro-text">
              <div class="intro-lead-in"></div>
              <div class="intro-heading text-uppercase">Selamat Datang</div>
              <a class="btn btn-primary btn-xl text-uppercase " href="/utama">Cari Homestay</a>
            </div>
          </div>
        </header>

        <section class="page-section" id="services">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">Second Home</h2>
              </div>
            </div>
            <div class="row  text-center">
              <div class="col-lg-12  text-center">
                <h3 class="section-subheading text-muted">Second Home adalah Aplikasi yang memudahkan anda dalam mencari homestay di sekitar kota Yogyakarta </h3>
              </div>
            </div>
          </div>
        </section>

        <!-- Team -->
          <section class="bg-light page-section" id="team">
            <div class="container">
              <div class="row">
                <div class="col-lg-12 text-center">
                  <h2 class="section-heading text-uppercase">Tim Kami</h2>
                  <h3 class="section-subheading text-muted">Dari Tim 5</h3>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-4">
                  <div class="team-member">
                    <img class="mx-auto rounded-circle" src="img/aman.jpg" alt="">
                    <h4>Aman Syuhada DewanTara</h4>
                    <p class="text-muted">Developer & Documentation</p>
                    <ul class="list-inline social-buttons">
                      <li class="list-inline-item">
                        <a href="https://www.instagram.com/amansyuhada/">
                          <i class="fab fa-linkedin-in"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="team-member">
                    <img class="mx-auto rounded-circle" src="img/bayu.jpg" alt="">
                    <h4>Bayu Aries Wicaksono</h4>
                    <p class="text-muted">Project Manager & Developer</p>
                    <ul class="list-inline social-buttons">
                      <li class="list-inline-item">
                        <a href="https://www.instagram.com/bayuaries_w/">
                          <i class="fab fa-linkedin-in"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="team-member">
                    <img class="mx-auto rounded-circle" src="img/Tb.jpg" alt="">
                    <h4>TB Daffa Asyraf Dakhilullah</h4>
                    <p class="text-muted">Tester & Developer</p>
                    <ul class="list-inline social-buttons">
                      <li class="list-inline-item">
                        <a href="https://www.instagram.com/tubagusdaffa_/">
                          <i class="fab fa-linkedin-in"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                  <p class="large text-muted">Copy Right &copy; Team 5 2019</p>
                </div>
              </div>
            </div>
          </section>

          <script src="vendor/jquery/jquery.min.js"></script>
          <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

          <!-- Plugin JavaScript -->
          <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

          <!-- Contact form JavaScript -->
          <script src="js/jqBootstrapValidation.js"></script>
          <script src="js/contact_me.js"></script>

          <!-- Custom scripts for this template -->
          <script src="js/agency.min.js"></script>

    </body>
</html>
