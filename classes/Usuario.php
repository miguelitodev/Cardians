<?php
    class Usuario{
        private $idUsuario;
        private $nomeUsuario;
        private $loginUsuario;
        private $senhaUsuario;

        public function setIdUsuario($id){
            $this->idUsuario = $id;
        }

        public function setNomeUsuario($nome){
            $this->nomeUsuario = $nome;
        }

        public function setLoginUsuario($login){
            $this->loginUsuario = $login;
        }

        public function setSenhaUsuario($senha){
            $this->senhaUsuario = $senha;
        }

        public function getIdUsuario($id){
            return $this->idUsuario;
        }

        public function getNomeUsuario($nome){
            return $this->nomeUsuario;
        }

        public function getLoginUsuario($login){
            return $this->loginUsuario;
        }

        public function getSenhaUsuario($senha){
            return $this->senhaUsuario;
        }

        public function logar(){
            $conexao = Conexao::pegarConexao();
            $nome = getLoginUsuario();
            $senha = getSenhaUsuario();
            if $nome == 'admin' && $senha == '123456'{
                header('Location: menu-admin.php');
            }
            else {
                echo(
                '<script>
                    alert("Usuario incorreto, tente novamente");
                </script>'
                );
            }
        }