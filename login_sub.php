<?php
    include("users.php");
	include("md.php");
	include("manipulation.php");
    $signin=new users;
    extract($_POST);
	$pass=$signin->pass($e);
	echo $pass;
	$mp=sChange(substr($pass,16,3),$p);
	$hp=MD($mp);
	$left=substr($hp,0,16);
	$right=substr($hp,16);
	$mdl=MD($left);
	$mdr=MD($right);
	$new="";
	$mdl .=$mdr;
	$NewM=MD($mdl);
	$final=substr($NewM,0,16);
	$final .=substr($pass,16,3);
	$final .=substr($NewM,16);
    if($signin->signin($e,$final))
    {
        $signin->url("home.php");
    }
    else
    {
        $signin->url("index.php?run=failed");
    }
?>