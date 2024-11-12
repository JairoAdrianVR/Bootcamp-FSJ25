<?php 

    //Estructuras de datos
    //Arrays
    
    //Declaraciones de arrays
    //Inicializacion a traves de constructor de objeto
    //$array = new ArrayObject();
   
    //Declaracion de array literal
    $array = [];

    //Declaracion de array a traves de un metodo
    //$array = array();

    
    // METODOS DE ARRAY
    //---  Ingresar datos a un array ---
    // EN LA ULTIMA POSICION
    array_push($array, 1);

    // EN LA PRIMER POSICION
    array_unshift($array,5);

    // --- ELIMINAR datos a un array ---
    // PRIMER POSICION
    array_shift($array);

    // ULTIMA POSICION
    array_pop($array);

    // --- Imprimir un array ---
    print_r($array);

    //CALCULAR EL LARGOR O LONGANISMO DE UN ARRAY
    $lenght = count($array);

    //Prueba
    $arraycito = [];
    array_push($arraycito,"a");
    array_push($arraycito,"b");
    array_push($arraycito,"c");
    array_unshift($arraycito,"z");
    array_shift($arraycito);
    array_pop($arraycito);
    //Ingresar datos en la ultima posicion sin el array_push
    $arraycito[] = "d";
    print_r($arraycito);

    //ARRAYS ASOCIATIVOS
    $arrayzote = [ "nombre" => "Jairo", "apellido" => "Vega Romero"];
    print_r($arrayzote);
    //ARRAY
    $arrayAsoc = ["A" => 2, "R" => 2, "Y" => 1 ];
    print_r($arrayAsoc);
    
    print_r(array_key_last($arrayzote));
    echo "\n";
    print_r($arrayzote[array_key_last($arrayzote)]);
    print(count($arrayzote));


    // CLASES Y OBJETOS

    class Persona { 
        
        //Propiedades o atributos
        public $nombre;
        public $edad;

        //Constructor 
        function __construct($nombreParam, $edadParam)
        {
            $this->nombre = $nombreParam;
            $this->edad = $edadParam;
        }

        //Metodos
        function respirar(){
            return "Estoy respirando";
        }
    }

    $personita = new Persona("Jairo",75);

    print($personita->nombre.'\n');
    print($personita->respirar());

    print_r($personita);


    //Stack (pila) -> LIFO LastInFirstOut

    class Stack{
        public $stack;

        function __construct()
        {
            $this->stack = array();
        }

        function add($value){
            array_push($this->stack, $value);
        }

        function delete(){
            array_pop($this->stack);
        }
    }

    $pilaRopa = new Stack();
    $pilaRopa->add("Camiseta");
    $pilaRopa->add("Camisa");
    $pilaRopa->add("Pantalon");
    $pilaRopa->delete();
    print_r($pilaRopa);

    // Queue o Colas -> FIFO -> FirstInFirstOut

    class Queue { 
        public $queue;

        function __construct()
        {
            $this->queue = array();
        }

        function enqueue($value){
            array_push($this->queue,$value);
        }

        function dequeue(){
            return array_shift($this->queue);
        }
    }

    $caseta1 = new Queue();
    $caseta1->enqueue("Rafa");
    $caseta1->enqueue("Diego");
    $caseta1->enqueue("Claudia");
    print("Dato eliminado: {$caseta1->dequeue()} \n");

    print_r($caseta1);
  /*
    class Node{
        public $value;
        public $next;

        function __construct($data)
        {
            if($data === null ){
                $this->value = 0;
                $this->next = null;
            }else{
            $this->value = $data;
            $this->next = null;
        }
        }
    }

    class LinkedList{
        public $head;

        function __construct()
        {
            $this->head = null;
        }

        function insert($data){
            $newNode = new Node($data);

            if($this->head === null){
                $this->head = $newNode;
            }else{
                //Variable auxiliar
                $aux = $this->head;

                while($aux->next !== null){
                    $aux = $aux->next;
                }

                $aux->next = $newNode;
            }
        }

        function delete($data){
            if($this->head === null){
                return "La lista estaba previamente vacia. \n";
            }

            if($this->head->value === $data){
                print("Se Encontro. \n");
                $this->head = $this->head->next;
                return "Encontrado";
            }
            
            
            $aux = $this->head;


            while($aux->next !== null ){
               if($aux->next->value == $data){
                $aux->next = $aux->next->next;
                print("Si se elimino. \n");
                return "Se ha eliminado el dato.";
               }

                $aux = $aux->next;
            }

            return "Ese dato no existe en la lista.";

        }

        // Generar un metodo el cual me imprima o retorne el length de la lista
        

        // Generar un metodo para vaciar la lista

    }
    
    $listita = new LinkedList();
    $listita->insert(3);
    $listita->insert(5);
    $listita->insert(100);
    $listita->delete(5);
    print_r($listita);

*/

    class Node{
        public $value;
        public $left;
        public $right;

        function __construct($data)
        {
            $this->value = $data;
            $this->left = null;
            $this->right = null;
        }
    }

    class BinaryTree{
        public $root;

        function __construct()
        {
            $this->root = null;
        }

        function insert($data){
            //Creamos el nuevo nodo con el valor
            $newNode = new Node($data);

            // CHEQUEAMOS SI LA RAIZ ESTA VACIA
            if($this->root === null){
                //Guardamos el nuevo nodo en la raiz
                $this->root = $newNode;
                return $this->root;
            }

            //Variable auxiliar para luego ir avanzando de nodo iniciando en la RAIZ
            $currentNode = $this->root;
            $flag = true;
            while($flag){
                //CUANDO EL NODO YA EXISTA PREVIAMENTE
                if($newNode->value == $currentNode->value) return "Che cuchame, ya existe pa \n";

                //Comparamos el valor del nuevo nodo, con respecto al nodo ACTUAL
            if($newNode->value > $currentNode->value){
                //CASO EN QUE SEA MAYOR
                if($currentNode->right === null ){
                    $currentNode->right = $newNode;
                    return $newNode;
                }
                $currentNode = $currentNode->right;
            }else{
                //CASO EN QUE SEA MENOR
                if($currentNode->left === null){
                    $currentNode->left = $newNode;
                    return $newNode;
                }
                $currentNode = $currentNode->left;
            }
            }
        }

        function delete($data){
            $this->root = $this->deleteNode($data,$this->root);
        }

        function deleteNode($data,$node){

            if($node === null){
                return null;
            }

            if($data < $node->value){
                $node->left = $this->deleteNode($data,$node->left);
            }else if( $data > $node->value){
                $node->right = $this->deleteNode($data,$node->right);
            }else{
                
                if($node->left === null){
                    return $node->right;
                }elseif($node->right === null){
                    return $node->left;
                }

                $node->right = $this->deleteNode($node->value,$node->right);
            }
            return $node;
        }

    }




    $arbolito = new BinaryTree();
    $arbolito->insert(5);
    $arbolito->insert(10);
    $arbolito->insert(3);
    $arbolito->insert(1);
    $arbolito->insert(15);
    $arbolito->insert(12);
    print($arbolito->insert(12));
    $arbolito->delete(15);
    $arbolito->delete(3);
    print_r($arbolito);
    ?> 