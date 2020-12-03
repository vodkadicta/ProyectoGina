<?php
	class Database{
		private $con;
		private $dbhost="localhost";
		private $dbuser="root";
		private $dbpass="";
		private $dbname="prueba";
		function __construct(){
			$this->connect_db();
		}
		public function connect_db(){
			$this->con = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);
			if(mysqli_connect_error()){
				die("Conexión a la base de datos falló " . mysqli_connect_error() . mysqli_connect_errno());
			}
        }
        public function sanitize($var){
            $return = mysqli_real_escape_string($this->con, $var);
            return $return;
          }

          ///////////////////////////////////////////////Inicia Seccion de los usuarios////////////////////////////////////////////////////////
          public function createUsers($id,$nombre,$cuenta,$mail,$contra){
            $blok=0;
            $sql = "INSERT INTO `usuarios` (idUsuario, Nombre, cuenta, mail, contra, bloqueo) VALUES ('$id', '$nombre', '$cuenta','$mail', '$contra', '$blok')";
            $res = mysqli_query($this->con, $sql);
            if (!$res) {
            echo (mysqli_error($this->con));
          }
            if($res){
              return true;
            }else{
            return false;
         }
        }
        public function readUsers(){
          $sql = "SELECT * FROM `usuarios`";
          $res = mysqli_query($this->con, $sql);
          if (!$res) {
            echo (mysqli_error($this->con));
          }
          return $res;
          }
          public function single_recordUsers($id){
            $sql = "SELECT * FROM `usuarios` where idUsuario='$id'";
            $res = mysqli_query($this->con, $sql);
            $return = mysqli_fetch_object($res );
            if (!$res) {
              echo (mysqli_error($this->con));
            }
            return $return ;
          }
          public function updateUsers($nombre,$cuenta,$mail,$contra,$block, $id){
            $sql = "UPDATE `usuarios` SET Nombre='$nombre', cuenta='$cuenta', contra='$contra', bloqueo='$block',mail='$mail' WHERE idUsuario='$id' ";
            $res = mysqli_query($this->con, $sql);
            if (!$res) {
              echo (mysqli_error($this->con));
            }
            if($res){
              return true;
            }else{
              return false;
            }
          }
          public function deleteUsers($id){
            $sql = "DELETE FROM `usuarios` WHERE idUsuario='$id'";
            $res = mysqli_query($this->con, $sql);
            if($res){
            return true;
            }else{
            return false;
            }
            }
            ////////////////////////////////////////////////////////////////////////Termina seccion de los usuarios////////////////////////////////////////////////////////////////

            //////////////////////////////////////////////////////////////////////////Inicia Seccion de los produtos//////////////////////////////////////////////////////////////////
            public function createProd($id,$nombre,$categoria,$descrip,$exist,$precio,$imagen){
              $blok=FALSE;
              $sql = "INSERT INTO `productos` (idProducto, nombre, categoria, descrip, existencia, precio, imagen) VALUES ('$id', '$nombre','$categoria','$descrip', '$exist', '$precio','$imagen')";
              $res = mysqli_query($this->con, $sql);
              if($res){
                return true;
              }else{
              return false;
           }
          }
          public function readProd(){
            $sql = "SELECT * FROM `productos`";
            $res = mysqli_query($this->con, $sql);
            if (!$res) {
              echo (mysqli_error($this->con));
            }
            return $res;
            }
            public function single_recordProd($id){
              $sql = "SELECT * FROM `productos` WHERE idProducto='$id'";
              $res = mysqli_query($this->con, $sql);
              $return = mysqli_fetch_object($res);
              if (!$res) {
                echo (mysqli_error($this->con));
              }
              return $return ;
            }
            public function updateProd($id,$nombre,$categoria,$descrip,$exist,$precio,$imagen){
              $sql = "UPDATE `productos` SET nombre='$nombre', categoria='$categoria', descrip='$descrip', existencia='$exist', precio='$precio', imagen='$imagen' WHERE idProducto='$id' ";
              $res = mysqli_query($this->con, $sql);
              if (!$res) {
                echo (mysqli_error($this->con));
              }
              if($res){
                return true;
              }else{
                return false;
              }
            }
            public function deleteProd($id){
              $sql = "DELETE FROM `productos` WHERE idProducto='$id'";
              $res = mysqli_query($this->con, $sql);
              if($res){
              return true;
              }else{
              return false;
              }
              }
              ////////////////////////////////////////////////////////////////////////Termina seccion de los productos//////////////////////////////////////////////////
}
?>