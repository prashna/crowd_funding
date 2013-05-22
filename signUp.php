<?php include("header.php"); ?>

<!-- CONTENT -->
<div id="contentHolder" class="width100">
	<div id="grayGradientLight"></div>
    
    <!-- MAIN -->
    <div id="main" class="width1000">
    
    	<!-- Navigation -->
        <div id="navigationBckg">
        <div id="navigation">
        	<ul class="navigation">
                <li><a href="index.php" title="Home">Home</a>
                    <ul>
                        <li><a href="404.php" title="404">404 Page</a></li>
                        <li><a href="landing.php" title="Landing Page">Landing Page</a></li>
                        <li><a href="faq.php" title="FAQ">FAQ</a></li>
                        <li><a href="faq2.php" title="FAQ - version 2">FAQ - version 2</a></li>
                        <li><a href="faq3.php" title="FAQ - version 3">FAQ - version 3</a></li>
                    </ul>
                </li>
                
                <li>
                	<a href="theIssues.php" title="The Issues">The Issues</a>
                    
                    <ul>
                    	<li><a href="theIssues2.php" title="The Issues - version 2">The Issues - version 2</a></li>
                    	<li><a href="generic.php" title="Typography and Buttons">Typography and Buttons</a></li>
                    	<li class="current_page_item"><a href="signUp.php" title="Sign Up">Sign Up</a></li>

                    	<li>
                        	<a href="javascript:void()" title="Dropdown Level 1">Dropdown Level 1</a>
                            <ul>
                    			<li><a href="javascript:void()" title="Dropdown Level 2">Dropdown Level 2</a></li>
                    			<li><a href="javascript:void()" title="Dropdown Level 2">Dropdown Level 2</a></li>
                    			<li><a href="javascript:void()" title="Dropdown Level 2">Dropdown Level 2</a></li>
                    			<li><a href="javascript:void()" title="Dropdown Level 2">Dropdown Level 2</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                
                <li><a href="biography.php" title="Biography">Biography</a></li>
                
                <li>
                	<a href="news.php" title="News and Events">News and Events</a>
                    
                    <ul>
                    	<li><a href="news2.php" title="News and Events - version 2">News and Events - version 2</a></li>
                    	<li><a href="newsSingle.php" title="Single News">Single News</a></li>
                    </ul>
                </li>
                
                <li><a href="videos.php" title="Videos">Videos</a>
                    
                    <ul>
                    	<li><a href="videos2.php" title="Videos - version 2">Videos - version 2</a></li>
                    	<li><a href="gallery.php" title="Gallery">Gallery</a></li>
                    </ul>
                </li>
                <li><a href="getInvolved.php" title="Get Involved">Get Involved</a></li>
                <li><a href="shop.php" title="Campaign Shop">Campaign Shop</a>
                	<ul>
                    	<li><a href="shop2.php" title="Campaign Shop - version 2">Campaign Shop - version 2</a></li>
                    </ul>
                </li>
                <li><a href="contact.php" title="Contact">Contact</a></li>
            </ul>
        </div>
        </div>
    	<!-- .Navigation -->
        
        <!-- Content -->
        <div id="content" class="default">

            <h2>Sign Up</h2>
            
            <form action="javascript:void()" method="post" id="signUp">
            	<p><input name="email" id="email" type="text" value="Your Email Address..." onfocus="if (this.value == 'Your Email Address...') {this.value = ''}" onblur="if (this.value == '') {this.value = 'Your Email Address...'}"></p>
            	<p><input name="username" type="text" value="Choose Username..." onfocus="if (this.value == 'Choose Username...') {this.value = ''}" onblur="if (this.value == '') {this.value = 'Choose Username...'}"></p>
            	<p><input name="password" type="text" value="Password..." onfocus="if (this.value == 'Password...') {this.value = ''}" onblur="if (this.value == '') {this.value = 'Password...'}"></p>
            	<p><input name="password2" type="text" value="Repeat Password..." onfocus="if (this.value == 'Repeat Password...') {this.value = ''}" onblur="if (this.value == '') {this.value = 'Repeat Password...'}"></p>
                
                <div class="horDashed"></div>
                
                <h4>Tell Us Something About You</h4>
                
             	<p><input name="fname" type="text" value="Your First Name" onfocus="if (this.value == 'Your First Name') {this.value = ''}" onblur="if (this.value == '') {this.value = 'Your First Name'}"></p>
             	<p><input name="lname" type="text" value="Your First Name" onfocus="if (this.value == 'Your First Name') {this.value = ''}" onblur="if (this.value == '') {this.value = 'Your First Name'}"></p>
             	<p><input name="address" type="text" value="Street Address..." onfocus="if (this.value == 'Street Address...') {this.value = ''}" onblur="if (this.value == '') {this.value = 'Street Address...'}"></p>
             	<p><input name="city" type="text" value="City..." onfocus="if (this.value == 'City...') {this.value = ''}" onblur="if (this.value == '') {this.value = 'City...'}"></p>
             	<p><input name="state" type="text" value="State..." onfocus="if (this.value == 'State...') {this.value = ''}" onblur="if (this.value == '') {this.value = 'State...'}"></p>
             	<p><input name="zip" type="text" value="Zip..." onfocus="if (this.value == 'Zip...') {this.value = ''}" onblur="if (this.value == '') {this.value = 'Zip...'}"></p>
             	<p><input name="phone" type="text" value="Phone Number..." onfocus="if (this.value == 'Phone Number...') {this.value = ''}" onblur="if (this.value == '') {this.value = 'Phone Number...'}"></p>
                
                
                <div class="width50 right"><input type="submit" class="bigButton roundButtonX right" value="Submit"></div>
                
                <div class="width50"><p><input name="citizen" type="checkbox" value="1"> <label for="citizen">I confirm that I am a citizen</label></p></div>
                <div class="width50"><p><input name="newsletters" type="checkbox" value="1"> <label for="newsletters">I want to receive newsletters and offers</label></p></div>
               
            </form>

        </div>
        <!-- .Content -->
    
    </div>
    <!-- .MAIN -->
    
    <!-- CAMPAIGN -->
    <div id="campaign" class="width1000">
    	<div id="campaignTrail">
        	<h3>On <span>The </span> Campaign Trail</h3>
            <div class="checkTheDates">Check the dates and see when we're in your town!</div>
            
            <div id="campaignSlides">
            
            	<div class="slides_container">
                
                	<!-- Single slide -->
                	<div class="slide">
                    	<a href="newsSingle.php">New York City</a>
                    	<img src="images/tb/new_york_footer.jpg" alt="New York City">
                        <div class="caption">
                        	<h4>New York City</h4>
                            <p>From July 16th to July 18th</p>
                        </div>
                    </div>
                	<!-- .Single slide -->

                	<div class="slide">
                    	<a href="newsSingle.php">Chicago</a>
                    	<img src="images/tb/chicago_footer.jpg" alt="Chicago">
                        <div class="caption">
                        	<h4>Chicago</h4>
                            <p>From July 19th to July 21th</p>
                        </div>
                    </div>

                	<div class="slide">
                    	<a href="newsSingle.php">Washington DC</a>
                    	<img src="images/tb/washington_footer.jpg" alt="Washington DC">
                        <div class="caption">
                        	<h4>Washington DC</h4>
                            <p>From July 22th to July 24th</p>
                        </div>
                    </div>

                	<div class="slide">
                    	<a href="newsSingle.php">Seattle</a>
                    	<img src="images/tb/seattle_footer.jpg" alt="Seattle">
                        <div class="caption">
                        	<h4>Seattle</h4>
                            <p>From July 25th to July 27th</p>
                        </div>
                    </div>
                </div>
                
                <ul class="pagination">
                	<li><a href="#0">July 16</a></li>
                	<li><a href="#1">July 19</a></li>
                	<li><a href="#2">July 22</a></li>
                	<li><a href="#3">July 25</a></li>
                </ul>
            </div>
        </div>
        
        <div id="campaignCountdown"></div>
    </div>
    <!-- .CAMPAIGN -->
</div>
<!-- .CONTENT -->

<!-- FOOTER -->
<div id="footer" class="width100 default"><div><div>
	<div class="width1000">
    	<div class="starHor"></div>
        
        <div class="container_12">
        
        <div class="grid_3">
        	<h3>Latest posts</h3>
            
            <ul>
            	<li><a href="newsSingle.php">Lorem ipsum dolor sit amet &raquo;</a></li>
            	<li><a href="newsSingle.php">Sed ut perspiciatis unde omnis &raquo;</a></li>
            	<li><a href="newsSingle.php">Li Europan lingues es membres &raquo;</a></li>
            	<li><a href="newsSingle.php">Cum sociis natoque penatibus &raquo;</a></li>
            	<li><a href="newsSingle.php">Nemo enim ipsam voluptatem quia &raquo;</a></li>
                <li><a href="newsSingle.php">On refusa continuar payar &raquo;</a></li>
            	<li><a href="newsSingle.php">Lorem ipsum dolor sit amet &raquo;</a></li>
            	<li><a href="newsSingle.php">Sed ut perspiciatis unde omnis &raquo;</a></li>
            </ul>
        </div>
        
        <div class="grid_3">
        	<h3>Photos</h3>
            
            <div class="photos">
            	<a href="images/tb/footer1.jpg" rel="prettyPhoto[footer]"><img src="images/tb/footer1-thumb.jpg" alt="Image 01"></a>
                Image 01 description - Lorem ipsum dolor sit amet
            </div>
            
            <div class="photos">
            	<a href="images/tb/footer2.jpg" rel="prettyPhoto[footer]"><img src="images/tb/footer2-thumb.jpg" alt="Image 02"></a>
                Image 02 description - Sed ut perspiciatis unde omnis
            </div>
        </div>
        
        <div class="grid_3">
        	<h3>About Us</h3>
            
            <p>
            <a href="index.php">Candidate - Your Political Site template</a> is designed specifically for political and public figures. Drawing inspiration from the modern political arena and experience in building politically themed websites this design is flexible enough to fit any political option and social issue. With a few simple adjustments your site can go from a serious campaign presentation to a more informal grassroots movement...
            </p>
            
        </div>
        
        <div class="grid_3">
        	<h3>Contact Us</h3>
            
            <p>
            12345 Street Name,<br>
			City Name,<br>
            12345 Zip Code,<br>
			State, Province,<br>
			Country<br><br>

			Phone: (123) 456-789<br>
			E-mail: <a href="mailto:info@themeblossom.com?subject=Candidate">info@themeblossom.com</a>
            </p>
            
            <ul class="footerSoc">
            	<li><a href="https://twitter.com/#!/ThemeBlossom" title="Follow Us on Twitter" class="twitter">Follow Us on Twitter</a></li>
            	<li><a href="https://twitter.com/#!/ThemeBlossom" title="Follow Us on Facebook" class="facebook">Follow Us on Facebook</a></li>
            	<li><a href="https://twitter.com/#!/ThemeBlossom" title="Follow Us on LinkedIn" class="linkedin">Follow Us on LinkedIn</a></li>
            </ul>
            
        </div>
        
        </div>
        
    	<div class="starHor"></div>
        
        <div id="bottomNav">
        	<ul>
                <li><a href="index.php" title="Home">Home</a></li>
                <li><a href="theIssues.php" title="The Issues">The Issues</a></li>
                <li><a href="biography.php" title="Biography">Biography</a></li>
                <li><a href="news.php" title="News and Events">News and Events</a></li>
                <li><a href="videos.php" title="Videos">Videos</a></li>
                <li><a href="getInvolved.php" title="Get Involved">Get Involved</a></li>
                <li><a href="shop.php" title="Campaign Shop">Campaign Shop</a></li>
                <li><a href="contact.php" title="Contact">Contact</a></li>
            </ul>
        </div>
        
        <div id="disclaimer"><a href="index.php">Candidate - Your Political Site Template</a>. <span>Copyright &copy; 2012</span> <a href="http://www.themeblossom.com" title="Theme Blossom">ThemeBlossom.com</a>. <span>All Rights Reserved</span></div>
	</div>
</div></div></div>
<!-- .FOOTER -->

</body>
</html>
