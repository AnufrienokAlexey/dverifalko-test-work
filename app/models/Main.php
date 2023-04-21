<?php

namespace app\models;
use app\core\Model;

class Main extends Model
{

    public function sendForm($color, $skin_color, $handle_color, $width, $height, $opening, $accessories) {
        $config = require 'app/config/db.php';
        $dbname = $config['dbname'];
        $this->db->add("use $dbname; INSERT INTO `doors` (`id`, `color`, `skin_color`, `handle_color`, `width`, `height`, `opening`, `accessories`) VALUES (null, '$color', '$skin_color', '$handle_color', '$width', '$height', '$opening', '$accessories')");
    }
}