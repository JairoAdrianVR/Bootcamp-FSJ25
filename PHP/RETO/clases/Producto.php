<?php 

    class Producto{
       private $id;
       private $nombre;
       private $descripcion;
       private $precio;
       private $stock;
       private $proveedor;
       private $categoria;

        public function __construct($idParam, $nombreParam, $descripcionParam, $precioParam, $stockParam, $proveedorParam,$categoriaParam)
        {
            $this->id = $idParam;
            $this->nombre = $nombreParam;
            $this->descripcion = $descripcionParam;
            $this->precio = $precioParam;
            $this->stock = $stockParam;
            $this->proveedor = $proveedorParam;
            $this->categoria = $categoriaParam;
        }
       
       public function actualizarStock($stock){
              // Recibir el stock y actualizar el stock actual con el nuevo
              $this->stock = $stock;
        }

        public function  editarProducto($datos){
              // Recibir los nuevos valores como Param(desc. prov., cat. y nombre) y reemplazar los atributos actuales con los nuevos y validar valores 
              $this->nombre = $datos['nombre'] ?? $this->nombre;
              $this->descripcion = $datos['descripcion'] ?? $this->descripcion;
              $this->precio = $datos['precio'] ?? $this->precio;
              $this->categoria = $datos['categoria'] ?? $this->categoria;
       }

        public function actualizarPrecio($precio){
            //Actualizar el precio de un producto, recibiendo el precio nuevo
            $this->precio = $precio;
        }

         /**
        * Get the value of id
        */ 
       public function getId()
       {
              return $this->id;
       }

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
        * Get the value of descripcion
        */ 
       public function getDescripcion()
       {
              return $this->descripcion;
       }

       /**
        * Set the value of descripcion
        *
        * @return  self
        */ 
       public function setDescripcion($descripcion)
       {
              $this->descripcion = $descripcion;

              return $this;
       }

       /**
        * Get the value of precio
        */ 
       public function getPrecio()
       {
              return $this->precio;
       }

       /**
        * Set the value of precio
        *
        * @return  self
        */ 
       public function setPrecio($precio)
       {
              $this->precio = $precio;

              return $this;
       }

       /**
        * Get the value of stock
        */ 
       public function getStock()
       {
              return $this->stock;
       }

       /**
        * Set the value of stock
        *
        * @return  self
        */ 
       public function setStock($stock)
       {
              $this->stock = $stock;

              return $this;
       }

       /**
        * Get the value of proveedor
        */ 
       public function getProveedor()
       {
              return $this->proveedor;
       }

       /**
        * Set the value of proveedor
        *
        * @return  self
        */ 
       public function setProveedor($proveedor)
       {
              $this->proveedor = $proveedor;

              return $this;
       }

       /**
        * Get the value of categoria
        */ 
       public function getCategoria()
       {
              return $this->categoria;
       }

       /**
        * Set the value of categoria
        *
        * @return  self
        */ 
       public function setCategoria($categoria)
       {
              $this->categoria = $categoria;

              return $this;
       }

      
    }

?>