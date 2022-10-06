<?php 

   //=================== fwrite() ====================

   $file = "newfile.txt";
 
   //open the file in write mode
   $point = fopen($file, "w");
   //'w' overwrites use 'a' to append.

   //New Content 
   $text = "\n a book or other written or printed work, regarded in terms of its content rather than its physical form. \n \n fwrite() function used.";

   fwrite($point, $text);

   fclose($point);


?>