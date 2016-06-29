<?php
// incluimos las funciones
require_once 'includes/sau-functions.php';
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
            <li><a href="dashboard"><i class="glyphicon glyphicon-th"></i> Inicio</a></li>
            <li><a href="followers"><i class="fa fa-user-plus"></i> Seguidores</a></li>
            <li><a href="allusers"><i class="fa fa-users"></i> Usuarios</a></li>
            <li><a href="feed"><i class="fa fa-commenting-o"></i> Publicaciones</a></li>
            <li><a href="config"><i class="fa fa-cog"></i> Configuración</a></li>
             <?php if($_SESSION['rank']==4){
                     echo "<li><a href=\"unAssig\"><i class=\"fa fa-tasks\"></i> Tareas Sin Asignar</a></li>
                     <li class=\"active\"><a href=\"task\"><i class=\"fa fa-tasks\"></i> Mis Tareas</a></li>";
                             
                }else{
                     echo "<li class=\"active\"><a href=\"task\"><i class=\"fa fa-tasks\"></i> Mis Tareas</a></li>";
                }
            ?>
          </ul>

        </div>
       
          <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" id="mensaje">
          <!-- contenido -->
            <div class="col-sm-6">
              <div class="well configuracion-cube">
                <h4><i class="fa fa-tasks"></i> Mis Tareas</h4>               
                <div class="container">
                  <h2>Mis Tareas</h2>
                  <div>
                       <table class="table table-striped">
               	  	<thead>
               	  		<tr>                                    
               	  		  <th>Solicitud</th>
                                  <th>Documento</th>
                                  <?php 
                                        if($_SESSION['rank']==2){
                                            echo '<th>Empresa</th>
                                                  <th>Receptor</th>
                                                  <th>Receptor Revisado</th>
                                                  <th>Certificador</th>
                                                  <th>Certificador Revisado</th>';
                                        }else{
                                            echo '<th>Empresa</th>
                                                  <th>Acciones</th>';
                                        }
                                        
                                    ?>
                                  
               	  		</tr>
               	  	</thead>
               	  	<tbody>
               	  	  <?php tareas($_SESSION['iduser'],$_SESSION['rank']); ?>
               	  	</tbody>
                     </table>
                  </div>
                  
                 <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">

                      <!-- Modal content-->
                      <div class="modal-content">
                           <div class="modal-header" style="padding:35px 50px;">
                               
                                <h4><span class="glyphicon glyphicon-check"></span> Revisión de Solicitud</h4>
                          </div>
                          <div class="modal-body" style="padding:40px 50px;">
                            <form id="userForm" name="form1" method="post" class="form-horizontal">
                                <div class="form-group">                                   
                                   <div class="col-xs-5">
                                       <input type="hidden" class="form-control" name="id" value="<?php echo $_SESSION['iduser']; ?>"/>
                                   </div>
                                </div>
                                
                           </form>
                         </div>
                      
                  </div>

                    </div>
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
    <script src="themes/js/jquery.min.js"></script>
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="themes/js/bootstrap.min.js"></script>
    <!-- validation -->
    <script src="themes/js/jquery.validate.min.js"></script>
    <script src="themes/js/additional-methods.min.js"></script>
    <script type="text/javascript">
        
        $(":button").not('.liberar').click(function(){
             $("#myModal").modal();
        });
        
        $("#aprobar").click(function(){
            var num= $("input[name=req_no]").val();
            var id= $("input[name=id]").val();
            var opcion=1;
            $.ajax({
            url: 'buscar.php',
            method: 'POST',
            data: { reqno: num, opcion:opcion,id:id}
                }).success(function(response) {                   
                    // Show the dialog
                    $('#mensaje').html(response);// no sale mensaje de confirmacion 
                    bootbox
                        .dialog({
                            title: 'Edit the user profile',
                            message: $('#userForm'),
                            show: false // We will show it manually later
                        })
                        .on('shown.bs.modal', function() {
                            $('#userForm')
                                .show()                             // Show the login form
                                .formValidation('resetForm'); // Reset form
                        })
                        .on('hide.bs.modal', function(e) {
                            // Bootbox will remove the modal (including the body which contains the login form)
                            // after hiding the modal
                            // Therefor, we need to backup the form
                            $('#userForm').hide().appendTo('body');
                        })
                        .modal('show');
                });
        });
        
        
         $('.editButton').on('click', function() {
        // Get the record's ID via attribute
        var req_no = $(this).attr('data-id');
        var id= $("input[name=id]").val();
        var opcion=2;
        
        $.ajax({
            url: 'buscar.php',
            method: 'POST',           
            data: { reqno: req_no,opcion:opcion,id:id}
        }).success(function(response) {
            // Populate the form fields with the data returned from server
              var response = $.parseJSON(response);
            $('#userForm')
                .find('[name="req_no"]').val(response.req_no).end()
                .find('[name="dcm_no"]').val(response.dcm_no).end()
                .append('<p>prueba</p>');

            // Show the dialog
            bootbox
                .dialog({
                    title: 'Edit the user profile',
                    message: $('#userForm'),
                    show: false // We will show it manually later
                })
                .on('shown.bs.modal', function() {
                    $('#userForm')
                        .show()                             // Show the login form
                        .formValidation('resetForm'); // Reset form
                })
                .on('hide.bs.modal', function(e) {
                    // Bootbox will remove the modal (including the body which contains the login form)
                    // after hiding the modal
                    // Therefor, we need to backup the form
                    $('#userForm').hide().appendTo('body');
                })
                .modal('show');
        });
    });
    
     $('.liberar').on('click', function() {
        // Get the record's ID via attribute
        var req_no = $(this).attr('data-id');       
        var opcion=3;
        
        $.ajax({
            url: 'buscar.php',
            method: 'POST',           
            data: { reqno: req_no,opcion:opcion}
        }).success(function(response) {
            // Populate the form fields with the data returned from server
            alert('Solicitud fue liberada');
            var pathname = window.location.pathname;
            window.location.replace(pathname);
//              var response = $.parseJSON(response);
           

//            // Show the dialog
//            bootbox
//                .dialog({
//                    title: 'Edit the user profile',
//                    message: $('#userForm'),
//                    show: false // We will show it manually later
//                })
//                .on('shown.bs.modal', function() {
//                    $('#userForm')
//                        .show()                             // Show the login form
//                        .formValidation('resetForm'); // Reset form
//                })
//                .on('hide.bs.modal', function(e) {
//                    // Bootbox will remove the modal (including the body which contains the login form)
//                    // after hiding the modal
//                    // Therefor, we need to backup the form
//                    $('#userForm').hide().appendTo('body');
//                })
//                .modal('show');
        });
    });
        
    </script>
  </body>
</html>
