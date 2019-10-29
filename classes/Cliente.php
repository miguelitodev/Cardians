<?php
    class Cliente{
        
        private $idCliente;
        private $nomeCliente;
        private $cpfCliente;
        private $cnhCliente;
        private $enderecoCliente;
        private $numeroCliente;
        private $complementoCliente;
        private $bairroCliente;
        private $cidadeCliente;
        private $cepCliente;
        private $ufCliente;

        public function getIdCliente(){
            return $this->idCliente;
        }
        
        public function setIdCliente($id){
            $this->idCliente = $id;
        }
        
        public function getNomeCliente(){
            return $this->nomeCliente;
        }
        
        public function setNomeCliente($nome){
            $this->nomeCliente = $nome;
        }

        public function getCpfCliente(){
            return $this->cpfCliente;
        }
        
        public function setCpfCliente($cpf){
            $this->cpfCliente = $cpf;
        }

        public function getCnhCliente(){
            return $this->cnhCliente;
        }
        
        public function setCnhCliente($cnh){
            $this->cnhCliente = $cnh;
        }

        public function getEnderecoCliente(){
            return $this->enderecoCliente;
        }
        
        public function setEnderecoCliente($endereco){
            $this->enderecoCliente = $endereco;
        }

        public function getNumeroCliente(){
            return $this->numeroCliente;
        }
        
        public function setNumeroCliente($numero){
            $this->numeroCliente = $numero;
        }

        public function getComplementoCliente(){
            return $this->complementoCliente;
        }
        
        public function setComplementoCliente($complemento){
            $this->complementoCliente = $complemento;
        }
        
        public function getBairroCliente(){
            return $this->bairroCliente;
        }
        
        public function setBairroCliente($bairro){
            $this->bairroCliente = $bairro;
        }

        public function getCidadeCliente(){
            return $this->cidadeCliente;
        }
        
        public function setCidadeCliente($cidade){
            $this->cidadeCliente = $cidade;
        }

        public function getCepCliente(){
            return $this->cepCliente;
        }
        
        public function setCepCliente($cep){
            $this->cepCliente = $cep;
        }

        public function getUfCliente(){
            return $this->ufCliente;
        }
        
        public function setUfCliente($uf){
            $this->ufCliente = $uf;
        }

        
    }
