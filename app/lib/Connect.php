<?php

namespace app\lib;

use app\lib\HasConnect;

class Connect extends Db {

    use HasConnect;

    public function getTable($table)
    {
        $dbname = parent::getDbname();
        try {
            return $this->getDatabase()->query("SELECT * FROM $table");
        }
        catch(PDOException $e) {
            $this->getException($e, $dbname);
        }
    }
}