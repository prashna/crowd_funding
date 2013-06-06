<?php include("header.php"); ?>

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
     include("config/db.php");

     $sql_parties = "SELECT `id`,`party_name` FROM `parties` limit 8";
     $sql_category = "SELECT id, category_name FROM `categories` ";



     ?>

    	<!-- .Navigation -->

         <!-- loading -->
         <div class="hide" id="loading"><img src="img/loading.gif"></img></div>

        <!-- Content -->
      <div id="content" class="red">
        <div class="row">
          <div class="span2"><!-- left nav -->
             <ul class="nav nav-tabs nav-stacked myTab" id="left_tab">
                 <?php $result = mysql_query($sql_category);
                  $num_rows=mysql_num_rows($result);
                  if($num_rows)
                  {
                    while($row = mysql_fetch_array($result))
                    {
                  echo '<li id="'.$row['id'].'" class="category_li" ><a href="#tab1" data-toggle="tab">'.$row['category_name'].'</a></li>';


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

                   <?php $result = mysql_query($sql_parties);
                  $num_rows=mysql_num_rows($result);
                  if($num_rows)
                  {
                    while($row = mysql_fetch_array($result))
                    {
                  echo '<li id="'.$row['id'].'" class="party_li"><a href="#tab1" data-toggle="tab">'.$row['party_name'].'</a></li>';


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
                <div class="span8">
                  <div class="tab-content" id="tab_content">
                    <div class="tab-pane active" id="tab1">



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
<?php //include("compaign.php"); ?>

    <!-- .CAMPAIGN -->
</div>
<!-- .CONTENT -->

<!-- FOOTER -->
<?php include("footer.php"); ?>

<script id='tmpl-politicians' type='text/template'>
 <ul id="politicians_list">
<% if (data) { %>
    <% for (var i = 0; i < data.length; i++) { %>

      <% var politician = data[i]; %>

         <li id="<%= politician.id %>">
         <div class="row">
         <div class="p_name"><%= politician.first_name %> <%= politician.last_name %> </div>
          <div class="span2 profile_pic">
             <img src="uploads/profile/<%= politician.profile_image %>"></img>
          </div>
          <div class="p_address span4">
            <p class="row"><span class="span2">Campaign</span><span><a href="city_page.php?city_id=<%= politician.city_id %>"><%= politician.city_name %></a></span></p>
            <p class="row"><span class="span2">Address</span><span><%= politician.address %>,<%= politician.city %> - <%= politician.zip %></span></p>
            <p class="row"><span class="span2">State</span><span><%= politician.state %></span></p>
            <p class="row"><span class="span2">Contact</span><span><%= politician.phone_number %></span></p>
            <a class="btn btn-danger" href="single_politician.php?pol_id=<%= politician.politician_id %>">View More..</a>
         </div></li>

    <% } %>
  <% } %>
  </ul>


</script>

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

    var cat_id="";
    var part_id="";
    function fill_politicians(cat_id,part_id){
      $("#loading").removeClass("hide");
      $('#tab1').hide();
     $.ajax({
      url: "fetch_details.php",
      type: "GET",
      data: {"category" :cat_id,"party":part_id},
      dataType: "json",
      success:function(data){
         $("#loading").addClass("hide");
        var template_politicians=$("#tmpl-politicians").html();
        var result=_.template(template_politicians,{data:data});
        $('#tab1').html(result);
      },
      error:function(){
        $("#loading").addClass("hide");
         $('#tab1').html("No result found!");
      }
    });
     $("#loading").addClass("hide");
      $('#tab1').show();
    }

    //
    $(".party_li").on("click",function(){
     // alert($(this).attr('id'));
      part_id=$(this).attr('id');
      if(cat_id != "" && part_id != ""){
        fill_politicians(cat_id,part_id);
      }
    });

    $(".category_li").on("click",function(){
      //alert($(this).attr('id'));
      cat_id=$(this).attr('id');
       if(cat_id != "" && part_id != ""){
        fill_politicians(cat_id,part_id);
      }
    });


  });
</script>

</body>
</html>
