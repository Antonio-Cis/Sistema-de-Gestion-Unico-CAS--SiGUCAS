<?php

header('Access-Control-Allow-Origin: *');
session_start();
require_once('../Modelo/correo.php');
$user_name = $_SESSION['usuario'];
$password = $_SESSION['password'];
$passwordActual = $_POST['passwordActual'];
$passwordNueva = $_POST['passwordNueva'];
$passwordNueva2 = $_POST['passwordNueva2'];

$hashFormat = "$2y$10$";
$salt = "cas&ySiGUCAS&LdapCas22";
$key = $hashFormat.$salt;
$contra = hash_hmac('sha256', $passwordNueva2, $key, false);


$contraActual = hash_hmac('sha256', $passwordActual, $key, false);

require_once('config.php');

$conectar = ldap_connect("ldap://{$host}:{$port}") or die("No se puede conectar al servidor LDAP");
ldap_set_option($conectar, LDAP_OPT_PROTOCOL_VERSION, 3);

        if ($conectar) {
            if ($password == $passwordActual) {
                if($passwordNueva == $passwordNueva2){
                    if(@ldap_bind($conectar, "cn={$user_name},{$baseAdmin}", $password)){
                        //$infoA["userPassword"][0]= "$password";
                        $info["userPassword"][0] = "$contra";
                        //@ldap_mod_del($conectar, $baseEstudiantes, $infoA);
                        //@ldap_mod_add($conectar, $baseGeneral, $info);
                        @ldap_mod_replace($conectar, "uid={$user_name},{$baseGeneral}", $info);
                    }else{
                        if(@ldap_bind($conectar, "uid={$user_name},{$baseEstudiantes}", $password)){
                            //$infoA["userPassword"][0]= "$password";
                            $info["userPassword"][0] = "$contra";
                                //@ldap_mod_del($conectar, "uid={$user_name},{$baseEstudiantes}", $infoA);
                                //@ldap_mod_add($conectar, "uid={$user_name},{$baseEstudiantes}", $info);
                                @ldap_mod_replace($conectar, "uid={$user_name},{$baseEstudiantes}", $info);
                                $token = 4;
                                correo_cambio_contra($user_name);
                                echo $token;
                                session_destroy();
                        }else{
                            if(@ldap_bind($conectar, "uid={$user_name},{$baseDocentes}", $password)){
                                //$infoA["userPassword"][0]= "$password";
                                $info["userPassword"][0] = "$contra";
                                //@ldap_mod_del($conectar, "uid={$user_name},{$baseDocentes}", $infoA);
                                //@ldap_mod_add($conectar, "uid={$user_name},{$baseDocentes}", $info);
                                @ldap_mod_replace($conectar, "uid={$user_name},{$baseDocentes}", $info);
                                $token = 4;
                                echo $token;
                                correo_cambio_contra($user_name);
                                session_destroy();
                            }else{
                                if(@ldap_bind($conectar, "uid={$user_name},{$baseServidores}",$password)){
                                    //$infoA["userPassword"][0]= "$password";
                                    $info["userPassword"][0] = "$contra";
                                    //@ldap_mod_del($conectar, "uid={$user_name},{$baseServidores}", $infoA);
                                    //@ldap_mod_add($conectar, "uid={$user_name},{$baseServidores}", $info);
                                    @ldap_mod_replace($conectar, "uid={$user_name},{$baseServidores}", $info);
                                    $token = 4;
                                    echo $token;
                                    correo_cambio_contra($user_name);
                                    session_destroy();
                                }else{
                                    if(@ldap_bind($conectar, "uid={$user_name},{$baseTrabajadores}", $password)){
                                        //$infoA["userPassword"][0]= "$password";
                                        $info["userPassword"][0] = "$contra";
                                        //@ldap_mod_del($conectar, "uid={$user_name},{$baseTrabajadores}", $infoA);
                                        //@ldap_mod_add($conectar, "uid={$user_name},{$baseTrabajadores}",$info);
                                        @ldap_mod_replace($conectar, "uid={$user_name},{$baseTrabajadores}", $info);
                                        $token = 4;
                                        echo $token;
                                        correo_cambio_contra($user_name);
                                        session_destroy();
                                    }else{
                                        if(@ldap_bind($conectar, "uid={$user_name},{$baseOtros}", $password)){
                                            //$infoA["userPassword"][0]= "$password";
                                            $info["userPassword"][0] = "$contra";
                                            //@ldap_mod_del($conectar, "uid={$user_name},{$baseOtros}", $infoA);
                                            //@ldap_mod_add($conectar, "uid={$user_name},{$baseOtros}", $info);
                                            @ldap_mod_replace($conectar, "uid={$user_name},{$baseOtros}", $info);
                                            $token = 4;
                                            echo $token;
                                            correo_cambio_contra($user_name);
                                            session_destroy();
                                        }
                                    }
                                }
                            }
                        }
                    }
                }else{
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
