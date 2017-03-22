<?php
require_once  $_SERVER['DOCUMENT_ROOT'].'/automationAppointments/app/template/header.php';
require_once  $_SERVER['DOCUMENT_ROOT'].'/automationAppointments/app/controllers/CompanyController.php';
$companyController= new CompanyController();
if(isset($_GET['id'])):$id=$_GET['id'];
    $company=$companyController->findOneCompany($id); ?>
<div class="panel panel-primary">
    <div class="panel-heading">
        <div class="panel-title">
            <?=$company['name'] ?>
        </div>
    </div>
    <div class="panel-body">
        <table class="table ">
            <tr>
                <th> Aderess</th>
                <td><?=$company['adresse'] ?></td>
            </tr>
            <tr>
                <th>Description</th>
                <td><?=$company['description'] ?></td>
            </tr>
            <tr>
                <th> Username</th>
                <td><?=$company['username'] ?></td>
            </tr>
            <tr>
                <th> Phone</th>
                <td><?=$company['phone'] ?></td>
            </tr>
            <tr>
                <th> City</th>
                <td><?=$company['city'] ?></td>
            </tr>
            <tr>
                <th> Category</th>
                <td><?=$company['category'] ?></td>
            </tr>

        </table>
    </div>
</div>
<?php
    $clients=$companyController->findClientByIdCompany($company['id']);?>

    <table class="table">
    <?php foreach ($clients as $value):?>
        <tr>
            <td><?=$value['firstname']?></td>
            <td><?=$value['lastname']?></td>
            <td><?=$value['email']?></td>
            <td><?=$value['phone']?></td>
            <td><?=$value['dateApp']?></td>
            <td><?=$value['heureApp']?></td>
            <td><a href="#?<?=$value['id']?>" class="btn btn-success">Valid</a> </td>
            <td><a href="#?<?=$value['id']?>" class="btn btn-danger">Reset</a></td>
        </tr>
    <?php  endforeach; ?>
    </table>
    <?php $disponibilite=$companyController->findDisponibiliteByIdCompany($company['id']);
        if(empty($disponibilite)):
    ?>
    <center><button id="dispId" class="btn btn-warning"> Beheer uw disponibilitée</button></center>

<?php require_once  $_SERVER['DOCUMENT_ROOT'].'/automationAppointments/app/views/disponibilite/addDisponibilite.php';
        else: ?>
     <table>
        <tr>
            <td><?=$disponibilite['dayMonday'] ?></td>
            <td><?=$disponibilite['duMonday'] ?></td>
            <td><?=$disponibilite['auMonday'] ?></td>
        </tr>
         <tr>
             <td><?=$disponibilite['dayTuesday'] ?></td>
             <td><?=$disponibilite['duTuesday'] ?></td>
             <td><?=$disponibilite['auTuesday'] ?></td>
         </tr>
         <tr>
             <td><?=$disponibilite['dayWednesday'] ?></td>
             <td><?=$disponibilite['duWednesday'] ?></td>
             <td><?=$disponibilite['auWednesday'] ?></td>
         </tr>
         <tr>
             <td><?=$disponibilite['dayThursday'] ?></td>
             <td><?=$disponibilite['duThursday'] ?></td>
             <td><?=$disponibilite['auThursday'] ?></td>
         </tr>
        
         <tr>
             <td><?=$disponibilite['dayFriday'] ?></td>
             <td><?=$disponibilite['duFriday'] ?></td>
             <td><?=$disponibilite['auFriday'] ?></td>
         </tr>        
     </table>
<?php endif;
    else:
    ?>
        <span class="alert-danger">U moet een bedrijf kiezen</span>
<?php
    endif;
require_once  $_SERVER['DOCUMENT_ROOT'].'/automationAppointments/app/template/footer.php';