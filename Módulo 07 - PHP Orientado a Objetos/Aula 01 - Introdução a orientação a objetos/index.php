<?php
  class Pessoa{
    //Objeto pessoa
    private $nome = 'Antonio';
    private $idade = '34';
    private $peso ='80kg';

    public function crescer() {
      $this->comer();
      echo 'estou crescendo';
    }

    private function comer() {
      echo 'estou comendo';
    }
  }

  // Instanciar 
  $pessoa = new Pessoa;
  $pessoa2 = new Pessoa;

  $pessoa->crescer();
?>