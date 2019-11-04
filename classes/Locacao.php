<?php
    class Locacao{

        private $idLocacao;
        private $dataInicial;
        private $dataFinal;
        private $valorTotal;
        private $idCliente;
        private $idVeiculo;
        private $idUsuario;
        
        private $nomeCliente;
        private $cpfCliente;
        private $cnhCliente;
        private $cepCliente;
        private $enderecoCliente;
        private $numCasaCliente;
        private $complementoCliente;
        private $bairroCliente;
        private $cidadeCliente;
        private $ufCliente;
        


        public function getCpfCliente(){
            return $this->cpfCliente;
        }

        public function getNomeCliente(){
            return $this->nomeCliente;
        }

        public function getIdLocacao(){
            return $this->idLocacao;
        }

        public function getDataInicial(){
            return $this->dataInicial;
        }

        public function getDataFinal(){
            return $this->dataFinal;
        }

        public function getValorTotal(){
            return $this->valorTotal;
        }

        public function getIdCliente(){
            return $this->idCliente;
        }

        public function getIdVeiculo(){
            return $this->idVeiculo;
        }

        public function getIdUsuario(){
            return $this->idUsuario;
        }

        
        public function setIdLocacao($id){
            $this->idLocacao = $id;
        }

        public function setDataInicial($inicial){
            $this->dataInicial = $inicial;
        }

        public function setDataFinal($final){
            $this->dataFinal = $final;
        }

        public function setValorTotal($total){
            $this->valorTotal = $total;
        }

        public function setIdCliente($cliente){
            $this->idCliente = $cliente;
        }

        public function setIdVeiculo($veiculo){
            $this->idVeiculo = $veiculo;
        }

        public function setIdUsuario($idUsuario){
            $this->idUsuario = $idUsuario;
        }
        
        
    }