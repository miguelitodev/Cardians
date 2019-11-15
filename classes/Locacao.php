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
        $insert = "     INSERT INTO tblocacao(dataInicial, dataFinal, valorTotal, idVeiculo, idUsuario, idCliente)
                            
                            VALUES ('" . $locacao->getDataInicial() . "',
                                    '" . $locacao->getDataFinal() . "',
                                    '" . $locacao->getValorTotal() . "',
                                    '" . $locacao->getIdVeiculo() . "',
                                    '" . $locacao->getIdUsuario() . "',
                                    '" . $locacao->getIdCliente() . "')
                        ";
        $conexao->exec($insert);
        return 'Cadastro realizado com sucesso!';
    }
}
