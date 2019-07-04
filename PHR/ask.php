
<?php

#error handling
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );

#get data from the forms
$name = $_POST["name"];
$bdate = $_POST["bdate"];
$phone1 = $_POST["phone1"];
$phone2 = $_POST["phone2"];
$email = $_POST["email"];
$position1 = $_POST["position1"];
$position2 = $_POST["position2"];
$message = $_POST["message"];
//read the atachment file contents into a string,
//encode it with MIME base64,
//and split it into smaller chunks
#$attachment = chunk_split(base64_encode(file_get_contents('attachment.zip')));
#ob_start();//Turn on output buffering


#mail parts
$random_hash = md5(date('r', time()));
$subject = "Inquiry";
$applicant = $_POST["email"];
$recruiter = "apply.phr@gmail.com";
$headerApplicant = "From:" . $applicant;
$headerRecruiter = "From:" . $recruiter;
$submission = 
				"Name: " . $name . "\r\n" .
				"Birthday: " . $bdate . "\r\n" .
				"Phone Number 1: " . $phone1 . "\r\n" .
				"Phone Number 2: " . $phone2 . "\r\n" .
				"Email Address: " . $email . "\r\n" .
				"Position 1: " . $position1 . "\r\n" .
				"Position 2: " . $position2 . "\r\n" .
				"His/Her Message: " . $message . "\r\n";
				#ob_get_clean();


$feedback = "Your Inquiry has been sent";

#mail to company
mail($recruiter,$subject,$submission,$headerApplicant);

#mail to appliant
mail($applicant,$subject,$feedback,$headerRecruiter);




#original
#   ini_set( 'display_errors', 1 );
#   error_reporting( E_ALL );
#   $from = "apply.phr@gmail.com";
#   $to = "phr.jamesangelo@gmail.com";
#   $subject = "Checking PHP mail";
#   $message = "PHP mail works just fine";
#   $headers = "From:" . $from;
#   mail($to,$subject,$message, $headers);
#  echo "The email message was sent.";

# $_POST[name] gets the value from html
# $variable to store variable, automatic datatype
# mail(to, subject, message, from);
?>

