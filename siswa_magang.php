<?php

$data_siswa=[];

while(true)
{
    // Data siswa

    $data=&$data_siswa;

    // Binner Aplikasi

    tampil("Data Siswa Magang TOP");
    tampil("======================");

    // User input data siswa magang
    $input_siswa=readline("Masukkan data siswa ? ");

    
    if (!preg_match("/^[A-Z a-z]*$/",$input_siswa)||empty($input_siswa))
    {
        echo "Oops! Input hanya bisa huruf ...!\n";
        continue;
    }

    // Simpan data siswa

    $data[]=$input_siswa;
    // Munculkan data siswa magang

    $nomor=1;

    foreach($data as $key)
    {
        tampil("$nomor.$key");
        $nomor++;
    }
        // Tanya user untuk memasukkan data lagi 

    $tanya=readline("Tambah data ? ");

    if ($tanya=="no")
        {
            tampil("Terima Kasih");
        break;
        }
 
}


function tampil($pesan)
{
    echo $pesan.PHP_EOL;
}

// function validasi_huruf($huruf)
// {
//     $pattern = "/A-Z a-z\s/";
//     if (preg_match;
// }

function tanyaUser()
{
    $tanya=readline("Tambah data ()yes/no) ? ");

    if ($tanya=="no" || $tanya!=="yes")
        {
            tampil("Terima Kasih");
        exit;
        }
}

function menuAplikasi()
{
    $data=["input Data","Update Data","Delete Data","Lihat Data"];
}