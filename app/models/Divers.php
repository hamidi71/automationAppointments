<?php
//echo dirname(__DIR__);C:\xampp\htdocs\automationAppointments\app
require_once dirname(__DIR__).'/config/Database.php';
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
    public function findAllCategories(){
      $selctCategories =$this->config->db->prepare('select * from categories' );
        $selctCategories->execute();
        return $selctCategories->fetchAll(PDO::FETCH_ASSOC);
    }
    
}