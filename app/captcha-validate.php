<?php
/* captcha-validate file */

session_start();

if(strtolower($_POST['answer']) == $_SESSION['captcha']){
	echo "<script>alert('Successful! Thanks for the feedback.');
	window.location.href='contact.php';
	</script>";}
else {
    echo "<script>alert('Incorrect captcha. Please try again.');
	window.location.href='contact.php'
	</script>";
	echo "div.append( '<span id=\"glypcn'+id+'\" class=\"glyphicon glyphicon-remove form-control-feedback\"></span>');\n";
	
}
unset($_SESSION['captcha']);	
?>