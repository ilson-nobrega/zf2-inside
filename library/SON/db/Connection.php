<?php
/**
 * @author: Ilson Nóbrega <ilson@inobrega.com.br>
 * @since: 12/05/2015 - 21:07
 */

namespace SON\Db;
use PDO;

class Connection {

    private $server;
    private $dbname;
    private $user;
    private $password;

    public  function __construct($server, $user, $password, $dbname) {
        $this->server = $server;
        $this->user = $user;
        $this->password = $password;
        $this->dbname = $dbname;
//        return new PDO("pgsql:host={$this->server};dbname={$this->dbname}", $this->user, $this->password);
    }
}