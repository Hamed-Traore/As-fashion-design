<?php
include('../controllers/delete_controllers.php');
if (isset($_GET['action'])) {
    $action=$_GET['action'];
    if ($action=='delete_order') {
        $delete_order=delete_order_ctr($_GET['order_id']);
        if ($delete_order) {
            header( "Location: ../admin/admin_dashboard.php?msg=success");
        }else {
            header( "Location: ../admin/admin_dashboard.php?msg=could not delete");
        }
    }
    // header( "Location: ../admin/admin_dashboard.php?msg=success");
}else {
    header( "Location: ../actions/logout?msg=an error occured please try later");
}
?>