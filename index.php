<?php 
include("config/dbconnect.php"); 
if(isset($_SESSION['USER_TYPE']) && $_SESSION['USER_TYPE']=="users")
{
    echo "<script>window.location.href='news.php';</script>";
} 
else if(isset($_SESSION['USER_TYPE']) && $_SESSION['USER_TYPE']=="politicians")
{
    echo "<script>window.location.href='dashboard.php';</script>";
}

include("header.php"); 

?>
<!-- CONTENT -->

<div id="contentHolder" class="width100">
    <div id="grayGradientLight"></div>
    
    <!-- MAIN -->
    <div id="main" class="width1000">

            
        <!-- Navigation -->
            <?php include("navigation.php"); ?>
        <!-- .Navigation -->
        <!-- Content -->
        <div id="content" class="default">
        
            <!-- Home -->
            <div id="home">
            <!-- Slider -->
                <?php include("slider.php"); ?>

            <!-- .Slider -->
            
            <div class="clear"></div>
            
            <!-- Inner -->
            <div id="inner">
           <!--  <?php
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
            
                <h3>Dashboard Under Development</h3> -->
                
                <div class="news">
                    <div class="doubleFramed medium left">
                        <a href="#" title="News 1">
                            <img src="images/tb/white_house-dfm.jpg" alt="News 1">
                        </a>
                    </div>
                    
                    <div class="right">
                        <h4><a href="#" title="News 1">BREAKING NEWS: Candidate is the Perfect Wordpress Theme for All Your Campaign Needs</a></h4>
                        
                        <div class="newsInfo">Monday, August 6th, 2012 @ 7:00pm</div>
                        
                        <p>Whether you are a political candidate, an organization or an  individual or group of supporters with Candidate Wordpress Theme you can easily set up a website and let your oppinions be heard, as well as be able to raise funds to further your political action.</p>
                        
                        <a href="#" title="News 1" class="tinyButton roundButtonX right">View</a>
                    </div>
                </div>
                 
                <div class="horDashed"></div>
                
                <div class="news width50 left">
                    <div class="doubleFramed small left">
                        <a href="#" title="Get Involved">
                            <img src="images/tb/thumb1.jpg" alt="Get Involved">
                        </a>
                    </div>
                    
                    <div class="right">
                        
                        <div class="newsInfo">Sunday, August 5th, 2012 @ 7:00pm</div>
                        
                        <h4><a href="#" title="Get Involved">Candidate Wordpress has a Build in Donation System!</a></h4>
                        
                        <p>An awesome donation system allows your supporters to give you donations to up to $2500.</p>
                        
                        <a href="#" title="Get Involved" class="tinyButton roundButtonX right">View</a>
                    </div>
                </div>
                
                <div class="news width50 right">
                    <div class="doubleFramed small left">
                        <a href="#" title="Campaign Shop">
                            <img src="images/tb/thumb2.jpg" alt="Get Involved">
                        </a>
                    </div>
                    
                    <div class="right">
                        
                        <div class="newsInfo">Saturday, August 4th, 2012 @ 7:00pm</div>
                        
                        <h4><a href="#" title="Campaign Shop">Also Equipt With a Simple Merchandise Shop.</a></h4>
                        
                        <p>An awesome donation system allows your supporters to give you donations to up to $2500.</p>
                        
                        <a href="#" title="Campaign Shop" class="tinyButton roundButtonX right">View</a>
                    </div>
                </div>
                
                <div class="horDouble"></div>
                
                <div class="total_money">
                        <h3>Total Money Raised</h3>
                    <div class="money_block">
                        <ul class="dash_nav money_tab" id="tab_navigate">
                          <li class=" "><a href="#monthly_tab" >Monthly</a></li>
                          <li><a href="#weekly_tab">Weekly</a></li>
                          <li><a href="#daily_tab">Daily</a></li>
                        </ul>
                        <div class="clear"></div>

                        <div class="dash_nav_tab money_tab_content" id="monthly_tab">
                            <p></p><p>Monthly Raised</p><p></p>
                        </div>
                        <div class="dash_nav_tab money_tab_content" id="weekly_tab">
                            <p></p><p>Weekly Raised</p><p></p>
                        </div>
                        <div class="dash_nav_tab money_tab_content" id="daily_tab">
                                      <p></p><p>Daily Raised</p><p></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .Inner -->

            <!-- .Sidebar -->
            <?php include("sidebar.php"); ?>
            <!-- .Sidebar -->

            </div>
            <!-- .Home -->
        </div>
        <!-- .Content -->
    
    </div>
    <!-- .MAIN -->
        <!-- CAMPAIGN -->
            <?php include("compaign.php"); ?>
    <!-- .CAMPAIGN -->

</div>
<!-- .CONTENT -->

<!-- FOOTER -->
            <?php include("footer.php"); ?>

<!-- .FOOTER -->

</body>
</html>
<script type="text/javascript">
$(document).ready(function(){
    $(".dash_nav li:first").addClass("active");
    
    $(".dash_nav_tab").hide();
    $("#tab_navigate li").click(function(){
      $(".dash_nav_tab").hide();
      $(".dash_nav li").removeClass("active");
      $(this).addClass("active");
      var id =$(this).find("a").attr("href");
      $(id).show();
      return false;
    });
    $("#tab_navigate li.active").trigger("click");
});
</script>