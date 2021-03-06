<?php include("header.php"); ?>

<!-- CONTENT -->
<div id="contentHolder" class="width100">
	<div id="grayGradientLight"></div>
    
    <!-- MAIN -->
    <div id="main" class="width1000">
    
    	<!-- Navigation -->
            <?php include("navigation.php"); ?>

    	<!-- .Navigation -->
        
        <!-- Content -->
        <div id="content" class="red">

            <h2>Contact Us</h2>
            
            <div id="contactFormResult"></div>
            <form action="contactForm.php" method="post" id="contactForm">
            	<p><input name="email" id="email" type="text" value="Your Email Address..." onfocus="if (this.value == 'Your Email Address...') {this.value = ''}" onblur="if (this.value == '') {this.value = 'Your Email Address...'}">
                <span class="sendingError">Valid Email Required!</span>
                </p>
             	<p><input name="fname" type="text" value="Your First Name" onfocus="if (this.value == 'Your First Name') {this.value = ''}" onblur="if (this.value == '') {this.value = 'Your First Name'}"></p>
             	<p><input name="lname" type="text" value="Your Last Name" onfocus="if (this.value == 'Your Last Name') {this.value = ''}" onblur="if (this.value == '') {this.value = 'Your Last Name'}"></p>
             	<p><input name="address" type="text" value="Street Address..." onfocus="if (this.value == 'Street Address...') {this.value = ''}" onblur="if (this.value == '') {this.value = 'Street Address...'}"></p>
             	<p><input name="city" type="text" value="City..." onfocus="if (this.value == 'City...') {this.value = ''}" onblur="if (this.value == '') {this.value = 'City...'}"></p>
             	<p><input name="state" type="text" value="State..." onfocus="if (this.value == 'State...') {this.value = ''}" onblur="if (this.value == '') {this.value = 'State...'}"></p>
             	<p><input name="zip" type="text" value="Zip..." onfocus="if (this.value == 'Zip...') {this.value = ''}" onblur="if (this.value == '') {this.value = 'Zip...'}"></p>
             	<p><input name="phone" type="text" value="Phone Number..." onfocus="if (this.value == 'Phone Number...') {this.value = ''}" onblur="if (this.value == '') {this.value = 'Phone Number...'}"></p> 
                <p><textarea name="message" id="message" onfocus="if (this.value == 'Your Message...') {this.value = ''}" onblur="if (this.value == '') {this.value = 'Your Message...'}">Your Message...</textarea>
                <span class="sendingError textarea">Required field!</span>
                </p>
                
                <input type="hidden" value="1" name="tbSendEmailYes">
                
                <div class="buttons">
                <input type="submit" class="bigButton roundButtonX right" value="Submit">
                <input type="reset" class="bigButton roundButtonX right" value="Reset">
                <div class="ajaxLoader"></div>
                </div>
                
            </form>
            
            <div id="contactExtra">
            	To send your general questions or comments, please use contact form. For specific issues please select one of the topics below:
                
                <ul>
                	<li class="volunteer">
						<a href="javascript:void()" title="Volunteer Opportunities">Volunteer Opportunities</a><br>
						Get involved with the campaign.
                    </li>
                	<li class="donation">
						<a href="javascript:void()" title="Donation Support">Donation Support</a><br>
						Let us know if you're having trouble making a contribution.
                    </li>
                	<li class="press">
						<a href="javascript:void()" title="Press Inquiries">Press Inquiries</a><br>
						Contact our communications team if you're a member of the press.
                    </li>
                	<li class="policy">
						<a href="javascript:void()" title="Policy Information">Policy Information</a><br>
						Get more information about Candidate's stance on the issues.
                    </li>
                </ul>
            </div>

        </div>
        <!-- .Content -->
    
    </div>
    <!-- .MAIN -->
    
    <!-- CAMPAIGN -->
            <?php //include("compaign.php"); ?>
    <!-- .CAMPAIGN -->
</div>
<!-- .CONTENT -->

<!-- FOOTER -->
            <?php include("footer.php"); ?>

<!-- .FOOTER -->

</body>
</html>
