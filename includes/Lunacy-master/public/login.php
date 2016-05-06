<?php require_once("../includes/session.php"); ?>
<?php  require_once("../includes/connect.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php include_once("../includes/templates/header.php"); ?>



<?php if(isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = "SELECT * FROM user WHERE user_username='{$username}' AND user_password='{$password}' LIMIT 1";

    $result = mysqli_query($connection, $query);

    if($user = mysqli_fetch_assoc($result)) {
        //user is logged in
        $_SESSION["user"] = $user["user_username"];
        $_SESSION["password"] = $user["user_password"];
        $_SESSION["ID"] = $user["user_studentID"];
        $_SESSION["level"] = $user["user_level"];

    } else {
        // wrong log in
        $_SESSION["message"] = "Wrong username or password";
    }
    header('Location: index.php');

}
?>










