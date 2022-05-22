<?php

 session_start();
 if (isset($_SESSION['userlogin'])) {
   $user_name= $_SESSION['userlogin'];
  require_once 'db_connect.php';
  $userdetails = "SELECT * FROM `account_holders` WHERE `email` ='$user_name'";
	$userid = $connect->query($userdetails);
  $userdata = $userid->fetch_assoc();
  $id=$userdata['holder_id'];
  $account_number = "SELECT * FROM `holders_detail` WHERE `holder_id` = $id";
	$accresult = $connect->query($account_number);
	$data = $accresult->fetch_assoc();
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
      .fixed-header ,.fixed-footer {
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
    .register{
  padding: 20px;
    width: 600px;
    height:90%;
    margin: 100px 20px 20px 20px ;
    border: 1px solid #000;
  }
  .register h4{
    text-align: center;
  }
.inputdata p , .inputdataselect p{
  text-align: justify;
    display: inline;
    min-width: 400px;
}
.inputdata , .inputdataselect{
  padding: 10px 20px 10px 20px;
}
.registersec{
   height : 100%;
}
.registerdetails{
  text-align:center;
  min-height: 90%;
  margin:20px;
      margin: auto;
    width: 55%;
}
    </style>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
      <title>Login Page</title>
           <script type = "text/javascript">
   <!--
      // Form validation code will come here.
      function validate() {
     var beneficiaryacc = document.getElementById("beneficiaryacc").value;
     if( beneficiaryacc === undefined || beneficiaryacc =="" ) {
            alert("Please Enter your beneficiary account number!");
            document.myForm.beneficiaryacc.focus() ;
            return false;
         }
    /* var c_beneficiaryacc = document.getElementById("c_beneficiaryacc").value;
     if( c_beneficiaryacc === undefined || c_beneficiaryacc =="" ) {
      alert("Please provide conform beneficiary account number!");
            document.myForm.c_beneficiaryacc.focus() ;
            return false;
         }
     else if (beneficiaryacc != c_beneficiaryacc) { 
            alert("beneficiary  and  conform beneficiary account number doesnt match ");
            document.myForm.c_beneficiaryacc.focus() ;
            return false;
         }*/
     var balance = document.getElementById("balance").value;
          if( balance == "" ) {
            alert("Please provide  valid Transfer Amount!");
            document.myForm.amount.focus() ;
            return false;
         } 
         var amount = document.getElementById("amount").value;
          if( amount == "" ) {
            alert("Please provide Transfer amount");
            document.myForm.amount.focus() ;
            return false;
         }
     
     
         return( true );
      }

      function val() {
    var amount = document.getElementById("amount").value;
    var currentbalance = document.getElementById("currentbalance").value;
    var balance = currentbalance - amount;      
    if(balance>=0 ) {
            
           alert("Your Remaing Balace Is:"+balance);
            var elem = document.getElementById('balance');
            var old  = elem.value;
            elem.value =balance;         
           return( true );
    }
    else{
           alert("You can transfer upto:"+currentbalance);
            document.myForm.amount.focus() ;
            return false;
    }
}
   //-->
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
     $(".inputdata").hide();
    $('#account_type').on('change', function() {
      if ( this.value == 'Savings')
      //.....................^.......
      {
        $(".inputdata").show();
      }
      else
      {
          $(".inputdata").hide();
      }
    });
});
</script>
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
    <div class="registersec">
      <div class="registerdetails">
             <div class="register">
  <h4>Account to Account Tranfer </h4>
 <form action="account_transfer_action.php"  name = "myForm" onsubmit = "return(validate());" method="post">
      <div class="inputdataselect" >
				<p>Account Type: <select name="account_type" id="account_type">
				 <option value="">---Select Account---</option>
				 <option value="Savings"> Savings</option>
				 <option value="Checking"> Checking</option>
			</select>
			</p>
			</div>
       <div class="inputdata">
        <p>Account Number: <?php echo $data['account_number']; ?>
        <input type="hidden" name="account_number" id="account_number" value="<?php echo $data['account_number']; ?>" readonly /></p>
      </div>  
       <div class="inputdata">
        <p> Account Type: <?php echo $data['account_type']; ?>
        <input type="hidden" name="account_type" id="account_type" value="<?php echo $data['account_type']; ?>" readonly /></p>
      </div>  

      <div class="inputdata">
        <p> Current Balance: $<?php echo $data['current_balance']; ?>
        <input type="hidden" name="currentbalance" id="currentbalance" value="<?php echo $data['current_balance']; ?>" readonly /></p>
        <input type="hidden" name="detailsid" id="detailsid" value="<?php echo $data['detail_id']; ?>" />
      </div>  
      <div class="inputdata">
        <p> Beneficiary Account Number:</p> <input type="text" name="beneficiaryacc" id="beneficiaryacc" />
        <td class="warningmessage" id="lastname"> </td>
      </div>
       <!--<div class="inputdata">
        <p> Conform Beneficiary Account:</p> <input type="text" name="c_beneficiaryacc" id="c_beneficiaryacc" />
        <td class="warningmessage" id="lastname"> </td>
      </div>-->
       <!-- <div class="inputdata">
        <p> IFSC Code </p><input type="text" name="ifsccode" id="ifsccode" />
        <td class="warningmessage" id="ifsccode"> </td>
      </div>-->
      <div class="inputdata">
        <p> Amount :</p><input type="text" name="amount" id="amount"  onchange="val()" />
        <td class="warningmessage" id="amount"> </td>
      </div>
      <div class="inputdata">
        <p> Balance: </p><input type="text" name="balance" id="balance" readonly />
        <td class="warningmessage" id="state"> </td>
      </div>
      <div class="inputdata">
      <p> <input type = "submit" value = "Transfer" /> &nbsp;&nbsp; <button type="reset" value="Reset">Reset</button>
        </p>
      </div>
    </table>
  </form>
 
</div>
</div>
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
