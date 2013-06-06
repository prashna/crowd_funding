
<?php

include("config/dbconnect.php");
 include("header.php");
 if(isset($_GET['pol_id'])){
 	//echo "req politicians". $_GET['pol_id'];
 	$id=$_GET['pol_id'];
 	$db=new Database();
  $db->connect();
    $sql = "select pol.id as politician_id,pol.email as email,det.id as det_id,det.*,par.id as party_id,par.party_name,cat.id as cat_id,cat.category_name,c.id as city_id,c.city_name from politicians as pol\n"
    . "left join user_details as det on det.id=pol.details_id\n"
    . "left join parties as par on par.id=pol.party_id\n"
    . "left join categories as cat on cat.id=pol.category_id\n"
    . "left join cities as c on c.id=pol.city_id where pol.id=".$id.";";
  // echo $sql;
  $result =$db->process_select_query($sql);
	//echo "welcome";
	//print_r($result);
  //echo $result[0]['politician_id'];
  ?>

    <script src="js/google-analytics.min.js"></script>
   <link rel="stylesheet" type="text/css" href="styles/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="styles/politician.css">
   <script type="text/javascript" href="js/bootstrap.min.js"></script>


<!-- CONTENT -->
  <div id="contentHolder" class="width100">
	<div id="grayGradientLight"></div>

   <div id="main" class="width1000">

    	<!-- Navigation -->
    <?php include("navigation_parties.php"); ?>

  <!-- <ul id="politicians_list">
         <li> -->
         <div class="row">
         <div class="p_name"><?php echo $result[0]['first_name']." ".$result[0]['last_name']; ?> </div>
          <div class="span2 profile_pic">
             <img src="uploads/profile/<?php echo $result[0]['profile_image']; ?>">
          </div>
          <div class="p_address span4">
            <p class="row"><span class="span2 sub_heads">Campaign</span><span><?php echo $result[0]['city']; ?></span></p>
             <p class="row"><span class="span2 sub_heads">Party </span><span><?php echo $result[0]['party_name']; ?></span></p>
              <p class="row"><span class="span2 sub_heads">Category </span><span><?php echo $result[0]['category_name']; ?></span></p>
            <p class="row"><span class="span2 sub_heads">Address</span><span><?php echo $result[0]['address'].", ".$result[0]['city']."-".$result[0]['zip']; ?></span></p>
            <p class="row"><span class="span2 sub_heads">State</span><span><?php echo $result[0]['state']; ?></span></p>
            <p class="row"><span class="span2 sub_heads">Contact</span><span><?php echo $result[0]['phone_number']; ?></span>
            	<p class="row"><span class="span2 sub_heads">Email</span><span><?php echo $result[0]['email']; ?></span>
            </p>

         </div>
         </div>
          <h4 style="margin-left: 25px;">Official Page</h4>
         <iframe src="admin/des_page.php?pol_id=<?php echo $result[0]['politician_id']; ?>" id="politician_frame">

         </iframe>
     <!--   </li>


  </ul> -->

 <?php  }else{
 	echo "Oops Something went to wrong!";
  } ?>

 <script src="js/google-analytics.min.js"></script>
</div>
</div>
?>