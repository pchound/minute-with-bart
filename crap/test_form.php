
<html>
<body>
 <form method="post" action="form_handler4.php">
   <h2>Contact us</h2>
   <?php echo((!empty($errorMessage)) ? $errorMessage : '') ?>
   <p>
     <label>First Name:</label>
     <input name="name" type="text"/>
   </p>
   <p>
     <label>Email Address:</label>
     <input style="cursor: pointer;" name="email" type="text"/>
   </p>

   <!--<p>
     <label>Subject:</label>
     <input style="cursor: pointer;" name="subject" type="text"/>
   </p>-->
   <p>
     <label>Message:</label>
     <textarea name="message"></textarea>
   </p>
   <p>

   <button type="submit" name="submit">Submit</button>
     <!--<input type="submit" value="submit">-->

     <!--<input type="submit" name="submit" value="Submit" id="button1">-->
   </p>
 </form>

</div>
</body>
</html>