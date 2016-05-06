<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/connect.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php include_once("../includes/templates/header.php"); ?>
<?php if(isset($_SESSION["user"])){ ?>
<?php include_once("../includes/templates/nav.php"); ?>

<?php include_once("../includes/templates/footer.php"); ?>
<?php } else { 
header('Location: index.php');}?>