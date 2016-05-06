<!doctype>
<html>
    <head>
        <title>Matt Hammond | Online Portfolio</title>
        <meta name="google-site-verification" content="wuUMPGR9YWdmNeEr4ifvBv4vcj8TfeTTWi-ZFqN-6ts" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,100' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script src="js/jquery.js"></script>
    </head>
    <body>
        
        <div id="loadingWrapper">
            <div id="loadingContainer">
                <div id="circle"></div>
                <h3 id="loading">Loading</h3>
            </div>
        </div>
        
        <?php
            require_once('includes/template/navIndex.html');
            include_once('header.html');
            include_once('includes/template/radioForm.html');
        ?>
        
        <div id="gridCon"></div>
        
        <?php include_once('includes/template/footer.html'); ?>
        <script src="js/gridSetup.js"></script>
        <script src="js/radioButton.js"></script>
        <script src="js/navParralax.js"></script>
        <script src="js/loading.js"></script>
    </body>
</html>