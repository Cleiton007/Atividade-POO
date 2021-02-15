<?php
    require_once('class.produto.php');
    require_once('interface.perecivel.php');

    final class Leite extends Produto implements Perecivel{
        private $marca;
        private $volume;
        private $dataValidade;

        public function __construct($codigo, $preco, $marca, $volume, $dataValidade){
            parent::__construct($codigo, $preco);
            $this->marca = $marca;
            $this->volume = $volume;
            $this->dataValidade = $dataValidade;
        }

        public function getLeite(){
            return "Código: {$this->codigo} | Preço: {$this->preco} | Marca: {$this->marca} | 
            Volume: {$this->volume} | Data de Validade: {$this->dataValidade}<br />";
        }

        public function estaVencido(){
            if($this->dataValidade < date('d/m/Y')):
                return true;
            else:
                return false;
            endif;
        }
    }

//echo $leite1->getLeite();
?>