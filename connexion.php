<?php

function connectBdd(){
    try {
        $bdd=new PDO('mysql:host=localhost;dbname=poo_eshop','root','root');
    }
    catch (Exception $e){
        echo 'erreur : '.$e;
    }
    return $bdd;
}
