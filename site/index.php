<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontello.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Bootstrap study</title>
</head>
<body>

  <div class="container">
    <div class="row">
      <nav class="navbar mynav navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something more here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
    </div>
  </div>
   <header>
        <!-- bootstrap classes -->
        <!-- comment -->
        
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center text-white">?????????? ???????? ???? ?????????????? ?????? ???????????????????? HTML & CSS</h1>
                    <div class="itd_play" data-bs-toggle="modal" data-bs-target="#myModal">
                        <div class="itd_triangle"></div>
                    </div>
                    <a href="#footer" class="btn btn-itd btn-lg text-uppercase">????????????????</a>
                </div>
            </div>
        </div>
   </header>
   <?php
   include('about.html');
   ?> 


   <section class="forwhom">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2 class="text-center text-uppercase color2 mb-5">???????? ?????? ??????, ??????</h2>
        </div>
      </div>
      <div class="row mb-5">
        <div class="col-md-6 col-sm-12">
          <h5 class="text-center">?????????? ?????????????????? ?????????????????? ?????????? ???????????? ????????????</h5>
        </div>

        <div class="col-md-6 col-sm-12">
          <h5 class="text-center">???????????? ?????????????????????? ???????????????????????? ????????????????????</h5>
        </div>

        <div class="col-md-6 col-sm-12">
          <h5 class="text-center">?????? ???? ?????????? ???????? HTML ?? CSS, ???? ?????????? ??????????????</h5>
        </div>

        <div class="col-md-6 col-sm-12">
          <h5 class="text-center">?????????? ?????????? ???????????? ???????????????? ?? ???????????????????????? ????????????</h5>
        </div>

      </div>
      <div class="row">
        <div class="col-12">
          <a href="#footer" class="btn btn-lg text-uppercase btn-itd">
            ????????????????
          </a>
        </div>
      </div>
    </div>
   </section>



  <footer id="footer"></footer>



  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">?????????????? ?????????? ?????????? ???? HTML ?? CSS</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class='embed-container'><iframe src='https://www.youtube.com/embed//41tdjZWeCH0' frameborder='0' allowfullscreen></iframe></div>
        </div>

      </div>
    </div>
  </div>






  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>


    <script src="js/bootstrap.bundle.min.js"></script>

    <button type="button" class="btn btn-primary">Primary</button>
</body>
</html>