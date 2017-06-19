
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>HTML5 Form</title>
<link rel="stylesheet" href="css/style.css">

</head>

<body>
<?php
// prints something like: Wednesday the 15th
echo "<h1>Happy".date('l')." ".$_POST['name']."</h1>";

function check()
{
	if($_POST['terms']=='true')
	{
		
	}
}
?>
<div id="contact-form">    

<form id="contact" method="post" action="">
<fieldset>    

<label for="name">Name</label>
<input type="text" name="name">

<label for="email">E-mail</label>
<input type="email" name="email">


<label for="dob">DOB</label>
<input type="date" name="dob">

<label for="phone">Phone</label>
<input type="text" name="phone">

<label for="website">Website</label>
<input type="url" name="url">

<label for="message">Question/Comment</label>
<textarea name="message"></textarea>

<input type="checkbox" name="terms" value="yes"> I agree to Terms and Conditions.

<input type="submit" name="submit" id="submit" value="Send Message" />

</fieldset>
</form>

</div><!-- /end #contact-form -->

</body>
</html>