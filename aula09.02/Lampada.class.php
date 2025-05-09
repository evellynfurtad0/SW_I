<?php
  class Lampada{
    public $Fabricante;
    public $Tensao;
    public $Potencia;
    public $Cor;
    public $Status;
   
    public function Ligar(){
      $this->Status = True;
    }
    public function Desligar(){
       $this->Status = False;
    }
    public function MostrarDados(){
        echo"O Fabricante é: " . $this->Fabricante . "<br>";
        echo"A Tensão é: " . $this->Tensao . "<br>";
        echo"A Potência é: " . $this->Potencia . "<br>";
        echo"A cor é: " . $this->Cor . "<br>";
        if($this->Status ==1){
          echo"O Status é: LIGADA! <br>";
        }
        else{
           echo"O Status é: DESLIGADA! <br>";
        }
        echo"<hr>";
    }

  }
?>