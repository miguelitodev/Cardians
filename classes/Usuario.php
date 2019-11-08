<?php
    class Usuario{
        private $idUsuario;
        private $nomeUsuario;
        private $loginUsuario;
        private $senhaUsuario;

        public function setIdUsuario($id){
            $this->idUsuario = $id;
        }

        public function getIdUsuario($id){
            return $this->idUsuario;
        }

        public function getNomeUsuario($nome){
            return $this->nomeUsuario;
        }

        public function setNomeUsuario($nome){
            $this->nomeUsuario = $nome;
        }

        public function getLoginUsuario($login){
            return $this->loginUsuario;
        }

        public function setLoginUsuario($login){
            $this->loginUsuario = $login;
        }

        public function setSenhaUsuario($senha){
            $this->senhaUsuario = $senha;
        }

        public function getSenhaUsuario($senha){
            return $this->senhaUsuario;
        }

        public function cadastrar($usuario){
            $conexao = Conexao::pegarConexao();
            $insert = "  insert into tbusuario(nomeUsuario, senhaUsuario)
                            values ('" . $usuario->getNomeUsuario() . "',
                                    '" . $usuario->getLoginUsuario() . "',
                                    '" . $usuario->getSenhaUsuario() . "')
                        ";
            return $conexao->exec($insert);
        }

        public function editar($id)
        {
            $conexao = Conexao::pegarConexao();
            $update = "  update tbusuario
                            set nomeUsuario = '" . $id->getNomeUsuario() . "',
                            set senhaUsuario = '" . $id->getSenhaUsuario() . "',
                            set loginUsuario = '" . $id->getLoginUsuario() . "'
                            where idUsuario = " . $id->getIdUsuario();
            $conexao->exec($update);
            return 'Atualização realizada com sucesso';
        }

        public function listar()
        {
            $conexao = Conexao::pegarConexao();
            $select = "SELECT idUsuario, nomeUsuario, loginUsuario FROM tbusuario";
            $resultado = $conexao->query($select);
            $lista = $resultado->fetchAll();
            return $lista;
        }

        public function excluir($usuario){
            $conexao = Conexao::pegarConexao();
            $apagar = "  delete from tbusuario
                            where idUsuario = " . $usuario->getIdUsuario();
            $conexao->exec($apagar);
            return 'Exclusão realizada com sucesso';
        }

        public function pesquisar($campoPesquisa){
            $conexao = Conexao::pegarConexao();
            $select = "select idUsuario, nomeUsuario, loginUsuario from tbusuario
                            where nomeUsuario like '$campoPesquisa'";
            $resultado = $conexao->query($select);
            $lista = $resultado->fetchAll();
            return $lista;
        }
    
        public static function pegarMarca($id){
            $sql = "SELECT idUsuario, nomeUsuario, loginUsuario FROM tbusuario WHERE idUsuario = " . $id . ";";
            $result = Conexao::pegarConexao()->query($sql)->fetch();
            $marca = new Usuario();
            $marca->setIdMarca($result["idUsuario"]);
            $marca->setNomeMarca($result["nomeUsuario"]);
            $marca->setLoginUsuario($result["loginUsuario"]);
            return $marca;
        }