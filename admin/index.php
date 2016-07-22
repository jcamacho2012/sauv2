<?php
require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/admin/includes/admin.functions.php';

if (isset($_SESSION['iduser'])) {
   if ($_SESSION['rank'] <> 2) {
	header('Location: logout');
   }
}else{
    header('Location: logout');
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
            <li class="active"><a href="index.php"><i class="glyphicon glyphicon-th"></i> Inicio</a></li>
            <li><a href="usuarios"><i class="fa fa-users"></i> Usuarios</a></li>
<!--            <li><a href="seguidores"><i class="fa fa-user-plus"></i> Seguidores</a></li>
            <li><a href="publicaciones"><i class="fa fa-commenting-o"></i> Publicaciones</a></li>-->
            <li><a href="configuration"><i class="fa fa-cog fa-spin"></i> Configuración</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <!-- contenido -->

            
            <!-- estadisticas -->
             <div class="col-sm-3 col-xs-6 paddingone">
             	<div class="data-cubes data-cubes-1">
             		 <div class="col-sm-6"><i class="fa fa-users fa-4x"></i></div>
             		 <div class="col-sm-6"><h1><?php countuser(); ?></h1><small>Usuarios Registrados</small></div>
             	</div>
             </div>
             <div class="col-sm-3 col-xs-6 paddingone">
             	<div class="data-cubes data-cubes-2">
             		 <div class="col-sm-6"><i class="fa fa-files-o fa-4x"></i></div>
             		 <div class="col-sm-6"><h1><?php countpost(); ?></h1><small>Publicaciones Totales</small></div>
             	</div>
             </div>
             <div class="col-sm-3 col-xs-6 paddingone">
             	<div class="data-cubes data-cubes-3">
             		 <div class="col-sm-6"><i class="fa fa-commenting fa-4x"></i></div>
             		 <div class="col-sm-6"><h1><?php countcomments(); ?></h1><small>Comentarios Totales</small></div>
             	</div>
             </div>
             <div class="col-sm-3 col-xs-6 paddingone">
             	<div class="data-cubes data-cubes-4">
             		 <div class="col-sm-6"><i class="fa fa-comments-o fa-4x"></i></div>
             		 <div class="col-sm-6"><h1><?php countfollowers(); ?></h1><small>Registros Seguidores</small></div>
             	</div>
             </div>                          
             <!-- estadisticas -->

             <!-- graficas -->
             <div class="col-sm-6 paddingone">
               <div class="well graficas">
               	  <div id="donut-example"></div>
               </div>             	
             </div>
           
          <!-- contenido -->
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="../themes/js/jquery.min.js"></script>
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../themes/js/bootstrap.min.js"></script>
    <script src="../themes/js/raphael-min.js"></script>
    <script src="../themes/js/morris.min.js"></script>
    <script type="text/javascript">
       Morris.Donut({
         element: 'donut-example',
         data: [
           {label: "Total Usuarios Registrados", value: <?php countuser(); ?>},
           {label: "Total Publicaciones", value: <?php countpost(); ?>},
           {label: "Total Comentarios", value: <?php countcomments(); ?>},
           {label: "Total Seguidores", value: <?php countfollowers(); ?>}
         ]
       });
    </script>
  </body>
</html>
