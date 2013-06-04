<?php 

session_start();
if(isset($_SESSION['LOGIN_STATUS']) && $_SESSION['LOGIN_STATUS']==true)
{
}
else
{
    header("location: index.php");
}

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

            <h2>Biography</h2>
            
            <div class="doubleFramed large alignleft">
                <a href="images/tb/bio1.jpg" title="Double Framed - Large">
                    <img src="images/tb/bio1-dfl.jpg" alt="Double Framed - Large">
                </a>
            </div>
            
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean lacinia, turpis vitae elementum consequat, dui quam tincidunt risus, ac vestibulum odio sem commodo arcu. Aliquam rutrum dapibus enim. Etiam velit sem, pretium a laoreet in, bibendum nec lacus. Duis bibendum convallis consectetur. Mauris fringilla turpis a libero tempor tincidunt. Nulla augue urna, laoreet elementum accumsan sit amet, accumsan vitae justo. Donec sagittis diam ut quam bibendum vehicula. Nulla facilisi. Duis metus lorem, viverra sodales venenatis non, fermentum vitae massa. Vestibulum eu eleifend arcu. Vivamus vehicula, nulla a vulputate lobortis, quam massa euismod orci, eu tempor justo turpis quis magna. Curabitur at urna lorem, nec cursus dui. Mauris egestas facilisis bibendum. Ut vehicula accumsan sem non mattis.</p>

            <p>Vestibulum ultricies malesuada odio, nec dignissim nibh dignissim eu. Quisque non imperdiet ipsum. Nullam id dolor leo, eu ultricies magna. Nunc nunc neque, bibendum eu tristique eget, posuere at lectus. </p>
            
            <p>Donec justo lorem, iaculis et malesuada sit amet, dapibus ut orci. In malesuada, felis et euismod scelerisque, mi neque molestie orci, in condimentum urna velit a nisi. In auctor vestibulum nunc, at hendrerit quam convallis id. Donec ornare, odio eget dignissim adipiscing, neque diam eleifend massa, sit amet luctus urna libero eleifend massa. In imperdiet molestie ultricies. Donec iaculis sollicitudin ligula in scelerisque. Curabitur non elit eget tellus convallis viverra. Fusce varius aliquam faucibus. Nam sodales ante ac urna mollis viverra dictum libero elementum. Nulla at ligula ipsum, in iaculis tortor.</p>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean lacinia, turpis vitae elementum consequat, dui quam tincidunt risus, ac vestibulum odio sem commodo arcu. Aliquam rutrum dapibus enim. Etiam velit sem, pretium a laoreet in, bibendum nec lacus. Duis bibendum convallis consectetur. Mauris fringilla turpis a libero tempor tincidunt. Nulla augue urna, laoreet elementum accumsan sit amet, accumsan vitae justo. Donec sagittis diam ut quam bibendum vehicula. Nulla facilisi. Duis metus lorem, viverra sodales venenatis non, fermentum vitae massa. Vestibulum eu eleifend arcu. Vivamus vehicula, nulla a vulputate lobortis, quam massa euismod orci, eu tempor justo turpis quis magna. Curabitur at urna lorem, nec cursus dui. Mauris egestas facilisis bibendum. Ut vehicula accumsan sem non mattis.</p>
            
            <ul class="blue">
                <li>List Item 1</li>
                <li>List Item 2</li>
                <li>List Item 3</li>
                <li>List Item 4</li>
            </ul>
            
            <div class="clear"></div>
            
            <ul class="red">
                <li>List Item 1</li>
                <li>List Item 2</li>
                <li>List Item 3</li>
                <li>List Item 4</li>
            </ul>
            
            <div class="clear"></div>
            
            <h4>SUBHEADLINE</h4>
            
            <div class="alignright">
                <div class="caption">
                    <a href="images/tb/bio2.jpg" title="Caption Holder - Example">
                        <img src="images/tb/bio2-caption.jpg" alt="Caption Holder - Example">
                    </a>
                    <p>Vestibulum ultricies malesuada odio, nec dignissim nibh dignissim eu. </p>
                </div>
                <div class="caption">
                    <a href="images/tb/bio3.jpg" title="Caption Holder - Example">
                        <img src="images/tb/bio3-caption.jpg" alt="Caption Holder - Example">
                    </a>
                    <p>Vestibulum ultricies malesuada odio, nec dignissim nibh dignissim eu. </p>
                </div>
            </div>
            
            <p>Vestibulum ultricies malesuada odio, nec dignissim nibh dignissim eu. Quisque non imperdiet ipsum. Nullam id dolor leo, eu ultricies magna. Nunc nunc neque, bibendum eu tristique eget, posuere at lectus. Etiam sit amet enim id orci adipiscing elementum ac quis nunc. Nulla non molestie leo. In congue, velit in sagittis pellentesque.</p>

            <p>Donec justo lorem, iaculis et malesuada sit amet, dapibus ut orci. In malesuada, felis et euismod scelerisque, mi neque molestie orci, in condimentum urna velit a nisi. In auctor vestibulum nunc, at hendrerit quam convallis id. Donec ornare, odio eget dignissim adipiscing, neque diam eleifend massa, sit amet luctus urna libero eleifend massa. In imperdiet molestie ultricies. Donec iaculis sollicitudin ligula in scelerisque. Curabitur non elit eget tellus convallis viverra. Fusce varius aliquam faucibus. Nam sodales ante ac urna mollis viverra dictum libero elementum. Nulla at ligula ipsum, in iaculis tortor.</p>

            <p>Aliquam volutpat convallis hendrerit. Mauris tristique sollicitudin risus, vel viverra dolor fringilla sed. Fusce at erat et sapien placerat consectetur. Nulla facilisi. Proin non massa at sem tempor malesuada quis sit amet dolor. Quisque rutrum aliquet magna, eu vehicula risus luctus a. Quisque in sapien sed augue interdum luctus. Cras auctor semper tellus. Proin consequat hendrerit nisl, eu convallis ante lobortis vitae.</p>
            
            <p>Vestibulum ultricies malesuada odio, nec dignissim nibh dignissim eu. Quisque non imperdiet ipsum. Nullam id dolor leo, eu ultricies magna. Nunc nunc neque, bibendum eu tristique eget, posuere at lectus. Etiam sit amet enim id orci adipiscing elementum ac quis nunc. Nulla non molestie leo. In congue, velit in sagittis pellentesque.</p>

            <p>Donec justo lorem, iaculis et malesuada sit amet, dapibus ut orci. In malesuada, felis et euismod scelerisque, mi neque molestie orci, in condimentum urna velit a nisi. In auctor vestibulum nunc, at hendrerit quam convallis id. Donec ornare, odio eget dignissim adipiscing, neque diam eleifend massa, sit amet luctus urna libero eleifend massa. In imperdiet molestie ultricies. Donec iaculis sollicitudin ligula in scelerisque. Curabitur non elit eget tellus convallis viverra. Fusce varius aliquam faucibus. Nam sodales ante ac urna mollis viverra dictum libero elementum. Nulla at ligula ipsum, in iaculis tortor.</p>

            <p>Aliquam volutpat convallis hendrerit. Mauris tristique sollicitudin risus, vel viverra dolor fringilla sed. Fusce at erat et sapien placerat consectetur. Nulla facilisi. Proin non massa at sem tempor malesuada quis sit amet dolor. Quisque rutrum aliquet magna, eu vehicula risus luctus a. Quisque in sapien sed augue interdum luctus. Cras auctor semper tellus. Proin consequat hendrerit nisl, eu convallis ante lobortis vitae.</p>

            
        </div>
        <!-- .Content -->
    
    </div>
    <!-- .MAIN -->
    
    <!-- CAMPAIGN -->
            <?php include("../compaign.php"); ?>
    <!-- .CAMPAIGN -->
</div>
<!-- .CONTENT -->

<!-- FOOTER -->
            <?php include("../footer.php"); ?>

<!-- .FOOTER -->

</body>
</html>
