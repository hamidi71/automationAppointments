<?php
class Database{
    public $db;

    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=db_appointement','root','');
    }

}
