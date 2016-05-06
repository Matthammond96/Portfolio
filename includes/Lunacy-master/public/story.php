<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/connect.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php include_once("../includes/templates/header.php"); ?>
<?php //if(isset($_SESSION["user"])){ ?>
<?php include_once("../includes/templates/nav.php"); ?>
<?php if(isset($_POST["submit"])) {
        if ($_POST["user"] == "") {
            $username = "MattHammond.Digital";
        } else {
            $username = ($_POST["user"]);
        }
        $title = ($_POST["title"]);
        $club = ($_POST["club"]);
        $body = ($_POST["body"]);
    } else {
        $username = "";
        $title = "";
        $club = "";
        $body = "";
       
    }

    
?>




<?php 
        
    if(isset($_POST["submit"])) {
        if(empty($title)){
            $message ="Please enter a title";
            echo $message;
        } else if(empty($club)){
            $message ="Please Enter Club Name!";
            echo $message;
        } else if(empty($body)){
            $message="Your story seems to be blank!";
            echo $message;
        }
        
        
            else {
    
    if(isset($_POST["submit"])) {
        
        
        $query = "INSERT INTO post_posts (post_user_username, post_title, post_club, post_body) VALUES ('{$username}', '{$title}', '{$club}', '{$body}' )";
        
        $result = mysqli_query($connection, $query); 
        
        if($result) {
            $message =   "Your story has been posted!"; 
        } else {
            $message = "Sorry, something went wrong"; 
        }
        
        echo $message;
        
    }
            }
    }

?>


<div class="container">
       
    <form class="" action="" method="post">
        <h2 class="form-signin-heading text-center">Submit a Story!</h2>
        <label for="title" class="sr-only">title</label>
        <input type="text"  id="UN" class="form-control" placeholder="Title" name="title" value="" />
        <label for="body" class="sr-only">body</label>
        <textarea  type="text"  id="PW" class="form-control" placeholder="Write your night life story here..." name="body" value=""></textarea>
        <br>
        <input type="text" class="form-control" placeholder="Post Username" name="user" value="" />
        <input type="checkbox" name="club" value="Firestation"> Firestation
        <input type="checkbox" name="club" value="Cameo"> Cameo
        <input type="checkbox" name="club" value="Vinyl"> Vinyl 
        <input type="checkbox" name="club" value="Halo"> Halo
        <br>
        <button  class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="Submit">Submit!</button>
    </form>
    
</div>  
<?php //} else { 
//header('Location: index.php');}?>