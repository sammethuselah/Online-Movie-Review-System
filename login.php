<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>User Login</title>

     </head>

  <body>
		<div style="background-image: linear-gradient(to right top, #fff9f9, #ffe2e9, #ffcbe5, #ffb5ec, #ffa3fb);">
       <?php include 'navbar.html';  ?>

<div class="container">
  <div class="row">
  	<div class="page-header">
  		<h1 style="font-size:48px; font-weight:bold; color:rgb(100,100,155);">User Login</h1>
  	</div>
  	  <form class="form-horizontal" role="form" method="post" name="logInForm" action="loginVerification.php">
  	  	 <div class="form-group">
  	  	    <label for="userName" class="col-sm-2 control-label" >User Name:</label>
  	  	    <div class="col-sm-6">
  	  	    	<input type="text" name="userName" class="form-control" id="userName" placeholder="User Name">
  	  	    </div>
  	  	 </div>

 		 <div class="form-group">
  	  	    <label for="password" class="col-sm-2 control-label" >Password:</label>
  	  	    <div class="col-sm-6">
  	  	      <input type="password" name="password" class="form-control" id="password" placeholder="Password">
  	  	    </div>
  	  	</div>

  	  	<div class="form-group">
		  <div class="col-sm-offset-2 col-sm-10">
		       <button type="submit" class="btn btn-primary" id="login">Login</button>
		  </div>
		</div>

  	  </form>
   </div>
	
 </div>
      <h3 class="container">Don't have an account? <a href="reg.php"><h4>Register Here</h4></a></h3>

           <footer>
       
       <div class="container">
     
  <h4 style="text-align: center; background-color: lightgrey; width: 100%;"> &copy; Marvel Studios</h4>
       </div>
   </footer>
   </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      </body>
</html>