<?php
    abstract class teste{
        public function func1(){
            echo 'chamando funcao1';
        }
        abstract function func2();
    }

    class Principal2{
        public static function outroMetodoEstatico(){
            echo 'meu outro metodo';
        }
    }

    class Principal extends teste{

        public function func2(){
            echo 'Estou declarando oficialmente um metodo abstrato';
        }

        public static function metodoestatico(){
            echo 'metodo estatico!';
        }

        public function funcao() {
            //Principal::metodoestatico();
            Principal2::outroMetodoEstatico();
            //self::metodoestatico();
        }
    }

    $principal = new Principal;

    $principal->funcao();

    //Principal::metodoestatico();

    // $principal->func1();

    // $principal->func2();
?>