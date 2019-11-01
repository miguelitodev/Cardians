<?php
    class Marca{

        private $idMarca;
        private $nomeMarca;
        
        public function getIdMarca(){
            return $this->idMarca;
        }

        public function getNomeMarca(){
            return $this->nomeMarca;
        }

        public function setIdMarca($id){
            $this->idMarca = $id;
        }

        public function setnomeMarca($nome){
            $this->nomeMarca = $nome;
        }

        public function cadastrar(){
            $conexao = Conexao::pegarConexao();
            $insert ="  INSERT INTO tbMarca(nomeMarca)
                        VALUES ('".$nomeMarca->getNomeMarca()."')
                    ";
            $conexao->exec($insert);
            return 'Cadastro realizado com sucesso!';

        }

        public function listar(){
            $conexao = Conexao::pegarConexao();
            $query = "SELECT idMarca, nomeMarca FROM tbmarca";
            $resultado = $conexao->query($query);
            $lista = $resultado->fetchAll();
            return $lista;
        }
    }