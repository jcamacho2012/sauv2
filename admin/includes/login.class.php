<?php

require_once 'config.class.php';
session_start();
class Login
{

    private static $instancia;
    private $dbh;
 
    private function __construct()
    {

        $this->dbh = Conexion::singleton_conexion();

    }
 
    public static function singleton_login()
    {

        if (!isset(self::$instancia)) {

            $miclase = __CLASS__;
            self::$instancia = new $miclase;

        }

        return self::$instancia;

    }
	
	public function login_users($email,$password){
		
		try {

			//$crypt = sha1(SALT.$password.PEPER);
                        
			$sql = "SELECT * FROM users WHERE username = ? AND state='HABILITADO'";
			$query = $this->dbh->prepare($sql);
			$query->bindParam(1,$email);
			$query->execute();
			$this->dbh = null;

			//si existe el usuario
			if($query->rowCount() == 1)
			{
				 
				 $fila  = $query->fetch();

                                 if (password_verify($password, $fila['password'])){ 
                                    $_SESSION['iduser'] = $fila['iduser'];
                                    $_SESSION['username'] = $fila['username'];
                                    $_SESSION['rank'] = $fila['rank'];
                                    $_SESSION['city']=$fila['city'];
                                    $_SESSION['identity_card']=$fila['identity_card'];
                                    $_SESSION['name']=$fila['name'];
                                    return TRUE;
                                 }else{
                                    return FALSE;
                                 }
				
			}else
			return FALSE;
			
		}catch(PDOException $e){
			
			print "Error!: " . $e->getMessage();
			
		}		
	}
    

     // Evita que el objeto se pueda clonar
    public function __clone()
    {

        trigger_error('La clonación de este objeto no está permitida', E_USER_ERROR);

    }

}