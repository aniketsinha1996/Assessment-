<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
</script>
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-4 offset-md-4" style="padding-top:50px;">
<?php $errorMsg=$this->session->userdata('errorMsg'); ?>
<?php if(!empty($errorMsg)) {?>
<div class="alert alert-danger" role="alert">
<?php echo $errorMsg;?>
</div><?php }?>
<form action="<?php echo base_url().'login';?>" name="loginForm" id="loginForm" method="post">
<h1 class="text-center" style="padding-bottom:50px;">Sign In</h1>
  <div class="form-group">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="text" class="form-control" id="username" value="<?php echo set_value('username');?>"  name="username" placeholder="enter username">
   <p><?php echo form_error('username'); ?></p>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" value="<?php echo set_value('password');?>" name="password" placeholder="Enter password">
    <p><?php echo form_error('password'); ?></p>

  </div>
  
  <button type="submit" class="btn btn-primary btn-block btn-lg">Submit</button>
</form>
</div>
</div>

</div>

</body>
</html>