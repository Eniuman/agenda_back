<?php 
    class Conexion {
        public function conectar(){
            $host = "127.0.0.1";
            $usuario = "root";//root
            $password = "";
            $base = "agenda";
            $conexion = mysqli_connect(
                $host, $usuario, $password, $base
            );
            return $conexion;
        }
    }