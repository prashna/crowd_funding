<?php 

include("header.php"); 
$db = new Database();  
$db->connect();

if(isset($_POST['email']) && $_POST['email']!="")
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $zip=$_POST['zip'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    $party_id=$_POST['party_id'];

    $datenow=date('Y-m-d h:i:s', time());
    $table = "user_details";
    $rows='first_name,last_name,address,city,state,zip,phone_number,created_at,updated_at';
    $values=array($fname,$lname,$address,$city,$state,$zip,$phone,$datenow,$datenow);
    $id=$db->insert($table,$values,$rows);
    if($id!=0)
    {
        $table=$_POST['userType'];
        $rows="email,password,details_id,created_at,updated_at";

        if($table=="users")
        {
            $values =array($email,$password,$id,$datenow,$datenow);
        }
        else
        {
            $rows.=",party_id";
            $values =array($email,$password,$id,$datenow,$datenow,$party_id);

        }
        // $db->insert($table,$values,$rows);
        if($db->insert($table,$values,$rows))
            echo "<script>alert('Registered')</script>";
        else
            echo "<script>alert('Registeration failed')</script>";

    }
    else
        echo "<script>alert('Registeration failed')</script>";
}
$parties = $db->select("parties","id,party_name");
$partiesList="";
// print_r($parties);
for($x = 0; $x < count($parties); $x++)
{
   $partiesList.='<option value="'.$parties[$x]['id'].'">'.$parties[$x]['party_name'].'</option>';
}


?>
<script type="text/javascript">
$(document).ready(function(){

// parties list show hide
    $("#party_list").hide();
    $(document).on("change","#userType",function()
    {
        if($(this).val() == "users" || $(this).val() == "")
            $("#party_list").hide();
        else
            $("#party_list").show();
    });

$("#signUp").validate({
       errorPlacement: function (error, element) {
           error.insertAfter(element);
       }
   });



// Upload button clicks
   $(document).on("click","#submit_button",function(){
       if($("#signUp").valid()){
            alert("success");
       }
       
    });
});

</script>
<!-- CONTENT -->
<div id="contentHolder" class="width100">
	<div id="grayGradientLight"></div>
    
    <!-- MAIN -->
    <div id="main" class="width1000">
    
        <?php include("navigation.php"); ?>
    	
        <!-- Content -->
        <div id="content" class="default">

            <h2>Sign Up</h2>
            
            <form action="signup.php" method="post" id="signUp">
            	<p><input name="email" id="email" type="text" class="required email" placeholder="Your Email Address..." ></p>

            	<p><input name="password" class="required" id="password" type="text" placeholder="Password..."></p>

            	<p><input name="confirm_password" placeholder="Repeat Password..." class="required" id="confirm_password" type="text"></p>

                <p><select name="userType" class="required" id="userType">
                    <option value="">-- Select User Type --</option>
                    <option value="users">User</option>
                    <option value="politicians">Politician</option>
                </select>
                </p>
                <p id='party_list'>
                    <select name="party_id" class="required" id="party_id">
                        <option value="">-- Select Party -- </option>
                        <?php echo $partiesList; ?>
                    </select>
                </p>

                <div class="horDashed"></div>
                
                <h4>Tell Us Something About You</h4>
                
             	<p><input name="fname" id="fname" type="text" placeholder="Your First Name"></p>

             	<p><input name="lname" id="lname" type="text" placeholder="Your First Name"></p>

             	<p><input name="address" id="address" type="text" placeholder="Street Address..."></p>
             	<p><input name="city" id="city" type="text" placeholder="City..."></p>

             	<p><input name="state" id="state" type="text" placeholder="State..."></p>

             	<p><input name="zip" id="zip" type="text" placeholder="Zip..."></p>

             	<p><input name="phone" id="phone" type="text" placeholder="Phone Number..."></p>
                
                
                <div class="width50 right"><input type="submit" id="submit_button" class="bigButton roundButtonX right" value="Submit"></div>
                
                <div class="width50"><p><input name="citizen" id="citizen" type="checkbox" value="1"> <label for="citizen">I confirm that I am a citizen</label></p></div>

               
            </form>

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
