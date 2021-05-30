<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!--Include the above in your HEAD tag  -->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">


</head>
<body>

<div class="container">
<br>
<hr>


<div class="row justify-content-center">
<div class="col-md-6">
<div class="card">
<header class="card-header">
<?php echo validation_errors(); ?>

	<a href="<?php echo base_url().'login';?>" class="float-right btn btn-outline-primary mt-1">Log in</a>
	<h4 class="card-title mt-2">Sign up</h4>
</header>
<article class="card-body">
<form action="<?php echo base_url().'Login/signup';?>" name="signupForm" id="signupForm" method="post">
	<div class="form-row">
		<div class="col form-group">
			<label>First name </label>   
		  	<input type="text" class="form-control" id="first_name" name="first_name" placeholder="" required>
		</div> <!-- form-group end.// -->
		<div class="col form-group">
			<label>Last name</label>
		  	<input type="text" class="form-control" id="last_name" name="last_name" placeholder=" " required>
		</div> <!-- form-group end.// -->
	</div> <!-- form-row end.// -->
	<div class="form-group">
		<label>Email address</label>
		<input type="email" class="form-control" id="email" name="email" placeholder="" required>
		<small class="form-text text-muted">We'll never share your email with anyone else.</small>
	</div> <!-- form-group end.// -->
    <div class="form-group">
		<label>Phone</label>
		<input type="number" class="form-control" id="phone" name="phone" placeholder="" required>
		<small class="form-text text-muted">We'll never share your phone with anyone else.</small>
	</div> <!-- form-group end.// -->
    <!-- form-group end.// -->
    <div class="form-group">
		<label> Address</label>
        
		<input type="text" id="address" name="address" class="form-control" required >
	</div> <!-- form-group end.// -->
	
	<div class="form-row">
		<div class="form-group col-md-6">
		  <label>City</label>
		  <input type="text" id="city" name="city" class="form-control" required>
		</div> <!-- form-group end.// -->
		<div class="form-group col-md-6">
		  <label>Country</label>
          <input type="text" id="country" name="country" class="form-control" required>

		</div> <!-- form-group end.// -->
        <div class="form-group">
		<label>zip</label>
		<input type="number" id="zip" name="zip" class="form-control" placeholder="" required>
		
	</div> 
        <div class="form-group col-md-6">
		  <label>State</label>
          <input type="text" id="state" name="state" class="form-control" required >

		</div> 
	</div> <!-- form-row.// -->
	<div class="form-group">
		<label>Create password</label>
	    <input class="form-control" id="password" name="password" type="password" required>
	</div> <!-- form-group end.// -->  
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block" id="save" name="save" method="post"> Register  </button>
    </div> <!-- form-group// -->      
    <small class="text-muted">By clicking the 'Sign Up' button, you confirm that you accept our <br> Terms of use and Privacy Policy.</small>                                          
</form>
</article> <!-- card-body end .// -->
<div class="border-top card-body text-center">Have an account? <a href="http://localhost/Assesment/index.php/Signup/signup">Log In</a></div>
</div> <!-- card.// -->
</div> <!-- col.//-->

</div> <!-- row.//-->


</div> 
<!--container end.//-->

<br><br>
<article class="bg-secondary mb-3">  

<br><br>
</article>
</body>
</html>

