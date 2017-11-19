<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login Admin</title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">

</head>

<body>

 <div class="container">
  <div class="info">
    <h1>Login Admin</h1><span>Libercom</span>
</div>
</div>
<div class="form" method="POST">
  <div class="thumbnail"><img src="<?php echo base_url();?>assets/img/find_user.png"/></div>
  <div class="panel-body">
    <form class="login-form" role="form" action="" method="POST">
        <fieldset>
            <div class="form-group">
                <input class="form-control" placeholder="Username" name="username" type="text" autofocus>
            </div>
            <div class="form-group">
                <input class="form-control" placeholder="Password" name="password" type="password" value="">
            </div>
            
            <button><input type="submit" class="button" value="Login" /></button> 
        </fieldset>
    </form>
</div>
</div>
</div>
</div>
</div>

<script  src="<?php echo base_url();?>assets/js/index.js"></script>

</body>

</html>
