<?php

// class kelinci
class kelinci {
  //menentukan property dengan private 
  private $nama = "pulung koding "; 
  
 //method public 
  public function tampilkan_nama () {
    return "Nama saya " .$this->nama;
  } 
}

//instansiasi class kelinci
$kelinci = new Kelinci ();

//memanggil method public tampilkan_nama dari class kelinci
echo  $kelinci->tampilkan_nama();
