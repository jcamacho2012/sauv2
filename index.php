<?php 

// incluimos las funciones

require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/includes/sau-functions.php';
// incluimos la cabecera

include $_SERVER["DOCUMENT_ROOT"].'/sauv2/themes/header.php';
?>


<div id="login" class="text-center">
    <div>
        <img src="themes/map.png" width="400" height="100">
    </div>
    	
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