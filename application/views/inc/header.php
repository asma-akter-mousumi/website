<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-awesome.css">
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style_me.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.css">
        <script src="<?php echo base_url() ?>assets/js/self.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title><?php echo isset($title) ? $title : "kite" ?> </title>
    </head>
    <body style="font-family: Rockwell Condensed;font-size: 20px;overflow-x: hidden;position: relative">
        <nav class="navbar navbar-default navbar-fixed-top" style="padding: 20px;background-color: #679467">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">

                    <ul class="nav navbar-nav navbar-right">



                        <li>

                            <a href="<?php echo base_url('home') ?>" style="color: white;font-size: 26px;text-transform: uppercase" class="dropdown-toggle" type="button" data-toggle="dropdown">what we do
                                <span class="caret"></span> 
                            </a>          

                            <ul class="dropdown-menu dropdown-menu-left">
                                <li><a href="<?php echo base_url('product') ?>">Service</a></li>
                                <li><a href="<?php echo base_url('pogram') ?>">Pogram</a></li>


                            </ul>
                        </li>
                        <li>

                            <a href="<?php echo base_url('home') ?>" style="color: white;font-size: 26px;text-transform: uppercase" class="dropdown-toggle" type="button" data-toggle="dropdown">About us
                                <span class="caret"></span> 
                            </a>          

                            <ul class="dropdown-menu dropdown-menu-left">
                                <li><a href="<?php echo base_url('home') ?>#home">What is KBL</a></li>
                                <li><a href="<?php echo base_url('team') ?>">Team</a></li>
                                   <li><a href="<?php echo base_url('job') ?>">Opportunities</a></li>


                            </ul>
                        </li>
                        <li class=""><a href="<?php echo base_url('training') ?>" style="color: white;font-size: 26px;text-transform: uppercase">training </a></li>


                        <li class=""><a href="<?php echo base_url('newspaper') ?>" style="color: white;font-size: 26px;text-transform: uppercase">NewsRoom </a></li>
                         
                        <li class=""><a href="<?php echo base_url('contact') ?>" style="color: white;font-size: 26px;text-transform: uppercase">Contact Us </a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>

        <div style="width: 100px;height: 100px;border-radius: 50%;background-color: white;border: solid 3px gray;position: absolute;top:20%;right: 0;z-index: 1;padding: 25px">
            <a href="<?php echo base_url('home') ?>" ><img src="<?php echo base_url() ?>/assets/images/KITE-LOGO.png" width="100%;height:100%"></a>
        </div>