<?php
if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $mailFrom = $_POST['mail'];
  $message = $_POST['message'];

  $mailTo = "info@webdc.cf";
  $headers = "From : ".$mailFrom;
  $txt ="You Have An Email From ".$name.".\n\n".$message;

  mail($mailTo, $subject, $txt, $headers);
  header("Location : contact.php?mailsend");
}
else{
	echo "Failed To Send";
}
?>