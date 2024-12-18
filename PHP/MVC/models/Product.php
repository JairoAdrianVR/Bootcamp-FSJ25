<?php 

    class Product{ 
        public $id;
        public $name;
        public $price;
        public $discount;
        public $quantity;
        public $connection;
        public $table_name = "productos";

        public function __construct($db)
        {
            $this->connection = $db;
        }

        public function read(){
            //Logica para leer los productos
        }

        public function create(){
           //Logica para crear un producto
        }

        public function update(){
            //Logica para actualizar un producto
        }

        public function findOne($id){
            //Logica para buscar un producto
        }


        public function delete($id){
            $query = "DELETE FROM {$this->table_name} WHERE id = 100";
            $sentence = $this->connection->prepare($query);
            return $sentence->execute();

        }
    }

?>