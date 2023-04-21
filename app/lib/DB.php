<?php
namespace app\lib;

use PDO;
use PDOException;

class DB
{
    protected $db;
    public function __construct() {
        require 'app/config/db.php';
        $this->createNewDatabase();

//        $this->db = new PDO('mysql:host='.$config['host'].';dbname='.$config['dbname'], $config['user'], $config['password']);
    }

    public function createNewDatabase()
    {
        $config = require 'app/config/db.php';
        $dbname = $config['dbname'];
        try {
            $this->db = new PDO('mysql:host='.$config['host'], $config['user'], $config['password']);
            $databases = $this->db->query('show databases')->fetchAll(PDO::FETCH_COLUMN);
            if (!in_array($dbname, $databases)) {
                $this->db->exec("
                    CREATE DATABASE $dbname;
					use $dbname;
					CREATE TABLE `doors` (id integer auto_increment primary key,
					    color varchar(30),
					    skin_color varchar(30),
					    handle_color varchar(30),
					    width varchar(30),
					    height varchar(30),
					    opening varchar(30),
					    accessories varchar(30)
					    );
                ");
            }
        } catch(PDOException $e) {
            echo "Error :". $e->getMessage();
        }
    }

    public function add($sql) {
        $sth = $this->db->prepare($sql);
        $sth->execute();
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