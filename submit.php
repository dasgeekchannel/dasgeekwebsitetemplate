<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: dasgeekcommunity.com';
    $to = 'dasgeekchannel@gmail.com';
    $subject = 'Community Email';
    $human = $_POST['human'];
			
    $body = "From: $name\n E-Mail: $email\n Message:\n $message";

    if ($_POST['submit'] && $human == '4') {
        if (mail ($to, $subject, $body, $from)) {
	    echo '<p>Your message has been sent!</p>';
  echo $htmlHeader;
  while($stuff){
    echo $stuff;
  }

  echo "<script>window.location = 'http://www.dasgeekcommunity.com/thankyou'</script>";
	}
	
	else {
	    echo '<p>Something went wrong, go back and try again!</p>';
	}
    } else if ($_POST['submit'] && $human != '4') {
	echo '<p>You answered the anti-spam question incorrectly!</p>';
    }

?>

