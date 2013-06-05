<?php 

session_start();
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
         <form action="cities.php" method="post" id="edit_city_form" name="edit_city_form">
            <div class="row">
                <div class="span1"></div>
                <div class="span9">
                    <div clas="row">
                        <div class="span6">
                            <input type="hidden" id="city_id" name="city_id" value="<?php echo $city_id; ?>">
                            <input type="text" id="city_name" required name="city_name" placeholder="Enter the City Name" value="<?php echo $result[0]['city_name']; ?>">
                        </div>
                    </div>
                    <div clas="row">
                        <div class="span9">
                            <textarea class="ckeditor" id="city_description" name="city_description"><?php echo $result[0]['city_description']; ?></textarea>
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
