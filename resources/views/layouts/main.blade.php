<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />

    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="/css/style.css" />

    <title>Document</title>
  </head>


  <header>
      <nav class="navbar navbar-expand-md navbar-light static-top">
        <a class="navbar-brand home-header" href="/">A R T S H I R T S</a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarCollapse"
          aria-controls="navbarCollapse"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <!-- <ul class="navbar-nav mr-auto">

          </ul> -->

          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="/"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/products">All products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/about-us">Contact</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>


  <main role="main">



@yield('my_content')






  <footer class="container">
        <p>
          &copy; 2019 Art Shirts &middot;
          <a href="#">Privacy</a> &middot; <a href="#">Terms</a>




        </p>
      </footer>

      <button onclick="topFunction()" id="myBtn" title="Go to top" class="btn">UP</button>

    </main>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.min.js"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js" integrity="sha256-dHf/YjH1A4tewEsKUSmNnV05DDbfGN3g7NMq86xgGh8=" crossorigin="anonymous"></script>


    <script src="/js/javascript.js"></script>

  </body>
</html>


