<?php


//Taking all values
/*$fname 		= $_POST['fname'];
$email 		= $_POST['email'];
$subject 	= $_POST['subject'];
$msg 		= $_POST['msg'];
$output 	= "Name: ".$fname."\n\nSubject: ".$subject."\n\nMessage: ".$msg;

$to 		= 'jsoftbd87@gmail.com';
$headers	= 'FROM: "'.$email.'"';

$send = mail($to, $fname, $output."\n\n***This message has been sent from Martxa", $headers);*/

if(isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	$errorEmpty = false;
	$errorEmail = false;

	if(empty($name) || empty($email) || empty($subject) || empty($message)) {
		echo "<div class='alert'>
                <span class='closebtn' onclick='this.parentElement.style.display='none';'>&times;</span>
                    fill in all fields!
              </div>";
        $errorEmpty = true;      
	}
	elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		echo "<div class='alert'>
                <span class='closebtn' onclick='this.parentElement.style.display='none';'>&times;</span>
                    Write a valid e-mail address!
              </div>";
         $errorEmail = true;  
	}
	else {
		$mailTo = "info@vinsighte.com.ng";
		$headers = "From: ".$email;
		$txt = "You have receieved an e-mail from ".$name.".\n\n".$message;

		mail($mailTo, $subject, $txt, $headers);
		//header("Location: index.php?mailsend");
		echo "<div class='alert-successful'>
                <span class='closebtn' onclick='this.parentElement.style.display='none';'>&times;</span>
                    Success!
              </div>";

		 //echo "<script>alert('Your message has been sent!')</script>";
		 //echo "<script>window.open('contact.php','_self')</script>";
		 
	}

	

///////////////////////////////////
	// $mailTo = "info@vinsighte.com.ng";
	// $headers = "From: ".$mailFrom;
	// $txt = "You have receieved an e-mail from ".$name.".\n\n".$message;

	// mail($mailTo, $subject, $txt, $headers);
	// header("Location: index.php?mailsend");

	 // echo "<script>alert('Your message has been sent!')</script>";
	// echo "<script>window.open('contact.php','_self')</script>";
		 
}
else {
	echo "<div class='alert'>
                <span class='closebtn' onclick='this.parentElement.style.display='none';'>&times;</span>
                    There was an error!
              </div>";
}



?>


<script>
	$("#mail-name, #mail-email, #mail-subject, #mail-message").removeClass("input-error");

	//Mail Validation
	var errorEmpty = "<?php echo $errorEmpty; ?>";
	var errorEmail = "<?php echo $errorEmail; ?>";

	if(errorEmpty == true) {
		$("#mail-name, #mail-email, #mail-subject, #mail-message").addClass("input-error");
	}
	if (errorEmail == true) {
		$("#mail-email").addClass("input-error");
	}
	if(errorEmpty == false && errorEmail == false) {
		$("#mail-name, #mail-email, #mail-subject, #mail-message").val("");
	}


    // Get all elements with class="closebtn"
    var close = document.getElementsByClassName("closebtn");
    var i;

    // Loop through all close buttons
    for (i = 0; i < close.length; i++) {
        // When someone clicks on a close button
        close[i].onclick = function(){

            // Get the parent of <span class="closebtn"> (<div class="alert">)
            var div = this.parentElement;

            // Set the opacity of div to 0 (transparent)
            div.style.opacity = "0";

            // Hide the div after 600ms (the same amount of milliseconds it takes to fade out)
            setTimeout(function(){ div.style.display = "none"; }, 600);
        }
    }
</script>