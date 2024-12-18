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

        }

        public function create(){
           //Logica para crear un producto
           $query = "INSERT INTO {$this->table_name} (nombre,precio,cantidad,proveedor) VALUES ({$this->name},{$this->price},{$this->quantity},{$this->provider})";
        }

        public function update($campo,$valor){
            //Logica para actualizar un producto
            $query = "UPDATE {$this->table_name} SET $campo=$valor WHERE id = {$this->id} ";
        
            $query2 = "UPDATE {$this->table_name} SET nombre = {$this->name} , precio={$this->price} , cantidad={$this->quantity} , proveedor={$this->provider} WHERE id = {$this->id}";
        }

        public function findOne($id){
            //Logica para buscar un producto
            $query = "SELECT * FROM {$this->table_name} WHERE id = $id";
        }


        public function delete($id){
            $query = "DELETE FROM {$this->table_name} WHERE id = $id";
            $sentence = $this->connection->prepare($query);
            return $sentence->execute();

        }
    }

?>