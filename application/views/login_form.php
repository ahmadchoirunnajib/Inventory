<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login Sistem Informasi Indobayi</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">

    </head>

    <body id="body_login">

        <div class="container" id="kontainer_login">
            <div class="col-sm-6 col-md-4 col-md-offset-4">
            <div class="card card-inverse text-center" id="card_login">
                  <img class="card-img-top" src="<?php echo base_url();?>assets/images/indobayi.png" alt="Logo Indobayi" id="logo_indobayi">
                  <div class="card-block" id="card_color">
                    <h4 class="card-title">Login SI Indobayi</h4>
                    <p class="card-text">Masukkan Username dan Password</p>
                    <?php echo form_open('login/do_login'); ?>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input type="text" id="uname" name="uname" class="form-control" placeholder="Username" autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input type="password" name="pass" id="pass" class="form-control" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="login" value="LogIn" class="btn btn-primary btn-block">Login</button>
                        </div>
                    </form>
                    
                  </div>
            </div>
            </div>
        </div>


        <!-- Javascript -->
        <script src="<?php echo base_url();?>assets/js/jquery-1.11.1.min.js"></script>
        <script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
        
        <script src="<?php echo base_url();?>assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>