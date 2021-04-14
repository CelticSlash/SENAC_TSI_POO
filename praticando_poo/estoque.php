<?php
    require('classes/Usuario.class.php');
    require('classes/Fabricante.class.php');
    require('classes/Estoque.class.php');
    require('classes/Movimentacao.class.php');

    class Main{
        public function __construct(){
            $objUsuario = new Usuario;
            $objFabricante = new Fabricante;
            $objEstoque  = new Estoque;
            $objMovimentacao = new Movimentacao;

            switch($_SERVER['argv'][1]){
                case 'gravaUsuario':
                    
                    $this->gravaUsuario($objUsuario);

                    break;
                case 'editaUsuario':

                    $this->editaUsuario($objUsuario);

                    break;
                default:
                    echo "\n Funcionalidade Inexistente \n";
            }
        }

        public function gravaUsuario($objUsuario){
            $dados = $this->tratarDados();

            $objUsuario->setDados($dados);

            if($objUsuario->gravarDados()){
                echo "\n Usuario cadastrado \n";
            }
        }

        public function editaUsuario($objUsuario){
            $dados = $this->tratarDados();

            $objUsuario->setDados($dados);

            if($objUsuario->gravarDados()){
                echo "\n Usuario cadastrado \n";
            }
        }

        public function tratarDados(){
            $args = explode(',', $_SERVER['argv'][2]);
                    
            foreach($args as $valor){
                $arg = explode('=', $valor);

                $dados[$arg[0]] = $arg[1];
            }
        }

        public function __destruct(){
            sleep(1);
            
            echo "----- FIM DO PROGRAMA -----";
        }
    }

    new Main;