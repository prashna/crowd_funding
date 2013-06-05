<?php 
include_once("../config/dbconnect.php");
if(isset($_SESSION['ADMIN_STATUS']) && $_SESSION['ADMIN_STATUS']==true)
{
}
else
{
    header("location: index.php");
}

include("header.php"); 

$db = new Database();  
$db->connect();
$sql="SELECT * FROM politicians as a left join user_details as b on a.details_id=b.id";
$res=$db->process_select_query($sql);
$per_page = 10; 
//Calculating no of pages
// $sql = "select * from users";
// $result = mysql_query($sql);
$count = count($res);
$pages = ceil($count/$per_page);

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

            <h2>Politicians List</h2>
            <input type="hidden" value="1" id="pageNumber" />
            <div class="row">
                <div class="span1"></div>
                <div class="span9">
                    <div class="well">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>Name</th>
                              <th>Party</th>
                              <th>Email</th>
                              <th>Address</th>
                              <th>Phone</th>
                              <th>Creation Date </th>
                               <th>Approved</th>
                               <th>Page</th>
                              <!-- <th> Zip Code </th> -->
                              <th style="width: 36px;"></th>
                            </tr>
                          </thead>
                          <div id="loading" ></div>
                          <tbody id="tblcontent">
                           <!--  <tr>
                              <td>1</td>
                              <td>Mark</td>
                              <td>Tompson</td>
                              <td>the_mark7</td>
                              <td>Mark</td>
                              <td>Tompson</td>
                              <td>the_mark7</td>
                              <td>
                                  <a href="edit.php?table=users&id=10"><i class="icon-pencil"></i></a>
                                  <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
                              </td>
                            </tr> -->
                          </tbody>
                        </table>
                    </div>
                    <div class="pagination">
                        <ul>
                            <?php

                               //Pagination Numbers
                                    for($i=1; $i<=$pages; $i++)
                                    {
                                    echo '<li id="'.$i.'"><a href="#">'.$i.'</a></li>';
                                    }
                            ?>
                        </ul>
                    </div>

                </div>
                <div class="span2"></div>
            </div> 
           
        </div>
        <!-- .Content -->
    
    </div>
    <!-- .MAIN -->

</div>
<!-- .CONTENT -->
<div class="modal hide fade" id="pol_view" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <legend>City Page</legend>
                <iframe style="height:100%;width:100%;" id="description_page" src="add_city.php"></iframe>
</div>  
<!-- FOOTER -->
            <?php include("../footer.php"); ?>

<!-- .FOOTER -->


</body>
</html>
<script type="text/javascript">
    // alert("fgh");
    Display_Load();
    $("#tblcontent").load("politician_paginate.php?page=1", Hide_Load());

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
        $("#tblcontent").load("politician_paginate.php?page=" + pageNum, Hide_Load());
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
                    "userType":"politicians"
                    },
                cache: false,
                dataType:"json",
                success: function(result){
                    // console.log(result);
                        if(result.status==1){
                            Display_Load();
                            $("#tblcontent").load("politician_paginate.php?page="+$("#pageNumber").val(), Hide_Load());
                        }
                }
        });
    });
    $(document).on("click",".rec_view",function(){
        //alert($(this).attr('rel-url')); 
      var id=$(this).attr('rel-id');
       var state=1; 
       $("#confirm_delete").on("click",function(){
          $.ajax({
            url:url,
            success:function(data){
            //alert("status"+data);
             state=1;  
            },
            error:function(){
                  //alert("status error");
            }
            
          });

       });
        if(state==1){
            $(this).parent().parent().remove();
        }

    });
    $(document).on("click",".rec_view",function(){
              var pol_id=$(this).attr('rel-id');
              $("#description_page").attr("src",$(this).attr('rel-src'));
              $("#pol_view").show();
       
    });
</script>