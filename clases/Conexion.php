<?php 
    class Conexion {
        public function conectar(){
            $host = "localhost";
            $usuario = "backend";//root
            $password = "backend2025";
            $base = "criss_agenda";
            $conexion = mysqli_connect(
                $host, $usuario, $password, $base
            );
            return $conexion;
        }
    }
