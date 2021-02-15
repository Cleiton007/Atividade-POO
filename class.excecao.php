<?php

    abstract class Excecao{

        public function validaConstruct(Dvd $dvd){
            if($dvd->codigo == NULL):
                throw new Exception("O parâmetro: codigo, está nulo!", 1);
            elseif($dvd->preco == NULL):
                throw new Exception("O parâmetro: preco, está nulo!", 1);
            elseif($dvd->titulo == NULL):
                throw new Exception("O parâmetro: titulo, está nulo!", 1);
            elseif($dvd->ano == NULL):
                throw new Exception("O parâmetro: ano, está nulo!", 1);
            else:
                echo "Todos os parâmetros foram validados com sucesso!";
            endif;

        }
    }

    ?>