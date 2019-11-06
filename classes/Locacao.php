<?php

    class Locacao{

        private $idLocacao;
        private $dataInicial;
        private $dataFinal;
        private $valorTotal;
        private $idVeiculo;
        private $idUsuario;

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


        public function cadastrarCliente($cliente){
            $conexao = Conexao::pegarConexao();
            $insert = "  insert into tbcliente(idCliente, nomeCliente, cpfCliente, cnhCliente, enderecoCliente,
                         numeroCliente, complementoCliente, bairroCliente, cidadeCliente, cepCliente, ufCliente)
                            values ('" . $cliente->getIdCliente() . "',
                                    '" . $cliente->getNomeCliente() . "',
                                    '" . $cliente->getCpfCliente() . "',
                                    '" . $cliente->getCnhCliente() . "',
                                    '" . $cliente->getEnderecoCliente() . "',
                                    '" . $cliente->getNumeroCliente() . "',
                                    '" . $cliente->getComplementoCliente() . "',
                                    '" . $cliente->getBairroCliente() . "',
                                    '" . $cliente->getCidadeCliente() . "',
                                    '" . $cliente->getCepCliente() . "',
                                    '" . $cliente->getUfCliente() . "')
                        ";
            $conexao->exec($insert);
            return 'Cadastro realizado com sucesso!';
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
