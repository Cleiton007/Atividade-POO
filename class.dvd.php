<?php
    require_once('class.produto.php');
    //require_once('class.informacaoNulaException.php');

    final class Dvd extends Produto{
        private $titulo;
        private $ano;
        

        public function __construct($codigo, $preco, $titulo, $ano){

            if($codigo == NULL):
                echo "O parâmetro: codigo, está nulo!", 1;
            elseif($preco == NULL):
                echo "O parâmetro: preco, está nulo!", 1;
            elseif($titulo == NULL):
                echo "O parâmetro: titulo, está nulo!", 1;
            elseif($ano == NULL):
                echo "O parâmetro: ano, está nulo!", 1;
            else:
                echo "Todos os parâmetros foram validados com sucesso!";
            endif;

            parent::__construct($codigo, $preco);
            $this->titulo = $titulo;
            $this->ano = $ano;
            
        }

        /*public function validaConstruct($codigo, $preco, $titulo, $ano){
            if($codigo == NULL):
                throw new Exception("O parâmetro: codigo, está nulo!", 1);
            elseif($preco == NULL):
                throw new Exception("O parâmetro: preco, está nulo!", 1);
            elseif($titulo == NULL):
                throw new Exception("O parâmetro: titulo, está nulo!", 1);
            elseif($ano == NULL):
                throw new Exception("O parâmetro: ano, está nulo!", 1);
            else:
                echo "Todos os parâmetros foram validados com sucesso!";
            endif;
        }*/

        public function getDvd(){
            return "Código: {$this->codigo} | Preço: {$this->preco} | Título: {$this->titulo} | Ano: {$this->ano}<br />";
        }
    }
?>