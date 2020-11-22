<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Favicon -->
    <link rel="icon" href="<?php echo base_url(); ?>assets/img/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/admin_custom.css') ?>">
    <script type="javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container vh-100">
        <div class="row vh-100">
            <div class="col-sm-9 col-md-7 col-lg-5 m-auto">
                <div class="card card-signin">
                    <div class="card-body">
                        <div class="avatar">
                            <i class="fas fa-user fa-5x"></i>
                        </div>
                        <h5 class="card-title text-center mt-4">Login Admin</h5>
                        <form class="form-signin" method="POST" action="<?= base_url('admin/do_login') ?>">
                            <div class="form-label-group">
                                <input type="text" id="inputUsername" name="username" class="form-control" placeholder="Your Username" required autofocus>
                                <label for="inputUsername">Username</label>
                            </div>

                            <div class="form-label-group">
                                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Your Password" required>
                                <label for="inputPassword">Password</label>
                            </div>
                            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Login</button>

                            <?= $this->session->flashdata('message'); ?>
                            <hr class="my-4">
                            <p class="text-center small">
                                © Yayasan Bina Taqwa 2020. All Rights Reserved.
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>