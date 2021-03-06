<?php 
include("dashboard.inc.php");
if(!(isset($_SESSION['LOGIN_STATUS']) && $_SESSION['LOGIN_STATUS']==true))
{
            echo "<script>window.location.href='index.php';</script>";
}
?>
<style type="text/css">
  #left_tab{
    padding-top: 20%;
  }
</style>
<div id="contentHolder" class="width100">
  <div id="grayGradientLight"></div>
  <div id="main" class="width1000">
    <!-- Navigation -->
      <?php 
      include("navigation.php");
      ?>

    <!-- .Navigation -->
    <div class="dashboard">
      <p> <?php echo $msg;?></p>
        <ul class="dash_nav" id="tab_navigate">
          <li class="<?php echo $active_profile.' '.$active;?>  whiteButton "><a href="#profile_tab" >My Profile</a></li>
          <li class="<?php echo $active_my_page;?> whiteButton "><a href="#mypage_tab" >My Page</a></li>
          <li class=" <?php echo $active_change_pass;?> whiteButton "><a href="#change_pass_tab" >Change Password</a></li>

        </ul>
        <div class="clear"></div>

        <div class="dash_nav_tab" id="profile_tab">
            <h3> Edit My Profile</h3>
             <form method="post" enctype="multipart/form-data">
              <input type="hidden" name="details_id" value="<?php echo $details_id;?>">
              <div id="profile_pic">
                <img id="preview" src="uploads/profile/<?php
                 if($profile_image!='')
                    echo $profile_image;
                  else
                    echo 'noimage.png';
                ;?>" width="170" height="170" />
                <p id='filetag'>
                  <input type="file" name="thumb_file" id="thumb_file" accept="image/*" onchange="readURL(this)" />
                </p>
              </div>
              <p id='party_list'>
                <select name="politician[party_id]" id="party_id">
                  <option value="">
                    -- Select Party -- 
                  </option>
                        <?php echo (generate_select($parties, array("id","party_name"),$party_id));?>
                </select>
                <label for="party_id"  class="error" style="">
                </label>
              </p>
              <p id='category_list'>
                <select name="politician[category_id]" id="category_id">
                  <option value="">
                    -- Select Category -- 
                  </option>
                        <?php echo (generate_select($categories, array("id","category_name"),$category_id));?>
                </select>
                <label for="category_id"  class="error" style="">
                </label>
              </p>
              <p id='place_list'>
                <input name="city_name" placeholder="Enter Place..."  value="<?php echo $city_name;?>" id="place" type="text">
                <label for="place" id="place_error" class="error" style="">
                </label>
              </p>
              <p>
                <input name="detail[first_name]" id="fname" value="<?php echo $first_name;?>" type="text" placeholder="Your First Name">
              </p>
              <p>
                <input name="detail[last_name]" id="lname" value="<?php echo $last_name;?>"type="text" placeholder="Your Last Name">
              </p>
              <p>
                <input name="detail[address]" id="address" type="text" value="<?php echo $address;?>" placeholder="Street Address...">
              </p>
              <p>
                <input name="detail[city]" id="city" type="text" value="<?php echo $city;?>" placeholder="City...">
              </p>
              <p>
                <input name="detail[state]" id="state" type="text" value="<?php echo $state;?>" placeholder="State...">
              </p>
              <p>
                <input name="detail[zip]" id="zip" type="text"  value="<?php echo $zip;?>" placeholder="Zip...">
              </p>
              <p>
                <input name="detail[phone_number]" id="phone" type="text" value="<?php echo $phone_number;?>" placeholder="Phone Number...">
              </p>
              <div class="horDashed">
              </div>
              <br/>
              <div class="width50">
                <input type="submit" id="submit_button" name="update" class="bigButton roundButtonX " value="Update">
              </div>
              <br/>
              <br/>
            </form>
          </div>
        <div class="dash_nav_tab" id="mypage_tab">
          <h3><?php echo isset($page_name)? $page_name : "My Page";?></h3> 
          <?php if(isset($approved))
                  echo ($approved=="1")?'<h5>Approved</h5>' : '<h5> Not Approved Yet</h5>';
          ?>
          <div class="clear"></div>
            <form method ="post">
              <?php if(isset($page)){
                echo '<input type="hidden" name="page_id" value="'.$page_id.'">';
              }?>
               <p>
                <input name="page[page_name]" id="page_name" value="<?php echo $page_name;?>" type="text" placeholder="Page Name">
              </p>
              <p>
                <textarea class="ckeditor" name="page[content]"><?php echo $content;?></textarea>
              </p>
              <div class="horDashed">
              </div>
              <br/>
              <div class="width50">
                <input type="submit" id="submit_button" name="update_page" class="bigButton roundButtonX " value="Update">
              </div>
            </form>
        </div>
        <div class="dash_nav_tab" id="change_pass_tab">
                      <h3>Change Password</h3>

            <form method ="post" id="change_password_form">
                <p>
                 <input name="old_password" id="old_password" type="password" placeholder="Current Password...">
                 <label for="old_password" class="error" style=""></label>
                </p>
                <p>
                 <input name="password" id="password" type="password" placeholder="Password...">
                 <label for="password" class="error" style=""></label>
                </p>

                <p>
                 <input name="confirm_password" placeholder="Repeat Password..." id="confirm_password" type="password">
                 <label for="confirm_password"  class="error" style=""></label>
                </p>
              <div class="horDashed">
              </div>
              <br/>
              <div class="width50">
                <input type="submit" id="submit_button" name="update_pass" class="bigButton roundButtonX " value="Update">
              </div>
            </form>
        </div>
      </div>
  </div>
</div>
<?php //include("compaign.php"); ?>
</div>

<!-- FOOTER -->
<?php include("footer.php"); ?>
<!-- .FOOTER -->
<script type="text/javascript">
$(document).ready(function(){
    $( "#place" ).autocomplete({
      source: "suggest_cites.php"
    });
    $(".dash_nav_tab").hide();
    $("#tab_navigate li").click(function(){
      $(".dash_nav_tab").hide();
      $("#tab_navigate li").removeClass("active");
      $(this).addClass("active");
      var id =$(this).find("a").attr("href");
      $(id).show();
      return false;
    });
    $("#tab_navigate li.active").trigger("click");
    $("#change_password_form").validate({
            rules:{
              old_password:{
                required:true,
                minlength: 6
              },
              password:{
                required:true,
                minlength: 6
              },
              confirm_password:{
                required:true,
                equalTo : "#password"
              },
            },
            messages:{
           password:{
            required:"Enter your Password",
            minlength:"Password must be atleast 6 characters"
          },
          old_password:{
            required:"Enter your Password",
            minlength:"Password must be atleast 6 characters"
          },
          confirm_password:{
            required:"Repeat your password",
            equalTo:"These passwords don't match. Try again?"
          }
        }
        });
  });
function readURL(input) {
          var file_type =input.files[0].type;
          if (file_type.indexOf("image") !== -1)
          {
            if (input.files && input.files[0]) {
                  var reader = new FileReader();

                  reader.onload = function (e) {
                      $('#preview').attr('src', e.target.result);
                  }

                  reader.readAsDataURL(input.files[0]);
              }
          }
          else
          {
        alert("select Image File only...");
        var msg='<input type="file" required name="thumb_file" id="thumb_file" accept="image/*" onchange="readURL(this)" />';
        $('#preview').attr('src', '#');
        $('#filetag').html(msg);
          }

        }
</script>

</body>
</html>
