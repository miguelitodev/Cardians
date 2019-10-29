<?php
    class Veiculo{

        private $idVeiculo;
        private $anoVeiculo;
        private $corVeiculo;
        private $modeloVeiculo;
        private $valoDiariaVeiculo;
        private $idMarca;

        public function getIdVeiculo(){
            return $this->idVeiculo;
        }
        
        public function setIdVeiculo($id){
            $this->idVeiculo = $id;
        }

        public function getAnoVeiculo(){
            return $this->anoVeiculo;
        }

        public function setAnoVeiculo($ano){
            $this->anoVeiculo = $ano;
        }
        
        public function getCorVeiculo(){
            return $this->corVeiculo;
        }

        public function setCorVeiculo($cor){
            $this->corVeiculo = $cor;
        }

        public function getModeloVeiculo(){
            return $this->modeloVeiculo;
        }

        public function setModeloVeiculo($modelo){
            $this->modeloVeiculo = $modelo;
        }

        public function getValorDiariaVeiculo(){
            return $this->valoDiariaVeiculo;
        }

        public function setValorDiariaVeiculo($diaria){
            $this->valoDiariaVeiculo = $diaria;
        }

        public function getIdMarca(){
            return $this->idMarca;
        }

        public function setIdMarca($idMarca){
            $this->idMarca = $idMarca;
        }

        public function cadastrar(){
            $conexao = Conexao::pegarConexao();
            $queryInsert = "INSERT INTO tbveiculo (anoVeiculo, corVeiculo, modeloVeiculo, valorDiariaVeiculo, idMarca)
                            VALUES ('".$anoVeiculo->getAnoVeiculo()."',
                                    '".$corVeiculo->getCorVeiculo()."',
                                    '".$modeloVeiculo->getModeloVeiculo()."',
                                    '".$valoDiariaVeiculo->getValorDiariaVeiculo()."',
                                    '".$idMarca->getIdMarca()."'
                                    )";
            $conexao->exec($queryInsert);
            return 'Cadastro realizado com sucesso';
        }

        public function listar(){
            $conexao = Conexao::pegarConexao();
            $querySelect = "SELECT idVeiculo, anoVeiculo, corVeiculo, modeloVeiculo, valorDiariaVeiculo, idMarca";
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista;
        }

        public function pesquisar($campoPesquisa){
            $conexao = Conexao::pegarConexao();
            $querySelect = "SELECT idVeiculo, anoVeiculo, corVeiculo, modeloVeiculo, valorDiariaVeiculo, idMarca
                            LIKE '$campoPesquisa'";
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista;
        }
    }
?>