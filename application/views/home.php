<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Running Everyday</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link rel="stylesheet" href="node_modules/mdbootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/mdbootstrap/css/mdb.min.css">
    <link rel="stylesheet" href="node_modules/mdbootstrap/css/style.css">

    <style>
        #carouselExampleControl {
            margin-top: 0px;
            padding-top: 0px;
        }
        .footer-section{
            background-color: #1F1E1E;
            color : white;
        }
        .footer-text{
            font-family: Poppins, Helvetica, sans-serif;
        }
        #navbar-font{
            font-family: Poppins, Helvetica, sans-serif;
            font-size : 20px;
        }
        #logo{
            font-family: Poppins, Helvetica, sans-serif;
            font-size : 26px;
            font-weight : normal; 
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a id="logo" class="navbar-brand ml-6" href="<?= site_url("index")?>"><img src="<?php echo $this->config->item('base_url'); ?>/assets/img/running.png" style="height:60px;width:50px"> running everyday</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><img src="<?php echo $this->config->item('base_url'); ?>/assets/logocut.png"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" id="navbar-font" href="<?= site_url("index")?>">home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" id="navbar-font" href="<?= site_url("login")?>">login <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" id="navbar-font" href="<?= site_url("register")?>">register <span class="sr-only">(current)</span></a>
            </li>
            </ul>
        </div>
    </nav>
    <section>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleControls" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="<?php echo $this->config->item('base_url'); ?>/assets/img/hero-1.jpg" alt="First slide">
                    <div class="carousel-caption">
                        <h3 style="font-size:40px;font-family:Poppins,sans-seriff;">running everyday</h3>
                        <button id ="form-text" class="btn btn-lg btn-primary btn-block mx-auto mb-4" type="submit" style="color:white;width:200px" onclick="joinUs()"><b>Join Us Now</b></button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="<?php echo $this->config->item('base_url'); ?>/assets/img/hero-2.jpg" alt="Second slide">
                    <div class="carousel-caption">
                        <h3 style="font-size:40px;font-family:Poppins,sans-seriff;">running everyday</h3>
                        <button id ="form-text" class="btn btn-lg btn-primary btn-block mx-auto mb-4" type="submit" style="color:white;width:200px" onclick="joinUs()"><b>Join Us Now</b></button>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

    <section class="footer-section">
        <footer class="page-footer font-small blue pt-4">
            <div class="container-fluid text-center text-md-left">
            <div class="row">
                <div class="col-md-9 mt-md-1 mt-5 ml-4">
                    <h3 class="footer-text">about us </h3>
                    <p class="footer-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do<br>eiusmod tempor incididunt ut labore et dolore magna aliqua.<br> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
                </div>
                <div>
                    <h3 class="footer-text">contact us</h3>
                    <a onclick="socialMedia()" class="fb-ic mr-3" role="button" ><i class="fab fa-lg fa-facebook-f"></i></a>
                    <!--Twitter-->
                    <a onclick="socialMedia()" class="tw-ic mr-3" role="button"><i class="fab fa-lg fa-twitter"></i></a>
                    <!--Google +-->
                    <a onclick="socialMedia()" class="gplus-ic mr-3" role="button"><i class="fab fa-lg fa-google-plus-g"></i></a>
                    <!--Linkedin-->
                    <a onclick="socialMedia()" class="li-ic mr-3" role="button"><i class="fab fa-lg fa-linkedin-in"></i></a>
                    <!--Instagram-->
                    <a onclick="socialMedia()" class="ins-ic mr-3" role="button"><i class="fab fa-lg fa-instagram"></i></a>                       
                </div>
            </div>
            </div>
        </footer>
    </section>
    <script src="<?php echo $this->config->item('base_url'); ?>/assets/js/sweetalert2.all.min.js"></script>
    <script>
        function socialMedia(){
            Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Social Media is not available'
            })
        }
        function joinUs(){
            Swal.fire({
                title: 'Are you sure',
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href ="<?php echo site_url("registrasiController/index")?>";
                }
           }) 
        }
    </script>
    <script type="text/javascript" src="node_modules/mdbootstrap/js/jquery.min.js"></script>
    <script type="text/javascript" src="node_modules/mdbootstrap/js/popper.min.js"></script>
    <script type="text/javascript" src="node_modules/mdbootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="node_modules/mdbootstrap/js/mdb.min.js"></script>
</body>
</html>