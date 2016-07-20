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
    <link rel="stylesheet" href="themes/css/datepicker.css">
    <link rel="stylesheet" href="themes/css/bootstrap-switch.css">
    <link rel="stylesheet" href="themes/css/style.css">
   
       
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
                     <li class=\"active\"><a href=\"task\"><i class=\"fa fa-tasks\"></i> Mis Tareas</a></li>
                     <li><a href=\"done\"><i class=\"fa fa-check-circle\"></i> Terminadas</a></li>";
                             
                }else{
                     echo "<li class=\"active\"><a href=\"task\"><i class=\"fa fa-tasks\"></i> Mis Tareas</a></li>
                         <li><a href=\"done\"><i class=\"fa fa-check-circle\"></i> Terminadas</a></li>";
                }
            ?>
          </ul>

        </div>
       
          <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" id="mensaje">
          <!-- contenido -->
          <div class="col-sm-6" id="contenido">
              <div class="well configuracion-cube">
                <h4><i class="fa fa-tasks"></i> Mis Tareas</h4>               
                <div class="container">
                  <h2>Mis Tareas</h2>
                  <div>
                        <div class="input-group"> <span class="input-group-addon">Buscar: </span>
                            <input id="filter" type="text" class="form-control" placeholder="buscar por solicitud, documento o empresa">
                        </div>
                       <table class="table table-striped">
               	  	<thead>
               	  		<tr>
                                  <th class="hidden">activity</th>
                                  <th class="hidden">process</th>
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
               	  	<tbody class="searchable">
               	  	  <?php  tareas($_SESSION['iduser'],$_SESSION['rank']);
                           ?>
               	  	</tbody>
                     </table>
                      <input type="hidden" class="form-control" name="id" value="<?php echo $_SESSION['iduser']; ?>"/>
                      <input type="hidden" class="form-control" name="rank" value="<?php echo $_SESSION['rank']; ?>"/>
                      <input type="hidden" class="form-control" name="username" value="<?php echo $_SESSION['username']; ?>"/>
                      <input type="hidden" class="form-control" name="identity_card" value="<?php echo $_SESSION['identity_card']; ?>"/>
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
    <script src="themes/js/bootstrap-datepicker.js"></script>
    <script src="themes/js/bootstrap-switch.js"></script>
      
    <script type="text/javascript">
        $(document).ready(function() {
            (function($) {
                $('#filter').keyup(function() {
                    var rex = new RegExp($(this).val(), 'i');
                    $('.searchable tr').hide();
                    $('.searchable tr').filter(function() {
                        return rex.test($(this).text());
                    }).show();
                })
            }(jQuery));  
   
        	var td,campo,valor,id;
		$(document).on("click","td.editable span",function(e)
		{
			anls="";
			e.preventDefault();
			$("td:not(.id)").removeClass("editable");
			td=$(this).closest("td");
			valor=$(this).text();
                        valor=valor.replace('Cancel','');
                        cadena=valor.split(',');
                        $.each(cadena, function(index, value) {
                            anls+=$.trim(value)+"\n";
                        });
			id=$(this).closest("tr").find("#prdt_sn").text();
                        td.text("").html("<textarea class='caja' id='analisis_text'>"+anls+"</textarea><a class='enlace guardar' href='#'>Guardar</a><a class='enlace cancelar' href='#'>Cancelar</a>");
		});
		
		$(document).on("click",".cancelar",function(e)
		{
			e.preventDefault();                        
			td.html("<span>"+anls+"</span>");
			$("td:not(.id)").addClass("editable");
		});
		
		$(document).on("click",".guardar",function(e)
		{
			$(".mensaje").html("<img src='themes/images/loading.gif'>");
			e.preventDefault();
			nuevovalor=$(this).closest("td").find("textarea").val();
			if(nuevovalor.trim()!="")
			{
                                var num = $("#req_no").val();
				$.ajax({
					type: "POST",
					url: "includes/editinplace.php",
                                        data: { numero:num,valor: nuevovalor, id:id }					
				})
				.done(function( msg ) {
					$(".mensaje").html(msg);
					td.html("<span>"+nuevovalor+"</span>");
					$("td:not(.id)").addClass("editable");
					setTimeout(function() {$('.ok,.ko').fadeOut('fast');}, 3000);
				});
			}
			else $(".mensaje").html("<p class='ko'>Debes ingresar un valor</p>");
		});
        });
       
        function validateNumber(event) {
            var key = window.event ? event.keyCode : event.which;
            if (event.keyCode === 8 || event.keyCode === 46
                || event.keyCode === 37 || event.keyCode === 39) {
                return true;
            }
            else if ( key < 48 || key > 57 ) {
                return false;
            }
            else return true;
        };
            
        
        $('.hacer').on('click', function() {
            // Get the record's ID via attribute
            var req_no = $(this).attr('data-id');
            var id= $("input[name=id]").val();
            var rank= $("input[name=rank]").val();
            var identity_card= $("input[name=identity_card]").val();
            var username= $("input[name=username]").val();
            var activity=$(this).closest("tr").find("#activity").text();
            var process=$(this).closest("tr").find("#process").text();
            var opcion='hacer';

            $("#contenido").empty();
            $('.greyBox').after("<div class='redBox'>Iron man</div>");
            $("#contenido").append("<div id='fountainG'>\n\
                                        <div id='fountainG_1' class='fountainG'></div>\n\
                                        <div id='fountainG_2' class='fountainG'></div>\n\
                                        <div id='fountainG_3' class='fountainG'></div>\n\
                                        <div id='fountainG_4' class='fountainG'></div>\n\
                                        <div id='fountainG_5' class='fountainG'></div>\n\
                                        <div id='fountainG_6' class='fountainG'></div>\n\
                                        <div id='fountainG_7' class='fountainG'></div>\n\
                                        <div id='fountainG_8' class='fountainG'></div>\n\
                                    </div>");
        
            $.ajax({
                url: 'acciones.php',
                method: 'POST',           
                data: { reqno: req_no,opcion:opcion,id:id,rank:rank,activity:activity,process:process,username:username,identity_card:identity_card}
            }).success(function(response) {
                // Populate the form fields with the data returned from server
                  $('#fountainG').remove();
                  $('#contenido').append(response);              
                 })
                .fail(function(response){
                    $('#userForm').append('<h1>No existe conexion con ecuapass</h1>');
                });
        });
    
         
    
        $('.liberar').on('click', function() {
        // Get the record's ID via attribute
            var activity=$(this).closest("tr").find("#activity").text();
            var process=$(this).closest("tr").find("#process").text();       
            var opcion='liberar';

            $.ajax({
                url: 'acciones.php',
                method: 'POST',           
                data: { activity:activity,process:process,opcion:opcion}
            }).success(function(response) {
                // Populate the form fields with the data returned from server
                alert('Solicitud fue liberada');
                var pathname = window.location.pathname;
                window.location.replace(pathname);
                
            });
        });
        
    </script>
  </body>
</html>
