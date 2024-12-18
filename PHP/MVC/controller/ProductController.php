<?php 
    require_once './config/database.php';
    require_once './models/Product.php';

    class ProductController{
        public $product;


        public function __construct()
        {
            $database = new Database();
        }

        public function read(){
            // Logica para Leer productos
            include './views/home.php';
        }

        public function create(){
            //Logica para crear productos
                include './views/create.php';
        }

        public function update($id){
                //Logica para actualizar producto
                include './views/edit.php';

        }

        public function delete($id){
            $this->product->delete($id);
            header('Location: /');
        }

    }

?>