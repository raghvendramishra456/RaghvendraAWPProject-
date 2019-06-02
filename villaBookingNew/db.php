<?php

try{
    $con=new PDO("mysql:host=192.168.100.25:3307;dbname=group029_campus","group029","welcome");
    echo "connected";
} catch (PDOException $ex) {
    echo $ex->getMessage();

}

