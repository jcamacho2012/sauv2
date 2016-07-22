<!DOCTYPE html>
<html>
    <head>
        <title>bootstrap datepicker examples</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Bootstrap CSS and bootstrap datepicker CSS used for styling the demo pages-->
        <link rel="stylesheet" href="themes/css/datepicker.css">
<!--        <link rel="stylesheet" href="themes/css/bootstrap.css">-->
    </head>
    <body>
        <div class="container">
            <div class="hero-unit">
                <input  type="text" placeholder="click to show datepicker"  id="example1">
            </div>
        </div>
        <!-- Load jQuery and bootstrap datepicker scripts -->
        <script src="themes/js/jquery.min.js"></script>
        <script src="themes/js/bootstrap-datepicker.js"></script>
        <script type="text/javascript">
            // When the document is ready
            $(document).ready(function () {
                
                $('#example1').datepicker({
                    format: "dd/mm/yyyy"
                });  
            
            });
        </script>
        <?php
//            $servername = "localhost";
//            $username = "root";
//            $password = "toor";
//            $dbname = "sau2";
//
//            // Create connection
//            $conn = new mysqli($servername, $username, $password, $dbname);
//            // Check connection
//            if ($conn->connect_error) {
//                die("Connection failed: " . $conn->connect_error);
//            } 
//
//            $sql = "INSERT INTO rol (id,nombre)
//            VALUES (1, 'Doe')";
//
//            if ($conn->query($sql) === TRUE) {
//                echo "New record created successfully";
//            } else {
//                echo "Error: " . $sql . "<br>" . $conn->error;
//            }
//
//            $conn->close();
        require_once $_SERVER["DOCUMENT_ROOT"].'/sauv2/includes/sau-functions.php';
            if(prueba()){
                echo 'true';               
            }else{
                echo 'false';
            }
        ?>
    </body>
</html>