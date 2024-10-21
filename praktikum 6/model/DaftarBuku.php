<?php

require_once "Buku.php";
require_once "Database/Database.php";

class DaftarBuku{

    public function getData(){
        $db = new Database();
        $koneksi = $db->getKoneksi();

        $daftar_buku = [];

        $sql = "SELECT * FROM buku";
        $query = $koneksi->query($sql);

        if($query->num_rows > 0){
            while($rown = $query->fetch_assoc()){
                $buku = new Buku($rown['judul'], $rown['pengarang'], $rown['penerbit'], $rown['tahun']);
                array_push($daftar_buku, $buku);
            }
        }

        return $daftar_buku;
    }

    public function getKolomTabel(){
        return array('No', 'Judul', 'Pengarang', 'Penerbit', 'Tahun');
    }

}