<?php
//initial commit new branch
/**
 * Created by IntelliJ IDEA.
 * User: Baddi
 * Date: 6-3-2017
 * Time: 21:26
 */

$db = new PDO('mysql:host=localhost;dbname=db_appointement','root','');
$selectCompany= $db->prepare('select c.id,c.name as company,c.adresse,c.username,
        c.phone,cat.name as category,cit.name as city from company c,categories cat,cities cit 
        WHERE c.city_id=cit.id and c.category_id=cat.id');
$selectCompany->execute();
$fetch= $selectCompany->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($fetch);




//header('Location:app/index.php');
