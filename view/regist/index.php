<?php
    require_once "../../controller/validation.php";
    require_once "../../controller/regist.php";

    $val         = new validation();
    $regist_ctrl = new regist_controller();
    
    if ($_SERVER ["REQUEST_METHOD"] == "POST")
    {
        $error_message = $regist_ctrl->regist_post($_POST, $_FILES);
    }
    
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
    <link href="../../../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../../css/3-col-portfolio.css" rel="stylesheet">
    
    <!-- regist-screen CSS -->
    <link href="../../../css/regist-screen.css" rel="stylesheet">
    
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
                        <a href="index.php">
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
            <div class="col-lg-12">
                <h1 class="page-header page-height">shop registration
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            <form action="index.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="sel1">name</label>
                    <input type="text" class="form-control <?php isset($error_message["name"]) ? print 'error' : '' ;?>" name="name" value="<?php echo isset($_POST["name"]) ? $_POST["name"] : ""; ?>">
                    <span class="error-msg"><?php isset($error_message["name"]) ? print "※".$error_message["name"] : ""; ?></span>
                </div>
                <div class="form-group">
                    <label for="inputBrand">address</label>
                    <input type="text" class="form-control <?php isset($error_message["address"]) ? print 'error' : '' ;?>" name="address" value="<?php echo isset($_POST["address"]) ? $_POST["address"] : ""; ?>">
                    <span class="error-msg"><?php isset($error_message["address"]) ? print "※".$error_message["address"] : ""; ?></span>
                </div>
                <div class="form-group">
                    <label for="inputSummary">overview</label>
                    <textarea class="form-control <?php isset($error_message["overview"]) ? print 'error' : '' ;?>" rows="10" name="overview"><?php echo isset($_POST["overview"]) ? $_POST["overview"] : ""; ?></textarea>
                    <span class="error-msg"><?php isset($error_message["overview"]) ? print "※".$error_message["overview"] : ""; ?></span>
                </div>
                <div>
                    <label for="sel1">image</label>
                    <input id="lefile1" name="image1" type="file" style="display:none">
                    <div class="input-group">
                    <input type="text" name="image1" id="photoCover1" class="form-control" placeholder="select file...">
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-info" onclick="$('input&#91;id=lefile1&#93;').click();">Browse</button>
                    </span>
                </div>
                <div><br>
                    <input id="lefile2" name="image2" type="file" style="display:none">
                    <div class="input-group">
                    <input type="text" name="image2" id="photoCover2" class="form-control" placeholder="select file...">
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-info" onclick="$('input&#91;id=lefile2&#93;').click();">Browse</button>
                    </span>
                </div>
                <div><br>
                    <input id="lefile3" name="image3" type="file" style="display:none">
                    <div class="input-group">
                    <input type="text" name="image3" id="photoCover3" class="form-control" placeholder="select file...">
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-info" onclick="$('input&#91;id=lefile3&#93;').click();">Browse</button>
                    </span>
                </div>
                <hr>
                <div class="row text-center">
                    <div class="col-lg-12">
                        <input type="submit" class="btn btn-primary" value="NEXT" textform>
                    </div>
                </div>
            </form>
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
    <script src="../../../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../../js/bootstrap.min.js"></script>
    
    <script src="../../../js/main.js"></script>

</body>

</html>
