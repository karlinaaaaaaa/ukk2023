<?php

Class RPL{
    
    public $nama = "karlina";
    public $kelas = "12";
    public $umur = "17";
    public $tgl_lahir = "09";
}

Class siswa extends RPL{
    public $jurusan = "RPL";
    public $leb = "Leb Rpl";

    public function membuat(){

        return "<b> DATA SISWA</b> <br>
        <br> 
        nama : $this->nama <br>
        kelas : $this->kelas <br>  
        umur : $this->umur <br>  
        tanggal lahir : $this->tgl_lahir <br>";
    }
     
}


$b = new siswa();
echo $b->membuat();