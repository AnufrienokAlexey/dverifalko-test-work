<?php

namespace app\models;
use app\core\Model;

class News extends Model
{
    public function getNews() {
        return $this->db->row('SELECT title, description FROM news');
    }
}