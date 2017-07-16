<?php

include_once './dashboard/Dashboard.php';


$d = new Dashboard();


$arr = $d->getData();


echo json_encode($arr);
?>