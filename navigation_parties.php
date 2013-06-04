<?php 

$db = new Database();  
$db->connect();
$parties = $db->select("parties","id,party_name");
$partiesList="";
// print_r($parties);
for($x = 0; $x < count($parties); $x++)
{
   $partiesList.='<li>
                    <a href="index.php" title="'.$parties[$x]['party_name'].'">
                        '.$parties[$x]['party_name'].'
                    </a>
                </li>';
}
?>
<!-- Navigation -->
        <div id="navigationBckg">
        <div id="navigation">
        	<ul class="navigation">
               <?php echo $partiesList; ?>
               <li><a href="index.php" title="Home">Back to Home</a></li>
               
            </ul>
        </div>
        </div>
    	<!-- .Navigation -->