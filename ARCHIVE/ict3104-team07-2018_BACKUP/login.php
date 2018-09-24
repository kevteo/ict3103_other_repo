<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>myBank</title>
  <!-- Bootstrap core CSS-->
  <link href="external/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!---------------------JavaScript----------------------->
    <!-- Bootstrap core JavaScript-->
    <script src="external/jquery/jquery.min.js"></script>
    <script src="external/bootstrap/js/bootstrap.bundle.min.js"></script>

<!---------------------Custom------------------------------->
<script src="js/custom-datatables.min.js"></script>
  <script src="js/custom.min.js"></script>
  <link href="assets/demo/demo8/base/custom.css" rel="stylesheet" type="text/css" />

  
  <!----------------------Validation----------------------------------->
  <script>
	function validateForm() {
		var userName = document.forms["myForm"]["userName"].value;
		var password = document.forms["myForm"]["password"].value;
		if (userName == "" || password=="" ) {
			alert("Formmust be filled out");
			return false;
		}
		
		else if (userName =="customer"){
		  window.location.replace("customer.php");
		  return false;
		}
		
		else if (userName =="admin"){
		  window.location.replace("admin.php");
		  return false;
		}
		
		else if (userName =="manager"){
		  window.location.replace("manager.php");
		  return false;
		}

	}
</script>

<!----------------------Validation----------------------------------->
</head>

<body  style="background-image: url(assets/app/media/img/bg/login-bg.gif);height:100%background-position:center;background-repeat:no-repeat;background-size:cover; ">
  <span style="font-size:60px;color:grey ;background-color:white;">&nbsp;&nbsp;&nbsp;We know you the best. &nbsp;</span>
  <div style="float:right; margin-right:8%; ">
  <br><br><br>
	
    <div class="card card-login mx-auto mt-5">
      <div class="card-body login-border" >
	  
	  
		<img alt="" src="assets/demo/demo8/media/img/logo/logo_login.png" class="login-logo"/>
	  
        <form  name="myForm"  >
          <div class="form-group">
            <label for="userName" class="login-text">Username</label>
            <input class="form-control" id="userName" type="text"  placeholder="Username">
          </div>
		  
          <div class="form-group">
            <label for="password" class="login-text">Password</label>
            <input class="form-control" id="password" type="password" placeholder="Password">
          </div>

		  <a class="btn btn-block btn-primary" href="registration.php" role="button">Login</a>
		  <a class="btn btn-block" href="registration.php" role="button">Get Started</a>
		  <!--
		  <input type="submit" value="Login" class= "btn btn-primary btn-block" onclick=" validateForm()">
		  <input type="submit" value="Get Started" class= "btn btn btn-block" onclick="location.href='registration.php';">
		  -->
        </form>
		
		<!-- Do we need forogot password session -->
      </div>
    </div>
  </div>

</body>

</html>
