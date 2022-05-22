<?php require_once 'db_connect.php'; 
 session_start();
if($_POST) {

	$username = $_POST['username'];
	$password = $_POST['password'];
$sql = "SELECT id FROM login WHERE username = '$username' and passcode = '$password'";
$result = $connect->query($sql);

if($result->num_rows > 0) {

		//session_register("username");
         $_SESSION['userlogin'] = $username;
         
         header("location: home.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
}
?>
<html>
   
   <head><link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
      <title>Login Page</title>
      
      <style type = "text/css">

      .fixed-header,
      .fixed-footer {
        width: 100%;
        position: fixed;
        background: #6a8afc;
        padding: 15px 0;
        color: #fff;
        text-align: center;
        border-bottom: 2px solid #ccc;
      }
      .fixed-header {
        top: 0;
      }
      .containers {
        width: 80%;
        margin: 0 auto; /* Center the DIV horizontally */
      }
        body {
    font-family: "Lato", sans-serif;
}



.main-head{
    height: 150px;
    background: #FFF;
   
}

.sidenav {
    height: 100%;
    background-color: #ccc;
    overflow-x: hidden;
    padding-top: 20px;
}

 nav a {
        color: #fff;
        text-decoration: none;
        padding: 7px 25px;
        display: inline-block;
      }
      .container p {
        line-height: 200px; /* Create scrollbar to test positioning */
      }
	  .right {
			color: #fff;
			text-decoration: none;
			padding: 7px 25px;
			display: inline-block;
			display: inline;
			text-align: right;
			float: right;

		}
		.left {
			font-size:20px;
			color: green;
			text-decoration: none;
			padding: 7px 25px;
			display: inline-block;
			display: inline;
			text-align: left;
			float: left;

		}
.main {
    padding: 0px 10px;
}

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
}

@media screen and (max-width: 450px) {
    .login-form{
        margin-top: 10%;
    }

    .register-form{
        margin-top: 10%;
    }
}

@media screen and (min-width: 768px){
    .main{
        margin-left: 40%; 
    }

    .sidenav{
        width: 40%;
        position: fixed;
        z-index: 1;
        top: 70px;
        left: 0;
    }

    .login-form{
        margin-top: 80%;
        min-width: 450px;
    }

    .register-form{
        margin-top: 20%;
    }
}


.login-main-text{
    margin-top: 20%;
    padding: 60px;
    color: #000;
}

.login-main-text h2{
    font-weight: 300;
}

.btn-black{
    background-color: #000 !important;
    color: #fff;
}
      </style>
      
   </head>
   
   <body >
    <div class="fixed-header">
      <div class="containers">
        <nav>
          <a href="index.php">Home</a>
           <a href="userregister.php">Register</a>
          <a href="#">About Bank</a>
          <a href="#">Product</a>
          <a href="#">Services</a>
		  <a href="#">Contact Us</a>
          
        </nav>
      </div>
    </div>
	<div class="sidenav">
         <div class="login-main-text">
            <h2><b>ABM Bank</b></h2>
            <h3>America's Most Convenient Bank</h3>
            <p>Welcome to ABM Online Banking</p>

         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
               <form method="POST" action="">
                  <div class="form-group">
                     <label>User Name</label>
                     <input type="text" name="username" class="form-control" placeholder="User Name">
                  </div>
                  <div class="form-group">
                     <label>Password</label>
                     <input type="password" name="password" class="form-control" placeholder="Password">
                  </div>
                
                  <button type="submit" class="btn btn-black">Login</button>
               </form>
               <div style="font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
               <div style="font-size:14px; color:#cc0000; margin-top:10px">
				 <p><a href="#">Forgot your password?</a> &nbsp;	Don't have an account?<a href="userregister.php">Sign Up</a></p>
				</div>
			</div>
            </div>
         </div>
      </div>

   </body>
</html>