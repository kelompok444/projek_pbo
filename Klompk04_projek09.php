<?php

   //class kelinci
   class kelinci{
     //menentukan property dengan protected
     protected $nama = "pulung koding";
     
     //method protected
     protected function nama(){
          return " Nama saya " .$this ->nama;
     }
     
     public function tampilkan_nama() {
          return $this -> tampilakan_nama;
     }
    
  }
  
 //instansiasi class kelinci
  $kelinci = new Kelinci();
  
 //memanggil method public tampilkan_nama dari class manusia
 echo $kelinci -> tampilkan_nama();
 
 ?>
