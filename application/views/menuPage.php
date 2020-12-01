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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.4.3/css/ol.css">
    <script src="https://kit.fontawesome.com/d16cb8ad77.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.4.3/build/ol.js"></script>



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
        #wrapper {
            overflow-x: hidden;
        }

        #sidebar-wrapper {
            min-height: 100vh;
            margin-left: -15rem;
            -webkit-transition: margin .25s ease-out;
            -moz-transition: margin .25s ease-out;
            -o-transition: margin .25s ease-out;
            transition: margin .25s ease-out;
        }

        #sidebar-wrapper .sidebar-heading {
            padding: 0.875rem 1.25rem;
            font-size: 1.6rem;
        }

        #sidebar-wrapper .list-group {
            width: 15rem;
        }

        #page-content-wrapper {
            min-width: 100vw;
        }

        #wrapper.toggled #sidebar-wrapper {
            margin-left: 0;
        }

        @media (min-width: 768px) {
            #sidebar-wrapper {
                margin-left: 0;
            }

            #page-content-wrapper {
                min-width: 0;
                width: 100%;
            }

            #wrapper.toggled #sidebar-wrapper {
                margin-left: -15rem;
            }
        }
        #sidebar{
            font-family: Poppins,sans-serif;
            color : white;
        }
        #page-content-wrapper{
            font-family: Poppins,sans-serif;
            color : black;
            background-color: #26282B;
        }
        #sidebar-text{
            font-family: Poppins,sans-serif;
            color : white;
        }
        #filter-white{
            filter: brightness(0) invert(1);
        }
        * {
            box-sizing: border-box;
        }

        form.example input[type=text] {
            padding: 10px;
            font-size: 17px;
            border: 1px solid grey;
            float: left;
            width: 80%;
            background: #f1f1f1;
        }

        form.example button {
            float: left;
            width: 20%;
            padding: 10px;
            background: #2196F3;
            color: white;
            font-size: 17px;
            border: 1px solid grey;
            border-left: none; 
            cursor: pointer;
        }

        form.example button:hover {
            background: #0b7dda;
        }

        form.example::after {
            content: "";
            clear: both;
            display: table;
        }
        .map {
            height: 400px;
            width: 100%;
        }
    </style>
</head>
<body>
    <!-- Sidebar navigation -->
   <div id="sidebar" class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-dark" id="sidebar-wrapper">
        <div class="sidebar-heading ml-1" >running<br>everyday</div>
        <div class="list-group list-group-flush">
            <img id="filter-white" class="ml-5" src="<?php echo $this->config->item('base_url'); ?>/assets/img/account.svg" alt="icon" height="200px" width="150px" onclick="alertFoto()" >
            <a class="ml-4" style="font-family:Poppins,sans-seriff;font-size:21px;font-weight:black;"><?php echo $dataUser['nama']?></a>
            <hr class="my-4" style="color:black;">
            <a id="sidebar" href="<?= site_url('menuController') ?>" class="list-group-item list-group-item-action bg-dark"><span class="fas fa-running"></span>&nbsp;&nbsp;Tracking Menu</a>
            <a id="sidebar" class="list-group-item list-group-item-action bg-dark" onclick="pageNotFound()"><span class="fas fa-hands-helping"></span>&nbsp;&nbsp;Assistant Menu</a>
            <a id="sidebar" class="list-group-item list-group-item-action bg-dark" onclick="pageNotFound()"><span class="fas fa-map-marked-alt"></span>&nbsp;&nbsp;Finding Menu</a>
            <a id="sidebar" class="list-group-item list-group-item-action bg-dark" onclick="pageNotFound()"><span class="fas fa-music"></span>&nbsp;&nbsp;Music Player</a>
            <hr class="my-4" style="color:black;">
            <hr class="my-4" style="color:black;">
            <button id ="form-text" class="btn btn-lg btn-primary btn-block text-uppercase ml-3" type="submit" style="color:white;width:200px" onclick="logout()">Logout</button>
        </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="height:60px">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item dropdown">
                        <a  id="sidebar" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="fas fa-bars"></span>&nbsp;&nbsp More
                        </a>
                        <div id="sidebar" class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" onclick="menuSetting()" style="color:black;"><span class="fas fa-user"></span>&nbsp;&nbsp;Profile</a>
                            <a class="dropdown-item" onclick="menuSetting()" style="color:black;"><span class="fas fa-tools"></span>&nbsp;&nbsp;Setting</a>
                            <a class="dropdown-item" onclick="languageSetting()" style="color:black;"><span class="fas fa-language" "></span>&nbsp;&nbsp;Language</a>
                        </div>
                    </li>
                </ul>
                </div>
            </nav>

            <div id ="sidebar-text" class="container-fluid">
                <form class="example mt-4" action="javascript:searching()">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
                <h1 class="mt-4" style="font-family:Poppins,sans-seriff;">Tracking Menu</h1>
                <div id="map" class="map"></div>
                <div class="card bg-dark mx-auto mt-3" style="width: 30rem;">
                            <div class="card-body">
                                <h5 class="card-title" style="font-size:30px">Review</h5>
                                <h6 class="card-subtitle mb-2 ">Running</h6>
                                <p class="card-text align-items-center justify-content-center d-flex"><strong style="font-size:70px">2000</strong>kcal</p>
                                <p href="#" class="card-text">Distance : <strong style="font-size:20px">5,78km</strong></p>
                                <p href="#" class="card-text">Duration : <strong style="font-size:20px">00:30:00</strong></p>
                            </div>
                </div>
                <hr class="my-4">
               <button id ="form-text" class="btn btn-lg btn-primary btn-block mx-auto mb-4" type="submit" style="color:white;width:400px" onclick="connectDevice()">Connect To Device</button>
            </div>
        </div>
         <!-- /#page-content-wrapper -->
    </div>
    <!-- /#wrapper -->
    <section class="footer-section">
        <footer class="page-footer font-small blue pt-4">
            <div class="container-fluid text-center text-md-left">
            <div class="row">
                <div class="col-md-9 mt-md-1 mt-5 ml-4">
                    <h3 class="footer-text">about us </h3>
                    <p class="footer-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do<br>eiusmod tempor incididunt ut labore et dolore magna aliqua.<br> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
                </div>
                <div class="">
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
                    text: 'social media is not available right now'
            })
        }
        function alertFoto(){
            Swal.fire({
                    icon: 'info',
                    title: 'Sorry',
                    text: 'currently profile picture is static mode'
            })
        }
        function logout(){
            Swal.fire({
                title: 'Are you sure',
                text: "You want to end this session ?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href ="<?php echo site_url("menuController/logout")?>";
                }
           })
        }
        function pageNotFound(){
            Swal.fire({
                icon: 'error',
                title: '404',
                text: 'sorry page not found'
            })
        }
        function languageSetting(){
            Swal.fire({
                title: 'Please Select the Language',
                icon : 'info',
                input: 'checkbox',
                inputPlaceholder: 'English'
                }).then(function(result) {
                if (result.value) {
                    Swal.fire({icon: 'success', text: 'you choose english!'});
                }else if (result.value === 0) {
                    Swal.fire({icon: 'error', text: "using english as default language"});
                }else {
                    console.log(`modal was dismissed by ${result.dismiss}`)
                }
            })
        }
        function menuSetting(){
            Swal.fire({
                title: 'Menu Under Constructed',
                text: 'currently this menu is under construction',
                icon: 'error'
            })
        }
        function searching(){
            Swal.fire({
                title: 'Location Found',
                icon: 'success',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Continue'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({icon: 'success', text: 'Enjoy your exercise !'});
                }
            })
        }
        var map = new ol.Map({
            target: 'map',
            layers: [
            new ol.layer.Tile({
                source: new ol.source.OSM()
            })
            ],
            view: new ol.View({
            center: ol.proj.fromLonLat([125.816666, -6.200000]),
            zoom: 4
            })
        });
        function connectDevice(){
            Swal.fire({
                title : "Connection Failed",
                text : "your device not found",
                icon : 'error'
            })
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>
    <script type="text/javascript" src="node_modules/mdbootstrap/js/jquery.min.js"></script>
    <script type="text/javascript" src="node_modules/mdbootstrap/js/popper.min.js"></script>
    <script type="text/javascript" src="node_modules/mdbootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="node_modules/mdbootstrap/js/mdb.min.js"></script>
</body>
</html>