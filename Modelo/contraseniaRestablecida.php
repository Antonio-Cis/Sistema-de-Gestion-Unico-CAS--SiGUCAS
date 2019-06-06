<?php

header('Access-Control-Allow-Origin: *');   
$user_name = $_POST['usuario'];
$password = "ldap1234";
$passwordNueva = $_POST['passN'];
$passwordNueva2 = $_POST['passN2'];
$admin = "admin";

$hashFormat = "$2y$10$";
$salt = "cas&ySiGUCAS&LdapCas22";
$key = $hashFormat.$salt;
$contra = hash_hmac('sha256', $passwordNueva2, $key, false);

require_once('config.php');

$conectar = ldap_connect("ldap://{$host}:{$port}") or die("No se puede conectar al servidor LDAP");
ldap_set_option($conectar, LDAP_OPT_PROTOCOL_VERSION, 3);
        if ($conectar) {
                if($passwordNueva == $passwordNueva2){
                    $filtro = "uid=$user_name";
                    $arreglo = array();
                    $resultado = @ldap_search($conectar, $baseGeneral, $filtro, $arreglo) or exit("Buscando...");
                    $firs = @ldap_first_entry($conectar, $resultado);
                    $dn = ldap_get_dn($conectar, $firs);
                    if(@ldap_bind($conectar, "cn={$admin},{$baseAdmin}", $password)){
                        $info["userPassword"][0] = "$contra";
                        @ldap_mod_replace($conectar, $dn, $info);
                        $token = 2;
                        echo "$token";
                    }
                }else{
                    $token = 1;
                    echo "$token";   
                }
        }else{
            $token = 0;
            echo "$token";
        }
?>
