<?php

    class Locacao{

        private $idLocacao;
        private $dataInicial;
        private $dataFinal;
        private $valorTotal;
        private $idVeiculo;
        private $idUsuario;
        private $modeloVeiculo;
        private $nomeUsuario;
        



        public function getModeloVeiculo(){
            return $this->modeloVeiculo;
        }

        public function setModeloVeiculo($modelo){
            $this->modeloVeiculo = $modelo;
        }

        public function getIdLocacao(){
            return $this->idLocacao;
        }

        public function setIdLocacao($id){
            $this->idLocacao = $id;
        }

        public function getDataInicial(){
            return $this->dataInicial;
        }

        public function setDataInicial($inicial){
            $this->dataInicial = $inicial;
        }

        public function getDataFinal(){
            return $this->dataFinal;
        }

        public function setDataFinal($final){
            $this->dataFinal = $final;
        }

        public function getValorTotal(){
            return $this->valorTotal;
        }

        public function setValorTotal($total){
            $this->valorTotal = $total;
        }

        public function getIdVeiculo(){
            return $this->idVeiculo;
        }

        public function setIdVeiculo($veiculo){
            $this->idVeiculo = $veiculo;
        }

        public function getIdUsuario(){
            return $this->idUsuario;
        }

        public function setIdUsuario($idUsuario){
            $this->idUsuario = $idUsuario;
        }

        public function getNomeUsuario(){
            return $this->nomeUsuario;
        }

        public function setNomeUsuario($usuario){
            $this->nomeUsuario = $usuario;
        }



        public function cadastrarLocacao($locacao){
            $conexao = Conexao::pegarConexao();
            $insert = "  insert into tblocacao(idLocacao, dataInicial, dataFinal, valorTotal, idVeiculo, idUsuario, idCliente)
                            values ('" . $locacao->getIdLocacao() . "',
                                    '". $locacao->getDataInicial() ."',
                                    '". $locacao->getDataFinal() ."',
                                    '". $locacao->getValorTotal() ."',
                                    '". $locacao->getIdVeiculo() ."',
                                    '". $locacao->getIdUsuario() ."',
                                    '". $locacao->getIdCliente() ."')
                        ";
            $conexao->exec($insert);
            return 'Cadastro realizado com sucesso!';
        }

        public static function pegarVeiculo($modelo){
            $select = "SELECT idVeiculo, modeloVeiculo FROM tbveiculo WHERE modeloVeiculo LIKE " . $modelo . ";";
            $result = Conexao::pegarConexao()->query($select)->fetch();
            $locacao = new Locacao();
            $locacao->setIdVeiculo($result["idVeiculo"]);
            $locacao->setModeloVeiculo($result["modeloVeiculo"]);
            return $locacao;
        }

        public static function pegarFuncionario($usuario){
            $select = "SELECT idUsuario, nomeUsuario FROM tbusuario WHERE nomeUsuario LIKE " . $usuario . ";";
            $result = Conexao::pegarConexao()->query($select)->fetch();
            $locacao = new Locacao();
            $locacao->setIdUsuario($result["idUsuario"]);
            $locacao->setNomeUsuario($result["nomeUsuario"]);
            return $locacao;
        }
    }
