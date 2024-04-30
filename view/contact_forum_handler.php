<?php 
$errors = '';
$myemail = 'joedude1994@gmail.com';//<-----Put Your email address here.
if(empty($_POST['name'])  || 
   empty($_POST['email']) || 
   empty($_POST['message']))
{
    //$errors .= "\n - All fields are required" . '<br>';
	//$errors .= "\n Error: all fields are required";
	$errors .= "\n - All fields are required";
}

$name = $_POST['name']; 
$email_address = $_POST['email']; 
$message = $_POST['message']; 

if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
$email_address))
{
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
	<?php
		
		//Define the page title
		define('TITLE', 'Furever Oasis - Contact');
		
		//Database Connection
		include('../library/connections.php');
	?>
	
				
			<div id="post">
				<!-- This page is displayed only if there is some error -->
				
					<div id="error">
						<span id="error_text">
							<h2 id="h2_error">Oops!</h2>
								<?php
								echo nl2br($errors);
								?>
						</span>
					</div>
			</div>

	<?php
		//Footer
		include('footer.php');
	?>