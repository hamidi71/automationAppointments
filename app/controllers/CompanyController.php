<?php
require_once  dirname(__DIR__).'/models/Company.php';
require_once dirname(__DIR__).'/models/Divers.php';
/**
 * Created by IntelliJ IDEA.
 * User: Baddi
 * Date: 13-3-2017
 * Time: 20:30
 */
    class CompanyController{
        public $modelCompany=null;
        public $modelDivers=null;
        
        public function __construct(){
            $this->modelCompany=new Company();
            $this->modelDivers= new Divers();
        }
        public function findAllCompany(){
            return $this->modelCompany->findAllCompagny();            
        }
        public function findOneCompany($id){
            return $this->modelCompany->findOneCompany($id);          
            
        }
    }