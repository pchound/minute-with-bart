<?php
include("header.php");
?>

<p class="post_text">Questions? Concerns? Website Problems? We're here to help.<br>
	Just fill out the form below, and we'll get back to you.</p>

	
    <form method="POST" name="contactform" id="feedback_form" action="contact_forum_handler.php"> 
        <p>
            <label for='name'>Your Name:</label> <br>
            <input type="text" name="name" id="name"><br>
        </p>
        <p>
            <label for='email'>Email Address:</label> <br>
            <input type="text" name="email" id="email"> <br>
        </p>
        <p>
            <label>Message:</label> <br>
            <textarea name="message" id="comment" maxlength="1000" placeholder="1000 character limit"></textarea>
        </p>
            <input type="submit" name="submit" value="Submit" id="button1"><br><br>
    </form>

<script >

    let frmvalidator  = new Validator("contactform");
    frmvalidator.addValidation("name","req","Please provide your name");
    frmvalidator.addValidation("email","req","Please provide your email");
    frmvalidator.addValidation("email","email","Please enter a valid email address");
</script><br><br>
</div>

<?php
include("footer.php");
?>