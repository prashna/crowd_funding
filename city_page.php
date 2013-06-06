
<?php

include("config/dbconnect.php");
 include("header.php");
 if(isset($_GET['city_id'])){
 	//echo "req politicians". $_GET['pol_id'];
 	$id=$_GET['city_id'];
 	$db=new Database();
  $db->connect();
   $city_sql = "select * from cities where id=".$id.";";
   $city_image_sql = "select * from city_images where city_id=".$id.";";
   // $politician_sql="select * from politicians as p left join user_details as d on d.id=p.details_id where city_id=".$id.";";
    $politician_sql = "select pol.id as politician_id,pol.email as email,det.id as det_id,det.*,par.id as party_id,par.party_name,cat.id as cat_id,cat.category_name from politicians as pol\n"
    . "left join user_details as det on det.id=pol.details_id\n"
    . "left join parties as par on par.id=pol.party_id\n"
    . "left join categories as cat on cat.id=pol.category_id\n"
    . "where pol.city_id=".$id;
  // echo $politician_sql;
  //echo $sql;
  $cities =$db->process_select_query($city_sql);
  $city_images=$db->process_select_query($city_image_sql);
  $politicians=$db->process_select_query($politician_sql);
	//echo "welcome";
	// print_r($cities);
 //  print_r($city_images);
 //  print_r($politicians);

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
    <?php 
    include("navigation_parties.php"); 
    ?>


        <div class="row">
          <div class="span1"></div>
          <div class="span9">
            <h3 id="city_head"><?php echo $cities[0]['city_name']; ?></h3>
            <iframe src="admin/des_page.php?city_id=<?php echo $cities[0]['id']; ?>" id="politician_frame">
            </iframe>
          </div>
          <div class="span2"></div>
        </div>
        <div class="row">
          <div class="span6">
            <ul id="politicians_list">
              <?php foreach ($politicians as $value) {
              ?>
              <li id="<?php echo $value['id']; ?>">
                <div class="row">
                  <div class="p_name"><?php echo $value['first_name']; ?> <?php echo $value['last_name']; ?> </div>
                  <div class="span1 profile_pic">
                    <img src="uploads/profile/<?php echo $value['profile_image']; ?>"></img>
                  </div>
                  <div class="p_address span4">
                    <p class="row">
                      <span class="span2">Party</span>
                      <span>
                        <?php echo $value['party_name']; ?>
                      </span>
                    </p>
                    <p class="row">
                      <span class="span2">Category</span>
                      <span>
                        <?php echo $value['category_name']; ?>
                      </span>
                    </p>
                    <a class="btn btn-danger" href="single_politician.php?pol_id=<?php echo $value['politician_id']; ?>">
                      View More..
                    </a>
                  </div>
                </div>
              </li>
              <?php } ?>
            </ul>
          </div>
          <div class="span4">
            <?php if($city_images) { ?>
            <div id="sidebarGallery">
              <div class="slides_container">
                <?php foreach ($city_images as $value) { ?>
                  <div class="slide">
                    <a href="uploads/cities/<?php echo $value['image_name'];?>" title="Image 1">
                      <img src="uploads/cities/<?php echo $value['image_name'];?>" alt="Image 1">
                      <span class="imageCaption"></span>
                    </a>
                  </div>
                <?php } ?>
                </div>
              </div>
              <?php } ?>
          </div>
        </div>



</div>



 <?php  }else{
 	echo "Oops Something went to wrong!";
  } ?>

 <script src="js/google-analytics.min.js"></script>
</div>
</div>
?>

