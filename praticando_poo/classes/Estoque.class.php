<?php
    require(__DIR__ . '/../interfaces/estoque.interface.php');

    class Estoque implements iEstoque{
        public function setDados(array $dados):bool
        {
            return true;
        }

        public function getDados(int $id_estoque):array
        {
            return [];
        }
    }