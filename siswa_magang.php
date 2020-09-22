<?php

$data_siswa=[];

while(true)
{
    // copy $data_siswa

    $siswa=&$data_siswa;

    // banner Aplikasi

    tampil("Data Siswa Magang");
    tampil("=================");

    // Tampilkan data

    tampil_data($siswa);

    // Terima input user

    $input_data=readline("Masukkan data siswa magang ? ");

    // Validasi input

    if(!validasi_huruf($input_data) || empty($input_data))
    {
        tampil("Anda tidak memasukkan data dengan benar !!!");
        continue;
    }

    // Simpan data siswa ke array $siswa;

    $siswa[]=$input_data;

    // Tambah data lagi

    tanyaUser();
    
}

function tampil($pesan)
{
    echo $pesan.PHP_EOL;
}

function validasi_huruf($huruf)
{
    $pattern="/[A-Za-z\s]/";

    for($x=0;$x<strlen($huruf);$x++)
    {
        if(!preg_match($pattern,$huruf[$x]))
        {
            return false;
        }
    }
    return true;
}

function tampil_data($data)
{
    $nomor=1;
    foreach($data as $key)
    {
        tampil("$nomor.$key");
        $nomor++;
    }
}

function tanyaUser()
{
    $tambah = readline("Tambah Data Lagi (no) ? ");

    if ($tambah == "no" || $tambah!=="yes") {
       exit;
    }


}

