<?php

 //calss kelinci
  class kelinci{
   //property
     var $nama;
     var $warna;
     
     
     function_construct(){
       echo"ini adalah isi method construct <br/>";
     }
     
     // method kelinci
     function tampilkan_nama(){
           return"Nama saya pulung_coding <br/>";
      }
   
   
  }
   //instansiasi class kelinci
   $manusia = new kelinci();
   
   //memanggil method tampilkan_nama dari class manusia
   echo $kelinci -> tampilkan_nama();
   
  
 ?>
