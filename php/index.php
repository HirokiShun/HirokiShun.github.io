<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/myStyle.css?v={random number/string}">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        <title>Pagina principal</title>
    </head>
    <body>
        <div class="Navbar">
            <nav class="navbar sticky-top navbar-dark" style="background-color: #1B1B2F;">
                <a class="navbar-brand" href="#">El muro del gremio</a>
                <div class="SearchBar">
                    <form class="form-inline" action="/SearchNota" method="POST" enctype="multipart/form-data">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="SearchField">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
                <?php
                if (session_status() == PHP_SESSION_ACTIVE) {
                    ?>
                    <div class="User_link">
                        <div Class="avatar">
                            <img src="img/Profile.jpg" class="avatar" name="avtr">
                        </div>
                        <a class="fw-bold text-center  text-white mt-2" href=""></a>
                        <a class="fw-bold text-center  text-white mt-2" href="Profile.php">ver Perfil</a>
                    </div>
                    <?php
                } else {
                    ?>
                    <ul>
                        <a href="Login.php" class="btn btn-primary">Login</a>
                        <a href="RegUsr.php" class="btn btn-primary">Registrar</a>
                    </ul>
    <?php
}
?>
            </nav>
        </div>

        <div class="CarouselBox">
            <div id="carouselNews" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselNews" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselNews" data-slide-to="1"></li>
                    <li data-target="#carouselNews" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/mhRise.jpg" class="d-block w-100" alt="Monster Hunter Sunbreak" height="400px" >
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Monster Hunter Rise: Nuevo DLC</h5>
                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/eldenRing.jpg" class="d-block w-100" alt="Elden Ring"height="400px">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Elden Ring: el regreso de Dark Souls</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/GGStrive.jpg" class="d-block w-100" alt="Guilty Gear"height="400px">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Guilty Gear Strive: un refresco a los juegos de pelea</h5>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselNews" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#carouselNews" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>

        <div class="Centerbox"> 

            <div class="row row-cols-1 row-cols-md-2">
                <div class="col-sm-6">
                    <div class="card mb-3">
                        <img src="img/GGStrive.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Guilty Gear Strive</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="Article.php" class="btn btn-primary">Leer</a>
                            <span class="badge bg-warning">No aprobado</span>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="card mb-3">
                        <img src="img/mhRise.jpg" class="card-img-top" alt="...">
                        <div class="card-body"id="">
                            <h5 class="card-title">Monster Hunter Rise</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="Article.php" class="btn btn-primary">Leer</a>
                            <span class="badge bg-success">aprobado</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card mb-3">
                        <img src="img/eldenRing.jpg" class="card-img-top" alt="...">
                        <div class="card-body"id="">
                            <h5 class="card-title">Elden Ring</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="Article.php" class="btn btn-primary">Leer</a>
                            <span class="badge bg-danger">Eliminado</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="PageNav">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
            <div>
                <a href="CrtArtcl.php" class="btn btn-primary">Agregar Articulo</a>
            </div>
        </div>
        <svg>
    <filter id="wavy2">
        <feturbulence x="0" y="0" baseFrequency="0.02" numOctaves="5" seed="1"></feturbulence>
        <feDisplacementMap in="SourceGraphic" scale="20" />
    </filter>
    </svg>
</body>
<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <h6>About</h6>
                <p class="text-justify">Murodelgremio.com  Es una pagina de noticias, con amplia dedicacion a proveerle noticias relevantes y actuales del mundo de los videojuegos</p>
            </div>
        </div>

    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-6 col-xs-12">
                <p class="copyright-text">Copyright &copy; 2021 All Rights Reserved by 
                    <a href="#">Muro del Gremio</a>.
                </p>
            </div>
        </div>
    </div>
</footer>
</html>