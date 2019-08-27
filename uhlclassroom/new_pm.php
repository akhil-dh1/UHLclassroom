<?php
include('config.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="<?php echo $design; ?>/style.css" rel="stylesheet" title="Style" />
	<title>New PM</title>
</head>
<!--  <script type="text/javascript" src="js/io.socket.js"></script><script type="text/javascript" src="js/main.js"></script> -->
<body>
	<div class="header">
		<a href="<?php echo $url_home; ?>"><img src="<?php echo $design; ?>/images/logo.png" alt="Members Area" /></a>
	</div>
	<?php
//We check if the user is logged
	if(isset($_SESSION['username']))
	{
		$form = true;
		$otitle = '';
		$orecip = $_GET['receiver'];
		$omessage = '';
//We check if the form has been sent
		if(isset($_POST['title'], $_POST['recip'], $_POST['message']))
		{
			$otitle = $_POST['title'];
			$orecip = $_POST['recip'];
			$omessage = $_POST['message'];
	//We remove slashes depending on the configuration
			if(get_magic_quotes_gpc())
			{
				$otitle = stripslashes($otitle);
				$orecip = stripslashes($orecip);
				$omessage = stripslashes($omessage);
			}
	//We check if all the fields are filled
			if($_POST['title']!='' and $_POST['recip']!='' and $_POST['message']!=''){
				$link='';
				$fileAttached=0;
				$uploadOk=1;
				if(!empty($_FILES['fileUpload']['name'])){
					$target_dir = "pm_attachments/";
					$target_file = $target_dir.basename($_FILES["fileUpload"]["name"]);
					$fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
					$link=$target_file;
					$error="";
					$fileAttached=1;
					if (file_exists($target_file)) {
						$error="Sorry, file already exists. Please rename the file.";
						$uploadOk = 0;
					}
					else if ($_FILES["fileUpload"]["size"] > 8000000) {
						$error="Sorry, your file is too large.";
						$uploadOk = 0;
					}
					else if($fileType != "pdf" && $fileType != "doc" && $fileType != "docx" && $fileType!="jpeg" && $fileType!="jpg" and $fileType!="png" && $fileType!="bmp") {
						$error="Sorry, only document files, and images are allowed.";
						$uploadOk = 0;
					}
					if($uploadOk==1){
						if (move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_file)) {
                        	;//File successfully uploaded
                        }
                        else{
                        	$error="Sorry, there was an error uploading your file.";
                        	$uploadOk=0;
                        }
                    }
                }
                if($uploadOk==1){
		//We protect the variables
                	$title = mysqli_real_escape_string($connection,$otitle);
                	$recip = mysqli_real_escape_string($connection,$orecip);
                	$message = mysqli_real_escape_string($connection,nl2br(htmlentities($omessage, ENT_QUOTES, 'UTF-8')));
		//We check if the recipient exists
                	$dn1 = mysqli_fetch_array(mysqli_query($connection,"select id from pm order by id desc limit 1"));
                	$newid=(int)$dn1['id'];
                	$newid=$newid+1;
                	$recipIdArray = mysqli_fetch_array(mysqli_query($connection,"select id from login where username='".$recip."'"));
                	if($recipIdArray)
                	{
                		$recipid=$recipIdArray['id'];
			//We check if the recipient is not the actual user
                		if($recipid!=$_SESSION['user_id'])
                		{
				//We send the message
                			$user=(int)$_SESSION['user_id'];
                			$sql="insert into pm (id, id2, title, sender, receiver, message, timestamp) values ($newid,1, '".$title."', $user, $recipid, '".$message."', '".time()."')";
                			if(mysqli_query($connection,$sql))
                			{
                				if($fileAttached==1){
                					$sql="insert into pm_files (id, id2, link) values ($newid,1, '".$link."')";
                					if(mysqli_query($connection,$sql)){
                						$uploadOk=1;
            						}
            						else{
            							$uploadOk=0;
            							$error = 'An error occurred while sending the message';
            						}
            					}
            					if($uploadOk==1){
	        						?>
	        						<div class="message">The message has been successfully been sent.<br />
	        						<a href="list_pm.php">List of my personnal messages</a></div>
	        						<?php
	        						$form = false;
	        					}
            				}
            				else
            				{
			//Otherwise, we say that an error occured
            					$error = 'An error occurred while sending the message';
            				}
            			}
            			else
            			{
			//Otherwise, we say the user cannot send a message to himself
            				$error = 'You cannot send a message to yourself.';
            			}
            		}
            		else
            		{
		//Otherwise, we say the recipient does not exists
            			$error = 'The recipient does not exists.';
            		}
            	}
            	else{
            		$error= 'There was some error in uploading the file!';
            	}
            }
            else
            {
	//Otherwise, we say a field is empty
            	$error = 'A field is empty. Please fill all of the * marked fields.';
            }
        }
        elseif(isset($_GET['recip']))
        {
//We get the username for the recipient if available
        	$orecip = $_GET['recip'];
        }
            if($form)
            {
//We display a message if necessary
            	if(isset($error))
            	{
            		echo '<div class="message">'.$error.'</div>';
            	}
//We display the form
            	?>
            	<div class="content">
            		<h1>New Personnal Message</h1>
            		<form action="new_pm.php" method="post" enctype="multipart/form-data">
            			Please fill the following form to send a personnal message.<br />
            			<label for="title">*Title</label><input type="text" value="<?php echo htmlentities($otitle, ENT_QUOTES, 'UTF-8'); ?>" id="title" name="title" /><br />
            			<label for="recip">*Recipient<span class="small">(Username)</span></label><input type="text" value="<?php echo htmlentities($orecip, ENT_QUOTES, 'UTF-8'); ?>" id="recip" name="recip" /><br />
            			<label for="message">*Message</label><textarea cols="40" rows="5" id="message" name="message"><?php echo htmlentities($omessage, ENT_QUOTES, 'UTF-8'); ?></textarea><br />
            			<label for="fileUpload">Upload File (optional)</label>
            			<input type="file" name="fileUpload" id="fileUpload" /><br/>
            			<input type="submit" value="Send" />
            		</form>
            	</div>
            	<?php
            }
        }
        else
        {
        	echo '<div class="message">You must be logged to access this page.</div>';
        }
        ?>
        <div class="foot"><a href="list_pm.php">Go to my personnal messages</a> - <a href="index.php">Home</a></div>
    </body>
    </html>
