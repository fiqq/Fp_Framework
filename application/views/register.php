<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
    <script src="<?php echo base_url('assets/js/jquery-3.5.1.min.js')?>"></script>

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
                                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                                    </div>

                                    <form method="POST" action="<?php  echo base_url('C_login/addusers'); ?>" class="user">

                                        <div class="form-group row">
                                                <input id="name" type="text" class="form-control form-control-user " name="nama" placeholder="Full Name" value="<?php set_value('nama') ?>" required autocomplete="name" autofocus>
                                                <!-- <span class="invalid-feedback" role="alert">
                                                    <strong></strong>
                                                </span> -->
                                                <?php echo form_error('nama','<div style="padding: 0px; margin: 0px;" class="alert alert-danger" role="alert"><small>','</small></div>'); ?>
                                                
                                        </div>

                                        <div  class="form-group row">
                                                <input id="email" type="email" class="form-control form-control-user " name="email" placeholder="Email Address" value="<?php set_value('email') ?>" required autocomplete="email">
                                                <?php echo form_error('email','<div style="padding: 0px; margin: 0px;" class="alert alert-danger" role="alert"><small>','</small></div>'); ?>
                                        </div>

                                        <div  class="form-group row">
                                                <input id="password" type="password" class="form-control form-control-user " name="pass" placeholder="Password" required autocomplete="new-password">
                                                <?php echo form_error('pass','<div style="padding: 0px; margin: 0px;" class="alert alert-danger" role="alert"><small>','</small></div>'); ?>
                                        </div>

                                        <div class="form-group row">
                                            <input id="password-confirm" type="password" class="form-control form-control-user" name="password_confirmation" placeholder="Repeat Password" required autocomplete="new-password">
                                            <?php echo form_error('password_confirmation','<div style="padding: 0px; margin: 0px;" class="alert alert-danger" role="alert"><small>','</small></div>'); ?>
                                        </div>
    </small>

                                            <button name="register" type="submit" class="btn btn-primary btn-user btn-block">
                                                Register
                                            </button>
                                            <hr>
                                            <div class="text-center">
                                                    <a class="small" href="<?php echo base_url(); ?>C_login">Already have an account? Login!</a>
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


</html>
