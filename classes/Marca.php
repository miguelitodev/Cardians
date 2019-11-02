<?php
class Marca
{

    private $idMarca;
    private $nomeMarca;

    public function getIdMarca()
    {
        return $this->idMarca;
    }

    public function getNomeMarca()
    {
        return $this->nomeMarca;
    }

    public function setIdMarca($id)
    {
        $this->idMarca = $id;
    }

    public function setnomeMarca($nome)
    {
        $this->nomeMarca = $nome;
    }

    public function cadastrar($marca)
    {
        $conexao = Conexao::pegarConexao();
        $insert = "  insert into tbmarca(nomeMarca)
                        values ('" . $marca->getNomeMarca() . "')
                    ";
        $conexao->exec($insert);
        return 'Cadastro realizado com sucesso!';
    }

    public function editar($id)
    {
        $conexao = Conexao::pegarConexao();
        $update = "  update tbmarca
                        set nomeMarca = '" . $id->getNomeMarca() . "'
                        where idMarca = " . $id->getIdMarca();
        $conexao->exec($update);
        return 'Atualização realizada com sucesso';
    }

    public function listar()
    {
        $conexao = Conexao::pegarConexao();
        $select = "SELECT idMarca, nomeMarca FROM tbmarca";
        $resultado = $conexao->query($select);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function pesquisar($campoPesquisa){
        $conexao = Conexao::pegarConexao();
        $select = "select idMarca, nomeMarca from tbmarca
                        where nomeMarca like '$campoPesquisa'";
        $resultado = $conexao->query($select);
        $lista = $resultado->fetchAll();
        return $lista;   
    }

    public static function pegarMarca($id)
    {
        $sql = "SELECT idMarca, nomeMarca FROM tbmarca WHERE idMarca = " . $id . ";";
        $result = Conexao::pegarConexao()->query($sql)->fetch();
        $marca = new Marca();
        $marca->setIdMarca($result["idMarca"]);
        $marca->setNomeMarca($result["nomeMarca"]);
        return $marca;
    }

    public function excluir($marca)
    {
        
        $conexao = Conexao::pegarConexao();
        $apagar = "  delete from tbmarca
                        where idMarca = " . $marca->getIdMarca();
        $conexao->exec($apagar);
        //var_dump($marca);die;
        return 'Exclusão realizada com sucesso';
    }
}
