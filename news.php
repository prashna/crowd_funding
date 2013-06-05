<?php include("header.php"); ?>
<style type="text/css">
  #left_tab{
    padding-top: 20%;
  }
</style>
  <script src="js/google-analytics.min.js"></script>
   <link rel="stylesheet" type="text/css" href="styles/bootstrap.min.css">
   <script type="text/javascript" href="js/bootstrap.min.js"></script>
<!-- CONTENT -->
  <div id="contentHolder" class="width100">
	<div id="grayGradientLight"></div>

   <div id="main" class="width1000">

    	<!-- Navigation -->
    <?php include("navigation_parties.php");
     include("config/db.php");

     $sql_parties = "SELECT `id`,`party_name` FROM `parties` limit 8";
     $sql_category = "SELECT id, category_name FROM `categories` ";



     ?>

    	<!-- .Navigation -->



        <!-- Content -->
      <div id="content" class="red">
        <div class="row">
          <div class="span2"><!-- left nav -->
             <ul class="nav nav-tabs nav-stacked myTab" id="left_tab">
             <?php $result = mysql_query($sql_parties);
                  $num_rows=mysql_num_rows($result);
                  if($num_rows)
                  {
                    while($row = mysql_fetch_array($result))
                    {
                  echo '<li id="'.$row['id'].'"><a href="#tab1" data-toggle="tab">'.$row['party_name'].'</a></li>';


                     }
                   }

                  ?>

                <!-- <li> <a href="#">Home</a> </li>
                <li><a href="#cont1">Tutorials</a></li>
                <li><a href="#cont2">Practice Editor </a></li>
                <li><a href="#cont3">Gallery</a></li> -->
              </ul>
          </div>
          <div class="span6"><!-- right nav -->
             <div class="row">
              <div class="span7">
                 <ul class="nav nav-pills myTab" id="right_tab">
                  <?php $result = mysql_query($sql_category);
                  $num_rows=mysql_num_rows($result);
                  if($num_rows)
                  {
                    while($row = mysql_fetch_array($result))
                    {
                  echo '<li id="'.$row['id'].'"><a href="#tab1" data-toggle="tab">'.$row['category_name'].'</a></li>';


                     }
                   }

                  ?>
                 <!--  <li class="active"><a href="#tab1" data-toggle="tab">Section 1</a></li>
                  <li><a href="#tab2" data-toggle="tab">Section 2</a></li> -->
                </ul>

              </div>
            </div>
             <!-- tab body -->
              <div class="row">
                <div class="span6">
                  <div class="tab-content" id="tab_content">
                    <div class="tab-pane active" id="tab1">
                     top1
                    </div>
                    <div class="tab-pane" id="tab2">
                      top2
                    </div>
                     <div class="tab-pane" id="cont1">
                      left1
                    </div>
                     <div class="tab-pane" id="cont2">
                      left2
                    </div>
                  </div>
                </div>
              </div>
          </div>

         </div>


       </div>

      </div>




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
<script type="text/javascript">
$(document).ready(function(){
    $('#left_tab a').on("click",function (e) {
     e.preventDefault();
     //$("#right_tab li").removeClass("active");
     $(this).tab('show');
    });

    $('#right_tab a').on("click",function (e) {
     e.preventDefault();
     //$("#left_tab li").removeClass("active");
     $(this).tab('show');
    });
  });
</script>

</body>
</html>
