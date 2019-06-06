<?php

$host = "192.168.1.2" ; //RUTA DEL SERVIDOR
$port = 389;   //PUERTO DE CONEXIÓN DEL SERVIDOR
$ldap_admin_user='admin'; //Admin user
$ldap_admin_password='ldap1234'; //Admin password
$baseAdmin = "dc=cas,dc=com";
$baseGeneral = "ou=personal,dc=cas,dc=com";
$baseEstudiantes = "ou=estudiantes,ou=academicos,"."".$baseGeneral;
$baseDocentes = "ou=docentes,ou=academicos,"."".$baseGeneral;
$baseServidores = "ou=servidores,ou=administrativos,"."".$baseGeneral;
$baseTrabajadores = "ou=trabajadores,ou=administrativos,"."".$baseGeneral;
$baseOtros = "ou=otros,"."".$baseGeneral;
$baseGrupo = "universidad_implementacion";
$baseGeneral2 = "ou=universidad_implementacion,dc=cas,dc=com";
$baseAcademicos = "ou=academicos,"."".$baseGeneral;
$baseAdministrativos = "ou=administrativos,"."".$baseGeneral;
$paginacion = 500;
// $sistemas_integrar[0] = array("EVA","moodle.png","sistema Moodle","https://eva.unl.edu.ec","Entorno Virtual de Aprendizaje");
// $sistemas_integrar[1] = array("SIAAF","siaaf.png","sistema Wordpress","https://siaaf.unl.edu.ec","Sistema de Información Académico Administrativo y Financiero");
// $sistemas_integrar[2] = array("FILESENDER","filesender.jpg","File Sender","https://filesender.cedia.org.ec","FileSender");
// $sistemas_integrar[3] = array("SGA DOCENTES","sga-docentes.png","SGA Docentes","https://docentes.unl.edu.ec","Sistema de Gestión Académico - Docentes");
// $sistemas_integrar[4] = array("EDUROAM","eduroam.png","Eduroam","https://sac.unl.edu.ec","Eduroam");
// $sistemas_integrar[5] = array("ZOOM","zoom.jpg","Zoom","https://zoom.us/support/download","ZOOM");

$sistemas_integrar[0] = array("MOODLE","Vista/img/moodle.png","sistema Moodle","https://eva.unl.edu.ec","Entorno Virtual de Aprendizaje");
$sistemas_integrar[1] = array("WORDPRESS","Vista/img/wordpress.png","sistema Wordpress","https://siaaf.unl.edu.ec","Sistema de Información Académico Administrativo y Financiero");
$sistemas_integrar[2] = array("JENKINS","Vista/img/Jenkins.png","File Sender","https://filesender.cedia.org.ec","FileSender");
$sistemas_integrar[3] = array("DRUPAL","Vista/img/drupal2.jpg","SGA Docentes","https://docentes.unl.edu.ec","Sistema de Gestión Académico - Docentes");
$sistemas_integrar[4] = array("GITLAB","Vista/img/gitlab.png","Eduroam","https://sac.unl.edu.ec","Eduroam");
$sistemas_integrar[5] = array("Sistema de Administración Central SAC","Vista/img/inicios.jpg","SAC",
	"http://localhost:8888/sacfinals/vistaLogin.php","SAC");

// $host ="192.168.1.2"; //RUTA DEL SERVIDOR
// $port = 389;   //PUERTO DE CONEXI?^?N DEL SERVIDOR
// $ldap_admin_user='admin'; //Admin user
// $ldap_admin_password='j8J6gc6GJ45fGHks3bv'; //Admin password
// $baseAdmin = "dc=unl,dc=edu,dc=ec";
// $baseGeneral = "ou=personal,dc=unl,dc=edu,dc=ec";
// $baseEstudiantes = "ou=estudiantes,ou=academicos,"."".$baseGeneral;
// $baseDocentes = "ou=docentes,ou=academicos,"."".$baseGeneral;
// $baseServidores = "ou=servidores,ou=administrativos,"."".$baseGeneral;
// $baseTrabajadores = "ou=trabajadores,ou=administrativos,"."".$baseGeneral;
// $baseOtros = "ou=otros,"."".$baseGeneral;
// $baseGrupo = "universidad_implementacion";
// $baseGeneral2 = "ou=universidad_implementacion,dc=unl,dc=edu,dc=ec";
// $baseAcademicos = "ou=academicos,"."".$baseGeneral;
// $baseAdministrativos = "ou=administrativos,"."".$baseGeneral;

$server_url='http://localhost:8888/sacfinals';
$cas_url = 'https://192.168.1.2:443/cas';

$mensaje_crear = "Usuario Creado con éxito";
$mensaje_eliminar = "Usuario Eliminado con éxito";
$mensaje_modificar = "Usuario modificado con éxito";
$mensaje_cambiar_contra = "Contraseña modificada con éxito";
$mensaje_recuperar = "Link enviado a su correo";


?>
