<?php
include('config.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="<?php echo $design; ?>/style.css" rel="stylesheet" title="Style" />
	<title>Read a PM</title>
</head>
<script type="text/javascript" src="js/io.socket.js"></script><script type="text/javascript" src="js/main.js"></script>
<body>
	<div class="header">
		<a href="<?php echo $url_home; ?>"><img src="<?php echo $design; ?>/images/logo.png" alt="Members Area" /></a>
	</div>
	<?php
//We check if the user is logged
	if(isset($_SESSION['username']))
	{
//We check if the ID of the discussion is defined
		if(isset($_GET['id']))
		{
			$id = intval($_GET['id']);
//We get the title and the narators of the discussion
			$req1 = mysqli_query($connection,"select title, sender, receiver from pm where id=$id and id2=1");
			$dn1 = mysqli_fetch_array($req1);
//We check if the discussion exists
			if(mysqli_num_rows($req1)==1)
			{
//We check if the user have the right to read this discussion
				if($dn1['sender']==$_SESSION['user_id'] or $dn1['receiver']==$_SESSION['user_id'])
				{
//The discussion will be placed in read messages
					$title=$dn1['title'];
					$sender=0;
					$receiver=0;
					if($dn1['receiver']==$_SESSION['user_id']){
						$receiver=(int)$dn1['sender'];
						$sender=(int)$dn1['receiver'];
					}
					else{
						$receiver=(int)$dn1['receiver'];
						$sender=(int)$dn1['sender'];
					}
//We get the list of the messages
					$req2 = mysqli_query($connection,"update pm set seen='yes' where pm.id=$id and receiver=".$_SESSION['user_id']);
					$req2 = mysqli_query($connection,"select id,id2,timestamp, message, sender as user_id, (select username from login where id=sender) as username from pm where pm.id=$id order by pm.id2");
//We check if the form has been sent
					if(isset($_POST['message']) and $_POST['message']!='')
					{
						$message = $_POST['message'];
	//We remove slashes depending on the configuration
						if(get_magic_quotes_gpc())
						{
							$message = stripslashes($message);
						}
	//We protect the variables
						$message = mysqli_real_escape_string($connection,nl2br(htmlentities($message, ENT_QUOTES, 'UTF-8')));
	//We send the message and we change the status of the discussion to unread for the recipient
						$id2=intval(mysqli_num_rows($req2))+1;
						if(mysqli_query($connection,"insert into pm (id, id2, title, sender, receiver, message, timestamp) values($id, $id2,'".$title."', $sender,$receiver, '".$message."','".time()."')"))
						{
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
			                        	if(mysqli_query($connection,"insert into pm_files values($id,$id2,'".$link."')")){
												$uploadOk=1;//Successfully queried;
											}
											else{
												$uploadOk=0;
												$error="Error occurred while trying to insert data.";
											}
										}
										else{
											$error="Error occurred while trying to upload file.";
										}
									}
								}
								if($uploadOk==1){
									?>
									<div class="message">Your message has successfully been sent.<br />
									<a href="read_pm.php?id=<?php echo $id; ?>">Go to the discussion</a></div>
										<?php
									}
									else{
										?>
										<div class="message"><?php echo $error;?><br />
										<a href="read_pm.php?id=<?php echo $id; ?>">Go to the discussion</a></div>
										<?php
									}

									}
									else
									{
										?>
										<div class="message">An error occurred while sending the message.<br />
										<a href="read_pm.php?id=<?php echo $id; ?>">Go to the discussion</a></div>
											<?php
										}
									}
									else
									{
//We display the messages
										?>
										<div class="content">
											<h1><?php echo $title; ?></h1>
											<table class="messages_table">
												<tr>
													<th class="author">User</th>
													<th>Message</th>
												</tr>
												<?php
												while($dn2 = mysqli_fetch_array($req2))
												{
													?>
													<tr>
														<td class="author center"><br /><a href="newhome.php?id=<?php echo $dn2['user_id']; ?>"><?php echo $dn2['username']; ?></a></td>
														<td class="left"><div class="date">Sent: <?php echo date('m/d/Y H:i:s' ,$dn2['timestamp']); ?></div>
															<?php echo $dn2['message'];
															$find_file="select * from pm_files where id=".$dn2['id']." and id2=".$dn2['id2'];
															if($files_result=mysqli_query($connection,$find_file)){
																$attachedFile=mysqli_fetch_array($files_result);
																if(!empty($attachedFile['link'])){
																	?>
																	<a href="<?php echo $attachedFile['link'];?>" style="color:blue;">Attached File</a>
																	<?php
																}
															}
															?>
														</td>
													</tr>
													<?php
												}
											//We display the reply form
												?>
											</table><br />
											<h2>Reply</h2>
											<div class="center">
												<form action="read_pm.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
													<label for="message" class="center">Message</label><br />
													<textarea cols="40" rows="5" name="message" id="message"></textarea><br />
													<br/>
													<label for="fileUpload">Upload File (optional)</label>
													<input type="file" name="fileUpload" id="fileUpload" /><br/>
													<input type="submit" value="Send" />
												</form>
											</div>
										</div>
										<?php
									}
								}
								else
								{
									echo '<div class="message">You dont have the rights to access this page.</div>';
								}
							}
							else
							{
								echo '<div class="message">This discussion does not exists.</div>';
							}
						}
						else
						{
							echo '<div class="message">The discussion ID is not defined.</div>';
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