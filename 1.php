
<?php
$a=6;
 $b=12;
  $c=7; 
  $d=89;
  $l=0;

function suma(){
	global $a,$b,$c,$d;
	$k=$a+$b+$c+$d;
	echo  "suma ".$k."<br>";
}
function minim(){
	global $a,$b,$c,$d;
	if ($a<$b && $a<$c && $a<$d) {
		echo "elementul minim ".$a;
	}
	elseif ($b<$a && $b<$c && $b<$d) {
		echo "elementul minim ".$b;
	}
	elseif ($c<$a && $c<$b && $c<$d) {
		echo "elementul minim ".$c;
	}
	elseif ($d<$a && $d<$b && $d<$c) {
		echo "elementul minim ".$d."<br>";
	}
	
	
}

function caracter(){
	  global $l;
      $a="a";
      $txt="mama are patru parale";
      $txtlength=count($txt);
      for ($i=0; $i <$txtlength ; $i++) { 
      	if ($txt[i]==$a) {
      		$l++;
      	}
      }
      echo "caracterul a se repeta de  ".$l;

}


suma();
minim();
caracter();

?>

