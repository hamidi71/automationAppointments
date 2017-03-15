<?php
require_once  $_SERVER['DOCUMENT_ROOT'].'/automationAppointments/app/template/header.php';
require_once  $_SERVER['DOCUMENT_ROOT'].'/automationAppointments/app/controllers/CompanyController.php';
$companyController= new CompanyController();
if(isset($_GET['id'])):$id=$_GET['id'];
    $company=$companyController->findOneCompany($id);

    endif;




require_once  $_SERVER['DOCUMENT_ROOT'].'/automationAppointments/app/template/footer.php';