<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pokemon</title>
        <link rel="icon" type="image/x-icon" href="hello.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet"
            type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
            integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
            integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
        </script>
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/pstyles.css" rel="stylesheet" />
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 title">
                    <h1 align="center">International Pokedex</h1>
                </div>
            </div>  
            <div class="row navx ">
                <div class="col-sm-12">
                    <nav class="navbar navbar-expand-lg ml-" >
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <div class="ml-0 my-auto">
                                <a class="navbar-brand" href="#">
                                    <img src="download.png" alt="logo" style="width:30px;">
                                </a>
                            </div>
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="feedback.php">Feedback</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.php">About</a>
                                </li>
                            </ul>                                
                            <form class="form-inline my-1 my-lg-0" action="search.php" method="post" >
                                <input class="form-control mb-1 mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="name">
                                <button class="btn btn-outline-success mb-1 " type="submit" name="search">Search</button>
                            </form>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 sdbar">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="fire.php">Fire</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="water.php">Water</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="grass.php">Grass</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="bug.php">Bug</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="ghost.php">Ghost</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="dark.php">Dark</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="electric.php">Electric</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="ground.php">Ground</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="rock.php">Rock</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="normal.php">Normal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="dragon.php">Dragon</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="fighting.php">Fighting</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="steel.php">Steel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="ice.php">Ice</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="fairy.php">Fairy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="flying.php">Flying</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="poison.php">Poison</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="phycic.php">Phycic</a>
                        </li>
                    </ul>
                </div>
            </div>   
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>