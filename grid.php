<html>
    <script src="js/jquery.js"></script>
<?php 
    require_once('includes/connection.php');

    if ($_GET[TAG] != "") {
        $data = "SELECT * FROM artwork_meta WHERE artwork_tags = '$_GET[TAG]' ORDER BY ID DESC LIMIT 28";
        $result = mysqli_query($connection, $data);
    } else {
        $data = "SELECT * FROM artwork_meta ORDER BY ID DESC LIMIT 28";
        $result = mysqli_query($connection, $data);
    }
?>
    
<?php while($row = mysqli_fetch_assoc($result)) { ?>
    <a href="http://matthammond.digital/artwork.php?ID=<?php echo $row["id"]; ?>">
        <div class="boxes all <?php echo $row["artwork_tags"]; ?>"> 
            <?php 
                $id = $row["id"];  
                $media = "SELECT * FROM artwork_media WHERE artwork_meta_id = $id ORDER BY ID DESC";
                $mediaResult = mysqli_query($connection, $media);
                
                                                 
                while($mediaRow = mysqli_fetch_assoc($mediaResult)) {
                    
                    if ($mediaRow["artwork_media_featured"] == "true") {
                        if ($mediaRow["artwork_media_type"] == "image") {
                    ?>
                            <img class="featureImage" src="../images/<?php echo $mediaRow["artwork_media_media"]; ?>">
                <?php
                        } else if ($mediaRow["artwork_media_type"] == "video") {
                        ?>
                            <img class="featureImage" src="http://img.youtube.com/vi/<?php echo $mediaRow["artwork_media_media"] ?>/1.jpg">
            
                        <?php
                        }
                    } 
                } 
                ?>
            
            <div class="hoverCon">
                <div class="content">   
                    <h3 class="title"><?php echo $row["artwork_title"]; ?></h3>
                </div>    
            </div>
        </div>
    </a>
<?php } ?>
    
    <script src="js/hover.js"></script>
    </html>