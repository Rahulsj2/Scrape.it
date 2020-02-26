<!-- <?php 
include('header.php');
?> -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device=width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Rahul Srinivas">

        <title>Scrape.it</title>


        <!-- Font Awesome Icons-->
        <link  rel="stylesheet" type="text/css" href="vendor/fontawesome/css/all.min.css">

        <!-- Google Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Muli:300i,400,400i,600,700,800&display=swap" rel="stylesheet">
        <!-- Bootstrap CSS-->
        <link  rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
        
        <!-- Main Style Sheet-->
        <Link rel="stylesheet" type="text/css" href="vendor/css/style.css">

        <!-- Bootstrap core JavaScript-->
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30="crossorigin="anonymous"></script>
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/js/app.js"></script>

    </head>

    <body>

        <div class="scrap">
            <img class="logo" src="img/Scrape.png">
        </div>

        
        <div class="container search-bar mt-4">
            <div class="d-flex justify-content-center">
                <div class="searchbar">
                    <a href="#" class="search_icon mx-4"><i class="fas fa-search "></i></a>
                    <input class="search_input" type="text" name="" placeholder="Search for a topic">
                    <a href="#" class="arrow_icon ml-3"><i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <section class="container mt-4">
            <div class="container categories text-center text-md-left">
                <p class="mb-5">Pick a category</p>
                <div class="row">

                    <div class="col-md-3 mx-auto">
                        <div class="card" style="height: 230px; background-image: url(img/tech.jpg); background-size: 100% 100%; background-repeat: no-repeat;">
                            <div class="card-body mt-5 pt-5 link">
                              <a class="card-title trans-box" id="tech" href="view/blog.php#tech" style="color: #fff;">Technology</a>
                            </div>
                          </div>
                    </div>

                    <div class="col-md-3 mx-auto">
                        <div class="card" style="height: 230px; background-image: url(img/beauty.jpg); background-size: 100% 100%; background-repeat: no-repeat;">
                            <div class="card-body mt-5 pt-5">
                              <a class="card-title trans-box" href="view/blog.php#beauty" style="color: #fff;">Beauty</a>
                            </div>
                          </div>
                    </div>

                    <div class="col-md-3 mx-auto">
                        <div class="card" style="height: 230px; background-image: url(img/food.jpg); background-size: 100% 100%; background-repeat: no-repeat;">
                            <div class="card-body mt-5 pt-5">
                              <a class="card-title trans-box" href="view/blog.php#food" style="color: #fff;">Food</a>
                            </div>
                          </div>
                    </div>
            
                    <div class="col-md-3 mx-auto">
                        <div class="card" style="height: 230px; background-image: url(img/travel.jpg); background-size: 100% 100%; background-repeat: no-repeat;">
                            <div class="card-body mt-5 pt-5">
                                <div>
                                    <a class="card-title trans-box" style="color: #fff;" href="view/blog.php#travel">Travel</a>
                                </div>
                            </div>
                          </div>
                    </div> 
                </div>
            </div>
        
        </section>


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/js/app.js"></script>


    </body>



</html>