
<?php
$dir = 'G:\sometext\\';


// Open a directory, and read its contents
if (is_dir($dir)){
  if ($dh = opendir($dir)){
    while ($file = readdir($dh)){
		if($file!='.'&&$file!='..'){
      echo trim($file)." contains <br>";
	  $newloc=$dir."".$file ; 
	   $readin=file($newloc);
	  foreach($readin as $tel){
		  echo $tel."<br>";
		  
		}}
	  
    }
    closedir($dh);
  }
}
?>

