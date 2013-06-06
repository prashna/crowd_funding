<?php 
include("header.php"); 
$db=new Database();
$db->connect();

if(isset($_GET['city_id']))
{

        $city_id=$_GET['city_id'];
        $table = "cities";
        $where ='id='.$city_id;
        $result=$db->select($table,'*',$where);
}

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
            <h2>Update City</h2>
         <form action="cities.php" enctype="multipart/form-data" method="post" id="edit_city_form" name="edit_city_form">
            <div class="row">
                <div class="span1"></div>
                <div class="span9">
                    <div clas="row">
                        <div class="span6">
                            <input type="hidden" id="city_id" name="city_id" value="<?php echo $city_id; ?>">
                            <input type="text" id="city_name" name="city_name" placeholder="Enter the City Name" value="<?php echo $result[0]['city_name']; ?>">
                           <label for="city_name" class="error" style=""></label>
                        </div>
                    </div>
                    <div clas="row">
                        <div class="span6">
                            <label id="city_exist_error" class="error" style="display:inline-block !important;"></label>
                        </div>
                    </div>
                    
                    <div clas="row">
                        <div class="span9">
                            <textarea class="ckeditor" id="city_description" name="city_description"><?php echo $result[0]['city_description']; ?></textarea>
                        </div>
                    </div>
                    <div clas="row">
                        <div class="span9">
                            <input type="file" accept="image/*" multiple="multiple" id="files" name="files[]">
                        </div>
                    </div>
                    <div clas="row">
                        <div class="span9">
                            <input type="submit" id="submit_button" class="redButton customSubmit roundButtonX" value="Update">
                        </div>
                    </div>
                </div>
                <div class="span2"></div>
            </div> 
           </form>
        </div>
        <!-- .Content -->
    
    </div>
    <!-- .MAIN -->

</div>
<!-- .CONTENT -->

<!-- FOOTER -->
            <?php include("../footer.php"); ?>

<!-- .FOOTER -->


</body>
</html>
<script type="text/javascript">

$("#edit_city_form").validate({
       rules:{
          // uname:"required",
          city_name:{
              required:true
          }
        },
        messages:{
          city_name:{
            required:"Enter the City Name"
          }
        },
        errorPlacement: function (error, element) {
           error.insertAfter(element);
       }
   });

   $(document).on("click","#submit_button",function(){
       if($("#add_city_form").valid()){
          if($("#city_exist_error").html()!="City Already exists")
              document.signUp.submit();
          else
          {
            return false;
          }
       }
       
    });

$(document).on("change","#city_name",function(){
    var old_city_name=<?php echo $result[0]['city_name']; ?>;
    alert(old_city_name);
      var city_name=$(this).val();
      errorID="#city_exist_error";
        if(old_city_name!=city_name){
            $.ajax({
                    type: "POST",
                    url: "city_manage.php",
                    data: {
                        "city_name":city_name,
                        "process_type":"check_avail"
                        },
                    cache: false,
                    success: function(result){
                        if(result!="success")
                        {
                            $(errorID).html(result);
                            $(errorID).css("display","inline-block");
                        }
                        else if(result=="success")
                        {
                            $(errorID).html("");
                        }
                    }
            });
        }
        else
            $(errorID).html("");
    });

</script>