<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
    <!-- BOOTSTRAP STYLES-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/bootstrap.css">
    <!-- FONTAWESOME STYLES-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/font-awesome.css">
    <!-- CUSTOM STYLES-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/custom.css">
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>

<body>
    <div class="container">
        <div class="row text-center  ">
            <div class="col-md-12">
                <br /><br />
                <h2> Binary Admin : Register</h2>

                <h5>( Register yourself to get access )</h5>
                <br />
            </div>
        </div>
        <div class="row">

            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong> New User ? Register Yourself </strong>
                    </div>
                    <div class="panel-body">
                        <form method="post" action="<?= base_url() ?>auth/registered">
                            <br />
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-circle-o-notch"></i></span>
                                <input type="text" name="nama" class="form-control" placeholder="Your Name" />
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-tag"></i></span>
                                <input type="text" name="username" class="form-control" placeholder="Username" />
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                <input name="password" type="password" class="form-control" placeholder=" Password" />
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon">@</span>
                                <input name="email" type="text" class="form-control" placeholder="Email" />
                            </div>

                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                <input name="no_phone" type="text" class="form-control" placeholder="No Phone" />
                            </div>

                            <button type="submit" class="btn btn-success" name="submit" type="submit">Daftar</button>
                            <hr />
                            Already Registered ? <a href="<?= base_url() ?>auth">Login here</a>
                        </form>
                    </div>

                </div>
            </div>
            <?php if($this->session->flashdata('msg')){ ?>
                <div class='alert alert-danger'><?php echo $this->session->flashdata('msg'); ?></div>
            <?php } ?>
        </div>
    </div>



</body>

</html>