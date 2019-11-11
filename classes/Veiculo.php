<?php
    class Veiculo{

        private $idVeiculo;
        private $anoVeiculo;
        private $corVeiculo;
        private $modeloVeiculo;
        private $valoDiariaVeiculo;
        private $imgVeiculo;
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

        public function getImgVeiculo(){
            return $this->imgVeiculo;
        }

        public function setImgVeiculo($imgVeiculo){
            $this->imgVeiculo = $imgVeiculo;
        }

        public function getIdMarca(){
            return $this->idMarca;
        }

        public function setIdMarca($idMarca){
            $this->idMarca = $idMarca;
        }

        public function cadastrar($veiculo){
            $conexao = Conexao::pegarConexao();
            $insert = "insert into tbveiculo (anoVeiculo, corVeiculo, modeloVeiculo, valorDiariaVeiculo, imgVeiculo, idMarca)
                            values ('".$veiculo->getAnoVeiculo()."',
                                    '".$veiculo->getCorVeiculo()."',
                                    '".$veiculo->getModeloVeiculo()."',
                                    '".$veiculo->getValorDiariaVeiculo()."',
                                    '".$veiculo->getImgVeiculo()."',
                                    '".$veiculo->getIdMarca()."'
                                    )";
            $conexao->exec($insert);
            return 'Cadastro realizado com sucesso';
        }

        

        public function listar(){
            $conexao = Conexao::pegarConexao();
            $querySelect = "SELECT idVeiculo, anoVeiculo, corVeiculo, modeloVeiculo, valorDiariaVeiculo, imgVeiculo, idMarca
                            FROM tbveiculo";
            $resultado = $conexao->query($querySelect);
            $lista = $resultado->fetchAll();
            return $lista;
        }

        public function pesquisar($campoPesquisa){
            $conexao = Conexao::pegarConexao();
            $select = "select idVeiculo, anoVeiculo, corVeiculo, modeloVeiculo,
                         valorDiariaVeiculo, imgVeiculo, idMarca from tbveiculo
                            where modeloVeiculo like '$campoPesquisa'";
            $resultado = $conexao->query($select);
            $lista = $resultado->fetchAll();
            return $lista;
        }

        public function pegarIdVeiculo(){
            $conexao = Conexao::pegarConexao();
            $select = "SELECT MAX(idVeiculo) AS 'cod' FROM tbveiculo";
            $resultado = $conexao->query($select);
            $lista = $resultado->fetchAll();
            foreach($lista as $linha){
                $cod = ($linha['cod']);
            }
            return $cod;
        }

        public function fotoVeiculo($carro){
            $conexao = Conexao::pegarConexao();
            $update = "UPDATE tbveiculo 
                        SET imgVeiculo = '".$carro->getImgVeiculo()."' WHERE idVeiculo = ".$carro->getIdVeiculo()."";
            $conexao->exec($update);
            return $update;
        }

        public static function pegarVeiculo($id){
            $sql = "SELECT idVeiculo, modeloVeiculo, corVeiculo, imgVeiculo, anoVeiculo, valorDiariaVeiculo FROM tbveiculo WHERE idveiculo = " . $id . ";";
            $result = Conexao::pegarConexao()->query($sql)->fetch();
            $veiculo = new Veiculo();
            $veiculo->setIdVeiculo($result["idVeiculo"]);
            $veiculo->setModeloVeiculo($result["modeloVeiculo"]);
            $veiculo->setCorVeiculo($result["corVeiculo"]);
            $veiculo->setImgVeiculo($result["imgVeiculo"]);
            $veiculo->setAnoVeiculo($result["anoVeiculo"]);
            $veiculo->setValorDiariaVeiculo($result["valorDiariaVeiculo"]);
            return $veiculo;
        }
        
        public function excluir($veiculo)
        {
    
            $conexao = Conexao::pegarConexao();
            $apagar = "  delete from tbveiculo
                            where idVeiculo = " . $veiculo->getIdVeiculo();
            $conexao->exec($apagar);
            //var_dump($marca);die;
            return 'Exclusão realizada com sucesso';
        }

        public function editar($id)
        {
            $conexao = Conexao::pegarConexao();
            $update = "  update tbveiculo
                            set modeloVeiculo = '" . $id->getModeloVeiculo() . "',
                            corVeiculo = '" . $id->getCorVeiculo() . "',
                            idMarca = '" . $id->getIdMarca() . "',
                            anoVeiculo = '" . $id->getAnoVeiculo() . "',
                            valorDiariaVeiculo = '" . $id->getValorDiariaVeiculo() . "',
                            imgVeiculo = '" . $id->getImgVeiculo() . "'
                            where idVeiculo = " . $id->getIdVeiculo();
            $conexao->exec($update);
            return 'Atualização realizada com sucesso';
        }
    }
    

?>