
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">
    <link rel="shortcut icon" href="images/favicon.png">

    <title>Login</title>

    <!--Core CSS -->
    <link href="<?php echo base_url('assets/bs3/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/bootstrap-reset.css" rel="stylesheet'); ?>">
    <link href="<?php echo base_url('assets/font-awesome/css/font-awesome.css'); ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/style-responsive.css'); ?>" rel="stylesheet"/>
    <style>
    .form-control{
        color: #555;
    }
    </style>
</head>
<body class="login-body">
    <div class="container">
        <form class="form-signin" action="<?php echo base_url('auth/login'); ?>" method="POST">
        <h2 class="form-signin-heading">Magang Dimana</h2>
        <div class="login-wrap">
            <div class="user-login-info">
                <input type="text" class="form-control" placeholder="Username" autofocus name="username">
                <input type="password" class="form-control" placeholder="Password" name="password">
            </div>
            <button class="btn btn-lg btn-login btn-block" type="submit">Sign in</button>
            <a href="<?php echo base_url(); ?>">Back to site</a>
        </div>
      </form>
    </div>
  </body>
</html>
