<?php 


function bilangSayang(){

  echo "Halo";

} 

function bilangNama($nama) {
    echo "Halo," . $nama . '!</br>';
}


function tambah($a ,$f) {

  $total = $a + $f;
  echo $total; 


}

bilangSayang(); //ini untuk menampilkan function bilangSayang di browser

bilangNama("Rivaldi");



?>