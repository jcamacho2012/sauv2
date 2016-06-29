<?php
require_once 'includes/admin.functions.php';

if (isset($_SESSION['iduser'])) {
   if ($_SESSION['rank'] <> 2) {
	header('Location: logout');
   }
}else{
    header('Location: logout');
}

if (isset($_POST['post'])) {
    borrarpublicacion($_POST['post']);
}


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo SITETITLE; ?></title>

    <!-- SAU core CSS -->
    <link href='https://fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>
    <link  href="../themes/css/morris.css" rel="stylesheet">
    <link href="../themes/style.css" rel="stylesheet">
    <link href="admin.css" rel="stylesheet">
    <?php getstyle(); ?>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body class="dashboard-panel">

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><i class="fa fa-clone animated infinite flash"></i> SAU v2</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a class="logout-btn" href="../dashboard"><i class="fa fa-cubes"></i> Escritorio</a></li>
            <li><a class="logout-btn" href="logout"><i class="fa fa-sign-in"></i> Cerrar Sesion</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">

          <ul class="nav nav-sidebar">
            <li><a href="index.php"><i class="glyphicon glyphicon-th"></i> Inicio</a></li>
            <li><a href="usuarios"><i class="fa fa-users"></i> Usuarios</a></li>
            <li><a href="seguidores"><i class="fa fa-user-plus"></i> Seguidores</a></li>
            <li class="active"><a href="publicaciones"><i class="fa fa-commenting-o"></i> Publicaciones</a></li>
            <li><a href="configuration"><i class="fa fa-cog fa-spin"></i> Configuración</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <!-- contenido -->

        
             <!-- ultimos posts -->
             <div class="col-sm-12 paddingone">
               <div class="well graficas">
               	  

               	  <table class="table table-striped">
               	  	<thead>
               	  		<tr>
               	  		  <th>Usuario</th>
                        <th>Publicación</th>
               	  		  <th>Fecha</th>
                        <th>Permalink</th>
                        <th>Acciones</th>
               	  		</tr>
               	  	</thead>
               	  	<tbody>
               	  	  <?php postpost(); ?>
               	  	</tbody>
               	  </table>
                  
               </div>             	
             </div>             
             <!-- ultimos posts -->



          <!-- contenido -->
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="../themes/js/jquery.min.js"></script>
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../themes/js/bootstrap.min.js"></script>
  </body>
</html>
