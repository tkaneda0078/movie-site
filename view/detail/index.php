<?php

    require_once (dirname(__FILE__)."../../../controller/detail.php");
    
    $shop_detail = new detail_controller();
    
    // 各店舗のID
    $id = $_GET["id"];
    // 店舗情報を取得
    $shop_info = $shop_detail->shop_detail($id);

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
    <link href="../../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../css/3-col-portfolio.css" rel="stylesheet">
    
    <!-- main CSS -->
    <link href="../../css/main.css" rel="stylesheet">

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
                <ul class="nav navbar-nav">
                    <li>
                        <a href="../../../index.php">
                            <img src="../../../img/iconmonstr-home-6-32.png">
                        </a>
                    </li>
                    <li>
                        <a href="../../view/regist/index.php">
                            <img src="../../../img/iconmonstr-note-23-32.png">
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="../../../img/iconmonstr-gear-10-32.png">
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
            <div class="col-lg-12 page-header page-height">
                <h1>
                    <?php echo $shop_info[0]["shop_name"]; ?>
                </h1>
                <?php echo $shop_info[0]["shop_address"]; ?>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="../../img/<?php echo $shop_info[0]["image1"]; ?>" alt="">
                </a>
            </div>
            <h3>
                <p class="padding portfolio-item">
                    <?php echo $shop_info[0]["shop_overview"]; ?>
                </p>
            </h3>
        </div>
        
        <?php if (isset($shop_info[0]["image2"])): ?>
        
        <div class="row">
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="../../img/<?php echo $shop_info[0]["image2"]; ?>" alt="">
                </a>
            </div>
        </div>
        
        <?php endif; ?>
        
        <?php if (isset($shop_info[0]["image3"])): ?>
        
        <div class="row">
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="../../img/<?php echo $shop_info[0]["image3"]; ?>" alt="">
                </a>
            </div>
        </div>
        
        <?php endif; ?>
        
        </div>
                    
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
    <script src="../../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../js/bootstrap.min.js"></script>

</body>

</html>
