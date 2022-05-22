<?php

 session_start();
 if (isset($_SESSION['userlogin'])) {
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Creating Fixed Header and Footer with CSS</title>
    <style>
      /* Add some padding on document's body to prevent the content
    to go underneath the header and footer */
      body {
        padding-top: 60px;
        padding-bottom: 40px;
		margin: 0px;
      }
      .container {
        width: 80%;
        margin: 0 auto; /* Center the DIV horizontally */
      }
      .fixed-header,
      .fixed-footer {
        width: 100%;
        position: fixed;
        background: #6a8afc;
        padding: 10px 0;
        color: #fff;
		text-align:center;	
      }
      .fixed-header {
        top: 0;
      }
      .fixed-footer {
        bottom: 0;
      }
      /* Some more styles to beutify this example */
      nav a {
        color: #fff;
        text-decoration: none;
        padding: 7px 15px;
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
    </style>
  </head>
  <body>
    <div class="fixed-header">
      <div class="container">
        <nav>
			<div class="left">Welcome  <?php echo $_SESSION['userlogin']; ?></div>
          <a href="home.php">Home</a>
          <a href="account_to_account.php">Quick Banking</a>
          <a href="#">Bank Details</a>
          <a href="#">Profile</a>
		  <a href="#">Account Details	</a>
		  <div class="right">
       <a href="logout.php">Sign Out</a>
    </div>
          
        </nav>
      </div>
    </div>
    <div class="container">
      <h1>
        Welcome
        <?php echo $_SESSION['userlogin']; ?>
      </h1>
    </div>
    <div class="fixed-footer">
      <div class="container">Copyright &copy; 2019 &nbsp;Secure Bank
</div>
    </div>
  </body>
</html>
<?php
 }
 else{
 	header("Location: index.php");
 }
?>
