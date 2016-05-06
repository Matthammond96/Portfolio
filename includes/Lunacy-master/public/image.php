<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/connect.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php include_once("../includes/templates/header.php"); ?>
<?php if(isset($_SESSION["user"])){ ?>
<?php include_once("../includes/templates/nav.php"); ?>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

<?php include_once("../includes/templates/footer.php"); ?>
<?php } else { 
header('Location: index.php');}?>