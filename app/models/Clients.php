<?php
require_once dirname(__DIR__).'/config/Database.php';
/**
 * Created by IntelliJ IDEA.
 * User: Baddi
 * Date: 13-3-2017
 * Time: 19:59
 */
class Clients{
    public $config=null;
    
    public function __construct(){
        $this->config= new Database();
    }


}