<?php
require_once '../config/Database.php';
/**
 * Created by IntelliJ IDEA.
 * User: Baddi
 * Date: 11-3-2017
 * Time: 10:13
 */
class Divers
{
    public $config = null;

    public function __construct(){
        $this->config = new Database();
    }

    public function findAllCities(){
        $selectCities = $this->config->db->prepare('select * from cities');
        $selectCities->execute();
        $fetchCities = $selectCities->fetchAll(PDO::FETCH_ASSOC);
        return $fetchCities;
    }
}