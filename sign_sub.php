<?php
    include("users.php");
	include("md.php");
	include("manipulation.php");
    $register=new users;
    extract($_POST);
	$r1=rand(32,126);
	$r2=rand(32,126);
	$r3=rand(32,126);
	$key=chr($r1);
	$key .=chr($r2);
	$key .=chr($r3);
	$mp=sChange($key,$p);
	$hp=MD($mp);
	$left=substr($hp,0,16);
	$right=substr($hp,16);
	$mdl=MD($left);
	$mdr=MD($right);
	$new="";
	$mdl .=$mdr;
	$NewM=MD($mdl);
	$final="";
	$final .=substr($NewM,0,16);
	$final .=$key;
	$final .=substr($NewM,16);
    $query="insert into sign_up values('$e','$n','$final')";
    if($register->sign($query))
    {
        $register->url("index.php?run=success");
    }
?>