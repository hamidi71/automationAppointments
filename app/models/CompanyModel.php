<?php
require_once dirname(__DIR__).'/config/Database.php';

class Company{
    public $config=null;

    public function __construct() {
        $this->config=new Database();
    }
    private function getCalledMethod($function){
        
        $methode=explode('::',$function);
        return $methode[1];
        echo $this->getCalledMethod(__METHOD__);
    }
    public function findAllCompagny(){
        $selectCompany= $this->config->db->prepare('select c.id,c.name as company,c.adresse,c.username,
        c.phone,c.image,cat.name as category,cit.name as city from company c,categories cat,cities cit 
        WHERE c.city_id=cit.id and c.category_id=cat.id and c.active=1');
        $selectCompany->execute();
        return $selectCompany->fetchAll(PDO::FETCH_ASSOC);

    }
    public function findOneCompany($id=false){       
        $selectCompany=$this->config->db->prepare('select c.id,c.description,c.name ,c.adresse,c.username,
        c.phone,c.image,cat.name as category,cit.name as city from company c,categories cat,cities cit 
        WHERE c.city_id=cit.id and c.category_id=cat.id and c.active=1 and c.id=:idParam ');
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

    public function findClientByIdCompany($idCompany=false){
        $query='select c.id,c.firstname,c.lastname,c.email,c.phone,c.heureApp,c.dateApp from clients c where c.company_id=:idParam';
         $selectClient=$this->config->db->prepare($query);
        $selectClient->bindParam(':idParam',$idCompany);
        $selectClient->execute();
        return $selectClient->fetchAll(PDO::FETCH_ASSOC);
    }
}