<?php
/**
 * filename: $Source$
 * begin: Thursday, May 26, 2005
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version. This program is distributed in the
 * hope that it will be useful, but WITHOUT ANY WARRANTY; without even the
 * implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 * See the GNU General Public License for more details.
 *
 * @author Carlo Pedro Woedl <carlopedrowoedl@hotmail.com>, Ron Brand <ron.brand@web.de>
 * @copyright (C) 2005 Carlo Pedro Woedl, Ron Brand
 * @package Language
 * @version $Id$
 */


/**
 * Global
 */
$lng['panel']['edit'] = 'modificar';
$lng['panel']['delete'] = 'borar';
$lng['panel']['create'] = 'crear';
$lng['panel']['save'] = 'almacenar';
$lng['panel']['yes'] = 'si';
$lng['panel']['no'] = 'no';
$lng['panel']['emptyfornochanges'] = 'vacia si no hay cambios';
$lng['panel']['emptyfordefault'] = 'vacia para los valores por defecto';
$lng['panel']['path'] = 'camino';
$lng['panel']['toggle'] = 'Palanca';
$lng['panel']['next'] = 'continuar';

/**
 * Login
 */
$lng['login']['username'] = 'Nombre del usuario';
$lng['login']['password'] = 'Clave de acceso';
$lng['login']['language'] = 'Lengua';
$lng['login']['login'] = 'Registrarse';
$lng['login']['logout'] = 'Finalizar sesi&oacute;n';
$lng['login']['profile_lng'] = 'Lenguaje del perfil';

/**
 * Customer
 */
$lng['customer']['login'] = 'Nombre del usuario';
$lng['customer']['documentroot'] = 'Hogar';
$lng['customer']['name'] = 'Apellido';
$lng['customer']['firstname'] = 'Nombre';
$lng['customer']['company'] = 'Nombre de la empresa';
$lng['customer']['street'] = 'Calle';
$lng['customer']['zipcode'] = 'Codigo Postal';
$lng['customer']['city'] = 'Ciudad';
$lng['customer']['phone'] = 'Tel&eacute;fono';
$lng['customer']['fax'] = 'Telefax';
$lng['customer']['email'] = 'email';
$lng['customer']['customernumber'] = 'Numero de Cliente';
$lng['customer']['diskspace'] = 'Espacio de web (MB)';
$lng['customer']['traffic'] = 'Trafico (GB)';
$lng['customer']['mysqls'] = 'MySQL-Base de datos';
$lng['customer']['emails'] = 'Direcciones e-mail';
$lng['customer']['accounts'] = 'Cuentas e-mail';
$lng['customer']['forwarders'] = 'e-mail redirecci&oacute;n';
$lng['customer']['ftps'] = 'FTP-Cuentas';
$lng['customer']['subdomains'] = 'Subdominios';
$lng['customer']['domains'] = 'Dominios';
$lng['customer']['unlimited'] = 'infinito';

/**
 * Customermenue
 */
$lng['menue']['main']['main'] = 'Universal';
$lng['menue']['main']['changepassword'] = 'Cambiar clave de acceso';
$lng['menue']['main']['changelanguage'] = 'Cambiar Idioma';
$lng['menue']['email']['email'] = 'eMail';
$lng['menue']['email']['emails'] = 'Direcciones';
$lng['menue']['email']['webmail'] = 'Sistema Webmail';
$lng['menue']['mysql']['mysql'] = 'MySQL';
$lng['menue']['mysql']['databases'] = 'Base de datos';
$lng['menue']['mysql']['phpmyadmin'] = 'phpMyAdmin';
$lng['menue']['domains']['domains'] = 'Dominios';
$lng['menue']['domains']['settings'] = 'Configuraciones';
$lng['menue']['ftp']['ftp'] = 'FTP';
$lng['menue']['ftp']['accounts'] = 'Cuentas';
$lng['menue']['ftp']['webftp'] = 'WebFTP';
$lng['menue']['extras']['extras'] = 'Extras';
$lng['menue']['extras']['directoryprotection'] = 'directorio protecci&oacute;n';
$lng['menue']['extras']['pathoptions'] = 'Opciones del camino';

/**
 * Index
 */
$lng['index']['customerdetails'] = 'Datos de Clientes';
$lng['index']['accountdetails'] = 'Datos Cuentas';

/**
 * Change Password
 */
$lng['changepassword']['old_password'] = 'Clave de acceso anterior';
$lng['changepassword']['new_password'] = 'Clave de acceso nueva';
$lng['changepassword']['new_password_confirm'] = 'Clave de acceso (Repetir)';
$lng['changepassword']['new_password_ifnotempty'] = 'Clave Nueva (libre = sin cambio)';
$lng['changepassword']['also_change_ftp'] = 'tambien cambiar la Clave de acceso del FTP';

/**
 * Domains
 */
$lng['domains']['description'] = 'Aqu&iacute; usted puede crear dominios (secundarios) y cambiar sus caminos.<br />El sistema necesitar&aacute; un cierto tiempo para aplicar las nuevas configuraciones despu&eacute;s de cada cambio.';
$lng['domains']['domainsettings'] = 'Configuraciones del dominio';
$lng['domains']['domainname'] = 'Domain name';
$lng['domains']['subdomain_add'] = 'Crear el secundario-dominio';
$lng['domains']['subdomain_edit'] = 'Corrija el dominio (secundario)';
$lng['domains']['wildcarddomain'] = '&#191;Cree como comodín-dominio?';

/**
 * eMails
 */
$lng['emails']['description'] = 'Aqui puede Usted crear su propia direccion e-mail.<br />Una Cuenta es como un Buzon en la Puerta de la Casa . Cuando alguien le escribe una email , esta aparece en su cuenta.<br /><br />Para descargar sus email utilice las configuraciones siguientes en su email-programa: (Los datos en letra <i>kursiva</i> seran sustituidas por las asignadas!)<br />nombre del Host: <b><i>Nombre del Domain</i></b><br />Nombre del Usuario: <b><i>Cuenta / Direccion e-mail</i></b><br />Clave: <b><i>Clave Elegida</i></b>';
$lng['emails']['emailaddress'] = 'Direccion e-mail';
$lng['emails']['emails_add'] = 'Crear Direccion e-mail';
$lng['emails']['emails_edit'] = 'Cambiar Direccion e-mail';
$lng['emails']['catchall'] = 'Catchall';
$lng['emails']['iscatchall'] = 'Definir como Direccion Catchall';
$lng['emails']['account'] = 'Cuenta ';
$lng['emails']['account_add'] = 'Crear Cuenta';
$lng['emails']['account_delete'] = 'Borar Cuenta';
$lng['emails']['from'] = 'Fuente';
$lng['emails']['to'] = 'Destinaci&oacute;n';
$lng['emails']['forwarders'] = 'Reenviar';
$lng['emails']['forwarder_add'] = 'agregar reenvio';

/**
 * FTP
 */
$lng['ftp']['description'] = 'Aqui puede Usted crear FTP-Cuentas adicionales.<br />Los cambios se actualizan de inmediato y Usted puede Usar los FTP-Cuentas.';
$lng['ftp']['account_add'] = 'Crear Cuenta';

/**
 * MySQL
 */
$lng['mysql']['description'] = 'Aqui se puede crear/cancelar la MySQL Base de Datos.<brLos Cambios se actualizan de inmediato y la Base de Datos se puede usar enseguida.<br />En el men&uacute; usted encuentra el phpMyAdmin de la herramienta con el cual usted puede administrar f&aacute;cilmente su base de datos.<br /><br />Para utilizar sus bases de datos en sus propias php-escrituras utilice las configuraciones siguientes: (Los datos en letra <i>kursiva</i> seran sustituidas por las asignadas!)<br />Nombre del Host: <b>localhost</b><br />Nombre del Usuario: <b><i>nombre de la base de datos</i></b><br />Clave: <b><i>clave de acceso que usted ha elegido</i></b><br />Base de datos: <b><i>Nombre de la base de datos';
$lng['mysql']['databasename'] = 'Nombre -/Base de Datos';
$lng['mysql']['databasedescription'] = 'Indentificador de la Base de Datos';
$lng['mysql']['database_create'] = 'Abrir base de Datos';

/**
 * Extras
 */
$lng['extras']['description'] = 'Aqui se pueden crear Extras , por Eje. protector de Directorio.<br />Los cambios son despues de cierto tiempo aplicables.';
$lng['extras']['directoryprotection_add'] = 'Crear Protectos de Directorio';
$lng['extras']['view_directory'] = 'Mostrar directorio';
$lng['extras']['pathoptions_add'] = 'agregue las opciones del camino';
$lng['extras']['directory_browsing'] = 'Mostrar contenido del Directorio';
$lng['extras']['pathoptions_edit'] = 'edit path options';
$lng['extras']['error404path'] = '404';
$lng['extras']['error403path'] = '403';
$lng['extras']['error500path'] = '500';
$lng['extras']['error401path'] = '401';
$lng['extras']['errordocument404path'] = 'URL para errorDocumento 404';
$lng['extras']['errordocument403path'] = 'URL para errorDocumento 403';
$lng['extras']['errordocument500path'] = 'URL para errorDocumento 500';
$lng['extras']['errordocument401path'] = 'URL para errorDocumento 401';

/**
 * Errors
 */
$lng['error']['error'] = 'Error';
$lng['error']['directorymustexist'] = 'El Directorio %s tiene que Existir. Crearlo por Favor a traves del FTP-Programa.';
$lng['error']['filemustexist'] = 'El fichero %s debe existir';
$lng['error']['allresourcesused'] = 'Usted ha usado todos los recursos a su disposicion.';
$lng['error']['domains_cantdeletemaindomain'] = 'Usted no puede Borar un Domain el cual esta siendo usado como e-mail Domain.';
$lng['error']['domains_canteditdomain'] = 'Usted no puede trabajar con este Domain . Debido a que el Admin se lo niega.';
$lng['error']['domains_cantdeletedomainwithemail'] = 'Usted no puede Borar un Domain el cual esta siendo usado como e-mail Domain , Borre primero todos las Direcciones e-mail de este dominio.';
$lng['error']['firstdeleteallsubdomains'] = 'Usted debe primero borar todos los Subdomains, antes de Usted crear un dominio del comodín.';
$lng['error']['youhavealreadyacatchallforthisdomain'] = 'Usted acaba de definer una Direccion como Catchall para este dominio.';
$lng['error']['ftp_cantdeletemainaccount'] = 'Usted no puede suprimir su cuenta principal del ftp';
$lng['error']['login'] = 'El Nombre de Usuario/Clave esta Errado. Por favor intento otra vez!';
$lng['error']['login_blocked'] = 'Esta cuenta fue debido demasiados Falsos intentos por el momento Cerrada. <br />Por favor intento otra vez en '.$settings['login']['deactivatetime'].' segundos.';
$lng['error']['notallreqfieldsorerrors'] = 'Usted no ha llenado todos los espacios asignados o ha colocado un dato Erroneo.';
$lng['error']['oldpasswordnotcorrect'] = 'La Clave Vieja no es correcta.';
$lng['error']['youcantallocatemorethanyouhave'] = 'Usted no puede afectar un aparato m&aacute;s recursos que usted para poseer para se.';
$lng['error']['youcantdeletechangemainadmin'] = 'Como paso de seguiridad Usted no puede Borar/reconfigurar el administrador-principal.';

$lng['error']['mustbeurl'] = 'Usted tiene que dar una completa direccion URL';
$lng['error']['stringisempty'] ='Falta un dato';
$lng['error']['myloginname'] ='\'Nombre del usuario\'';
$lng['error']['mypassword'] ='\'Clave de acceso\'';
$lng['error']['oldpassword'] ='\'Clave Vieja\'';
$lng['error']['newpassword'] ='\'Clave de acceso nueva\'';
$lng['error']['newpasswordconfirm']='\'Clave de acceso (Repetir):\'';
$lng['error']['newpasswordconfirmerror']='La Clave Nueva a la Confirmacion de Clave no Coinciden';
$lng['error']['myname'] = '\'Apellido\'';
$lng['error']['myfirstname'] = '\'Nombre\'';
$lng['error']['emailadd'] = '\'EMail-Address\'';
$lng['error']['mydomain'] = '\'dominio\'';
$lng['error']['mydocumentroot'] = '\'Documentroot\'';
$lng['error']['loginnameexists']= 'Conexi&oacute;n-Nombre %s existe ya';
$lng['error']['emailiswrong']= 'Email address %s contiene caracteres inv&aacute;lidos o es incompleto';
$lng['error']['loginnameiswrong']= 'Conexi&oacute;n-Nombre %s contiene caracteres inv&aacute;lidos';
$lng['error']['userpathcombinationdupe']='combinaci&oacute;n del username y del camino existe ya';
$lng['error']['patherror']='¡Error general! el camino no puede ser vacío';
$lng['error']['errordocpathdupe']='Opci&oacute;n para el camino %s existe ya';
$lng['error']['adduserfirst']='Usted debe primero crear un Cliente';
$lng['error']['domainalreadyexists']= 'El dominio %s se asigna ya a un cliente';
$lng['error']['nolanguageselect']='Asigne un Idioma.';
$lng['error']['nosubjectcreate']='Usted debe de asignar un Titulo.';
$lng['error']['nomailbodycreate']='Usted debe de Agregar Texto al Mail.';
$lng['error']['templatenotfound']='Modelo no encontrado.';
$lng['error']['alltemplatesdefined']='Usted no puede definir m&aacute;s modelos, todos los lenguajes se utiliza ya.';
$lng['error']['wwwnotallowed']='WWW no se permite como nombre para los secundario-dominios.';
$lng['error']['subdomainiswrong']='El secundario-dominio %s contiene caracteres inv&aacute;lidos.';
$lng['error']['domaincantbeempty']='El Dominio-Apellido no puede estar Vacio.';
$lng['error']['domainexistalready']='El dominio %s existe ya.';
$lng['error']['emailexistalready']='El email address %s existe ya.';
$lng['error']['maindomainnonexist']='El principal-dominio %s no existe.';
$lng['error']['destinationnonexist']='Cree por favor su email-expedici&oacute;n en \'Destinaci&oacute;n\'.';
$lng['error']['destinationalreadyexistasmail']='La direccion Secundaria %s ya existe como Direccion e-mail activa.';
$lng['error']['destinationalreadyexist']='Ya existe una Direccion Secundaria para %s .';
$lng['error']['destinationiswrong']= 'La Direccion Secundaria %s contiene simbolos invalidos o esta incompleta.';
$lng['error']['domainname']=$lng['domains']['nombre del dominio'];



/**
 * Questions
 */
$lng['question']['question'] = 'Pregunta de la seguridad';
$lng['question']['admin_customer_reallydelete'] = '&#191;Usted realmente desea suprimir el %s del cliente? Esto no puede ser deshecha!';
$lng['question']['admin_domain_reallydelete'] = '&#191;Usted realmente desea suprimir el dominio %s?';
$lng['question']['admin_domain_reallydisablesecuritysetting'] = '&#191;Usted realmente desea desactivar estas configuraciones de la seguridad (OpenBasedir y/o SafeMode)?';
$lng['question']['admin_admin_reallydelete'] = '&#191;Usted realmente desea suprimir a administrador %s? Reasignar&aacute;n a cada cliente y dominio al administrador principal.';
$lng['question']['admin_template_reallydelete'] = 'H&aacute;gale realmente desean suprimir el modelo \'%s\'?';
$lng['question']['domains_reallydelete'] = '&#191;Usted realmente desea suprimir el dominio %s?';
$lng['question']['email_reallydelete'] = '&#191;Usted realmente desea suprimir el email address %s?';
$lng['question']['email_reallydelete_account'] = '&#191;Usted realmente desea suprimir email-considera de %s?';
$lng['question']['email_reallydelete_forwarder'] = '&#191;Usted realmente desea suprimir la email-expedici&oacute;n %s?';
$lng['question']['extras_reallydelete'] = '&#191;Usted realmente desea suprimir la protecci&oacute;n del directorio para %s?';
$lng['question']['extras_reallydelete_pathoptions'] = '&#191;Usted realmente desea suprimir las opciones del camino para el %s?';
$lng['question']['ftp_reallydelete'] = '&#191;Usted realmente desea suprimir la cuenta %s del ftp?';
$lng['question']['mysql_reallydelete'] = '&#191;Usted realmente desea suprimir la base de datos %s? Esto no puede ser deshecha!';

/**
 * Mails
 */
$lng['mails']['pop_success']['mailbody'] = 'Hola,\n\nsu cuenta del correo {EMAIL}\nfue instalada con &eacute;xito .\n\nEsto es un email autom&aacute;ticamente creado,\n\nno conteste por favor!\n\nSinceramente suyo, el SysCP-Equipo';
$lng['mails']['pop_success']['subject'] = 'cuenta del email instalada con &eacute;xito';
$lng['mails']['createcustomer']['mailbody'] = 'Hola {FIRSTNAME} {NAME},\n\naquí est&aacute; su informaci&oacute;n de la cuenta:\n\nNombre del utilizador: {USERNAME}\nPalabra de paso: {PASSWORD}\n\nGracias,\nel SysCP-Equipo';
$lng['mails']['createcustomer']['subject'] = 'Informaci&oacute;n de la cuenta';


/**
 * Admin
 */
$lng['admin']['overview'] = 'Descripci&oacute;n';
$lng['admin']['ressourcedetails'] = 'Recursos usados';
$lng['admin']['systemdetails'] = 'Detalles del sistema';
$lng['admin']['syscpdetails'] = 'Detalles de SysCP';
$lng['admin']['installedversion'] = 'Versi&oacute;n instalada';
$lng['admin']['latestversion'] = 'La versi&oacute;n m&aacute;s &uacute;ltima';
$lng['admin']['lookfornewversion']['clickhere'] = 'b&uacute;squeda vía Web-servicio';
$lng['admin']['lookfornewversion']['error'] = 'Error mientras que lee';
$lng['admin']['resources'] = 'Recursos';
$lng['admin']['customer'] = 'Cliente';
$lng['admin']['customers'] = 'Clientes';
$lng['admin']['customer_add'] = 'Cree a cliente';
$lng['admin']['customer_edit'] = 'Corrija a cliente';
$lng['admin']['domains'] = 'Dominios';
$lng['admin']['domain_add'] = 'Cree el dominio';
$lng['admin']['domain_edit'] = 'Corrija el dominio';
$lng['admin']['subdomainforemail'] = 'Secundario-dominios como email-dominios';
$lng['admin']['admin'] = 'Administrador';
$lng['admin']['admins'] = 'Administradores';
$lng['admin']['admin_add'] = 'Cree el admininstrator';
$lng['admin']['admin_edit'] = 'corrija el admininstrator';
$lng['admin']['customers_see_all'] = '&#191;Puede ver a todos los clientes?';
$lng['admin']['domains_see_all'] = '&#191;Puede ver todos los dominios?';
$lng['admin']['change_serversettings'] = '&#191;Puede cambiar configuraciones del servidor??';
$lng['admin']['server'] = 'Servidor';
$lng['admin']['serversettings'] = 'Configuraciones';
$lng['admin']['stdsubdomain'] = 'Secundario-dominio est&aacute;ndar';
$lng['admin']['stdsubdomain_add'] = 'Cree el subdomain est&aacute;ndar';
$lng['admin']['deactivated'] = 'Desactivado';
$lng['admin']['deactivated_user'] = 'Desactive a utilizador';
$lng['admin']['sendpassword'] = 'Envíe la palabra de paso';
$lng['admin']['ownvhostsettings'] = 'Poseer vHost-Configuraciones';
$lng['admin']['configfiles']['serverconfiguration'] = 'Configuraci&oacute;n';
$lng['admin']['configfiles']['files'] = '<b>Configfiles:</b> Cambie por favor los ficheros siguientes<br />o cr&eacute;elos con el contenido siguiente si no existen.<br /><b>Por favor la nota:</b> La MySQL-palabra de paso no se ha substituido por razones de la seguridad.<br />Substituya por favor &quot;MYSQL_PASSWORD&quot;en sus el propios. Si usted se olvid&oacute; de su MySQL-palabra de paso<br />usted la encontrar&aacute; en el &quot;lib/userdata.inc.php&quot;.';
$lng['admin']['configfiles']['commands'] = '<b>Commands:</b> Ejecute por favor los comandos siguientes en un shell.';
$lng['admin']['configfiles']['restart'] = '<b>Relanzar:</b> Ejecute por favor los comandos siguientes en un shell para recargar la nueva configuraci&oacute;n.';
$lng['admin']['templates']['templates'] = 'Modelos';
$lng['admin']['templates']['template_add'] = 'Agregue el modelo';
$lng['admin']['templates']['template_edit'] = 'Corrija el modelo';
$lng['admin']['templates']['action'] = 'Acci&oacute;n';
$lng['admin']['templates']['email'] = 'E-Mail';
$lng['admin']['templates']['subject'] = 'Tema';
$lng['admin']['templates']['mailbody'] = 'email-texto';
$lng['admin']['templates']['createcustomer'] = 'Bienvenida-email para los nuevos clientes';
$lng['admin']['templates']['pop_success'] = 'Bienvenida-email para las nuevas cuentas del email';
$lng['admin']['templates']['template_replace_vars'] = 'Variables que se substituir&aacute;n en el modelo:';
$lng['admin']['templates']['FIRSTNAME'] = 'Substituido por el nombre de los clientes.';
$lng['admin']['templates']['NAME'] = 'Substituido por el Apellido de los clientes.';
$lng['admin']['templates']['USERNAME'] = 'Substituido por el username de la cuenta de clientes.';
$lng['admin']['templates']['PASSWORD'] = 'Substituido por la palabra de paso de la cuenta de clientes.';
$lng['admin']['templates']['EMAIL'] = 'Substituido por el direccionamiento de la cuenta de POP3/del IMAP.';

/**
 * Serversettings
 */
$lng['serversettings']['session_timeout']['title'] = 'Descanso de la sesi&oacute;n';
$lng['serversettings']['session_timeout']['description'] = '&#191;Cuanto tiempo un utilizador tiene que ser inactivo antes de que una sesi&oacute;n consiga inv&aacute;lida (los segundos)?';
$lng['serversettings']['accountprefix']['title'] = 'Cliente-prefijo';
$lng['serversettings']['accountprefix']['description'] = '&#191;Qu&eacute; prefijo deben las cuentas de cliente tener??';
$lng['serversettings']['mysqlprefix']['title'] = 'Prefijo del SQL';
$lng['serversettings']['mysqlprefix']['description'] = '&#191;Qu&eacute; prefijo deben las cuentas del mysql tener?';
$lng['serversettings']['ftpprefix']['title'] = 'Prefijo del ftp';
$lng['serversettings']['ftpprefix']['description'] = 'Qu&eacute; prefijo deben las cuentas del ftp tener?';
$lng['serversettings']['documentroot_prefix']['title'] = 'Directorio de documento';
$lng['serversettings']['documentroot_prefix']['description'] = '&#191;D&oacute;nde deben todos los datos ser salvados?';
$lng['serversettings']['logfiles_directory']['title'] = 'Directorio de los ficheros de diario';
$lng['serversettings']['logfiles_directory']['description'] = '&#191;D&oacute;nde deben todos los ficheros de diario ser salvados?';
$lng['serversettings']['ipaddress']['title'] = 'IP address';
$lng['serversettings']['ipaddress']['description'] = '&#191;Cu&aacute;l es el IP address de este servidor?';
$lng['serversettings']['hostname']['title'] = 'Hostname';
$lng['serversettings']['hostname']['description'] = '&#191;Cu&aacute;l es el hostname de este servidor?';
$lng['serversettings']['apacheconf_directory']['title'] = 'Directorio de la configuraci&oacute;n de Apache';
$lng['serversettings']['apacheconf_directory']['description'] = '&#191;D&oacute;nde es el apache ficheros de la configuraci&oacute;n?';
$lng['serversettings']['apachereload_command']['title'] = 'Comando de la recarga de Apache';
$lng['serversettings']['apachereload_command']['description'] = '&#191;Cu&aacute;l es el comando de la recarga de Apache?';
$lng['serversettings']['bindconf_directory']['title'] = 'Directorio de la configuraci&oacute;n de Bind';
$lng['serversettings']['bindconf_directory']['description'] = '&#191;D&oacute;nde est&aacute;n los ficheros de la configuraci&oacute;n del Bind?';
$lng['serversettings']['bindreload_command']['title'] = 'Comando de la recarga de Bindmm';
$lng['serversettings']['bindreload_command']['description'] = '&#191;Cu&aacute;l es el comando de la recarga de Bind?';
$lng['serversettings']['binddefaultzone']['title'] = 'Zona del valor por defecto de Bind';
$lng['serversettings']['binddefaultzone']['description'] = '&#191;Cu&aacute;l es el nombre de la zona del valor por defecto?';
$lng['serversettings']['vmail_uid']['title'] = 'email-Uid';
$lng['serversettings']['vmail_uid']['description'] = '&#191;Qu&eacute; UserID deben los email tener??';
$lng['serversettings']['vmail_gid']['title'] = 'eMail-Gid';
$lng['serversettings']['vmail_gid']['description'] = '&#191;Qu&eacute; identificaci&oacute;n del grupo deben los email tener?';
$lng['serversettings']['vmail_homedir']['title'] = 'Hogar-directorio de los email';
$lng['serversettings']['vmail_homedir']['description'] = '&#191;D&oacute;nde deben todos los email ser salvados?';
$lng['serversettings']['adminmail']['title'] = 'Remitente';
$lng['serversettings']['adminmail']['description'] = '&#191;Qu&eacute; remitente-tratan para los email se envía del panel?';
$lng['serversettings']['phpmyadmin_url']['title'] = 'phpMyAdmin URL';
$lng['serversettings']['phpmyadmin_url']['description'] = '&#191;Cu&aacute;l es el URL al phpMyAdmin? (tienen que comenzar con http://)';
$lng['serversettings']['webmail_url']['title'] = 'WebMail URL';
$lng['serversettings']['webmail_url']['description'] = '&#191;Cu&aacute;l es el URL a WebMail? (tienen que comenzar con http://)';
$lng['serversettings']['webftp_url']['title'] = 'WebFTP URL';
$lng['serversettings']['webftp_url']['description'] = '&#191;Cu&aacute;l es el URL a WebFTP?? (tienen que comenzar con http://)';
$lng['serversettings']['language']['description'] = 'Cu&aacute;l es su lenguaje est&aacute;ndar del servidor?';
$lng['serversettings']['maxloginattempts']['title']       = 'Tentativas m&aacute;ximas de la conexi&oacute;n';
$lng['serversettings']['maxloginattempts']['description'] = 'Las tentativas m&aacute;ximas de la conexi&oacute;n despu&eacute;s de lo cual la cuenta consigue desactivadas.';
$lng['serversettings']['deactivatetime']['title']       = 'Desactive el tiempo';
$lng['serversettings']['deactivatetime']['description'] = 'Mida el tiempo (segundos) de una cuenta consigue desactivado despu&eacute;s de que demasiada conexi&oacute;n intente.';

?>