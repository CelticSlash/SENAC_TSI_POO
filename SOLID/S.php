<?php
    //SOLID
    //Single Responsability

    //Exemplo 1
    class Usuario{
        
        private $nome;

        public function setNome()
        {
            
        }

        public function getNome()
        {

        }

        //Função que fere o principio de responsabilidade unica
        public function enviarEmail()
        {

        }

        //Função que fere o principio de responsabilidade unica
        public function exportarParaPlanilha()
        {
            
        }
    }

    //Como refatorar sem ferir o princípio
    class Usuario {
        private $nome;

        public function setNome()
        {
            
        }

        public function getNome()
        {

        }
    }

    class Email{
        public function enviarEmail()
        {

        }
    }

    class ExportarDados{

    }

    class EsportarDadosPlanilha extends ExportarDados{
        public function exportarParaPlanilha()
        {
            
        }
    }

    //Exemplo 2
    class Relatorio{
        private $dados;

        public function setDados(array $dados)
        {
            
        }

        //Função que fere o principio de responsabilidade unica
        public function exportarParaPdf()
        {

        }

        //Função que fere o principio de responsabilidade unica
        public function exportarParaCsv()
        {

        }
    }

    //Como refatorar sem ferir o princípio
    class Relatorio{
        private $dados;

        public function setDados(array $dados)
        {
            
        }
    }

    class ExportaDados{

    }

    class ExportaDadosPdf extends ExportaDados{
        public function exportar()
        {

        }
    }

    class ExportaDadosCsv extends ExportaDados{
        public function exportar()
        {

        }
    }

    //Exemplo 3
    class Post{
        private $titulo;

        public function setTitulo(string $titulo)
        {

        }

        //Função que fere o principio de responsabilidade unica
        public function geraUrlAmigavel()
        {

        }

        //Função que fere o principio de responsabilidade unica
        public function buscarPostSemelhante()
        {

        }
    }

    //Como refatorar sem ferir o princípio
    class Post{
        private $titulo;

        public function setTitulo(string $titulo)
        {

        }
    }

    class Url{
        public function geraUrlAmigavel()
        {

        }
    }

    class Busca{
        
    }

    class BuscaSemelhanca extends Busca{
        public function buscar()
        {

        }
    }