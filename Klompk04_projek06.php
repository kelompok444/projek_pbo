<?php

//class kelinci
class kelinci {
   //property
   var $nama;
   var $warna; 

// method construct di jalankan pertama kali
function __construct() {
  echo "ini adalah isi method construct<br/>";
}

// method destruct dijalankan terakhir 
function __ destruct (){
   echo "ini adalah isi method destruct<br/>";
   }
   
//method kelinci
function __ tampilkan_nama() {
  return "Nama saya pulung_koding<br/>";
}

//instansiasi class kelinci
$ kelinci = new kelinci ();

//memanggil method tampilkan_nama dari class kelinci
echo $ kelinci -> tampilkan_nama ();
