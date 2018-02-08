<?php
if(!defined('InEmpireBak'))
{
	exit();
}
define('EmpireBakConfig',TRUE);

//Database
$phome_db_dbtype='mysql';
$phome_db_ver='5.0';
$phome_db_server='localhost';
$phome_db_port='';
$phome_db_username='root';
$phome_db_password='liquidsky@526';
$phome_db_dbname='';
$baktbpre='';
$phome_db_char='';

//USER
$set_username='admin';
$set_password='ed55b77929b76b867c1cd61d216ff20f';
$set_loginauth='';
$set_loginrnd='Qc2QtBjmnvgVvkWvxEbdweBwkVrVqu';
$set_outtime='60';
$set_loginkey='0';
$ebak_set_keytime=60;
$ebak_set_ckuseragent='';

//COOKIE
$phome_cookiedomain='';
$phome_cookiepath='/';
$phome_cookievarpre='qhawun_';

//LANGUAGE
$langr=ReturnUseEbakLang();
$ebaklang=$langr['lang'];
$ebaklangchar=$langr['langchar'];

//BAK
$bakpath='bdata';
$bakzippath='zip';
$filechmod='1';
$phpsafemod='';
$php_outtime='1000';
$limittype='';
$canlistdb='';
$ebak_set_moredbserver='';
$ebak_set_hidedbs='';
$ebak_set_escapetype='1';

//EBMA
$ebak_ebma_open=1;
$ebak_ebma_path='phpmyadmin';
$ebak_ebma_cklogin=0;

//SYS
$ebak_set_ckrndvar='jgjlvwtgetgk';
$ebak_set_ckrndval='0e87fe1e8e42389fd37a5db2aef97a6b';
$ebak_set_ckrndvaltwo='d7fceabaf23b2288a140aaa318a14354';
$ebak_set_ckrndvalthree='72a2a4cabb8aa0354898f311d22db424';
$ebak_set_ckrndvalfour='9b63263a03bf06e31f18db8b71932a7d';

//------------ SYSTEM ------------
HeaderIeChar();
?>