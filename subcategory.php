<?php
   session_start();
   extract($_REQUEST);
   $con = mysqli_connect('localhost','root','','quiz');
   $me=$_SESSION['username'];
   if($me=="")
   {header('location:form.php');}  
   $sql=mysqli_query($con,"select * from users where name='$me'");
   $res=mysqli_fetch_assoc($sql);
 ?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>DRONA QUIZ</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="category.css">

        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script>
            $(function() {

                $('a[href*=#]:not([href=#])').click(function() {
                    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                        var target = $(this.hash);
                        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                        if (target.length) {
                            $('html,body').animate({
                                scrollTop: target.offset().top
                            }, 1000);
                            return false;
                        }
                    }
                });

            });
        </script>
    </head>

    <body>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                    <a class="navbar-brand" href="#page-top">DRONA QUIZ</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="form.php">LEADEREBOARD</a>
                    </li>
                    <li class="page-scroll">
                      <a href=""><?php echo strtoupper($res['name']);?></a>
                    </li>
                    <li class="page-scroll">
                        <a href="logout.php">LOGOUT</a>
                    </li>
                </ul>
            </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>

        <header id="page-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 ">
                        <a href="home.php"> <img src="easy.png" style=" width= 350px;" alt="EASY"></a>
                    </div>
                    <div class="col-lg-4 ">
                        <a href="home.php"> <img src="MEDIUM.PnG" style=" width= 350px;" alt="MEDIUM"></a>

                    </div>
                    <div class="col-lg-4 ">
                        <a href="home.php"> <img src="HARD.PnG" style=" width= 350px;" alt="HARD"></a>

                    </div>
                </div>
            </div>
        </header>


        <div class="content-wrapper">
            <section class="primary" id="portfolio">
                <div class="container" STYLE="width: 100%;border: 2px solid green;padding: 25px;margin: 1px;">
                    <div class="row">
                        <p style="text-align:center; font-size: 20px;">SELECT ANY ONE CATEGORY</p>

                    </div>
                </DIV>
            </section>

            <section class="success" id="about">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <h2>FOOTER</h2>
                            <hr class="star-light">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 ">
                            <p>introduction</p>
                        </div>

                    </div>
                </div>
            </section>


    </body>

    </html>