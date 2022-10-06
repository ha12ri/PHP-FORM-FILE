<?php 

// ================ LIST OF ALL FILES IN DIRECTORY ================

  // $dir = './';
  // $handle = opendir($dir);

  // while (($file = readdir($handle)) !== false){
  //   echo  $file . "<br>";
  // }
  
  // closedir($handle);

//================ CURRENT WORKING DIRECTORY ================
 echo getcwd();


// ================ SORTED LIST OF FILES IN DIRECTORY ================ 

  $dir = "C:\Users\Dell\Desktop\DSA";
  
  //Sort in ascending order - this is default
  $a = scandir($dir);

  // Sort in descending order
  $b = scandir($dir,1);

  echo "ASCENDING ORDER <br> <br>";
  print_r($a);

  echo "<br> <br>";

  echo "DESENDING ORDER <br> <br>";
  print_r($b);
 
?>