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
                    	<li><a href="signUp.php" title="Sign Up">Sign Up</a></li>

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
                <li class="current_page_item"><a href="getInvolved.php" title="Get Involved">Get Involved</a></li>
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

            <h2>Get Involved</h2>
            
            <div id="getInvolved">
            
          <form action="javascript:void()" method="post" id="getInvolvedForm">
            
            	<h4>Contribution amount</h4>
                <p>Get involved with the campaign by giving a donation to help the cause. By law your donation can't exceed $2500.</p>
                
            	<p class="donation">
                  <label><input type="radio" name="donation" value="radio"> 25</label>
                  <label><input type="radio" name="donation" value="radio"> 50</label>
                  <label><input type="radio" name="donation" value="radio"> 100</label>
                  <label><input type="radio" name="donation" value="radio"> 250</label>
                  <label><input type="radio" name="donation" value="radio"> 500</label>
                  <label><input type="radio" name="donation" value="radio"> 1000</label>
                  <label><input type="radio" name="donation" value="radio"> 2500</label>
                  <label><input type="radio" name="donation" value="radio"> Other</label>
           		</p>
                
                <div class="horDashed"></div>
                
                <h4>Payment info</h4>
                
                <p><input type="text" value="*PayPal Address" onFocus="if (this.value == '*PayPal Address') {this.value = ''}" onBlur="if (this.value == '') {this.value = '*PayPal Address'}" name="paypal"></p>
                
                <p><strong>OR</strong></p>
                
                <p>
                <input type="text" value="Credit Card" onFocus="if (this.value == 'Credit Card') {this.value = ''}" onBlur="if (this.value == '') {this.value = 'Credit Card'}" name="card">
                <input type="text" value="*Card Number" onFocus="if (this.value == '*Card Number') {this.value = ''}" onBlur="if (this.value == '') {this.value = '*Card Number'}" name="cardNumber">
                </p>
                
                <p>
                <input type="text" value="*CW" onFocus="if (this.value == '*CW') {this.value = ''}" onBlur="if (this.value == '') {this.value = '*CW'}" name="cw" class="narrow">
                
                <select name="month" id="month" class="narrow">
                    <option value="0" selected="selected">Month</option>
                	<option value="1">Jan</option>
                	<option value="2">Feb</option>
                	<option value="3">Mar</option>
                	<option value="4">Apr</option>
                	<option value="5">May</option>
                	<option value="6">Jun</option>
                	<option value="7">Jul</option>
                	<option value="8">Aug</option>
                	<option value="9">Sep</option>
                	<option value="10">Oct</option>
                	<option value="11">Nov</option>
                	<option value="12">Dec</option>
                </select>
                
                <select name="year" id="year" class="narrow">
                    <option value="0" selected="selected">Year</option>
                	<option value="2012">2012</option>
                	<option value="2013">2013</option>
                	<option value="2014">2014</option>
                	<option value="2015">2015</option>
                	<option value="2016">2016</option>
                	<option value="2017">2017</option>
                	<option value="2018">2018</option>
                	<option value="2019">2019</option>
                </select>
                
                </p>
                
                <div class="horDashed"></div>
                
                <h4>Personal</h4>
                
                <p>
                <input type="text" value="*First Name" onFocus="if (this.value == '*First Name') {this.value = ''}" onBlur="if (this.value == '') {this.value = '*First Name'}" name="fname">
                <input type="text" value="*Last Name" onFocus="if (this.value == '*Last Name') {this.value = ''}" onBlur="if (this.value == '') {this.value = '*Last Name'}" name="lname">
                <input type="text" value="*Email Address" onFocus="if (this.value == '*Email Address') {this.value = ''}" onBlur="if (this.value == '') {this.value = '*Email Address'}" name="email">
                </p>
                
                <p>
                <input type="text" value="*Phone" onFocus="if (this.value == '*Phone') {this.value = ''}" onBlur="if (this.value == '') {this.value = '*Phone'}" name="phone">
                <input type="text" value="*Address" onFocus="if (this.value == '*Address') {this.value = ''}" onBlur="if (this.value == '') {this.value = '*Address'}" name="address" class="wide">
                </p>
                
                <p>
                <input type="text" value="*City" onFocus="if (this.value == '*City') {this.value = ''}" onBlur="if (this.value == '') {this.value = '*City'}" name="city">
                
                <select name="state" id="state">
                    <option value="0" selected="selected">Select a State</option> 
                    <option value="AL">Alabama</option> 
                    <option value="AK">Alaska</option> 
                    <option value="AZ">Arizona</option> 
                    <option value="AR">Arkansas</option> 
                    <option value="CA">California</option> 
                    <option value="CO">Colorado</option> 
                    <option value="CT">Connecticut</option> 
                    <option value="DE">Delaware</option> 
                    <option value="DC">District Of Columbia</option> 
                    <option value="FL">Florida</option> 
                    <option value="GA">Georgia</option> 
                    <option value="HI">Hawaii</option> 
                    <option value="ID">Idaho</option> 
                    <option value="IL">Illinois</option> 
                    <option value="IN">Indiana</option> 
                    <option value="IA">Iowa</option> 
                    <option value="KS">Kansas</option> 
                    <option value="KY">Kentucky</option> 
                    <option value="LA">Louisiana</option> 
                    <option value="ME">Maine</option> 
                    <option value="MD">Maryland</option> 
                    <option value="MA">Massachusetts</option> 
                    <option value="MI">Michigan</option> 
                    <option value="MN">Minnesota</option> 
                    <option value="MS">Mississippi</option> 
                    <option value="MO">Missouri</option> 
                    <option value="MT">Montana</option> 
                    <option value="NE">Nebraska</option> 
                    <option value="NV">Nevada</option> 
                    <option value="NH">New Hampshire</option> 
                    <option value="NJ">New Jersey</option> 
                    <option value="NM">New Mexico</option> 
                    <option value="NY">New York</option> 
                    <option value="NC">North Carolina</option> 
                    <option value="ND">North Dakota</option> 
                    <option value="OH">Ohio</option> 
                    <option value="OK">Oklahoma</option> 
                    <option value="OR">Oregon</option> 
                    <option value="PA">Pennsylvania</option> 
                    <option value="RI">Rhode Island</option> 
                    <option value="SC">South Carolina</option> 
                    <option value="SD">South Dakota</option> 
                    <option value="TN">Tennessee</option> 
                    <option value="TX">Texas</option> 
                    <option value="UT">Utah</option> 
                    <option value="VT">Vermont</option> 
                    <option value="VA">Virginia</option> 
                    <option value="WA">Washington</option> 
                    <option value="WV">West Virginia</option> 
                    <option value="WI">Wisconsin</option> 
                    <option value="WY">Wyoming</option>
                </select>
                
                <input type="text" value="*Zip" onFocus="if (this.value == '*Zip') {this.value = ''}" onBlur="if (this.value == '') {this.value = '*Zip'}" name="zip" class="narrow">
                </p>
                
                <div class="horDashed"></div>
                
                <h4>Employement</h4>
                
                <p>By law you are obligated to provide your employement info. If unemployed type 'none'.</p>
                
                <p>
                <input type="text" value="*Occupation" onFocus="if (this.value == '*Occupation') {this.value = ''}" onBlur="if (this.value == '') {this.value = '*Occupation'}" name="occupation">
                <input type="text" value="*Employer Name" onFocus="if (this.value == '*Employer Name') {this.value = ''}" onBlur="if (this.value == '') {this.value = '*Employer Name'}" name="employer">
                </p>
                
                <div class="horDashed"></div>
                
                <h4>Confirm eligibility</h4>
                
                <p><input name="citizen" type="checkbox" value="1"> <label for="citizen">I confirm that I am a citizen</label></p>
                
                <p><input type="submit" class="bigButton roundButtonX" value="Submit"></p>
            </form>
            
            </div>

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
