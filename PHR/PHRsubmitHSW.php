
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
$subject = "Application";
$applicant = $_POST["email"];
$recruiter = "phr.hsw@gmail.com";
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


$feedback = "Your Application has been sent";

#mail to company
function apply()
	{
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



		#mail parts
		$subject = "Application";
		$applicant = $_POST["email"];
		$recruiter = "phr.hsw@gmail.com";
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

		mail($recruiter,$subject,$submission,$headerApplicant);
	}

function notify()
	{
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



		#mail parts
		$subject = "Application";
		$applicant = $_POST["email"];
		$recruiter = "phr.hsw@gmail.com";
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


		$feedback = "Your Application has been sent";
		#mail to appliant
		mail($applicant,$subject,$feedback,$headerRecruiter);
	}

function upload()
{
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $uploadOk = 1;

//        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
//        if($check !== false) 
//           {
//                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
//            } 
//        else 
//            {
//                echo "File is not an image.";
//                $uploadOk = 0;
//            }
    

// Check if file already exists
//if (file_exists($target_file)) 
//    {
//        echo "Sorry, file already exists.";
//        $uploadOk = 0;
//    }

// Check file size
//if ($_FILES["fileToUpload"]["size"] > 500000) 
//    {
//        echo "Sorry, your file is too large.";
//        $uploadOk = 0;
//    }

// Allow certain file formats
//if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
//&& $imageFileType != "gif" ) 
//    {
//        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//        $uploadOk = 0;
//    }

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) 
    {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file

    } 
else 
    {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
            {
                echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
            } 
        else 
            {
                echo "Sorry, there was an error uploading your file.";
            }
    }
}

function getImageFilename()
    {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $file = strval( $target_file);
        $uploadOk = 1;  

        echo $file;
    }

function deleteFile()
    {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $file = strval( $target_file);
        $uploadOk = 1;  

        unlink($file);
    }

function sendMail()
    {
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


		#mail parts
		$subject = "Application";
		$applicant = $_POST["email"];
		$recruiter = "phr.hsw@gmail.com";
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


		$feedback = "Your Application has been sent";


        $to = $recruiter;
        $from = $applicant;
        $fromName = $headerRecruiter;

        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $file = strval( $target_file);
        $uploadOk = 1;  

        $headers = "From: $fromName"." <".$from.">";
        $semi_rand = md5(time()); 
        $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 
        $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 
        $message1 = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .
                    "Content-Transfer-Encoding: 7bit\n\n" . "\n\n" . 
                    "Name: " . $name . "<br>" .
					"Birthday: " . $bdate . "<br>" .
					"Phone Number 1: " . $phone1 . "<br>" .
					"Phone Number 2: " . $phone2 . "<br>" .
					"Email Address: " . $email . "<br>" .
					"Position 1: " . $position1 . "<br>" .
					"Position 2: " . $position2 . "<br>" .
					"His/Her Message: " . $message . "\r\n"; 

        if(!empty($file) > 0)
            {
                if(is_file($file))
                    {
                        $message1 .= "--{$mime_boundary}\n";
                        $fp =    @fopen($file,"rb");
                        $data =  @fread($fp,filesize($file));

                        @fclose($fp);
                        $data = chunk_split(base64_encode($data));
                        $message1 .= "Content-Type: application/octet-stream; name=\"".basename($file)."\"\n" . 
                        "Content-Description: ".basename($file)."\n" .
                        "Content-Disposition: attachment;\n" . " filename=\"".basename($file)."\"; size=".filesize($file).";\n" . 
                        "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
                     }
            }


        $message1 .= "--{$mime_boundary}--";
        $returnpath = "-f" . $from;


        $mail = @mail($to, $subject, $message1, $headers, $returnpath);
        echo $mail?"<h1>Mail sent.</h1>":"<h1>Mail sending failed.</h1>";

    }


upload();
sendMail();
//apply();
notify();
deleteFile();
?>
<script type="text/javascript">
window.location = "http://www.cogenthc.com/PHRindex.html";
</script>      
<?php


#original
#   ini_set( 'display_errors', 1 );
#   error_reporting( E_ALL );
#   $from = "phr.hsw@gmail.com";
#   $to = "phr.hsw@gmail.com";
#   $subject = "Checking PHP mail";
#   $message = "PHP mail works just fine";
#   $headers = "From:" . $from;
#   mail($to,$subject,$message, $headers);
#  echo "The email message was sent.";

# $_POST[name] gets the value from html
# $variable to store variable, automatic datatype
# mail(to, subject, message, from);
?>

