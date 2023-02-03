<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('img/favicon.png') }}">

    <title>Mon T-Shirt</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/album.css') }}" rel="stylesheet">
    <link href="{{ asset('css/tshirt.css') }}" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>

</head>

<body>

<header>
    <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-7 py-4">
                    <h4 class="text-white">About</h4>
                    <p class="text-white">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
                </div>
                <div class="col-sm-4 offset-md-1 py-4">
                    <h4 class="text-white">Contact</h4>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Follow on Twitter</a></li>
                        <li><a href="#" class="text-white">Like on Facebook</a></li>
                        <li><a href="#" class="text-white">Email me</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
            <a href="#" class="navbar-brand d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
                <strong>Mon T-Shirt</strong>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-shopping-cart"></i> Panier</a>
                </li>
            </ul>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-red">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Films</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Séries TV</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Musique</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Jeux-vidéos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sport</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<main>

  <section class="py-5 text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Commandez  votre <br><span class="">nouveau</span> <br>T-Shirt <span class="badge badge-primary bg-primary ">préféré </span>!</h1>
        <p class="lead text-muted">Dénichez THE T-Shirt de votre série, films préféré(e).</p>

    </div>
</section>

  @yield('content')

  


</main>

<footer class="text-muted">
  <div class="container">
      <p class="float-right">
          <a href="#">Back to top</a>
      </p>
      <p>Mon T-Shirt</p>
  </div>

</footer>


    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

      
  </body>
</html>