<?php 

//--------------------------------------------------------------
//  _____  __  __  ____                __                   
// /\___ \/\ \/\ \/\  _`\             /\ \                  
// \/__/\ \ \ \_\ \ \ \/\_\    ___    \_\ \     __    ____  
//    _\ \ \ \  _  \ \ \/_/_  / __`\  /'_` \  /'__`\ /',__\ 
//   /\ \_\ \ \ \ \ \ \ \L\ \/\ \L\ \/\ \L\ \/\  __//\__, `\
//   \ \____/\ \_\ \_\ \____/\ \____/\ \___,_\ \____\/\____/
//    \/___/  \/_/\/_/\/___/  \/___/  \/__,_ /\/____/\/___/ 
// 
//      http://www.jhcodes.com/ - SAU v2.0 Beta 1
//                jessus.herrera@hotmail.com
//
//--------------------------------------------------------------

// incluimos las funciones

require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/includes/sau-functions.php';
// incluimos la cabecera

include $_SERVER["DOCUMENT_ROOT"].'/sauv2/themes/header.php';
?>



<div id="login" class="text-center">
    
    <img src="themes/sau-logo-white.png">
	
	<div class="well">
      <?php saustatus(); ?>
	</div>
	<?php
      if (isset($_GET['error'])) {
      	geterror();
      }
    ?>

</div>



<?php include $_SERVER["DOCUMENT_ROOT"].'/sauv2/themes/footer.php'; ?>