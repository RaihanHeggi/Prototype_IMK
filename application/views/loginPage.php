<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Login</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link rel="stylesheet" href="node_modules/mdbootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/mdbootstrap/css/mdb.min.css">
    <link rel="stylesheet" href="node_modules/mdbootstrap/css/style.css">
    <link rel="stylesheet" href="node_modules/mdbootstrap/css/style.css">

    <style>
        .form-section {
            background-color: #272727;
            color : white;
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
        #form-text #form-text-button #inputEmail #inputPassword{
            font-family: Poppins, Helvetica, sans-serif;
            font-size : 16px;
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
    <section class="form-section">
        <div class="container">
            <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5" style="border-radius:25px">
                <div class="card-body">
                    <h5 id ="form-text" class="card-title text-center" style="color:black;font-size:30px;font-weight:bold">Sign In</h5>
                    <?php  echo $this->session->flashdata('messages')?>
                    <form class="form-signin" action="<?= site_url('loginController/login')?>" method="post">
                        <div class="form-label-group mt-2">
                            <label id ="form-text" for="inputEmail" style="color:black;">Email address</label>
                            <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="please enter yout email" required autofocus>
                        </div>
                        <div class="form-label-group mt-3">
                            <label id ="form-text" for="inputPassword" style="color:black;">Password</label>
                            <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="please enter your password" required>
                        </div>
                        <div class="custom-control mt-3">
                            <input type="checkbox" class="custom-control-input" id="customCheck1" >
                            <label id ="form-text "class="custom-control-label" for="customCheck1" style="color:black;">Remember password</label>
                        </div>
                        <div>
                            <button id ="form-text" class="btn btn-lg btn-primary btn-block mt-3" type="submit">Sign in</button>
                            <hr class="my-4">
                    </div>
                    </form>
                    <button onclick="dataInvalid()" class="btn btn-lg btn-google btn-block" type="submit"><i class="fab fa-google mr-2" style="font-size:17px"></i> sign in with google</button>
                    <button onclick="dataInvalid()" class="btn btn-lg btn-facebook btn-block" type="submit"><i class="fab fa-facebook-f mr-2" style="font-size:17px"></i> sign in with facebook</button>
                </div>
                </div>
            </div>
            </div>
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
    </section
    >
    <script src="<?php echo $this->config->item('base_url'); ?>/assets/js/sweetalert2.all.min.js"></script>
    <script>
        function dataInvalid(){
           Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Service you requested not available'
            })
        };
        function socialMedia(){
            Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Social Media is not available'
            })
        }
    </script>
    <script type="text/javascript" src="node_modules/mdbootstrap/js/jquery.min.js"></script>
    <script type="text/javascript" src="node_modules/mdbootstrap/js/popper.min.js"></script>
    <script type="text/javascript" src="node_modules/mdbootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="node_modules/mdbootstrap/js/mdb.min.js"></script>
</body>

</html>