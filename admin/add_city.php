<?php 

session_start();


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
            <h2>Add City</h2>
         <form action="add_city.php" id="add_city_form" name="add_city_form">
            <div class="row">
                <div class="span1"></div>
                <div class="span9">
                    <div clas="row">
                        <div class="span6">
                            <input type="text" id="city_name" required name="city_name" placeholder="Enter the City Name">
                        </div>
                    </div>
                    <div clas="row">
                        <div class="span9">
                            <textarea class="ckeditor" id="city_description" name="city_description"></textarea>
                        </div>
                    </div>
                    <div clas="row">
                        <div class="span9">
                            <input type="submit" id="submit_button" class="redButton customSubmit roundButtonX" value="Submit">
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
    // alert("fgh");
    Display_Load();
    $("#tblcontent").load("city_paginate.php?page=1", Hide_Load());

    //Display Loading Image
    function Display_Load()
    {
    $("#loading").fadeIn(900,0);
    $("#loading").html("<img class='loader' src='../img/loading.gif'>");
    }
    //Hide Loading Image
    function Hide_Load()
    {
    $("#loading").fadeOut('slow');
    };

    //Default Starting Page Results
    // $(".pagination li:first")
    // .css({'color' : '#FF0084'}).css({'border' : 'none'});
    // Display_Load();


    //Pagination Click
    $(".pagination li").click(function(){
        Display_Load();
        //CSS Styles
        $(".pagination li")
        .css({'border' : 'solid #dddddd 1px'})
        .css({'color' : '#0063DC'});

        $(this)
        .css({'color' : '#FF0084'})
        .css({'border' : 'none'});

        //Loading Data
        var pageNum = this.id;
        console.log("req"+pageNum);
        $("#pageNumber").val(pageNum);
        $("#tblcontent").load("city_paginate.php?page=" + pageNum, Hide_Load());
    });

    $(document).on("click",".change_approve",function(){
        current_status=$(this).attr('id');
        user_id=$(this).attr('data_user_id');
        $.ajax({
                type: "POST",
                url: "change_approve.php",
                data: {
                    "current_status":current_status,
                    "user_id":user_id,
                    "userType":"users"
                    },
                cache: false,
                dataType:"json",
                success: function(result){
                    // console.log(result);
                        if(result.status==1){
                            Display_Load();
                            $("#tblcontent").load("city_paginate.php?page="+$("#pageNumber").val(), Hide_Load());
                        }
                }
        });
    });
    $(document).on("click","#create_city_button",function(){
        city_name=$("#city_name").val();
        city_description=$("#city_description").val();
        city_description=$("#city_exist_error").val();
        if(city_name!="" && city_description!="")
        {
            $.ajax({
                    type: "POST",
                    url: "city_manage.php",
                    data: {
                        "city_name":city_name,
                        "city_description":city_description,
                        "process_type":"add"
                        },
                    cache: false,
                    success: function(result){
                    }
            });
        }
        else
        {
            $("#city_error").html("Enter All Details");
            return false;
        }
    });

    $(document).on("change","#city_name",function(){
      var city_name=$(this).val();
      check_avail(city_name,"new");
    });
    function check_avail(city_name,from)
    {
        if(from =="new")
            errorID="#city_exist_error";
        else
            errorID="#city_exist_edit_error";

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
                            $(errorID).html(result);
                        else
                            $(errorID).html("");
                    }
            });
    }

    $(document).on("click",".rec_delete",function(){
              var city_id=$(this).attr('rel-id');
        
       $("#confirm_delete").on("click",function(){
        // alert(city_id);


          $.ajax({
                    type: "POST",
                    url: "city_manage.php",
                    data: {
                        "city_id":city_id,
                        "process_type":"delete"
                        },
                    cache: false,
                    success: function(result){
                       location.reload();
                    }
            });

       });
    });

$(document).on("click",".rec_update",function(){
              var city_id=$(this).attr('rel-id');
              var city_name=$(this).attr('rel-name');
              $("#city_name_edit").val($(this).attr('rel-name'));
              $("#city_description_edit").val($(this).attr('rel-des'));
        // alert(city_id);
        $("#edit_city_button").on("click",function(){
            city_name=$("#city_name_edit").val();
            city_description=$("#city_description_edit").val();
            if(city_name=="" || city_description=="" )
            {
                $("#city_error_edit").html("Enter All Fields");
                return false;
            }
            else
            {
                $.ajax({
                        type: "POST",
                        url: "city_manage.php",
                        data: {
                            "city_name":city_name,
                            "city_description":city_description,
                            "city_id":city_id,
                            "process_type":"update"
                            },
                        cache: false,
                        dataType: "json",
                        success: function(result){
                            alert(result.status);
                        }
                });
            }
        });
    });

</script>