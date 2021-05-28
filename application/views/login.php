<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">


    <title>Document</title>
</head>
<body>
<div class="py-4 mt-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div  class="card-body p-0">
                        <div class="row">
                            <div class="mt-3 col-lg-6 d-none d-lg-block bg-login-image">
                                <img style="width: 100%; height: 100%; padding: 20px;" src="<?php echo base_url('assets/images/logo.png')?>" alt="gamuncul">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <?php if( $this->session->flashdata('flash') ) : ?>
                                        <div class="alert alert-danger" role="alert"><?= $this->session->flashdata('flash'); ?></div>
                                    <?php endif; ?>
                                    

                                    <form method="POST" action="<?php  echo base_url('C_login/login'); ?>" class="user">

                                        <div class="form-group">
                                                <input id="email" value="<?= set_value('email') ?>" type="email" class="form-control form-control-user " name="email" value="" placeholder="Enter Email Address..." required autocomplete="email" autofocus>
                                                <!-- @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror -->
                                        </div>

                                        <div class="form-group">
                                                <input id="password" type="password" class="form-control form-control-user " name="pass" placeholder="Password" required autocomplete="current-password">
                                                <!-- @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror -->
                                        </div>

                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                    <input class="custom-control-input" type="checkbox" name="remember" id="remember" >

                                                    <label class="custom-control-label" for="remember">
                                                        Remember Me
                                                    </label>
                                            </div>
                                        </div>

                                        <button name="login" type="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                        <hr>

                                                <div class="text-center">
                                                    <a class="small" href="<?php echo base_url(); ?>C_login/register">Create an Account!</a>
                                                </div>
                                    </form>



                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
<script src="./assets/js/dashboard.js"></script></body>
</html>
