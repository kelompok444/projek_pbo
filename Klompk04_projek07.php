<?php

//class manusia 
class manusia{
   //prop 
     public $nama;
     public $warna;

   //method manusia 
   function tampilan_nama() {
          return "Nama saya pulang_coding} <br/>" ;
    }

} 
//instansiasi class manusia
$manusia=new manusia() ;

//memanggil method tampilan_nama dari class manusia
echo smanusia->tampilkan_nama();
