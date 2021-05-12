<?php
    //Mais um exemplo de OCP (Open Close Principle)

    class Frete{
        private $empresa;

        public function __construct()
        {
            $this->empresa = $empresa;    
        }

        public calcular()
        {
            //Ferindo o OCP
            if($this->empresa == 'Correios'){

            }
            else if($this->empresa == 'TotalExpress'){

            }
            else if($this->empresa == 'DHL'){

            }
            else{
                return false;
            }
        }
    }

    //Refatorando

    interface EmpresaDeLogistica{
        public function setPeso();
        public function setDestino();
        public function setOrigem();
        public function setTamanho();
        public function calcular();
    }

    class Correios implements EmpresaDeLogistica{
        
    }

    class Totalexpress implements EmpresaDeLogistica{

    }

    class DHL implements EmpresaDeLogistica{

    }

    class Frete{
        public function __construct(EmpresaDeLogistica $empresa)
        {
            $this->empresa = $empresa;
        }

        public function calcular()
        {

        }
    }

    //Mais um exemplo
    class Negativacao{
        private $devedor;

        public function __construct(Devedor $devedor)
        {
            $this->devedor = $devedor;
        }

        public function enviar(string $orgaoNegativador)
        {
            //Ferindo o OCP
            if($orgaoNegativador == 'Serasa'){

            }
            else if($orgaoNegativador == 'SPC Brasil'){

            }
            else if($orgaoNegativador == 'Agiota'){

            }
            else{
                return 'Órgão negativador não suportado';
            }
        }
    }

    //Refatorando
    interface OrgaoNegativador{
        public function enviarRemessaInclusao();
        public function enviarRemessaExclusao();
        public function receberRetorno();
    }

    class Serasa implements OrgaoNegativador{

    }
    
    class SPCBrasil implements OrgaoNegativador{

    }

    class Agiota implements OrgaoNegativador{

    }

    class Negativacao{
        private $devedor;

        public function __construct(Devedor $devedor)
        {
            $this->devedor = $devedor;
        }

        public function enviar(OrgaoNegativador $orgao)
        {
            
        }
    }

    class Main{
        public function restricao()
        {
            $negativacao = New Negativacao;

            $negativacao->enviar($orgao);
        }
    }