<?php 
$errors = '';
$name = $_POST['name']; 
$email_address = $_POST['email']; 
$message = $_POST['message']; 

$myemail = 'joedude1994@gmail.com';//<-----Put Your email address here.
if(empty($_POST['name'])  || 
   empty($_POST['email']) || 
   empty($_POST['message']))
{
    //$errors .= "\n - All fields are required" . '<br>';
	//$errors .= "\n Error: all fields are required";
	$errors .= "\n - All fields are required";
}



if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
$email_address))
{
    //$errors .= "\n - Invalid email address" . '<br>' . "(Remove any spaces at the end)" . "<br><br>";
	$errors .= "\n - Invalid email address (Check for a spaces at the end)";
}

if(empty($errors))
{
	$to = $myemail; 
	$email_subject = "Contact form submission: $name";
	$email_body = "\n Name: $name \n Email: $email_address \n Message: \n $message"; 
	
	$headers = "From: $email_address\n"; 
	$headers .= "Reply-To: $email_address";
	
	mail($to,$email_subject,$email_body,$headers);
	//redirect to the 'thank you' page
	header('Location: thank_you.php');
} 
?>


<html>
<body>
 <form method="post" id="contact-form">
   <h2>Contact us</h2>
   <?php echo((!empty($errorMessage)) ? $errorMessage : '') ?>
   <p>
     <label>First Name:</label>
     <input name="name" type="text" required/>
   </p>
   <p>
     <label>Email Address:</label>
     <input style="cursor: pointer;" name="email" type="email" required/>
   </p>

   <!--<p>
     <label>Subject:</label>
     <input style="cursor: pointer;" name="subject" type="text"/>
   </p>-->
   <p>
     <label>Message:</label>
     <textarea name="message" required></textarea>
   </p>
   <p>

   <!--<button type="submit" name="submit">Submit</button>-->
     <input type="submit" value="submit">

     <!--<input type="submit" name="submit" value="Submit" id="button1">-->
   </p>
 </form>

</div>
</body>
</html>