<?php 
    class Canetao {
        public $modelo;
        public $cor;
        public $ponta;
        public $tampada;
        public $carga;

        public function rabiscar(){
            if($this->tampada == true) {
                echo "<br>A caneta está tampada e não dá para rabiscar. <br>";
            } else {
                echo "<br>Estou rabiscando. <br>";
            }
        }
        public function tampar(){
            if ($this->tampada == true) {
                echo "A caneta já está tampada. Pode guardar! <br>";
            } else {
                echo "Tampe a caneta antes de guardar. <br>";
            }

        }
        public function destampar(){
            if($this->tampada == true){
                echo "A caneta já está tampada e pode ser guardada. <br>";
            } else {
                echo "A caneta está destampada. Tampe antes de guardar. <br>";
            }


        }

    }

?>