<?php
    class Usuario{
        private $idUsuario;
        private $nomeUsuario;
        private $loginUsuario;
        private $senhaUsuario;

        public function setIdUsuario($id){
            $this->idUsuario = $id;
        }

        public function getIdUsuario(){
            return $this->idUsuario;
        }

        public function getNomeUsuario(){
            return $this->nomeUsuario;
        }

        public function setNomeUsuario($nome){
            $this->nomeUsuario = $nome;
        }

        public function getLoginUsuario(){
            return $this->loginUsuario;
        }

        public function setLoginUsuario($login){
            $this->loginUsuario = $login;
        }

        public function setSenhaUsuario($senha){
            $this->senhaUsuario = $senha;
        }

        public function getSenhaUsuario(){
            return $this->senhaUsuario;
        }

        public function cadastrar($usuario){
            $conexao = Conexao::pegarConexao();
            $insert = " INSERT INTO tbusuario(nomeUsuario, loginUsuario, senhaUsuario)
                        VALUES( '" . $usuario->getNomeUsuario() . "',
                                '" . $usuario->getLoginUsuario() . "',
                                '" . $usuario->getSenhaUsuario() . "'
                                )
                        ";
            return $conexao->exec($insert);
        }

        public function editar($id){
            $conexao = Conexao::pegarConexao();
            $update = " UPDATE tbusuario

                        SET nomeUsuario = '" . $id->getNomeUsuario() . "',
                            senhaUsuario = '" . $id->getSenhaUsuario() . "',
                            loginUsuario = '" . $id->getLoginUsuario() . "'
                            
                        WHERE idUsuario = " . $id->getIdUsuario();
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
    
        public static function pegarUsuario($id){
            $sql = "SELECT idUsuario, nomeUsuario, loginUsuario, senhaUsuario
                    FROM tbusuario WHERE idUsuario = " . $id . ";";
            $result = Conexao::pegarConexao()->query($sql)->fetch();
            $usuario = new Usuario();
            $usuario->setIdUsuario($result["idUsuario"]);
            $usuario->setNomeUsuario($result["nomeUsuario"]);
            $usuario->setLoginUsuario($result["loginUsuario"]);
            $usuario->setSenhaUsuario($result["senhaUsuario"]);
            return $usuario;
        }
    }