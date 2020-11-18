<? php
// PHP OOP part 2 pengertian class, object, property dan method
// class Kelinci 
    class Kelinci {
     //property
     var $nama;
     var $warna;

    //method kelinci
     function tampilan_nama () {
        return "Nama saya  pulung_coding <br/>" ;
} 
     function warna_bulu() {
        return"warna bulu saya putih<br/>";
} 
 //instansiasi class kelinci
    $kelinci=new kelinci() ;

 //memanggil method tampilkan_nama dari class Kelinci
    echo $kelinci->tampilkan_nama() ;

 //memanggil method warna bulu dari class Kelinci 
  echo $kelinci->warna_bulu() ;
