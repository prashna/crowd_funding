
<?php include("header.php"); ?>

<!-- CONTENT -->
<div id="contentHolder" class="width100">
    <div id="grayGradientLight"></div>
    
    <!-- MAIN -->
    <div id="main" class="width1000">

        
        <!-- Content -->
        <div id="content" class="default">
        
            <!-- Home -->
            <div id="home">

            
            <div class="clear"></div>
            
            <!-- Inner -->
            <div id="inner">
            <?php
                if(isset($_SESSION['USER_TYPE']) && $_SESSION['USER_TYPE']=="users")
                {
            ?>
                <h3>You Logged in as <span>User</span></h3>
            <?php
                } 
                else if(isset($_SESSION['USER_TYPE']) && $_SESSION['USER_TYPE']=="politicians")
                {
            ?>
                <h3>You Logged in as <span>Politician</span></h3>
            <?php
                }
                else
                {
            ?>
                <h3>You are not Logged in</h3>
            <?php
                }
            ?>
            
                <h3>Dashboard Under Development</h3>
        <!--        
                <div class="news">
                    <div class="doubleFramed medium left">
                        <a href="newsSingle.php" title="News 1">
                            <img src="images/tb/white_house-dfm.jpg" alt="News 1">
                        </a>
                    </div>
                    
                    <div class="right">
                        <h4><a href="newsSingle.php" title="News 1">BREAKING NEWS: Candidate is the Perfect Wordpress Theme for All Your Campaign Needs</a></h4>
                        
                        <div class="newsInfo">Monday, August 6th, 2012 @ 7:00pm</div>
                        
                        <p>Whether you are a political candidate, an organization or an  individual or group of supporters with Candidate Wordpress Theme you can easily set up a website and let your oppinions be heard, as well as be able to raise funds to further your political action.</p>
                        
                        <a href="newsSingle.php" title="News 1" class="tinyButton roundButtonX right">View</a>
                    </div>
                </div>
                 
                <div class="horDashed"></div>
                
                <div class="news width50 left">
                    <div class="doubleFramed small left">
                        <a href="getInvolved.php" title="Get Involved">
                            <img src="images/tb/thumb1.jpg" alt="Get Involved">
                        </a>
                    </div>
                    
                    <div class="right">
                        
                        <div class="newsInfo">Sunday, August 5th, 2012 @ 7:00pm</div>
                        
                        <h4><a href="getInvolved.php" title="Get Involved">Candidate Wordpress has a Build in Donation System!</a></h4>
                        
                        <p>An awesome donation system allows your supporters to give you donations to up to $2500.</p>
                        
                        <a href="getInvolved.php" title="Get Involved" class="tinyButton roundButtonX right">View</a>
                    </div>
                </div>
                
                <div class="news width50 right">
                    <div class="doubleFramed small left">
                        <a href="shop.php" title="Campaign Shop">
                            <img src="images/tb/thumb2.jpg" alt="Get Involved">
                        </a>
                    </div>
                    
                    <div class="right">
                        
                        <div class="newsInfo">Saturday, August 4th, 2012 @ 7:00pm</div>
                        
                        <h4><a href="shop.php" title="Campaign Shop">Also Equipt With a Simple Merchandise Shop.</a></h4>
                        
                        <p>An awesome donation system allows your supporters to give you donations to up to $2500.</p>
                        
                        <a href="shop.php" title="Campaign Shop" class="tinyButton roundButtonX right">View</a>
                    </div>
                </div>
                
                <div class="horDouble"></div>
                
                <h4>The <span>Issues</span></h4>
                
                <div class="news width50 left">
                        <div class="newsInfo">AMERICAN ECONOMY</div>
                        
                        <h4><a href="news.php" title="News">A Sleek Visual Campaign Calendar is Easy to Manage. Let your Supporters Know When You're  in Town!</a></h4>
                        
                        <p>Candidate Wordpress Theme is flexible anough to fit any political option and social issue. With a few simple adjustments your site can go from a serious campaign presentation to a more informal grassroots movement. It's easy to set up and has everything you need to reach out to your supporters.<br><br></p>
                        
                        <a href="news.php" title="News" class="tinyButton roundButtonX right">View</a>
                </div>
               
                <div class="news width50 right">
                    <div class="newsInfo">Friday, August 3rd, 2012 @ 7:00pm</div>                    
                    <h4><a href="gallery.php" title="Gallery">A Simple Gallery System Keeps Things Visual</a></h4>
                    
                    <div class="horDashed"></div>
                    
                    
                    <div class="newsInfo">Thursday, August 2nd, 2012 @ 7:00pm</div>                    
                    <h4><a href="theIssues.php" title="The Issues">Stay on Top of All the Issues and Spread the Word to People</a></h4>
                    
                    <div class="horDashed"></div>
                    
                    
                    <div class="newsInfo">Wednesday, August 1st, 2012 @ 7:00pm</div>                    
                    <h4><a href="biography.php" title="Biography">Candidate is a Flexible Theme that allows You to Stay on Top of the Political and Social Game.</a></h4>
                    
                    <a href="theIssues2.php" title="The Issues - v2" class="tinyButton roundButtonX right">View</a>
                </div>
                
                <div class="horDouble"></div>
                
                <h4>Featured <span>Videos</span></h4>
                
                <div class="video">
                    <div>
                    <a href="http://www.youtube.com/watch?v=AV48vINy134" title="Video Description">
                        <img src="images/tb/gallery8-video.jpg" alt="Video Description">
                    </a>
                    </div>
                    
                    <div>
                        <h4><a href="videos.php" title="Videos">Add and  Manage Videos of Your Campaign with ease and Flexibility.</a></h4>
                        <div class="newsInfo">Thursday, August 2nd, 2012 @ 7:00pm</div>
                        
                        <div class="horDashed"></div>
                        
                        <p>Make your Campaign a Multimedial experience with a flexible image and video gallery. Embed videos from YouTube or Vimeo, connect with Flickr with ease, add descriptions and share your activities with the world.</p>
                    </div>
                </div> -->

                
            </div>
            <!-- .Inner -->

            </div>
            <!-- .Home -->
        </div>
        <!-- .Content -->
    
    </div>
    <!-- .MAIN -->
    

</div>
<!-- .CONTENT -->

<!-- FOOTER -->
            <?php include("footer.php"); ?>

<!-- .FOOTER -->

</body>
</html>
