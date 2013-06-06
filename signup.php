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
    $city_name=$_POST['place'];
    $category_id=$_POST['category_id'];

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
            $rows.=",party_id,category_id,city_id";
            $result=$db->select("cities","id",'city_name="'.$city_name.'"');
              $city_id=$result[0]['id'];
            $values =array($email,$password,$id,$datenow,$datenow,$party_id,$category_id,$city_id);

        }
         $db->insert($table,$values,$rows);
        // if($db->insert($table,$values,$rows))
        //     echo "<script>alert('Registered')</script>";
        // else
        //     echo "<script>alert('Registeration failed')</script>";

    }
    else
        echo "<script>alert('Registeration failed')</script>";
}
$parties = $db->select("parties","id,party_name");
$categories = $db->select("categories","id,category_name");
?>
<script>
  $(function() {
    $( "#place" ).autocomplete({
      source: "suggest_cites.php"
    });
  });

  $(document).on("change","#place",function()
    {
        $.ajax({
                type: "POST",
                url: "login.php",
                data: {
                    "city_name":$("#place").val(),
                    "checkcity":"1"
                    },
                cache: false,
                dataType:"json",
                success: function(result){
                         if(result.status==0){
                            $("#place_error").html(result.message);
                            $("#place_error").css("display","inline-block");
                         }
                }
            });
    });
  </script>

<script type="text/javascript">
$(document).ready(function(){
// parties list show hide
    $("#party_list").hide();
    $("#category_list").hide();
    $("#place_list").hide();
    $(document).on("change","#userType",function()
    {
        if($(this).val() == "users" || $(this).val() == "")
        {
          $("#party_list").hide();
          $("#category_list").hide();
          $("#place_list").hide();
        }
        else
        {
          $("#party_list").show();
          $("#category_list").show();
          $("#place_list").show();
        }
    });

$("#signUp").validate({
        rules:{
          // uname:"required",
          email:{
              required:true,
              email: true
          },
          password:{
            required:true,
            minlength: 6
          },
          confirm_password:{
            required:true,
            equalTo : "#password"
          },
          userType:{
            required:true
          },
          party_id:{
            required:true
          },
          category_id:{
            required:true
          },
          place:{
            required:true
          },
          fname:{
              required:true
          },
          lname:{
            required:true
          },
          address:{
            required:true
          },
          city:{
            required:true
          },
          state:{
            required:true
          },
          zip:{
            required:true,
            minlength: 5,
            maxlength: 7,
            number:true
          },
          phone:{
            required:true,
            minlength: 10,
            maxlength: 12,
            number:true
          },
          citizen:{
            required:true
          }
        },
        messages:{
          email:"Enter Valid Email",
          password:{
            required:"Enter your Password",
            minlength:"Password must be atleast 6 characters"
          },
          confirm_password:{
            required:"Repeat your password",
            equalTo:"These passwords don't match. Try again?"
          },
          userType:"Select user type",
          party_id:"Select your party",
          category_id:"Select your category",
          place:"Enter Valid Place",
          fname:"Enter your First Name",
          lname:"Enter your Last Name",
          address:"Enter your Address",
          city:"Enter your City",
          state:"Enter your State",
          zip:{
            required:"Enter Valid Zip Code",
            minlength:"Zip Code must be atleast 5 digits",
            maxlength:"Zip Code must be lessthan 7 digits",
            number:"Enter Valid Zip Code"
          },
          phone:{
            required:"Enter Valid Phone Number",
            minlength:"Phone Number must be atleast 10 digits",
            maxlength:"Phone Number must be lessthan 12 digits",
            number:"Enter Valid Phone Number"
          },
          citizen:"Confirm the details"
        },
       errorPlacement: function (error, element) {
           error.insertAfter(element);
       }
   });



// Upload button clicks
   $(document).on("click","#submit_button",function(){
       if($("#signUp").valid()){
          if($("#email_error").html()!="Email Already exists")
              document.signUp.submit();
          else
          {
            return false;
          }
       }
 
    });

// login button clicks
   $(document).on("change","#email",function(){
            $.ajax({
                type: "POST",
                url: "login.php",
                data: {
                    "email":$("#email").val(),
                    "checkemail":"1"
                    },
                cache: false,
                dataType:"json",
                success: function(result){
                         if(result.status==0){
                            $("#email_error").html(result.message);
                            $("#email_error").css("display","inline-block");
                         }
                }
            });
       
    });
});

</script>
<!-- CONTENT -->
<div id="contentHolder" class="width100">
	<div id="grayGradientLight"></div>
    
    <!-- MAIN -->
    <div id="main" class="width1000">
    
        <?php //include("navigation.php"); ?>
    	
        <!-- Content -->
        <div id="content" style="height:900px" class="default">

            <h2>Sign Up</h2>
            
            <form action="signup.php" method="post" id="signUp">
            	<p>
                 <input name="email" id="email" type="text" placeholder="Your Email Address..." >
                 <label for="email" class="error" style=""></label>
                 <label id="email_error" class="error" style="display:inline-block !important;"></label>
                </p>

            	<p>
                 <input name="password" id="password" type="password" placeholder="Password...">
                 <label for="password" class="error" style=""></label>
                </p>

            	<p>
                 <input name="confirm_password" placeholder="Repeat Password..." id="confirm_password" type="password">
                 <label for="confirm_password"  class="error" style=""></label>
                </p>

                <p>
                    <select name="userType" id="userType">
                        <option value="">-- Select User Type --</option>
                        <option value="users">User</option>
                        <option value="politicians">Politician</option>
                    </select>
                    <label for="userType"  class="error" style=""></label>
                </p>
                <p id='party_list'>
                    <select name="party_id" id="party_id">
                        <option value="">-- Select Party -- </option>
                        <?php echo generate_select($parties, array("id","party_name"));?>
                    </select>
                    <label for="party_id"  class="error" style=""></label>
                </p>
                <p id='category_list'>
                    <select name="category_id" id="category_id">
                        <option value="">-- Select Category -- </option>
                        <?php echo generate_select($categories, array("id","category_name"));?>
                    </select>
                    <label for="category_id"  class="error" style=""></label>
                </p>
                <p id='place_list'>
                 <input name="place" placeholder="Enter Place..." id="place" type="text">
                 <label for="place" id="place_error" class="error" style=""></label>
                </p>

                <div class="horDashed"></div>
                
                <h4>Tell Us Something About You</h4>
                
             	<p>
                <input name="fname" id="fname" type="text" placeholder="Your First Name">

              </p>

             	<p><input name="lname" id="lname" type="text" placeholder="Your Last Name"></p>

             	<p><input name="address" id="address" type="text" placeholder="Street Address..."></p>
             	<p><input name="city" id="city" type="text" placeholder="City..."></p>

             	<p><input name="state" id="state" type="text" placeholder="State..."></p>

             	<p><input name="zip" id="zip" type="text" placeholder="Zip..."></p>

             	<p><input name="phone" id="phone" type="text" placeholder="Phone Number..."></p>
                <div class="horDashed"></div>
                
<br/>
                
                <div class="width50 right"><input type="submit" id="submit_button" class="bigButton roundButtonX right" value="Submit"></div>
                
                <div class="width50">
                  
                  <p>
                    <input name="citizen" id="citizen" type="checkbox" value="1"> 
                    <label for="citizen">I confirm that I am a citizen</label>
                    <label for="citizen" class="error" style=""></label>
                  </p>
                </div>
<br/>
<br/>
               
            </form>

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
