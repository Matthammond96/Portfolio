<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/connect.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php require_once("../includes/templates/header.php"); ?>



    <div class="container text-center">

    <div class="post_form">
        <?php require_once("story.php"); ?>    
    </div>
    
        
        
    
        

        
        
    <div class="feeds">
        <div class="feed-large top-rated-feed">
            <div class="header">
            <h5>Top Rated Stories</h5>
                </div>
            <div class="posts-container-large">

                <?php
    
    $_POST = "SELECT * FROM post_posts ORDER BY post_id DESC";
	$result = mysqli_query($connection, $_POST);

?>

            <div class="post" >
                    <?php while($row = mysqli_fetch_assoc($result)) { ?>
                <div id="post-header">
                <span id="name"><?php echo $row["post_user_username"]; ?></span>
                <span id="club"><?php echo $row["post_club"]; ?></span>
                </div>
                <div id="title"><?php echo $row["post_title"]; ?></div>
                <div id="post-db"><?php echo $row["post_body"]; ?></div>
                <div id="time"> 

                    <?php
                        include_once("../includes/timeAgoFunction.php");
                        $timeAgoObject = new convertToAgo; 
                        $ts = $row["post_timestamp"];
                        $convertedTime = ($timeAgoObject -> convert_datetime($ts)); 
                        $when = ($timeAgoObject -> makeAgo($convertedTime)); 

                        echo $when; 
                    ?>                                                 

                </div>
                <?php } ?>
            </div>
        </div>
            
            
            
            </div>
        <!-- <div class="feed most-crazy-feed">
            <div class="header">
            <h5>Most Crazy Stories</h5>
                </div> 
            <div class="posts-container">

                </div>
            </div> -->
        
        
        
        
        <div class="feed club-rss-feed">
            <div class="header">
            <h5>Latest Club Events</h5>
                
                </div>
            <div class="posts-container">
                <?xml version="1.0" encoding="ISO-8859-1" ?> 		<rss version="2.0">			<channel>				<title>Events this week at The Old Fire Station</title> 				<link>http://www.oldfirestation.co.uk/our_events.html</link>  				<description>Events taking place at Old Fire Station this week</description>  				<language>eng</language>   				<image>					<title>The Old Fire Station</title> 					<url>http://www.oldfirestation.co.uk/images/rss/firestation_logo.jpg</url>   					<link>http://www.oldfirestation.co.uk</link> 					<width>220</width>					<height>134</height> 				</image>				<item>					<title>Neverland: w/Preditah, Luck &amp;amp; Neat, The Golden Boy</title>					<description>Taking place on Saturday 21st of March '15 and open to all 18+</description>					<link>http://www.oldfirestation.co.uk/event_details_1236.html</link>					<guid>http://www.oldfirestation.co.uk/event_details_1236.html</guid>					<pubDate>Sat, 14 Mar 2015 00:00:00 GMT</pubDate>				</item>				<item>					<title>Lollipop</title>					<description>Taking place on Friday 20th of March '15 and open to all 18+</description>					<link>http://www.oldfirestation.co.uk/event_details_1221.html</link>					<guid>http://www.oldfirestation.co.uk/event_details_1221.html</guid>					<pubDate>Fri, 13 Mar 2015 00:00:00 GMT</pubDate>				</item>				<item>					<title>SQUAREPUSHER (live)</title>					<description>Taking place on Tuesday 17th of March '15 and open to all Open to all, under 14s need to be accompanied by an 18+</description>					<link>http://www.oldfirestation.co.uk/event_details_1194.html</link>					<guid>http://www.oldfirestation.co.uk/event_details_1194.html</guid>					<pubDate>Tue, 10 Mar 2015 00:00:00 GMT</pubDate>				</item>				<item>					<title>Mike Peters Presents - The Alarm</title>					<description>Taking place on Sunday 15th of March '15 and open to all Open to all, under 14s need to be accompanied by an 18+</description>					<link>http://www.oldfirestation.co.uk/event_details_1199.html</link>					<guid>http://www.oldfirestation.co.uk/event_details_1199.html</guid>					<pubDate>Sun, 08 Mar 2015 00:00:00 GMT</pubDate>				</item>				<item>					<title>Bonus</title>					<description>Taking place on Saturday 14th of March '15 and open to all 18+</description>					<link>http://www.oldfirestation.co.uk/event_details_1238.html</link>					<guid>http://www.oldfirestation.co.uk/event_details_1238.html</guid>					<pubDate>Sat, 07 Mar 2015 00:00:00 GMT</pubDate>				</item>				<item>					<title>Lollipop</title>					<description>Taking place on Friday 13th of March '15 and open to all 18+</description>					<link>http://www.oldfirestation.co.uk/event_details_1220.html</link>					<guid>http://www.oldfirestation.co.uk/event_details_1220.html</guid>					<pubDate>Fri, 06 Mar 2015 00:00:00 GMT</pubDate>				</item>				<item>					<title>SUNSET SONS</title>					<description>Taking place on Friday 13th of March '15 and open to all Open to all, under 14s need to be accompanied by an 18+</description>					<link>http://www.oldfirestation.co.uk/event_details_1197.html</link>					<guid>http://www.oldfirestation.co.uk/event_details_1197.html</guid>					<pubDate>Fri, 06 Mar 2015 00:00:00 GMT</pubDate>				</item>				<item>					<title>Lollipop</title>					<description>Taking place on Friday 6th of March '15 and open to all 18+</description>					<link>http://www.oldfirestation.co.uk/event_details_1219.html</link>					<guid>http://www.oldfirestation.co.uk/event_details_1219.html</guid>					<pubDate>Fri, 27 Feb 2015 00:00:00 GMT</pubDate>				</item>				<item>					<title>Room 94</title>					<description>Taking place on Tuesday 3rd of March '15 and open to all Open to all, under 14s need to be accompanied by an 18+</description>					<link>http://www.oldfirestation.co.uk/event_details_1196.html</link>					<guid>http://www.oldfirestation.co.uk/event_details_1196.html</guid>					<pubDate>Tue, 24 Feb 2015 00:00:00 GMT</pubDate>				</item>				<item>					<title>GET SATISFIED : Dedicated To House Music</title>					<description>Taking place on Saturday 28th of February '15 and open to all 18+</description>					<link>http://www.oldfirestation.co.uk/event_details_1214.html</link>					<guid>http://www.oldfirestation.co.uk/event_details_1214.html</guid>					<pubDate>Sat, 21 Feb 2015 00:00:00 GMT</pubDate>				</item>				<item>					<title>Lollipop</title>					<description>Taking place on Friday 27th of February '15 and open to all 18+</description>					<link>http://www.oldfirestation.co.uk/event_details_1218.html</link>					<guid>http://www.oldfirestation.co.uk/event_details_1218.html</guid>					<pubDate>Fri, 20 Feb 2015 00:00:00 GMT</pubDate>				</item>				<item>					<title>Cash - A Tribute to the Man in Black</title>					<description>Taking place on Thursday 26th of February '15 and open to all Open to all, under 14s need to be accompanied by an 18+</description>					<link>http://www.oldfirestation.co.uk/event_details_1195.html</link>					<guid>http://www.oldfirestation.co.uk/event_details_1195.html</guid>					<pubDate>Thu, 19 Feb 2015 00:00:00 GMT</pubDate>				</item>				<item>					<title>The Big Social</title>					<description>Taking place on Tuesday 24th of February '15 and open to all 18+</description>					<link>http://www.oldfirestation.co.uk/event_details_1233.html</link>					<guid>http://www.oldfirestation.co.uk/event_details_1233.html</guid>					<pubDate>Tue, 17 Feb 2015 00:00:00 GMT</pubDate>				</item>				<item>					<title>We Are Your Friends</title>					<description>Taking place on Saturday 21st of February '15 and open to all 18+</description>					<link>http://www.oldfirestation.co.uk/event_details_1232.html</link>					<guid>http://www.oldfirestation.co.uk/event_details_1232.html</guid>					<pubDate>Sat, 14 Feb 2015 00:00:00 GMT</pubDate>				</item>				<item>					<title>Lollipop</title>					<description>Taking place on Friday 20th of February '15 and open to all 18+</description>					<link>http://www.oldfirestation.co.uk/event_details_1217.html</link>					<guid>http://www.oldfirestation.co.uk/event_details_1217.html</guid>					<pubDate>Fri, 13 Feb 2015 00:00:00 GMT</pubDate>				</item>				<item>					<title>Comedy Nation</title>					<description>Taking place on Thursday 19th of February '15 and open to all 18+</description>					<link>http://www.oldfirestation.co.uk/event_details_1234.html</link>					<guid>http://www.oldfirestation.co.uk/event_details_1234.html</guid>					<pubDate>Thu, 12 Feb 2015 00:00:00 GMT</pubDate>				</item>				<item>					<title>Dose: What Hannah Wants</title>					<description>Taking place on Saturday 14th of February '15 and open to all 18+</description>					<link>http://www.oldfirestation.co.uk/event_details_1213.html</link>					<guid>http://www.oldfirestation.co.uk/event_details_1213.html</guid>					<pubDate>Sat, 07 Feb 2015 00:00:00 GMT</pubDate>				</item>				<item>					<title>Lollipop</title>					<description>Taking place on Friday 13th of February '15 and open to all 18+</description>					<link>http://www.oldfirestation.co.uk/event_details_1216.html</link>					<guid>http://www.oldfirestation.co.uk/event_details_1216.html</guid>					<pubDate>Fri, 06 Feb 2015 00:00:00 GMT</pubDate>				</item>				<item>					<title>The Big Fat Fire Station Quiz</title>					<description>Taking place on Sunday 8th of February '15 and open to all 18+</description>					<link>http://www.oldfirestation.co.uk/event_details_1227.html</link>					<guid>http://www.oldfirestation.co.uk/event_details_1227.html</guid>					<pubDate>Sun, 01 Feb 2015 00:00:00 GMT</pubDate>				</item>				<item>					<title>Lollipop</title>					<description>Taking place on Friday 6th of February '15 and open to all 18+</description>					<link>http://www.oldfirestation.co.uk/event_details_1215.html</link>					<guid>http://www.oldfirestation.co.uk/event_details_1215.html</guid>					<pubDate>Fri, 30 Jan 2015 00:00:00 GMT</pubDate>				</item>			</channel>		</rss>

                </div>
            </div>
    </div>
        
        
        
    </div>
<?php //include_once("../includes/templates/footer.php"); ?>