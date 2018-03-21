<!DOCTYPE html>

<html lang="en">

    <head>

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Penny Banker</title>

        <link rel="shortcut icon" href="favicon.ico"/>

        <meta charset="UTF-8">


        <meta name="description" content="">

        <meta name="keywords" content="">

        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets1/css/bootstrap.min.css">

        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets1/css/style.css">

        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">


        <!-- Modernizr -->


        <script
            src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>


       <!-- <script src="<?php /*echo base_url(); */?>assets1/js/jquery-1.10.1.min.js"></script> -->

        <script type="text/javascript" src="<?php echo base_url(); ?>assets1/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets1/js/modernizr.js"></script>


        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->

        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

        <!--[if lt IE 9]>
    
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    
    
    
        <![endif]-->





    </head>

    <body>



    <div class="modal fade product_view" id="product_view">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <a href="#" data-dismiss="modal" class="class pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                    <h3 style="color: rgb(24, 119, 182) !important;" class="modal-title" id="spnNTitle">Loading...</h3>
                </div>
                <div class="modal-body">
                    <div class="row">

                        <div class="col-md-12">
                        <div class="col-md-12 product_img">


                            <img onerror="this.src='<?php echo base_url(); ?>img/news.jpg'" src="" id="spnNImage" class="img-responsive" style="height: 300px;width:100%;">
                            <div class="banner-ticket life-bg"> <h4>Source: <span id="spnNSource"></span></h4></div>
                            <div class="featured_posts_content">

                                <ul class="post_meta nav nav-pills life-bg" style="color:#fff">
                                  <li>&nbsp;&nbsp; <span class="glyphicon glyphicon-thumbs-up"></span>

                                      (<span id="spnLCount">10</span> likes)</li>
&nbsp;&nbsp;
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-12 product_content">


                            <p id="spnNText" class="text-justify" style="color: #464545;margin-top: 20px;font-size: 18px;">

                            </p>



                            <div class="row">

                                <!-- end col -->
                            </div>
                            <div class="space-ten"></div>
                            <div class="btn-ground">

                                <button type="button" class="btn btn-primary hide">
                                    <span class="glyphicon glyphicon-heart"></span> Read Full Story</button>
                            </div>

                            <div class="col-md-12 hide">

                                <h4>Tags</h4>
                            </div>
                        </div>


                            <div class="col-md-12 tgext-center">
                                <h5 style="color: rgb(24, 119, 182) !important;">Advertisements</h5>


                                <hr>
                                <div class="col-sm-5" style="margin-left:10px;">

                                    <img src="<?php echo base_url(); ?>/img/ad1.jpeg" style="width:250px;" />
                                </div>

                                <div class="col-sm-5"  style="margin-left:40px;">

                                    <img src="<?php echo base_url(); ?>/img/ad1.jpeg" style="width:250px;" />
                                </div>

                                <div class="col-sm-5"  style="margin-left:10px; margin-top:10px;">

                                    <img src="<?php echo base_url(); ?>/img/ad1.jpeg" style="width:250px;" />
                                </div>
                                <div class="col-sm-5"  style="margin-left:40px;margin-top:10px;">

                                    <img src="<?php echo base_url(); ?>/img/ad1.jpeg" style="width:250px;" />
                                </div>

                            </div>
                    </div>
                        <div class="col-md-4 hide tgext-center">
                            <h5 style="color: rgb(24, 119, 182) !important;">Advertisements</h5>
                            <hr>
                            <div class="col-sm-12" style="margin-top:5px;">

                                <img src="<?php echo base_url(); ?>/img/ad1.jpeg" style="width:250px;" />
                            </div>
                            <hr>
                            <div class="col-sm-12" style="margin-top:5px;">

                                <img src="<?php echo base_url(); ?>/img/ad1.jpeg" style="width:250px;" />
                            </div>

                            <hr>
                            <div class="col-sm-12" style="margin-top:5px;">

                                <img src="<?php echo base_url(); ?>/img/ad1.jpeg" style="width:250px;" />
                            </div>

                            <hr>

                            <div class="col-sm-12" style="margin-top:5px;">

                                <img src="<?php echo base_url(); ?>/img/ad1.jpeg" style="width:250px;" />
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

        <!-- Main Wrapper Start -->

        <div class="main-wrapper"> 
       <?php //echo $this->router->fetch_class().':Class--Nirbhay--Method:'.$this->router->fetch_method(); ?>
            <!-- Header start -->

            <header> 

                <!-- Logo Container Strat -->

                <div class="container logo-container">

                    <div class="row">

                        <div class="col-xs-12">

                            <div id="search">

                                <button type="button" class="close">×</button>

                                <form method="post" action="<?php echo base_url(); ?>mycon/search">

                                    <input type="search" name="search" placeholder="type keyword(s) here" required />

                                    <button type="submit" class="btn btn-primary">Search</button>

                                </form>

                            </div>

                        </div>

                        <div class="col-sm-3 text-center"> <a href="<?php echo base_url(); ?>" class="logo"><img src="<?php echo base_url(); ?>assets1/images/logo.png" style="border: none"> </a> </div>

                        <div class="col-sm-4 col-sm-offset-3  small-search"> 
                            <form method="post" action="<?php echo base_url(); ?>mycon/search">
                                <input style="width: 298px; padding: 6px;" type="search" name="search" placeholder="type keyword(s) here" required />
                                <button style="float:right;" type="submit" class="btn btn-primary"><i class="fa fa-search"></i>Search</button>
                            </form>
                        </div>

                        <div class="col-xs-6 col-sm-2 subscribe text-center">

                            <?php if (1 != 0) { ?>



                                <a href="<?php echo base_url(); ?>frontend" >SUBSCRIBE NOW<span>to get access</span></a>



                                <?php
                            } else {
                                ?>

                                <a href="#" data-toggle="modal" data-target="#login-modal">SUBSCRIBE NOW<span>to get access</span></a>

                            <?php }
                            ?>



                        </div>

                    </div>

                </div>

                <!-- Navigation part start -->

                <div class="navigation-container mainMenu">

                    <div class="container">

                        <div class="row">

                            <nav class="navbar">

                                <div class="navbar-header">

                                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
                                        <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span>
                                        <span class="icon-bar"></span> <span class="icon-bar"></span> </button>

                                </div>

                                <div class="collapse navbar-collapse js-navbar-collapse top-nav">

                                    <ul class="nav navbar-nav">

                                        <li class="site-nav-theme-border world-theme-bg <?php
                                        if ($this->router->class === 'mycon' && $this->router->method === 'world') {
                                            echo ' active';
                                        }
                                        ?> ">
                                            <a href="<?php echo base_url(); ?>mycon/world">World &nbsp; 
                                                <?php if (!empty($_SESSION['country']) && $_SESSION['country'] == 'us') { ?>
                                                    - &nbsp;  <span style="font-size:8px">US/Canada</span>
                                                <?php } ?>
                                                <?php if (!empty($_SESSION['country']) && $_SESSION['country'] == 'au') { ?>
                                                    - &nbsp;  <span style="font-size:8px">Latin America/ Caribbean</span>
                                                <?php } ?>
                                                <?php if (!empty($_SESSION['country']) && $_SESSION['country'] == 'de') { ?>
                                                    -  &nbsp; <span style="font-size:8px">Middle East</span>
                                                <?php } ?>
                                                <?php if (!empty($_SESSION['country']) && $_SESSION['country'] == 'gb') { ?>
                                                    - &nbsp; <span style="font-size:8px"> UK </span>
                                                <?php } ?>
                                                <?php if (!empty($_SESSION['country']) && $_SESSION['country'] == 'af') { ?>
                                                    - &nbsp;  <span style="font-size:8px">Africa</span>
                                                <?php } ?>
                                                <?php if (!empty($_SESSION['country']) && $_SESSION['country'] == 'it') { ?>
                                                    - &nbsp; <span style="font-size:8px"> Europe </span>
                                                <?php } ?>
                                                <?php if (!empty($_SESSION['country']) && $_SESSION['country'] == 'in') { ?>
                                                    - &nbsp; <span style="font-size:8px"> Asia Pacific </span>
                                                <?php } ?>
                                                &nbsp;
                                                <i class="fa fa-caret-down dropicon" aria-hidden="true"></i></a>


                                            <?php if ($this->router->fetch_class() == 'mycon' && $this->router->fetch_method() == 'index') { ?>
                                                <ul class="nav  country-drop" style="position: absolute; width: 200px; display: none; background: tomato none repeat scroll 0% 0%;">                       
                                                    <li class="dropdown dropdown-1 mega-dropdown">
                                                        <a href="<?php echo base_url(); ?>mycon/territory/us" <?php if (!empty($_SESSION['country']) && $_SESSION['country'] == 'us') { ?> style="background: green;" <?php } ?>><?php if (!empty($_SESSION['country']) && $_SESSION['country'] == 'us') { ?><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;<?php } ?>US/Canada</a>
                                                    </li>                       
                                                    <li class="dropdown dropdown-1 mega-dropdown"> 
                                                        <a href="<?php echo base_url(); ?>mycon/territory/au" <?php if (!empty($_SESSION['country']) && $_SESSION['country'] == 'au') { ?> style="background: green;" <?php } ?>><?php if (!empty($_SESSION['country']) && $_SESSION['country'] == 'au') { ?><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;<?php } ?>Latin America/ Caribbean</a>
                                                    </li>                      
                                                    <li class="dropdown dropdown-1 mega-dropdown"> 
                                                        <a href="<?php echo base_url(); ?>mycon/territory/de" <?php if (!empty($_SESSION['country']) && $_SESSION['country'] == 'de') { ?> style="background: green;" <?php } ?>><?php if (!empty($_SESSION['country']) && $_SESSION['country'] == 'de') { ?><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;<?php } ?>Middle East </a>
                                                    </li>                       
                                                    <li class="dropdown dropdown-1 mega-dropdown"> 
                                                        <a href="<?php echo base_url(); ?>mycon/territory/gb" <?php if (!empty($_SESSION['country']) && $_SESSION['country'] == 'gb') { ?> style="background: green;" <?php } ?>><?php if (!empty($_SESSION['country']) && $_SESSION['country'] == 'gb') { ?><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;<?php } ?>UK</a>
                                                    </li>                       
                                                    <li class="dropdown dropdown-1 mega-dropdown"> 
                                                        <a href="<?php echo base_url(); ?>mycon/territory/af" <?php if (!empty($_SESSION['country']) && $_SESSION['country'] == 'af') { ?> style="background: green;" <?php } ?>><?php if (!empty($_SESSION['country']) && $_SESSION['country'] == 'af') { ?><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;<?php } ?>Africa</a>
                                                    </li>                       
                                                    <li class="dropdown dropdown-1 mega-dropdown"> 
                                                        <a href="<?php echo base_url(); ?>mycon/territory/it" <?php if (!empty($_SESSION['country']) && $_SESSION['country'] == 'it') { ?> style="background: green;" <?php } ?>><?php if (!empty($_SESSION['country']) && $_SESSION['country'] == 'it') { ?><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;<?php } ?>Europe</a>
                                                    </li>                                          
                                                    <li class="dropdown dropdown-1 mega-dropdown">
                                                        <a href="<?php echo base_url(); ?>mycon/territory/in" <?php if (!empty($_SESSION['country']) && $_SESSION['country'] == 'in') { ?> style="background: green;" <?php } ?>><?php if (!empty($_SESSION['country']) && $_SESSION['country'] == 'in') { ?><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;<?php } ?>Asia Pacific</a>
                                                    </li>                    
                                                </ul>  
                                            <?php } else { ?>

                                                <ul class="nav  country-drop" style="position: absolute; width: 200px; display: none; background: tomato none repeat scroll 0% 0%;">                       
                                                    <li class="dropdown dropdown-1 mega-dropdown">
                                                        <a href="<?php echo base_url(); ?>mycon/territory/us" <?php if (!empty($_SESSION['country']) && $_SESSION['country'] == 'us') { ?> style="background: green;" <?php } ?>><?php if (!empty($_SESSION['country']) && $_SESSION['country'] == 'us') { ?><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;<?php } ?>US/Canada</a>
                                                    </li>                       
                                                    <li class="dropdown dropdown-1 mega-dropdown"> 
                                                        <a href="<?php echo base_url(); ?>mycon/territory/au" <?php if (!empty($_SESSION['country']) && $_SESSION['country'] == 'au') { ?> style="background: green;" <?php } ?>><?php if (!empty($_SESSION['country']) && $_SESSION['country'] == 'au') { ?><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;<?php } ?>Latin America/ Caribbean</a>
                                                    </li>                      
                                                    <li class="dropdown dropdown-1 mega-dropdown"> 
                                                        <a href="<?php echo base_url(); ?>mycon/territory/de" <?php if (!empty($_SESSION['country']) && $_SESSION['country'] == 'de') { ?> style="background: green;" <?php } ?>><?php if (!empty($_SESSION['country']) && $_SESSION['country'] == 'de') { ?><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;<?php } ?>Middle East </a>
                                                    </li>                       
                                                    <li class="dropdown dropdown-1 mega-dropdown"> 
                                                        <a href="<?php echo base_url(); ?>mycon/territory/gb" <?php if (!empty($_SESSION['country']) && $_SESSION['country'] == 'gb') { ?> style="background: green;" <?php } ?>><?php if (!empty($_SESSION['country']) && $_SESSION['country'] == 'gb') { ?><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;<?php } ?>UK</a>
                                                    </li>                       
                                                    <li class="dropdown dropdown-1 mega-dropdown"> 
                                                        <a href="<?php echo base_url(); ?>mycon/territory/af" <?php if (!empty($_SESSION['country']) && $_SESSION['country'] == 'af') { ?> style="background: green;" <?php } ?>><?php if (!empty($_SESSION['country']) && $_SESSION['country'] == 'af') { ?><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;<?php } ?>Africa</a>
                                                    </li>                       
                                                    <li class="dropdown dropdown-1 mega-dropdown"> 
                                                        <a href="<?php echo base_url(); ?>mycon/territory/it" <?php if (!empty($_SESSION['country']) && $_SESSION['country'] == 'it') { ?> style="background: green;" <?php } ?>><?php if (!empty($_SESSION['country']) && $_SESSION['country'] == 'it') { ?><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;<?php } ?>Europe</a>
                                                    </li>                                          
                                                    <li class="dropdown dropdown-1 mega-dropdown">
                                                        <a href="<?php echo base_url(); ?>mycon/territory/in" <?php if (!empty($_SESSION['country']) && $_SESSION['country'] == 'in') { ?> style="background: green;" <?php } ?>><?php if (!empty($_SESSION['country']) && $_SESSION['country'] == 'in') { ?><i class="fa fa-check-circle" aria-hidden="true"></i>&nbsp;<?php } ?>Asia Pacific</a>
                                                    </li>                    
                                                </ul> 
                                            <?php } ?>
                                        </li>
                                        <li class="site-nav-theme-border news-theme-bg <?php
                                        if ($this->router->class === 'mycon' && $this->router->method === 'news') {
                                            echo ' active';
                                        }
                                        ?> ">
                                            <?php if($this->router->method !='territory'){ ?>
                                            <a href="<?php echo base_url(); ?>world/news">News</a>

                                            <?php }elseif($this->router->method =='territory'){ ?>
                                                <a href="<?php echo base_url(); ?>mycon/territory/<?php echo $_SESSION['country']; ?>/news">News</a>

                                            <?php } ?>
                                        </li>
                                        <li class="site-nav-theme-border economy-theme-bg <?php
                                        if ($this->uri->segment(4) === 'economics' || $this->uri->segment(3) === 'economics') {
                                            echo ' active';
                                        }
                                        ?> ">
                                            <?php if($this->router->method !='territory' || $this->router->method=="news"){ ?>
                                            <a href="<?php echo base_url(); ?>world/news/economics">Economy</a>
                                            <?php }elseif($this->router->method =='territory'){ ?>
                                                <a href="<?php echo base_url(); ?>mycon/territory/<?php echo $_SESSION['country']; ?>/economics">Economy</a>

                                            <?php } ?>

                                        </li>
                                        <li class="site-nav-theme-border business-theme-bg <?php
                                        if ( $this->uri->segment(4)=== 'business' || $this->uri->segment(3)=== 'business') {
                                            echo ' active';
                                        }
                                        ?> ">
                                            <?php if($this->router->method !='territory' || $this->router->method=="news"){ ?>
                                            <a href="<?php echo base_url(); ?>world/news/business">Business</a>
                                            <?php }elseif($this->router->method =='territory'){ ?>
                                                <a href="<?php echo base_url(); ?>mycon/territory/<?php echo $_SESSION['country']; ?>/business">Business</a>

                                            <?php } ?>

                                        </li>
                                        <li class="site-nav-theme-border sci-theme-bg <?php
                                        if ($this->uri->segment(4) === 'tech' && $this->uri->segment(3) === 'tech') {
                                            echo ' active';
                                        }
                                        ?> ">
                                            <?php if($this->router->method !='territory' || $this->router->method=="news"){ ?>
                                            <a href="<?php echo base_url(); ?>world/news/tech">Sci/Tech</a>

                                            <?php }elseif($this->router->method =='territory'){ ?>
                                                <a href="<?php echo base_url(); ?>mycon/territory/<?php echo $_SESSION['country']; ?>/tech">Sci/Tech</a>

                                            <?php } ?>
                                        </li>
                                        <li class="site-nav-theme-border markets-theme-bg <?php
                                        if ( $this->uri->segment(4) === 'market' || $this->uri->segment(3) === 'market') {
                                            echo ' active';
                                        }
                                        ?> ">
                                            <?php if($this->router->method !='territory' || $this->router->method=="news"){ ?>
                                            <a href="<?php echo base_url(); ?>world/news/market">Markets</a>

                                            <?php }elseif($this->router->method =='territory'){ ?>
                                                <a href="<?php echo base_url(); ?>mycon/territory/<?php echo $_SESSION['country']; ?>/market">Markets</a>

                                            <?php } ?>
                                        </li>
                                        <li class="site-nav-theme-border arts-theme-bg <?php
                                        if ($this->uri->segment(4) === 'art_life' || $this->uri->segment(3) === 'art_life') {
                                            echo ' active';
                                        }
                                        ?> ">
                                            <?php if($this->router->method !='territory' || $this->router->method=="news"){ ?>
                                            <a href="<?php echo base_url(); ?>world/news/art_life">Arts</a>

                                            <?php }elseif($this->router->method =='territory'){ ?>
                                                <a href="<?php echo base_url(); ?>mycon/territory/<?php echo $_SESSION['country']; ?>/art_life">Arts</a>

                                            <?php } ?>
                                        </li>
                                        <li class="site-nav-theme-border life-theme-bg hide <?php
                                        if ($this->router->class === 'world' && $this->router->method === 'life') {
                                            echo ' active';
                                        }
                                        ?> ">
                                            <?php if($this->router->method !='' || $this->router->method=="territory"){ ?>
                                            <a href="<?php echo base_url(); ?>mycon/life/<?php echo $this->uri->segment(3); ?>">Life</a>
                                            <?php } ?>
                                        </li>
                                        <li class="site-nav-theme-border realestate-theme-bg <?php
                                        if ($this->uri->segment(4) === 'real_estate' || $this->uri->segment(3) === 'real_estate') {
                                            echo ' active';
                                        }
                                        ?> ">
                                            <?php if($this->router->method !='territory' || $this->router->method=="news"){ ?>
                                            <a href="<?php echo base_url(); ?>world/news/real_estate">Real Estate</a>

                                            <?php }elseif($this->router->method =='territory'){ ?>
                                                <a href="<?php echo base_url(); ?>mycon/territory/<?php echo $_SESSION['country']; ?>/real_estate">Real Estate</a>

                                            <?php } ?>
                                        </li>
                                        <li class="site-nav-theme-border sports-theme-bg <?php
                                        if ( $this->uri->segment(4) === 'sports' || $this->uri->segment(3) === 'sports') {
                                            echo ' active';
                                        }
                                        ?> ">
                                            <?php if($this->router->method !='territory' || $this->router->method=="news"){ ?>
                                            <a href="<?php echo base_url(); ?>world/news/sports">Sports</a>

                                            <?php }elseif($this->router->method =='territory'){ ?>
                                                <a href="<?php echo base_url(); ?>mycon/territory/<?php echo $_SESSION['country']; ?>/sports">Sports</a>

                                            <?php } ?>
                                        </li>
                                        <li class="<?php
                                        if ($this->uri->segment(4) === 'weather' || $this->uri->segment(3) === 'weather') {
                                            echo ' active';
                                        }
                                        ?> site-nav-theme-border weather-theme-bg">
                                            <?php if($this->router->method !='territory' || $this->router->method=="news"){ ?>
                                            <a href="<?php echo base_url(); ?>world/news/weather">Weather</a>

                                            <?php }elseif($this->router->method =='territory'){ ?>
                                                <a href="<?php echo base_url(); ?>mycon/territory/<?php echo $_SESSION['country']; ?>/weather">Weather</a>

                                            <?php } ?>
                                        </li>
                                        <li class="<?php
                                        if ($this->uri->segment(4) === 'traffic' || $this->uri->segment(3) === 'traffic') {
                                            echo ' active';
                                        }
                                        ?> site-nav-theme-border traffic-theme-bg">
                                            <?php if($this->router->method !='territory' || $this->router->method=="news"){ ?>
                                                <a href="<?php echo base_url(); ?>world/news/traffic">Traffic</a>

                                            <?php }elseif($this->router->method =='territory'){ ?>
                                                <a href="<?php echo base_url(); ?>mycon/territory/<?php echo $_SESSION['country']; ?>/traffic">Traffic</a>

                                            <?php } ?>
                                        </li>

                                    </ul>
                                    <?php if (!empty($_SESSION['user'])) { ?>
                                        <ul class="nav navbar-nav lm1">

                                            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">More <span class="caret"></span></a>

                                                <ul class="dropdown-menu" role="menu">

                                                    <li><a href="<?php echo base_url(); ?>users/dash">Dashboard</a></li>

                                                    <li><a href="<?php echo base_url(); ?>users/logout">Log Out</a></li>



                                                </ul>

                                            </li>

                                        </ul>
                                    <?php } ?>
                                    <ul class="nav navbar-nav hidden-xs hidden-sm lm1">

                                        <li class="site-nav-theme-border traffic-theme-bg" style="background: rgb(24, 119, 182)">
                                            <a href="#search"><i class="fa fa-search"></i></a>
                                        </li>

                                    </ul>

                                    <ul class="nav navbar-nav">



                                        <?php if (1 != 1) { ?>



                                            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Hi <?php echo $member_name ?> <span class="caret"></span></a>

                                                <ul class="dropdown-menu" role="menu">

                                                    <li><a href="<?php echo base_url(); ?>users/dash">Welcome</a></li>

                                                    <li><a href="javascript:void(0);">SUBSCRIBE NOW</a></li>

                                                    <!-- <li><a href="javascript:void(0);">Another action</a></li>
                                
                                                    <li><a href="javascript:void(0);">Something else here</a></li> -->

                                                    <li><a href="<?php echo base_url(); ?>users/logout">Log Out</a></li>

                                                </ul>

                                            </li>

                                            <?php
                                        } else {
                                            ?>
                                            <?php if (!empty($_SESSION['user'])) { ?>
                                                <li class="site-nav-theme-border traffic-theme-bg hide" style="background: #137f39">
                                                    <a href="<?php echo base_url(); ?>users/logout"><i class="fa fa-user"></i> Log Out</a>
                                                </li>
                                            <?php } else { ?>
                                                <li class="site-nav-theme-border traffic-theme-bg" style="background: #137f39">
                                                    <a href="#" data-toggle="modal" data-target="#login-modal"><i class="fa fa-user"></i></a>
                                                </li>
                                            <?php } ?>
                                        <?php }
                                        ?>





                                        <!--      <li class="text-center"><button class="btn btn-default signin-btn">SIGN IN</button></li>
                          
                                      <li><a href="javascript:void(0);">Forget Password</a></li>
                          
                                      <li><a href="javascript:void(0);">Forget Username</a></li>
                          
                                      <li><p>Already a print edition subscriber, but don't have a login?</p></li>
                          
                                      <li><a href="javascript:void(0);" class="activate-digital">Activate your digital access.</a></li>
                          
                                            </ul>
                          
                                          </li> -->

                                    </ul>

                                </div>

                                <!-- /.nav-collapse --> 

                            </nav>

                        </div>

                    </div>

                </div>

                <!-- /Navigation part Close --> 

            </header>


            <style type="text/css">

                ul.nav a:hover {
                    text-decoration: underline !important;
                }


                .nav.navbar-nav li:hover > .country-drop {
                    min-width: 1127px !important;
                    display: flex !important;
                    padding: 12px 0 !important;
                    background: rgba(24, 119, 182, 0.92) !important;
                }
                .world-bg, .world-theme-bg:hover, .world-theme-bg a:hover {
                    background: rgb(24, 119, 182) !important;
                }


                ul.country-drop a:hover {
                    text-decoration: underline !important;
                }

                .inner-banner img {
                    position: relative;
                    z-index: 0 !important;
                }
                .banner-ticket {
                    position: absolute;
                    z-index: 0 !important;}


                .nav.navbar-nav li:hover > .country-drop {
                    min-width: 1127px !important;
                    display: flex !important;
                    padding: 12px 0 !important;
                    background: rgba(66, 194, 201, 0.91) !important;
                }

                .country-drop li a {
                    border: none !important;
                }
            </style>

            <!-- /Header Close --> 