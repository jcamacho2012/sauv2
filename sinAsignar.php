<?php
// incluimos las funciones

require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/includes/sau-functions.php';
if (isset($_SESSION['iduser'])){
}else{
  header("Location: logout");
}


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title><?php echo SITETITLE; ?></title>

     <!-- SAU core CSS -->
    <link href='https://fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>
    <link href="themes/style.css" rel="stylesheet">
    <link rel="stylesheet" href="themes/css/datepicker.css">
    <link rel="stylesheet" href="themes/css/bootstrap-switch.css">
    <link rel="stylesheet" href="themes/css/style.css">
    
    <?php getstyle(); ?>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <script src="themes/js/jquery.min.js"></script>
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="themes/js/bootstrap.min.js"></script>
    <!-- validation -->
    <script src="themes/js/jquery.validate.min.js"></script>
    <script src="themes/js/additional-methods.min.js"></script>
  
      <script src="//code.jquery.com/jquery-1.12.3.js"></script>
      <script src="themes/js/bootstrap-datepicker.js"></script>
    <script src="themes/js/bootstrap-switch.js"></script>
     
        <script src="themes/js/jquery.dataTables.min.js"></script>        
        <script src="themes/js/dataTables.bootstrap.min.js"></script>        
        <link href="themes/css/dataTables.bootstrap.min.css" rel="stylesheet">
        
    <script type="text/javascript">
$(document).ready(function() {	
	 $('#example').DataTable();
});    
</script>
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
          <a class="navbar-brand" href="#"><i class="fa fa-user"></i> Bienvenido(a) <?php echo $_SESSION['name'];?></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <?php isadmin(); ?>
            <li><a class="logout-btn" href="logout"><i class="fa fa-sign-in"></i> Cerrar Sesion</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">

          <ul class="nav nav-sidebar">
<!--            <li><a href="dashboard"><i class="glyphicon glyphicon-th"></i> Inicio</a></li>
            <li><a href="followers"><i class="fa fa-user-plus"></i> Seguidores</a></li>
            <li><a href="allusers"><i class="fa fa-users"></i> Usuarios</a></li>
            <li><a href="feed"><i class="fa fa-commenting-o"></i> Publicaciones</a></li>-->
            <li><a href="config"><i class="fa fa-cog"></i> Configuración</a></li>
             <?php if($_SESSION['rank']==4 || $_SESSION['rank']==3){
                      echo "<li class=\"active\"><a href=\"unAssig\"><i class=\"fa fa-tasks\"></i> Tareas Sin Asignar</a></li>
                     <li><a href=\"task\"><i class=\"fa fa-tasks\"></i> Mis Tareas</a></li>
                     <li><a href=\"done\"><i class=\"fa fa-check-circle\"></i> Terminadas</a></li>";
                             
                }else{
                     echo "<li><a href=\"task\"><i class=\"fa fa-tasks\"></i> Mis Tareas</a></li>
                         <li><a href=\"done\"><i class=\"fa fa-check-circle\"></i> Terminadas</a></li>";
                }
            ?>
          </ul>

        </div>
       
          <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" id="mensaje">
          <!-- contenido -->
            <div class="col-sm-6">
              <div class="well configuracion-cube">
                <div id="mensaje_tarea"></div> 
                <h4><i class="fa fa-tasks"></i> Tareas Sin Asignar</h4>               
                <div class="container">                  
                  <div>                       
                       <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%" data-height="299" data-click-to-select="true" data-single-select="true">
               	  	<thead>
               	  		<tr>
                                  <th class="hidden">activity</th>
                                  <th class="hidden">process</th>
               	  		  <th>Solicitud</th>
                                  <th>Documento</th>
                                  <th>Empresa</th>
                                  <th>Ciudad</th>
                                  <th>Sin Revisión</th>
                                  <th>Acciones</th>
               	  		</tr>
               	  	</thead>
               	  	<tbody class="searchable">
               	  	  <?php tareaSinAsignar($_SESSION['rank']); ?>
               	  	</tbody>
                     </table>
                      <input type="hidden" class="form-control" name="id" value="<?php echo $_SESSION['iduser']; ?>"/>
                      <input type="hidden" class="form-control" name="rank" value="<?php echo $_SESSION['rank']; ?>"/>
                  </div>                                  
                </div>                             
              </div>
            </div>

      
          <!-- configuracion -->
          

          <!-- contenido -->
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    
    <script src="themes/js/script.js"></script>
    <script src="themes/js/eventos.js"></script>
  </body>
</html>
