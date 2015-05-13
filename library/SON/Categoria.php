<?php
/**
 * @author: Ilson Nóbrega <ilson@inobrega.com.br>
 * @since: 12/05/2015 - 21:11
 */

namespace SON;

use SON\Db\Connection;

class Categoria {

    private $id;
    private $nome;
    private $db;

    public function __construct(Connection $db) {
        $this->db = $db;
    }

    public function listar(){
        $query = "SELECT * FROM categorias";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
}