<!DOCTYPE html>
<html>
<head>
	<title>Register Page</title>
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

<body>

<fieldset>
	<legend>User Registration Page</legend>
 
	<form action="registerAction.php"  name = "myForm" onsubmit = "return(validate());" method="post">
		<div>
			<div>
				<p> First Name: 
				<input type="text" name="fname" id="fname" /></p>
				<td class="warningmessage" id="firstname"> </td>
			</div>	
			<div>
				<p>Last Name: <input type="text" name="lname" id="lname" /></p>
				<td class="warningmessage" id="lastname"> </td>
			</div>
				<div>
				<p>Address 1: <input type="text" name="Address1" id="Address1" /></p>
				<td class="warningmessage" id="Address1"> </td>
			</div>
			<div>
				<p>Address Line 2: <input type="text" name="Address2" id="Address2" /></p>
				<td class="warningmessage" id="Address2"> </td>
			</div>
			<div>
				<p>state: <input type="text" name="state" id="state" /></p>
				<td class="warningmessage" id="state"> </td>
			</div>
			<div>
				<p>Zipcode: <input type="text" name="zipcode" id="zipcode" /></p>
				<td class="warningmessage" id="zipcode"> </td>
			</div>
			<div>
				<p>Account Type: <select name="account_type" id="account_type">
				 <option value="">---Select Account---</option>
				 <option value="Savings"> Savings</option>
				 <option value="Checking"> Checking</option>
			</select>
			</p>
				<td class="warningmessage" id="Address2"> </td>
			</div>
				<div>
					<p>
				Security Question:  <select name="security_questions" id="security_questions">
				<option value="">---Select Question---</option>
				 
				 <?php while($row = $result->fetch_assoc()) { ?>
				 
				<option value="<?php echo$row['ID'];?>"> <?php echo$row['security_question'];?>

				</option>

				<?php }?> </select>
			</p>
			</div>
				<div>
				<p>Answer: <input type="text" name="answer" id="answer" /></p>
				<td class="warningmessage" id="answer"> </td>
			</div>
			<div>
				<p>Phone:<input type="phone" name="phone" id="phone"  /></p>
				<td class="warningmessage" id="phone"> </td>
			</div>
			<div>
				<p>User Name(user email):<input type="text" name="username" id="username"  /></p>
				<td class="warningmessage" id="validateusername"> </td>
			</div>
			<div>
				<p>Password:<input type="password" name="password" id="password"/></p>
				<td class="warningmessage" id="validatepassword"> </td>
			</div>
			<div>
				<p>Conform Password:<input type="password" name="cpassword" id="cpassword"  /><p>
				<td class="warningmessage" id="validatecpassword"> </td>
			</div>
			<div>
			<p><input type = "submit" value = "Register" /> &nbsp;&nbsp; <button type="reset" value="Reset">Reset</button>
				</p>
			</div>
		</table>
	</form>

</fieldset>

</body>
</html>