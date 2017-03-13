<?php
require_once dirname(__DIR__).'/config/Database.php';
/**
 * Created by IntelliJ IDEA.
 * User: Baddi
 * Date: 13-3-2017
 * Time: 19:36
 */
class Company{
    public $config=null;

    public function __construct() {
        $this->config=new Database();
    }
    public function findAllCompagny(){
        $selectCompany= $this->config->db->prepare('select c.id,c.name as company,c.adresse,c.username,
        c.phone,cat.name as category,cit.name as city from company c,categories cat,cities cit 
        WHERE c.city_id=cit.id and c.category_id=cat.id');
        $selectCompany->execute();
        return $selectCompany->fetchAll(PDO::FETCH_ASSOC);

    }
    public function findOneCompany($id=false){
        $selectCompany=$this->config->db->prepare('select * from company WHERE id=:idParam');
        $selectCompany->bindParam(':idParam',$id);
        $selectCompany->execute();
        return $selectCompany->fetch(PDO::FETCH_ASSOC);
//        $selectCompany->execute();
//        return $selectCompany->fetchAll(PDO::FETCH_ASSOC);
    }

    public function saveCompany($company=array()){
        $insertCompany=$this->config->db->prepare('insert into company VALUES (?,?,?,?,?,?,?,?,?,?,?)');
        $insertCompany->execute($company);
    }

    public function saveDisponibilites($disponibilities=array()){
        $insetDisponibilite=$this->config->db->prepare('insert into disponibilites VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ');
        $insetDisponibilite->execute($disponibilities);
    }

}