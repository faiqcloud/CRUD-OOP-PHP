<?php
 include "database.php";
 $db = new Database;

 $aksi = $_GET['aksi'];

 if ($aksi=="tambah") {
    $direktori = "img/";
    $foto = $_FILES['foto']['name'];
    move_uploaded_file($_FILES['foto']['tmp_name'], $direktori.$foto);
    $db->tambahData($_POST['nama'], $_POST['alamat'], $_POST['nohp'], $_POST['jnskelamin'],$_FILES['foto']['name']);
    header("location:index.php");
 }
 elseif($aksi == "update") {
   $datafoto = $db->editData($_GET['id']);
   $data = $datafoto['foto'];

   if (!empty($_FILES['foto']['name'])) { 
       $foto = $_FILES['foto']['name'];

     
       if (file_exists("img/" . $data)) {
           unlink("img/" . $data);
       }

       move_uploaded_file($_FILES['foto']['tmp_name'], "img/" . $foto);
       $data = $foto; 
   }
   $db->updateData(
       $_POST['id'],
       $_POST['nama'],
       $_POST['alamat'],
       $_POST['nohp'],
       $_POST['jnskelamin'],
       $data
   );
   header("Location: index.php");
}

 elseif($aksi=="hapus"){
    $datafoto = $db->editData($_GET['id']);
            $data = $datafoto['foto'];
            if ($data) {
                $foto = 'img/' . $data;
        
                if (file_exists($foto)) {
                    unlink($foto);
                }
            }
            $db->hapusData($_GET['id']);
    header("location:index.php");
 }
?>