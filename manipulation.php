<?php
	function sChange($sub,$pass){
		$s1="";
		$s2="";
		$s3="";
		$new1="";
		$newS="";
		$final="";
		$count=0;
		$i=0;
		if((strlen($pass)%3)==0){
			$new=$pass;
		}
		elseif((strlen($pass)%3)==1){
			$new=$pass;
			$new .="  ";
		}
		else{
			$new=$pass;
			$new .=" ";
		}
		for($i;$i<strlen($new);$i++){
			$p=ord($new[$i])-32;
			if($count==0){
				$s=ord($sub[0])-32;
				$x=$p ^ $s;
				$c=chr($x+32);
				$s1 .=$c;
				$count=1;
			}
			elseif($count==1){
				$s=ord($sub[1])-32;
				$x=$p ^ $s;
				$c=chr($x+32);
				$s2 .=$c;
				$count=2;
			}
			else{
				$s=ord($sub[2])-32;
				$x=$p ^ $s;
				$c=chr($x+32);
				$s3 .=$c;
				$count=0;
			}
		}
		$new1 .=$s1;
		$new1 .=$s2;
		$new1 .=$s3;
		$i=(ord($sub[0])-32)%strlen($new);
		$new2=substr($new1,0,$i);
		$newS .=Substr($new1,$i);
		$newS .=$new2;
		return $newS;
	}
?>