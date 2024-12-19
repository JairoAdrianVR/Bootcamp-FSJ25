<?php 

    class Product{ 
        public $id;
        public $name;
        public $price;
        public $quantity;
        public $provider;
        public $connection;
        public $table_name = "productos";

        public function __construct($db)
        {
            $this->connection = $db;
        }

        public function read(){
            //Logica para leer los productos
            $query = "SELECT * FROM {$this->table_name}";
            $sentence = $this->connection->prepare($query);
            $sentence->execute();
            return $sentence;
        }

        public function create(){
           //Logica para crear un producto
           $query = "INSERT INTO {$this->table_name} (nombre,precio,cantidad,proveedor) VALUES (?,?,?,?)";
           $sentence = $this->connection->prepare($query);

           $sentence->execute([$this->name,$this->price,$this->quantity,$this->provider]);

           return $sentence;
        }

        public function update(){
            //Logica para actualizar un producto
            //$query = "UPDATE {$this->table_name} SET $campo=$valor WHERE id = {$this->id} ";
        
            $query = "UPDATE {$this->table_name} SET nombre = ? , precio= ? , cantidad= ? , proveedor= ? WHERE id = {$this->id}";

            $sentence = $this->connection->prepare($query);

           $sentence->execute([$this->name,$this->price,$this->quantity,$this->provider]);

           return $sentence;
        }

        public function findOne($id){
            //Logica para buscar un producto
            $query = "SELECT * FROM {$this->table_name} WHERE id = $id";
            $sentence = $this->connection->prepare($query);
            $sentence->execute();
            return $sentence;

        }


        public function delete($id){
            $query = "DELETE FROM {$this->table_name} WHERE id = $id";
            $sentence = $this->connection->prepare($query);
            return $sentence->execute();

        }
    }

?>