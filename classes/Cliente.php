<?php
class Cliente
{

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

    public function getIdCliente()
    {
        return $this->idCliente;
    }

    public function setIdCliente($id)
    {
        $this->idCliente = $id;
    }

    public function getNomeCliente()
    {
        return $this->nomeCliente;
    }

    public function setNomeCliente($nome)
    {
        $this->nomeCliente = $nome;
    }

    public function getCpfCliente()
    {
        return $this->cpfCliente;
    }

    public function setCpfCliente($cpf)
    {
        $this->cpfCliente = $cpf;
    }

    public function getCnhCliente()
    {
        return $this->cnhCliente;
    }

    public function setCnhCliente($cnh)
    {
        $this->cnhCliente = $cnh;
    }

    public function getEnderecoCliente()
    {
        return $this->enderecoCliente;
    }

    public function setEnderecoCliente($endereco)
    {
        $this->enderecoCliente = $endereco;
    }

    public function getNumeroCliente()
    {
        return $this->numeroCliente;
    }

    public function setNumeroCliente($numero)
    {
        $this->numeroCliente = $numero;
    }

    public function getComplementoCliente()
    {
        return $this->complementoCliente;
    }

    public function setComplementoCliente($complemento)
    {
        $this->complementoCliente = $complemento;
    }

    public function getBairroCliente()
    {
        return $this->bairroCliente;
    }

    public function setBairroCliente($bairro)
    {
        $this->bairroCliente = $bairro;
    }

    public function getCidadeCliente()
    {
        return $this->cidadeCliente;
    }

    public function setCidadeCliente($cidade)
    {
        $this->cidadeCliente = $cidade;
    }

    public function getCepCliente()
    {
        return $this->cepCliente;
    }

    public function setCepCliente($cep)
    {
        $this->cepCliente = $cep;
    }

    public function getUfCliente()
    {
        return $this->ufCliente;
    }

    public function setUfCliente($uf)
    {
        $this->ufCliente = $uf;
    }

    public function cadastrar($cliente)
    {
        $conexao = Conexao::pegarConexao();

        $insert =   "   INSERT INTO     tbcliente(nomeCliente, cpfCliente, cnhCliente, enderecoCliente,
                                        numeroCliente, complementoCliente, bairroCliente, cidadeCliente, cepCliente, ufCliente)
                        VALUES (    '" . $cliente->getNomeCliente() . "',
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

    public function editar($id)
    {
        $conexao = Conexao::pegarConexao();

        $update = "     UPDATE  tbcliente
                        SET     nomeCliente =           '" . $id->getNomeCliente() . "',
                                cpfCliente =            '" . $id->getCpfCliente() . "',
                                cnhCliente =            '" . $id->getCnhCliente() . "',
                                enderecoCliente =       '" . $id->getEnderecoCliente() . "',
                                numeroCliente =         '" . $id->getNumeroCliente() . "',
                                complementoCliente =    '" . $id->getComplementoCliente() . "',
                                bairroCliente =         '" . $id->getBairroCliente() . "',
                                cidadeCliente =         '" . $id->getCidadeCliente() . "',
                                cepCliente =            '" . $id->getCepCliente() . "',
                                ufCliente =             '" . $id->getUfCliente() . "'
                        WHERE idCliente = " . $id->getIdCliente(); 

        $conexao->exec($update);
        return 'Atualização realizada com sucesso';
    }


    public function listar()
    {
        $conexao = Conexao::pegarConexao();
        $select = "SELECT   idCliente, nomeCliente, cpfCliente, cnhCliente, enderecoCliente,
                            numeroCliente, complementoCliente, bairroCliente, cidadeCliente,
                            cepCliente, ufCliente

                    FROM    tbcliente";
        $resultado = $conexao->query($select);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function pesquisar($campoPesquisa)
    {
        $conexao = Conexao::pegarConexao();

        $select =   "   SELECT  idCliente, nomeCliente, cpfCliente, cnhCliente, enderecoCliente,
                                numeroCliente, complementoCliente, bairroCliente, cidadeCliente,
                                cepCliente, ufCliente
                        
                        FROM tbcliente
                        
                        WHERE   nomeCliente
                        LIKE '$campoPesquisa'
                    ";

        $resultado = $conexao->query($select);
        $lista = $resultado->fetchAll();

        return $lista;
    }


    public static function pegarCliente($id)
    {
        $select = "     SELECT  idCliente, nomeCliente, cpfCliente, cnhCliente, enderecoCliente,
                                numeroCliente, complementoCliente, bairroCliente, cidadeCliente,
                                cepCliente, ufCliente

                        FROM tbcliente

                        WHERE idCliente = " . $id . ";
                ";

        $result = Conexao::pegarConexao()->query($select)->fetch();

        $cliente = new Cliente();
        $cliente->setIdCliente($result['idCliente']);
        $cliente->setNomeCliente($result['nomeCliente']);
        $cliente->setCpfCliente($result['cpfCliente']);
        $cliente->setCnhCliente($result['cnhCliente']);
        $cliente->setCepCliente($result['cepCliente']);
        $cliente->setEnderecoCliente($result['enderecoCliente']);
        $cliente->setNumeroCliente($result['numeroCliente']);
        $cliente->setComplementoCliente($result['complementoCliente']);
        $cliente->setBairroCliente($result['bairroCliente']);
        $cliente->setCidadeCliente($result["cidadeCliente"]);
        $cliente->setUfCliente($result["ufCliente"]);

        return $cliente;
    }


    public function excluir($cliente)
    {

        $conexao = Conexao::pegarConexao();

        $delete =   "   DELETE FROM tbcliente
                        WHERE idCliente = " . $cliente->getIdCliente();

        $conexao->exec($delete);

        return 'Exclusão realizada com sucesso';
    }
}
