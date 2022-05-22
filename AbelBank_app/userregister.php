
<html>
   
   <head><link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
      <title>Login Page</title>
           <script type = "text/javascript">
   <!--
      // Form validation code will come here.
      function validate() {
    var fname = document.getElementById("fname").value;
         if( fname == "" ) {
            alert("Please provide your first  name!");
            document.myForm.fname.focus() ;
            return false;
         }
     var lname = document.getElementById("lname").value;
          if( lname == "" ) {
            alert("Please provide your last name!");
            document.myForm.lname.focus() ;
            return false;
         }
         var Address1 = document.getElementById("Address1").value;
          if( Address1 == "" ) {
            alert("Please provide your initial Address!");
            document.myForm.Address1.focus() ;
            return false;
         }
          var Address2 = document.getElementById("Address2").value;
          if( Address2 == "" ) {
            alert("Please provide your line Address2");
            document.myForm.Address2.focus() ;
            return false;
         }
         var state = document.getElementById("state").value;
          if( state == "" ) {
            alert("Please provide your state!");
            document.myForm.state.focus() ;
            return false;
         }
         var zipcode = document.getElementById("zipcode").value;
          if( zipcode == "" ) {
            alert("Please provide your zipcode!");
            document.myForm.zipcode.focus() ;
            return false;
         }
         var account_type = document.getElementById("account_type").value;
          if( account_type == "" ) {
            alert("Please select Account Type!");
            document.myForm.account_type.focus() ;
            return false;
         }
         var security_questions = document.getElementById("security_questions").value;
          if( security_questions == "" ) {
            alert("Please select Security Question!");
            document.myForm.security_questions.focus() ;
            return false;
         }
          var answer = document.getElementById("answer").value;
          if( answer == "" ) {
            alert("Please provide your answer!");
            document.myForm.answer.focus() ;
            return false;
         }
          var phone = document.getElementById("phone").value;
          if( phone == "" ) {
            alert("Please provide your phone Number!");
            document.myForm.phone.focus() ;
            return false;
         }
     var contact = document.getElementById("username").value;
         if(contact == "" || contact.indexOf("@", 0) < 0  || contact.indexOf(".", 0) < 0) {
            alert("Please provide your valid username!");
            document.myForm.username.focus() ;
            return false;
         }
     var password = document.getElementById("password").value;
     if( password === undefined || password =="" ) {
            alert("Please Enter your password!");
            document.myForm.password.focus() ;
            return false;
         }
     var cpassword = document.getElementById("cpassword").value;
     if( cpassword === undefined || cpassword =="" ) {
      alert("Please provide conform Password!");
            document.myForm.cpassword.focus() ;
            return false;
         }
     else if (password != cpassword) { 
            alert("Password and  conform Password doesnt match ");
            document.myForm.cpassword.focus() ;
            return false;
         }
    
     
     
         return( true );
      }
   //-->
</script>
</head>
<?php 

require_once 'db_connect.php'; 
$sql = "SELECT * FROM security_question";
$result = $connect->query($sql);

        

if($_POST) {

  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $Address1 = $_POST['Address1'];
  $Address2 = $_POST['Address2'];
  $state = $_POST['state'];
  $zipcode = $_POST['zipcode'];
  $account_type = $_POST['account_type'];
  $security_question = $_POST['security_questions'];
  $answer = $_POST['answer'];
  $phone = $_POST['phone'];
  $username = $_POST['username'];
  $password = $_POST['password'];
?>
<div>
  <h4>User Register Details</h4>

  First Name: <?php echo $fname; ?> <br>
    Last Name: <?php echo $lname; ?> <br>

  Username: <?php echo $username; ?>
</div>
<?php 
}
?>
      <style type = "text/css">

      .fixed-header,
      .fixed-footer {
         position: fixed;
  top: 0;
  width: 100%;
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

    .register-form{
        margin-top: 20%;
    }
}


.btn-black{
    background-color: #000 !important;
    color: #fff;
}
.register{
  padding: 20px;
    width: 600px;
    margin: 100px 20px 20px 20px ;
    border: 1px solid #000;
  }
  .register h4{
    text-align: center;
  }
.inputdata p{
  text-align: justify;
    display: inline;
    min-width: 400px;
}
.inputdata{
  padding: 10px 20px 10px 20px;
}

.submitdata{
 text-align: center;
 padding: 10px;
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
           <a href="index.php">Login</a>
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
         <div class="registerdetails">
             <div class="register">
  <h4>User Registration Page</h4>

  <form action="registerAction.php"  name = "myForm" onsubmit = "return(validate());" method="post">
    <div>
      <div class="inputdata">
        <p>  First Name: 
        <input type="text" name="fname" id="fname" /></p>
        <td class="warningmessage" id="firstname"> </td>
      </div>  
      <div class="inputdata">
        <p> Last Name:</p> <input type="text" name="lname" id="lname" />
        <td class="warningmessage" id="lastname"> </td>
      </div>
        <div class="inputdata">
        <p> Address 1: </p><input type="text" name="Address1" id="Address1" />
        <td class="warningmessage" id="Address1"> </td>
      </div>
      <div class="inputdata">
        <p> Address Line 2: </p><input type="text" name="Address2" id="Address2" />
        <td class="warningmessage" id="Address2"> </td>
      </div>
      <div class="inputdata">
        <p> state: </p><input type="text" name="state" id="state" />
        <td class="warningmessage" id="state"> </td>
      </div>
      <div class="inputdata">
        <p> Zipcode: </p><input type="text" name="zipcode" id="zipcode" />
        <td class="warningmessage" id="zipcode"> </td>
      </div>
      <div class="inputdata">
        <p> Account Type:</p> <select name="account_type" id="account_type">
         <option value="">---Select Account---</option>
         <option value="Savings"> Savings</option>
         <option value="Checking"> Checking</option>
      </select>
      
        <td class="warningmessage" id="Address2"> </td>
      </div>
        <div class="inputdata">
          <p> 
        Security Question: </p> <select name="security_questions" id="security_questions">
        <option value="">---Select Question---</option>
         
         <?php while($row = $result->fetch_assoc()) { ?>
         
        <option value="<?php echo$row['ID'];?>"> <?php echo$row['security_question'];?>

        </option>

        <?php }?> </select>
     
      </div>
        <div class="inputdata">
        <p> Answer:</p> <input type="text" name="answer" id="answer" />
        <td class="warningmessage" id="answer"> </td>
      </div>
      <div class="inputdata">
        <p> Phone:</p><input type="phone" name="phone" id="phone"  />
        <td class="warningmessage" id="phone"> </td>
      </div>
      <div class="inputdata">
        <p> User Name(user email):</p><input type="text" name="username" id="username"  />
        <td class="warningmessage" id="validateusername"> </td>
      </div>
      <div class="inputdata">
        <p> Password:</p><input type="password" name="password" id="password"/>
        <td class="warningmessage" id="validatepassword"> </td>
      </div>
      <div class="inputdata">
        <p> Conform Password:</p><input type="password" name="cpassword" id="cpassword"  />
        <td class="warningmessage" id="validatecpassword"> </td>
      </div>
      <div class="submitdata">
      <p> <input type = "submit" value = "Register" /> &nbsp;&nbsp; <button type="reset" value="Reset">Reset</button>
        </p>
      </div>
    </table>
  </form>

</div>
         </div>
      </div>

   </body>
</html>