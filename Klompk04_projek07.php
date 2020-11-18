<?php

//class kelinci
class kelinci{
   //prop 
     public $nama;
     public $warna;

   //method kelinci
   function tampilan_nama() {
          return "Nama saya pulang_coding} <br/>" ;
    }

} 
//instansiasi class kelinci
$kelinci=new kelinci() ;

//memanggil method tampilan_nama dari class kelinci
echo $kelinci->tampilkan_nama();
