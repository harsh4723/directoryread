
<?php
$dir = 'G:\sometext\\';

if (is_dir($dir)){
  if ($dh = opendir($dir)){    // to open a directory
    while ($file = readdir($dh)){   //to read from the directory
		if($file!='.'&&$file!='..'){     //removing the deafault files in directory
      echo trim($file)." contains <br>";
	  $newloc=$dir."".$file ; 
	   $readin=file($newloc);     //read data inside the file
	  foreach($readin as $tel){
		  echo $tel."<br>";
		  
		}}
	  
    }
    closedir($dh);
  }
}
?>

