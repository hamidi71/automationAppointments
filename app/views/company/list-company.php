<?php
require_once  $_SERVER['DOCUMENT_ROOT'].'/automationAppointments/app/template/header.php';
require_once  $_SERVER['DOCUMENT_ROOT'].'/automationAppointments/app/controllers/CompanyController.php';
$companyController= new CompanyController();
?>
<table class="table">
    <?php foreach ($companyController->vindAllCompany() as $value):?>
    <tr>
        <td><?= $value['company']?></td>
        <td><?= $value['adresse']?></td>
        <td><?= $value['username']?></td>
        <td><?= $value['phone']?></td>
        <td><?= $value['category']?></td>
        <td><?= $value['city']?></td>

        <td>
            <div> <a href="#" class="btn btn-info">See Profile</a></div>
            <div> <a href="#" class="btn btn-info">Make Appointment</a></div>
        </td>




    </tr>
   <?php  endforeach;?>

</table>
<?php
require_once  $_SERVER['DOCUMENT_ROOT'].'/automationAppointments/app/template/footer.php';
