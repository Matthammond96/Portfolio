<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/connect.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php include_once("../includes/templates/header.php"); ?>
<?php if(isset($_SESSION["user"])){ ?>
<?php include_once("../includes/templates/nav.php"); ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
            <h1><?php echo $_SESSION["user"];?>'s Profile</h1>
            
            </div>
            
            <div class="row">
                <div class="col-md-2">
                    <p>Student ID: <?php echo $_SESSION["ID"];?></p>
<p>Level of Study: <?php echo $_SESSION["level"];?></p>
                    
                </div>
            </div>
        
        </div>

    

        </div>
<?php include_once("../includes/templates/footer.php"); ?>
<?php } else { 
header('Location: index.php');}?>