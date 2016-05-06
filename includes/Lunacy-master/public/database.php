<?php 
    //Host
    $host = "mysql.hostinger.co.uk"; 
    //User
    $user = "u466836183_luna"; 
    //Password
    $password = "VTYzEWOU43"; 
    //Database name
    $db = "u466836183_luna";  

    $connect = mysqli_connect($host, $user, $password, $db); 

    if(mysqli_connect_errno()) {
        die(mysqli_connect_errno()); 
    } else {
        echo Connected;
    }
?>

<html>
<header>
    <link href="css/database.css" rel="stylesheet">
</header>

<body>
    
    <?php 
    
    $sql = "SELECT name, club, post FROM posts";
    // database columom rows name ----- database name 
$result = $connect->query($sql);
// result query code 
?>
        <div class="test">
            <?php while($row = $result->fetch_assoc()) { ?>
            <span><?php echo $row["name"]; ?></span>
            <span><?php echo $row["club"]; ?></span>
            <span><?php echo $row["post"]; ?></span>
            <?php } ?>
        </div>
         
    
    </body>
    </html>

