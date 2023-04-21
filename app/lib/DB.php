<?php
namespace app\lib;

use PDO;

class DB
{
    protected $db;
    public function __construct() {
        $config = require 'app/config/db.php';
        $this->db = new PDO('mysql:host='.$config['host'].';dbname='.$config['dbname'], $config['user'], $config['password']);
    }

    public function query($sql, $params = []) {
        $sth = $this->db->prepare($sql);
        if (!empty($params)) {
            foreach ($params as $key => $val) {
                $sth->bindValue(':'.$key, $val);
            }
        }
        $sth->execute();
        return $sth;
    }

    public function row($sql, $params = []) {
        $result = $this->query($sql, $params);
        return $result->fetchAll(2);
    }

    public function column($sql, $params = []) {
        $result = $this->query($sql, $params);
        return $result->fetchColumn();
    }
}