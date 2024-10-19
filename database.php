<?php
    class Database{
        public $host = "localhost";
        public $username = "root";
        public $password = "";
        public $database = "db_php0060";
        
        public $connect;

        function __construct(){
            $this->connect = mysqli_connect($this->host,$this->username,$this->password);
            mysqli_select_db($this->connect,$this->database);
            //pengujian
            //if($this->connect->connect_error){
            //    die("Koneksi gagal : ". $this->connect->connect_error);
            //}
            //echo "Koneksi berhasil";

        }

        function tampilData(){
            $data = mysqli_query($this->connect, "SELECT * FROM tb_users0060");
            $rows = mysqli_fetch_all($data, MYSQLI_ASSOC);
            //var_dump($rows);
            return $rows;
        }

        function tambahData($nama, $alamat, $nohp, $jenis_kelamin, $foto){
            mysqli_query($this->connect, "INSERT INTO tb_users0060 VALUES (NULL, '$nama' , '$alamat' , '$nohp', '$jenis_kelamin','$foto')");
        }

        function editData($id){
            $data = mysqli_query ($this->connect, "SELECT * from tb_users0060 WHERE id = '$id'");
            $rows = mysqli_fetch_all($data, MYSQLI_ASSOC);
            return $rows;
        }

        function updateData($id, $nama, $alamat, $nohp, $jenis_kelamin, $foto){
            mysqli_query ($this->connect, "UPDATE `tb_users0060` SET `nama` = '$nama', `alamat`='$alamat', `nohp`='$nohp', `jenis_kelamin` ='$jenis_kelamin', `foto` = '$foto' WHERE `tb_users0060`.`id` = '$id'");
        }

        function hapusData($id){
            mysqli_query ($this->connect, "DELETE FROM `tb_users0060` WHERE `tb_users0060`.`id` = '$id'");
        }

        function selekData($id){
            $data = mysqli_query ($this->connect, "SELECT * from tb_users0060 WHERE id = '$id'");
            $rows = mysqli_fetch_all($data, MYSQLI_ASSOC);
            return $rows;
        }
    }
?>