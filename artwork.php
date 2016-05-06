<!doctype>
<html>
    <?php require_once("includes/connection.php"); ?>
    <head>
        <?php
            $tagData = "SELECT title FROM artwork_meta WHERE id = '$_GET[ID]' ORDER BY ID DESC";
            $tagResult = mysqli_query($connection, $tagData);
        ?>
        <?php while ($head = mysqli_fetch_assoc($tagResult)) { ?>
        <title>Online Portfolio | <?php echo $head["artwork_title"]; } ?> </title>
        <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,100' rel='stylesheet' type='text/css'>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/artworkStyles.css">
        <script src="js/jquery.js"></script>
    </head>
    <body>
        <?php require_once("includes/template/nav.html"); ?>
        <?php   
            $meta = "SELECT * FROM artwork_meta WHERE id = '$_GET[ID]' ORDER BY ID DESC";
            $result = mysqli_query($connection, $meta);

            $media = "SELECT * FROM artwork_media WHERE artwork_meta_id = '$_GET[ID]' ORDER BY ID ASC";
            $mediaResult = mysqli_query($connection, $media);
        ?>
        
        <div id="contentDirContainer">
            <div id="directory">
                <?php $tag = mysqli_fetch_assoc($result) ?>
                    <p>/<a href="index.php">Portfolio</a>/<?php echo $tag["artwork_tags"]; ?>/<?php echo $tag["artwork_title"]; ?></p>
            </div>
        </div>
        
        <div id="contentContainer">
                <div class="artworkWriteUp">
                    <p><?php echo $tag["artwork_description"]; ?></p>
                </div>
                <div class="artworkImage">
                    <div id="imageViewer"></div>
                    <hr>
                    <?php while($row = mysqli_fetch_assoc($mediaResult)) {
                        
                        if ($row["artwork_media_featured"] == "") {
                
                            if ($row["artwork_media_type"] == "image") { ?>
                                <img class="artwork thumbnails" data-media-type="image" src="images/<?php echo $row["artwork_media_media"]; ?>">
                            <?php
                            } else if ($row["artwork_media_type"] == "video") {   
                                ?>    
                                <img class="artwork thumbnails" data-media-type="video" data-media-url="<?php echo $row["artwork_media_media"]; ?>" src="http://img.youtube.com/vi/<?php echo $row["artwork_media_media"] ?>/1.jpg">
                            <?php } else if ($row["artwork_media_type"] == "website") { ?>
                                <hr>
                                </div>
                                <hr>
                                <iframe style="width:100%; height:550px;" src="<?php echo $row["artwork_media_media"]; ?>">
                                    <p>Your browser does not support iframes.</p>
                                </iframe>
                            <?php } else if ($row["artwork_media_type"] == "pdf") { ?> 
                                    <a href="images/dossier.pdf">
                                        <img class="artwork thumbnails" data-media-type="image" src="images/pdf.png">
                                    </a>    
                            <?php }
                        }
                    }?>
                    <hr>
                        
                            
                </div>
        </div>
        <?php include_once('includes/template/footer.html'); ?>
        
        <script src="js/gallery.js"></script>
        <script src="js/navFix.js"></script>
    </body>
</html>