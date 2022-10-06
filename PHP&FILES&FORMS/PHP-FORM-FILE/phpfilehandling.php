<?php 
 
  // ============================== Example 1 (Simple) ================================

   //File.
   $file = "people.txt";
   
   //Open the file in read mode.
   $op =  fopen($file, "r");
   //echo $op;   (Can't use echo here because $op is just a pointer not the content of the file.)
 
   //File Size in Bytes.
   $size = filesize($file);
   
   //Read the Content of the file
   $cont = fread($op,$size);
   echo $cont;

   fclose($op);

  // ============================== Example 2 (Binary) ================================

  //  $file2 = "C:\Users\Dell\Desktop\sample\giphy.gif";
   
  //  //Open the file (use 'rb' mode for binary files).
  //  $bf =  fopen($file2, "rb");
    
  //  $gifim = fread($bf, filesize($file2));
 
  //  //used to indicate the original media type of the resource.
  //  //explore all header content types here ==> https://www.geeksforgeeks.org/http-headers-content-type/
  //  header('Content-Type: image/gif');
  //  echo $gifim;

  //  fclose($bf);

  // ============================== Example 3 (Remote) ================================

  //  $file3 = "https://vitbhopal.ac.in/";
   
  //  $vb =  fopen($file3, "rb");
    
  //  //use stream_get_contents() intead of fread() or use loop.
  //  $vitb = stream_get_contents($vb);

  //  //using loop
  //  //while(!feof($vb)){
  //  //  $vitb .= fread($vb, 8192);
  //  //}
 
  //  echo $vitb;

  //  fclose($vb);
  


?>