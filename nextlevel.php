<?php
	include("md.php");
	function nextL($str){
		$l=substr($str,0,16);
		$r=substr($str,16);
		$mdl=MD($l);
		$mdr=MD($r);
		$n="";
		$n .=$mdl;
		$n .=$mdr;
		$x=MD($n);
		return $x;
	}
?>