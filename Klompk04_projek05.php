<?php

 //calss manusia
  class manusia{
   //property
     var $nama;
     var $warna;
     
     
     function_construct(){
       echo"ini adalah isi method construct <br/>";
     }
     
     // method manusia
     function tampilkan_nama(){
           return"Nama saya pulung_coding <br/>";
      }
   
   
  }
   //instansiasi class manusia
   $manusia = new manusia();
   
   //memanggil method tampilkan_nama dari class manusia
   echo Smanusia -> tampilkan_nama();
   
  
 ?>
