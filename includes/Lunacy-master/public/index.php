<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/connect.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php include_once("../includes/templates/header.php"); ?>

    <?php include_once("../includes/templates/nav.php"); ?>


    <div id="postLoad">
    <?php require_once("stories.php"); ?>
        </div>
 <hr>



<!--nav-->
      <nav class="navbar navbar-default navbar-fixed-top" id="my-navbar" style="background-color: rgba(78, 93, 108, 1);">

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
                    <form action="login.php" method="post" class="navbar-right">
        Username: <input type="text" name="username" placeholder="Disabled" value="">
        Password: <input type="password" name="password" placeholder="Disabled" value="">
        <input class="btn btn-info navbar-btn" type="submit" name="login" value="Login" />
                    </form>

                    <ul class="nav navbar-nav">

                        <li><a href="#postLoad">Post</a></li>
                        <li><a href="#about">About</a></li>
                         <li><a href="#us">Meet the Team</a></li>
                        <li><a href="create.php">Sign Up</a></li>

                    </ul>

                </div>

            </div>

        </nav>
        <!--nav end-->

    <section id="top"></section>

    <div class="container text-center" id="about">
        <section>
            <div class="row">
                <div class="col-lg-12">
                    <h1>What is <?php echo $brand; ?>?</h1>
                    <p>Lunacy is a site where anyone can post their stories about their night outs in Bournemouth. Clubs are listed so you can view and vote stories from each night club, and the best ones will be featured at the top. Lunacy is a site designed for uni students who enjoy a night out. Other features include the latest events and the team members behind this page. Also with posting a story, you also have the option to post anonymously as long as you have created an account. Get posting!</p>
                </div>
            </div>
        </section>
    </div>


<hr>

    <div class="container" id="us">
            <section>

                <div class="page-header text-center">

                    <h1>Meet the Team Behind <?php echo $brand; ?><br></h1>

                </div>
                <div class="row">
                    <div class="col-md-4">
                        <blockquote>

                            <h3>Samuel Gray</h3>
                            <img src="img/sam.jpg" class="img-responsive img-rounded" alt="Samuel Gray">
                            <br>
                            <p>I am first year Bournemouth University student studying Digital Media. I have some background knowledge of digital media design before starting university. I created my first website in my first year of college which was very basic but by the time I left in my thrid year I was creating endless scrollng paralax sites. I have also gained skills such as photo editing, database design, animation for the web, 3D modeling and many more.</p><p>I am also a keen but aminture genealogist. For the past few years I have been researching my own family history and have offered my skills to others for extra money on the side</p>

                        </blockquote>

                    </div>

                     <div class="col-md-4">
                        <blockquote>
                            <h3>Letitia Mills</h3>
                            <img src="img/letitia.jpg" class="img-responsive img-rounded" alt="Letitia Mills">
                            <br>
                            <p>My name is Letitia and I am currently studying Digital Media Design at Bournemouth University. I was previously studying a BTEC television and film diploma at Bexhill College which consisted of various unit projects where some would relate to digital design. For example, I have done a lot of video editing on premiere, web design on Dreamweaver, and designing posters and logos using Photoshop. I have a strong interest in animation where I would work on projects out of educational hours. The outline of this is that I enjoy creating new ideas within a visual aspect such as character design, logos, and more. I am very interested in learning new things, including  web, graphic and game design.</p>

                        </blockquote>

                    </div>

                     <div class="col-md-4">
                        <blockquote>
                            <h3>Jordan Ezra</h3>
                            <img src="img/jordan.jpg" class="img-responsive img-rounded" alt="Jordan Ezra">
                            <br>
                            <p>Not that normal but what is normal really?
Digital media for me is an oppotunity to create, recreate and imagine things that are just not possible in the world of analog.
I enjoy photo manipulation, ripping real worlds apart and stiching them together to create seamless, realistic-fantasy realms.
Currently enjoying uni and all the skills i'm learning on this course, A little rough around the edges but I'm confident in my future with this course.</p>

                        </blockquote>

                    </div>

                </div>
                <div class="row">
                    <div class="col-md-4">
                        <blockquote>

                            <h3>Matthew Hammond</h3>
                            <img src="img/matthew.jpg" class="img-responsive img-rounded" alt="Samuel Gray">
                            <br>
                            <p>I'm currently a first year student studying Digital Media Design at Bournemouth University. I am extremely passionate about anything visual whether it’s web design, 3D modeling and animation or infographics, I really like the idea that graphics can change peoples emotions, feeling and even make them do things (like buying a product). I currently do motion graphics for clients in my spare time. However my true passion lies in downhill mountain biking. I truly love how free you feel as you are going over terrain, jumps, drops and rocks which don't look rideable and this adrenaline rush makes you feel like you can achieve anything. </p>

                        </blockquote>

                    </div>

                </div>

            </section>

        </div>
        <!--End About Us-->
        <hr id="team">
        <div class="container">

            <section>

               <div class="text-center">

                   <a href="create.php"><button class="btn btn-lg btn-primary btn-block">Create An Account</button></a>


            </section>

        </div>
        </div>


<?php include_once("../includes/templates/footer.php"); ?>