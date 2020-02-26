<?php

require('../controllers/newscontroller.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device=width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Rahul Srinivas">

        <title>Scrape.it</title>


        <!-- Font Awesome Icons-->
        <link  rel="stylesheet" type="text/css" href="../vendor/fontawesome/css/all.min.css">

        <!-- Google Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700&display=swap" rel="stylesheet">
        <!-- Bootstrap CSS-->
        <link  rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
        
        <!-- Main Style Sheet-->
        <Link rel="stylesheet" type="text/css" href="../vendor/css/style.css">

        <!-- Bootstrap core JavaScript-->
        <script src="../vendor/jquery/jquery.min.js"></script>
        <script src="../vendor/js/app.js"></script>

    </head>

    <body>

        <div class="scrap">
            <img class="logo" src="../img/Scrape.png">
        </div>


        <section id="home"  data-section="home">   
            <div class="container text-center text-md-left">
                <div class="row">
                    <div class="col-md-12 mx-auto content">
                        <a class="nav-link home-link mb-3" href="../index.php"><i class="mr-2 fa fa-arrow-left" style="font-size: 14px"></i>Back to Home</a>
                        <div class="container blog">
                            <div class="row">
                                <div class="col-3 mx-auto">
                                    <p class="mb-4">Blog Articles Found</p>
                                </div>
                                <div class="col-4 mx-auto">     
                                </div>
                                <div class="col-5 mx-auto">
                                    <div class="container search-barr">
                                        <div class="d-flex justify-content-center">
                                            <div class="searchh-bar">
                                                <a href="#" class="search-icon mx-4"><i class="fas fa-search "></i></a>
                                                <input class="search-input" type="text" name="" placeholder="Search for a topic">
                                                <a href="#" class="arrow-icon ml-3"><i class="fas fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="cat-nav">
                            <ul class="nav nav-pills mb-2" id="pills-tab" role="tablist">
                                <li class="nav-item done mx-3">
                                    <a class="nav-link active " href="#all" aria-controls="all" role="tab"  data-toggle="pill"   aria-expanded="true">All</a>
                                </li>
                                <li class="nav-item mx-2">
                                    <a class="nav-link" href="#tech" aria-controls="tech" role="tab" data-toggle="pill" aria-expanded="false">Technology</a>
                                </li>
                                <li class="nav-item mx-2">
                                    <a class="nav-link " href="#beauty" aria-controls="beauty" role="tab" data-toggle="pill" aria-expanded="false">Beauty</a>
                                </li>
                                <li class="nav-item mx-2">
                                    <a class="nav-link " href="#food" aria-controls="food" role="tab" data-toggle="pill" aria-expanded="false">Food</a>
                                </li>
                                <li class="nav-item mx-2">
                                    <a class="nav-link " href="#travel" aria-controls="travel" role="tab" data-toggle="pill" aria-expanded="false">Travel</a>
                                </li>
                            </ul>
                        </div>

                        <div class="my-4 py-2">
                            <div class="tab-content" id="pills-tabContent">
                                <div class="container tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="pills-customize-tab">
                                    <?php 
                                    $records = view_all_news(); 
                                    $results_per_page = 10;
                                    $num_records = count($records);
                                    $num_of_pages = ceil($num_records/$results_per_page);
                                    if (!isset($_GET['page'])){
                                        $page = 1;
                                    } else{
                                        $page = $_GET['page'];
                                    }

                                    $this_page_first_result = ($page-1)*$results_per_page;
                                    
                                    $record_select = view_limit_news($this_page_first_result, $results_per_page);

                                    ?>
                                    <?php if(count($record_select)): ?>
                                        <?php foreach( $record_select as $record){ ?>
                                            <div class="card my-4 mb-1">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-2 mx-auto">
                                                            <a class="navbar-brand"></a><img src="<?php echo $record["imagelink"]; ?>" style="width: 127px; height: 127px;"></a>
                                                        </div>
                                                        <div class="col-10 mx-auto">
                                                            <h4 class="card-title"><?php echo $record["title"]; ?></h4>
                                                            <p class=""><span>Author:</span><?php echo $record["author"]; ?></p>
                                                            <p class=""><?php echo $record["date"]; ?></p> 
                                                            <a href="<?php echo $record["articlelink"]; ?>" class="card-link float-right" target="_blank"><?php echo $record["articlelink"]; ?></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>                                          

                                        <?php } ?>
                                        <div class="mt-2">
                                            <nav data-pagination class="pt-5">
                                                <a href=# class="disabled"><i class="fa fa-chevron-left ml-5"></i>Previous</a>
                                                <ul>
                                                    <?php
                                                    for($page=1; $page<=$num_of_pages; $page++){
                                                        echo '<li class=current><a href="blog.php?page='. $page . '">'. $page . '</a>';
                                                    }
                                                    ?>
                                                </ul>
                                                <a href=#2 class="next" >Next<i class="fa fa-chevron-right ml-1"></i></a>
                                            </nav>
                                        </div>

                                        <?php else: ?>
                                            <div class="mt-5 pt-3">
                                                <div class="container">
                                                    <div class="text-center">
                                                        <h5 style="font-size: 32px; font-weight: 400;">Oops! We don’t have articles on that topic</h5>
                                                        <p style="font-size: 20px; font-weight: 300;">Try using different words in your search, or pick a category.</p>
                                                        <img class="mt-5 pt-2" src="../img/404_image.png">
                                                    </div>
                                                </div>
                                            </div>
                                    <?php endif; ?>

            

                                </div>

                                <div class="tab-pane fade" id="tech" role="tabpanel" aria-labelledby="tech">
                                    <?php 
                                        $all_tech_records = view_cat_news("tech"); 
                                        $results_per_page = 10;
                                        $tech_num_records = count($all_tech_records);
                                        $tech_num_of_pages = ceil($tech_num_records/$results_per_page);
                                        if (!isset($_GET['page'])){
                                            $page = 1;
                                        } else{
                                            $page = $_GET['page'];
                                        }

                                        $this_page_first_result = ($page-1)*$results_per_page;
                                        
                                        $tech_record_select = view_limit_cat_news("tech",$this_page_first_result, $results_per_page);

                                    ?>
                                        <?php if(count($tech_record_select)): ?>
                                            <?php foreach( $tech_record_select as $record){ ?>
                                                <div class="card my-4 mb-1">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-2 mx-auto">
                                                                <a class="navbar-brand"></a><img src="<?php echo $record["imagelink"]; ?>" style="width: 127px; height: 127px;"></a>
                                                            </div>
                                                            <div class="col-10 mx-auto">
                                                                <h4 class="card-title"><?php echo $record["title"]; ?></h4>
                                                                <p class=""><span>Author:</span><?php echo $record["author"]; ?></p>
                                                                <p class=""><?php echo $record["date"]; ?></p> 
                                                                <a href="<?php echo $record["articlelink"]; ?>" class="card-link float-right" target="_blank"><?php echo $record["articlelink"]; ?></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            <?php } ?>
                                            <div class="mt-2">
                                                <nav data-pagination class="pt-5">
                                                    <a href=# class="disabled"><i class="fa fa-chevron-left ml-5"></i>Previous</a>
                                                    <ul>
                                                        <?php
                                                        for($page=1; $page<=$tech_num_of_pages; $page++){
                                                            echo '<li class=current><a href="blog.php?page='. $page . '">'. $page . '</a>';
                                                        }
                                                        ?>
                                                    </ul>
                                                    <a href=#2 class="next" >Next<i class="fa fa-chevron-right ml-1"></i></a>
                                                </nav>
                                            </div>
                                            <?php else: ?>
                                                <div class="mt-5 pt-3">
                                                    <div class="container">
                                                        <div class="text-center">
                                                            <h5 style="font-size: 32px; font-weight: 400;">Oops! We don’t have articles on that topic</h5>
                                                            <p style="font-size: 20px; font-weight: 300;">Try using different words in your search, or pick a category.</p>
                                                            <img class="mt-5 pt-2" src="../img/404_image.png">
                                                        </div>
                                                    </div>
                                                </div>
                                        <?php endif; ?>
                                </div>

                                <div class="tab-pane fade" id="beauty" role="tabpanel" aria-labelledby="beauty">
                                    <?php 
                                        $all_beauty_records = view_cat_news("beauty"); 
                                        $results_per_page = 10;
                                        $beauty_num_records = count($all_beauty_records);
                                        $beauty_num_of_pages = ceil($beauty_num_records/$results_per_page);
                                        if (!isset($_GET['page'])){
                                            $page = 1;
                                        } else{
                                            $page = $_GET['page'];
                                        }

                                        $this_page_first_result = ($page-1)*$results_per_page;
                                        
                                        $beauty_record_select = view_limit_cat_news("beauty",$this_page_first_result, $results_per_page);

                                        ?>
                                        <?php if(count($beauty_record_select)): ?>
                                            <?php foreach( $beauty_record_select as $record){ ?>
                                                <div class="card my-4 mb-1">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-2 mx-auto">
                                                                <a class="navbar-brand"></a><img src="<?php echo $record["imagelink"]; ?>" style="width: 127px; height: 127px;"></a>
                                                            </div>
                                                            <div class="col-10 mx-auto">
                                                                <h4 class="card-title"><?php echo $record["title"]; ?></h4>
                                                                <p class=""><span>Author:</span><?php echo $record["author"]; ?></p>
                                                                <p class=""><?php echo $record["date"]; ?></p> 
                                                                <a href="<?php echo $record["articlelink"]; ?>" class="card-link float-right" target="_blank"><?php echo $record["articlelink"]; ?></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
   
                                            <?php } ?>
                                            <div class="mt-2">
                                                <nav data-pagination class="pt-5">
                                                    <a href=# class="disabled"><i class="fa fa-chevron-left ml-5"></i>Previous</a>
                                                    <ul>
                                                        <?php
                                                        for($page=1; $page<=$beauty_num_of_pages; $page++){
                                                            echo '<li class=current><a href="blog.php?page='. $page . '">'. $page . '</a>';
                                                        }
                                                        ?>
                                                    </ul>
                                                    <a href=#2 class="next" >Next<i class="fa fa-chevron-right ml-1"></i></a>
                                                </nav>
                                            </div>
                                            <?php else: ?>
                                                <div class="mt-5 pt-3">
                                                    <div class="container">
                                                        <div class="text-center">
                                                            <h5 style="font-size: 32px; font-weight: 400;">Oops! We don’t have articles on that topic</h5>
                                                            <p style="font-size: 20px; font-weight: 300;">Try using different words in your search, or pick a category.</p>
                                                            <img class="mt-5 pt-2" src="../img/404_image.png">
                                                        </div>
                                                    </div>
                                                </div>
                                        <?php endif; ?>

                                </div>

                                <div class="tab-pane" id="food" role="tabpanel" aria-labelledby="food">
                                    <?php 
                                        $all_food_records = view_cat_news("food"); 
                                        $results_per_page = 10;
                                        $food_num_records = count($all_food_records);
                                        $food_num_of_pages = ceil($food_num_records/$results_per_page);
                                        if (!isset($_GET['page'])){
                                            $page = 1;
                                        } else{
                                            $page = $_GET['page'];
                                        }

                                        $this_page_first_result = ($page-1)*$results_per_page;
                                        
                                        $food_record_select = view_limit_cat_news("food",$this_page_first_result, $results_per_page);

                                    ?>
                                        <?php if(count($food_record_select)): ?>
                                            <?php foreach( $food_record_select as $record){ ?>
                                                <div class="card my-4 mb-1">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-2 mx-auto">
                                                                <a class="navbar-brand"></a><img src="<?php echo $record["imagelink"]; ?>" style="width: 127px; height: 127px;"></a>
                                                            </div>
                                                            <div class="col-10 mx-auto">
                                                                <h4 class="card-title"><?php echo $record["title"]; ?></h4>
                                                                <p class=""><span>Author:</span><?php echo $record["author"]; ?></p>
                                                                <p class=""><?php echo $record["date"]; ?></p> 
                                                                <a href="<?php echo $record["articlelink"]; ?>" class="card-link float-right" target="_blank"><?php echo $record["articlelink"]; ?></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
    
                                            <?php } ?>
                                            <div class="mt-2">
                                                <nav data-pagination class="pt-5">
                                                    <a href=# class="disabled"><i class="fa fa-chevron-left ml-5"></i>Previous</a>
                                                    <ul>
                                                        <?php
                                                        for($page=1; $page<=$food_num_of_pages; $page++){
                                                            echo '<li class=current><a href="blog.php?page='. $page . '">'. $page . '</a>';
                                                        }
                                                        ?>
                                                    </ul>
                                                    <a href=#2 class="next" >Next<i class="fa fa-chevron-right ml-1"></i></a>
                                                </nav>
                                            </div>
                                            <?php else: ?>
                                                <div class="mt-5 pt-3">
                                                    <div class="container">
                                                        <div class="text-center">
                                                            <h5 style="font-size: 32px; font-weight: 400;">Oops! We don’t have articles on that topic</h5>
                                                            <p style="font-size: 20px; font-weight: 300;">Try using different words in your search, or pick a category.</p>
                                                            <img class="mt-5 pt-2" src="../img/404_image.png">
                                                        </div>
                                                    </div>
                                                </div>
                                        <?php endif; ?>
                                   
                                </div>


                                <div class="tab-pane fade" id="travel" role="tabpanel" aria-labelledby="travel">
                                    <?php 
                                        $all_travel_records = view_cat_news("travel"); 
                                        $results_per_page = 10;
                                        $travel_num_records = count($all_travel_records);
                                        $travel_num_of_pages = ceil($travel_num_records/$results_per_page);
                                        if (!isset($_GET['page'])){
                                            $page = 1;
                                        } else{
                                            $page = $_GET['page'];
                                        }

                                        $this_page_first_result = ($page-1)*$results_per_page;
                                        
                                        $travel_record_select = view_limit_cat_news("travel",$this_page_first_result, $results_per_page);

                                    ?>
                                        <?php if(count($travel_record_select)): ?>
                                            <?php foreach( $travel_record_select as $record){ ?>
                                                <div class="card my-4 mb-1">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-2 mx-auto">
                                                                <a class="navbar-brand"></a><img src="<?php echo $record["imagelink"]; ?>" style="width: 127px; height: 127px;"></a>
                                                            </div>
                                                            <div class="col-10 mx-auto">
                                                                <h4 class="card-title"><?php echo $record["title"]; ?></h4>
                                                                <p class=""><span>Author:</span><?php echo $record["author"]; ?></p>
                                                                <p class=""><?php echo $record["date"]; ?></p> 
                                                                <a href="<?php echo $record["articlelink"]; ?>" class="card-link float-right" target="_blank"><?php echo $record["articlelink"]; ?></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
 
                                            <?php } ?>
                                            <div class="mt-2">
                                                <nav data-pagination class="pt-5">
                                                    <a href=# class="disabled"><i class="fa fa-chevron-left ml-5"></i>Previous</a>
                                                    <ul>
                                                        <?php
                                                        for($page=1; $page<=$travel_num_of_pages; $page++){
                                                            echo '<li class=current><a href="blog.php?page='. $page . '">'. $page . '</a>';
                                                        }
                                                        ?>
                                                    </ul>
                                                    <a href=#2 class="next" >Next<i class="fa fa-chevron-right ml-1"></i></a>
                                                </nav>
                                            </div>
                                            <?php else: ?>
                                                <div class="mt-5 pt-3">
                                                    <div class="container">
                                                        <div class="text-center">
                                                            <h5 style="font-size: 32px; font-weight: 400;">Oops! We don’t have articles on that topic</h5>
                                                            <p style="font-size: 20px; font-weight: 300;">Try using different words in your search, or pick a category.</p>
                                                            <img class="mt-5 pt-2" src="../img/404_image.png">
                                                        </div>
                                                    </div>
                                                </div>
                                        <?php endif; ?>

                                  
            
                                </div>

                                
                            </div>
                        </div>




                    </div>
                </div>
            </div>
        </section>
        



<!-- 
        <div class="card">
            <div class="card-body">
              This is some text within a card body.
            </div>
          </div> -->


    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    </body>



</html>