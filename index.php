<?php
    require_once "controller/list.php";
    require_once "controller/detail.php";
    
    $shop_ctrl   = new shop_controller();
    $shop_detail = new detail_controller();

    $shop_info = $shop_ctrl->shop_info();
    // echo "<pre>";
    // var_dump($shop_info[0]["registrated_time"]);
    // echo "</pre>";
    // exit;
    date_default_timezone_set('Asia/Tokyo');
    
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Favorite shops</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/3-col-portfolio.css" rel="stylesheet">
    
    <!-- main CSS -->
    <link href="css/main.css" rel="stylesheet">

</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header icon-position">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav log-out-heigth">
                    <li>
                        <a href="index.php">
                            <img src="img/iconmonstr-home-6-32.png">
                        </a>
                    </li>
                    <li>
                        <a href="view/regist/index.php">
                            <img src="img/iconmonstr-note-23-32.png">
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="img/iconmonstr-gear-10-32.png">
                        </a>
                    </li>
                    <li class="log-out">
                        <a href="">
                            <img src="img/iconmonstr-log-out-14-32.png" >
                        </a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header page-height">Favorite shops
                    <img src="img/iconmonstr-shop-7-32.png">
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            
            <?php foreach ($shop_info as $value) : ?>
            
            <div class="col-md-4 portfolio-item div-height">
                <a href="view/detail/index.php?id=<?php echo $value["id"]; ?>">
                    <img class="img-responsive" src="img/<?php echo $value["image1"]; ?>" alt="">
                </a>
                <h3>
                    <a href="view/detail/index.php?id=<?php echo $value["id"]; ?>"><?php echo $value["shop_name"]; ?></a>
                </h3>
                <p>住所：<?php echo $value["shop_address"]; ?></p>
                <p>登録日：<?php echo date("Y年n月j日", strtotime($value["registrated_time"])); ?></p>
            </div>
            
            <?php endforeach; ?>
        </div>
        
        <hr>

        <!-- Pagination -->
        <!--<div class="row text-center">-->
        <!--    <div class="col-lg-12">-->
        <!--        <ul class="pagination">-->
        <!--            <li>-->
        <!--                <a href="#">&laquo;</a>-->
        <!--            </li>-->
        <!--            <li class="active">-->
        <!--                <a href="#">1</a>-->
        <!--            </li>-->
        <!--            <li>-->
        <!--                <a href="#">2</a>-->
        <!--            </li>-->
        <!--            <li>-->
        <!--                <a href="#">3</a>-->
        <!--            </li>-->
        <!--            <li>-->
        <!--                <a href="#">4</a>-->
        <!--            </li>-->
        <!--            <li>-->
        <!--                <a href="#">5</a>-->
        <!--            </li>-->
        <!--            <li>-->
        <!--                <a href="#">&raquo;</a>-->
        <!--            </li>-->
        <!--        </ul>-->
        <!--    </div>-->
        <!--</div>-->
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2016</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
