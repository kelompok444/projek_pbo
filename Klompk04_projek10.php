<?php

   //class parent
   
   class manusia{
     
      //property class manusia
        public $nama_saya;
     
      //method pada class manusia 
      function berinama($saya){
         $this->nama_saya=$saya;
      }
}

 //class turunan atau sub class dari class manusia
 //kita menghubungkan class dengan syntax extends
 class teman extends manusia{
   
   
      //property class teman
         public $nama_teman;
         
       
      //method pada class teman
      function berinamateman($teman){
          $this->nama_teman= $teman;
      }
      
 }    
    
 //instansiasi class teman
 $malasngoding = new teman;
 
 //method beri nama adalah method pada class manusia,
  $malasngoding->berinama (" PULUNG CODING");
  $malasngoding->berinamateman(" DIKI ");
  
 //menampilkan isi property
  echo " Nama Saya :". $malasngoding->nama_saya . <br/>;
  echo " Nama Teman Saya :" . $malasngoding->nama_teman;
 ?>
