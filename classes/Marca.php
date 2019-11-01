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

        public function cadastrar($marca){
            $conexao = Conexao::pegarConexao();
            $insert ="  insert into tbMarca(nomeMarca)
                        values ('".$marca->getNomeMarca()."')
                    ";
            $conexao->exec($insert);
            return 'Cadastro realizado com sucesso!';

        }
        
        public function editar(){

        }

        public function listar(){
            $conexao = Conexao::pegarConexao();
            $query = "SELECT idMarca, nomeMarca FROM tbmarca";
            $resultado = $conexao->query($query);
            $lista = $resultado->fetchAll();
            return $lista;
        }
    }