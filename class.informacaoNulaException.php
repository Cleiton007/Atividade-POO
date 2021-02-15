<?php

    class InformacaoNulaException{
        public function validaConstruct($codigo, $preco, $titulo, $ano){
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

        }
    }
?>