<?php
include "view/header.php";
if (isset($_GET['act']) && $_GET['act']!=''){
    $act = $_GET['act'];
    switch ($act) {
        case "sanphamct":
            include "view/chitietsanpham.php";
    }

} else {
    include "view/home.php";
}
//
//include "view/chitietsanpham.php";
include "view/footer.php";
?>
