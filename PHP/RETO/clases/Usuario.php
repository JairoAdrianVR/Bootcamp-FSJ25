<?php

    class Usuario{
        private  $id;
        private  $nombre;
        private  $rol;
        private  $password;

       public function __construct( $id,  $nombre,  $rol,  $password)
       {$this->id = $id;$this->nombre = $nombre;$this->rol = $rol;$this->password = $password;}
	
        /*
            POSIBLE INICIO DE SESION, A SABER POR EL TIEMPO
        */

        /**
         * Get the value of nombre
         */ 
        public function getNombre()
        {
                return $this->nombre;
        }

        /**
         * Set the value of nombre
         *
         * @return  self
         */ 
        public function setNombre($nombre)
        {
                $this->nombre = $nombre;

                return $this;
        }

        /**
         * Get the value of rol
         */ 
        public function getRol()
        {
                return $this->rol;
        }

        /**
         * Set the value of rol
         *
         * @return  self
         */ 
        public function setRol($rol)
        {
                $this->rol = $rol;

                return $this;
        }

        /**
         * Get the value of password
         */ 
        public function getPassword()
        {
                return $this->password;
        }

        /**
         * Set the value of password
         *
         * @return  self
         */ 
        public function setPassword($password)
        {
                $this->password = $password;

                return $this;
        }

        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }
    }

?>