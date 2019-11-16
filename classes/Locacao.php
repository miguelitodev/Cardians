<?php

class Locacao
{

    private $idLocacao;
    private $dataInicial;
    private $dataFinal;
    private $valorTotal;
    private $idVeiculo;
    private $idUsuario;
    private $modeloVeiculo;
    private $nomeUsuario;
    private $idCliente;
    private $statusLocacao;

    public function getStatusLocacao()
    {
        return $this->statusLocacao;
    }

    public function setStatusLocacao($status)
    {
        $this->statusLocacao = $status;
    }

    public function getIdCliente()
    {
        return $this->idCliente;
    }

    public function setIdCliente($id)
    {
        $this->idCliente = $id;
    }

    public function getModeloVeiculo()
    {
        return $this->modeloVeiculo;
    }

    public function setModeloVeiculo($modelo)
    {
        $this->modeloVeiculo = $modelo;
    }

    public function getIdLocacao()
    {
        return $this->idLocacao;
    }

    public function setIdLocacao($id)
    {
        $this->idLocacao = $id;
    }

    public function getDataInicial()
    {
        return $this->dataInicial;
    }

    public function setDataInicial($inicial)
    {
        $this->dataInicial = $inicial;
    }

    public function getDataFinal()
    {
        return $this->dataFinal;
    }

    public function setDataFinal($final)
    {
        $this->dataFinal = $final;
    }

    public function getValorTotal()
    {
        return $this->valorTotal;
    }

    public function setValorTotal($total)
    {
        $this->valorTotal = $total;
    }

    public function getIdVeiculo()
    {
        return $this->idVeiculo;
    }

    public function setIdVeiculo($veiculo)
    {
        $this->idVeiculo = $veiculo;
    }

    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;
    }

    public function getNomeUsuario()
    {
        return $this->nomeUsuario;
    }

    public function setNomeUsuario($usuario)
    {
        $this->nomeUsuario = $usuario;
    }



    public function cadastrar($locacao)
    {
        $conexao = Conexao::pegarConexao();
        $insert = "     INSERT INTO tblocacao(dataInicial, dataFinal, valorTotal, idVeiculo, idUsuario, idCliente, statusLocacao)
                            
                            VALUES ('" . $locacao->getDataInicial()     . "',
                                    '" . $locacao->getDataFinal()       . "',
                                    '" . $locacao->getValorTotal()      . "',
                                    '" . $locacao->getIdVeiculo()       . "',
                                    '" . $locacao->getIdUsuario()       . "',
                                    '" . $locacao->getIdCliente()       . "',
                                    '" . $locacao->getStatusLocacao()   . "')
                        ";
        $conexao->exec($insert);
        return 'Cadastro realizado com sucesso!';
    }

    public function listar()
    {
        $conexao = Conexao::pegarConexao();
        $select = "   SELECT  tblocacao.idLocacao, tblocacao.dataInicial, tblocacao.dataFinal, tblocacao.valorTotal,
                                tblocacao.statusLocacao, tbveiculo.modeloVeiculo, tbusuario.nomeUsuario, tbcliente.nomeCliente

                    FROM tblocacao
                    
                    INNER JOIN tbveiculo
                        ON tblocacao.idVeiculo = tbveiculo.idVeiculo
                    
                    INNER JOIN tbusuario
                        ON tblocacao.idusuario = tbusuario.idUsuario
                    
                    INNER JOIN tbcliente
                        ON tblocacao.idCliente = tbcliente.idCliente
                    
                ";
        $resultado = $conexao->query($select);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function pesquisar($campoPesquisa)
    {
        $conexao = Conexao::pegarConexao();
        $select = " SELECT  tblocacao.idLocacao, tblocacao.dataInicial, tblocacao.dataFinal, tblocacao.valorTotal,
                            tblocacao.statusLocacao, tbveiculo.modeloVeiculo, tbusuario.nomeUsuario, tbcliente.nomeCliente

                    FROM tblocacao

                    INNER JOIN tbveiculo
                        ON tblocacao.idVeiculo = tbveiculo.idVeiculo

                    INNER JOIN tbusuario
                        ON tblocacao.idusuario = tbusuario.idUsuario

                    INNER JOIN tbcliente
                        ON tblocacao.idCliente = tbcliente.idCliente

                    WHERE nomeCliente LIKE '$campoPesquisa'";
        $resultado = $conexao->query($select);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function editar($id)
    {
        $conexao = Conexao::pegarConexao();



        $update = " UPDATE tblocacao
                    SET statusLocacao = '" . $id->getStatusLocacao() . "'
                    WHERE   idLocacao = " . $id->getIdLocacao() . ";";
        $conexao->exec($update);

        return 'Atualização realizada com sucesso';
    }

    public static function pegarLocacao($id)
    {
        $sql = "SELECT  idLocacao, dataInicial, dataFinal, valorTotal, 
                        idVeiculo, idUsuario, idCliente, statusLocacao
                
                FROM tblocacao 
                
                WHERE idLocacao = " . $id . ";";

        $result = Conexao::pegarConexao()->query($sql)->fetch();

        $locacao = new Locacao();

        $locacao->setIdLocacao($result['idLocacao']);
        $locacao->setDataInicial($result['dataInicial']);
        $locacao->setDataFinal($result['dataFinal']);
        $locacao->setValorTotal($result['valorDiaria']);
        $locacao->setIdCliente($result['idCliente']);
        $locacao->setIdVeiculo($result['idVeiculo']);
        $locacao->setIdUsuario($result['idUsuario']);
        $locacao->setStatusLocacao($result['statusLocacao']);

        return $locacao;
    }
}
