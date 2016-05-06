<header>
<link href="css/normal.css" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/storiess.css" rel="stylesheet">
</header>


<body>
<!--nav-->
      <nav class="navbar navbar-default navbar-fixed-top" id="my-navbar">
            
            <div class="container"> 
                
                <div class="navbar-header">
                
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!--Brand Name-->
                    <a href="#top" class="navbar-brand"><?php echo $brand; ?></a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <!-- log in -->
                    <form action="login.php" method="post" class=" navbar-right">
                        Username: <input type="text" name="username" value="">
                        Password: <input type="password" name="password" value="">
                        <input type="submit" name="login" value="Login" class="btn btn-info navbar-btn" />
                    </form>
    
                    <ul class="nav navbar-nav">
                    
                        <li><a href="#top">Home</a></li>
                        <li><a href="#about">About</a></li>
                         <li><a href="#us">Meet the Team</a></li>
                        <li><a href="#team">Working Together</a></li>
                        <li><a href="#sign">Sign Up</a></li>
                    
                    </ul>
                
                </div>
                
            </div>

        </nav>
        <!--nav end-->

    <div class="new_feed">
    </div>
    
    
    </body>