<?php
include('config.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="<?php echo $design; ?>/style.css" rel="stylesheet" title="Style" />
        <title>Add a book</title>
    </head>
    <script type="text/javascript">
        function fileTypeFile(){
            document.getElementById('linkInput').style.display='none';
            document.getElementById('fileInput').style.display='block';
            document.getElementById('link').required=false;
            document.getElementById('fileToUpload').required=true;
        }
        function fileTypeLink(){
            document.getElementById('linkInput').style.display='block';
            document.getElementById('fileInput').style.display='none';
            document.getElementById('link').required=true;
            document.getElementById('fileToUpload').required=false;
        }
    </script>
    <body>
        <div class="header">
            <a href="<?php echo $url_home; ?>"><img src="<?php echo $design; ?>/images/logo.png" alt="Members Area" /></a>
        </div>
<?php
//We check if the user is logged
if(isset($_SESSION['username']))
{
//We check if the ID of the discussion is defined
if($_SESSION['usertype']=='Mentor' or $_SESSION['usertype']=='Admin')
{
if($_SESSION['verify_user']==1)
{
//We check if the user have the right to read this discussion
?>
<div id="addBookForm" class="content">
    <form method="post" enctype="multipart/form-data">
        <label>Subject:</label><br>
        <input type="radio" name="subject" value="Mathematics" checked>Mathematics
        <input type="radio" name="subject" value="Physics">Physics
        <input type="radio" name="subject" value="Chemistry">Chemistry<br>
        <label>Title</label>
        <input type="text" name="title" id="title" required autofocus /><br>
        <label>Subtopic (optional)</label>
        <input type="text" name="subtopic" id="subtopic"/><br>
        <label>Method of Uploading:</label><br>
        <input type="radio" name="filetype" value="link" onclick="fileTypeLink()" checked>Link
        <input type="radio" name="filetype" value="file" onclick="fileTypeFile()">File<br>
        <div id="linkInput" style="display:block;">
            <label>Link</label>
            <input type="text" name="link" id="link" required autofocus/><br>
        </div>
        <div id="fileInput" style="display:none;">
            <label>Upload File</label>
            <input type="file" name="fileToUpload" id="fileToUpload" autofocus/><br>
        </div>
        <input type="submit" value="Upload Book" name="submit">
    </form>
</div>
<?php
    if(isset($_POST['submit'])){
        $title=$_POST['title'];
        $subtopic=$_POST['subtopic'];
        $subject=$_POST['subject'];
        $filetype=$_POST['filetype'];
        $link='';
        $uploadOk=1;
        if($filetype=='link'){
            $link=$_POST['link'];
        }
        else{
            $target_dir = "uploads/";
            $target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
            $fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            $link=$target_file;
            $error="";
            if (file_exists($target_file)) {
                $error="Sorry, file already exists.";
                $uploadOk = 0;
            }
            else if ($_FILES["fileToUpload"]["size"] > 8000000) {
                $error="Sorry, your file is too large.";
                $uploadOk = 0;
            }
            else if($fileType != "pdf" && $fileType != "doc" && $fileType != "docx") {
                $error="Sorry, only PDF, DOC & DOCX files are allowed.";
                $uploadOk = 0;
            }
            if($uploadOk==1){
                // echo "Trying to upload!\n";
                // if($_FILES['fileToUpload']['error'] === UPLOAD_ERR_OK){
                //     echo "Success!";
                //     move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
                // }
                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                    ;//File successfully uploaded
                }
                else{
                    $error="Sorry, there was an error uploading your file.";
                    $uploadOk=0;
                }
            }
            if($uploadOk==0){
                echo '<div class="message">'.$error.'</div>';
            }
        }
        if($uploadOk==1){
            //We remove slashes depending on the configuration
            if(get_magic_quotes_gpc())
            {
                // $title = stripslashes($title);
                $subtopic = stripslashes($subtopic);
            }
            // We protect the variables
            // $title = mysqli_real_escape_string($connection,nl2br(htmlentities($title, ENT_QUOTES, 'UTF-8')));
            // $subtopic = mysqli_real_escape_string($connection,nl2br(htmlentities($subtopic, ENT_QUOTES, 'UTF-8')));
            $link = mysqli_real_escape_string($connection,nl2br(htmlentities($link, ENT_QUOTES, 'UTF-8')));
            $userid=$_SESSION['user_id'];
            $result=mysqli_fetch_array(mysqli_query($connection,"select username from login where id=$userid"));
            $username=$result['username'];
            if($result=mysqli_query($connection,"insert into books(title,addedbyid,addedbyname,subject,link) values ('".$title."', $userid,'".$username."','".$subject."','".$link."')")){
                echo '<div class="message">The book has been successfully added.</div>';
            }
            else{
                echo '<div class="message">An error occured while adding the book.'.mysql_error($result).'</div>';
            }
        }
    }
}
else
{
    echo '<div class="message">You are not yet verified.</div>';
}
}
else
{
    echo '<div class="message">You do not have the rights to access this page.</div>';
}
}
else
{
    echo '<div class="message">You must be logged to access this page.</div>';
}
?>
        <div class="foot"><a href="index.php">Home</a></div>
    </body>
</html>