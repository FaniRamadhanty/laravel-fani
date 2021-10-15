<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/biodata', function(){
//     return view('halo');
// });

Route::get('/biodata1', function(){
    $nama = "Fani Ramadhanty";
    $kelas = "XII RPL 1";
    $jk  = "Perempuan";
    return view('halo', compact('nama','kelas','jk'));
});

Route::get('posting/{nama?}/{kelas?}/{jk?}', function($nama,$kelas,$jk){
    return view('post',
    [
     'a' => $nama,
     'b' => $kelas,
     'c' => $jk,
    ]);
});

Route::get('blog', function(){
    $data = [
        ['id' => 1, 'title' => 'Olahraga', 'content' => 'sepak bola'],
        ['id' => 2, 'title' => 'Ekonomi', 'content' => 'hutang RI ke luar negri']
    ];

    return view('blog', compact('data'));
});


Route::get('datasiswa', function(){
    $siswa = [
        ['nis' => 19201753173, 'nama' => "Fani Ramadhanty", 'jk' => 'P', 'jurusan' => 'RPL', 'kelas' =>  '12 RPL 1', 'wk' => 'Herna Diana' ],
        ['nis' => 19201753166, 'nama' => "Adya Eka Amelia", 'jk' => 'P', 'jurusan' => 'RPL', 'kelas' =>  '12 RPL 1', 'wk' => 'Herna Diana' ],
        ['nis' => 19201751039, 'nama' => "M. Taufik Al-Hidayat", 'jk' => 'L', 'jurusan' => 'TKRO', 'kelas' =>  '12 TKRO 1', 'wk' => 'Maya' ],
        ['nis' => 19201751002, 'nama' => "Aditia Prasetiyo", 'jk' => 'L', 'jurusan' => 'TKRO', 'kelas' =>  '12 TKRO 1', 'wk' => 'Maya' ],
        ['nis' => 19201753170, 'nama' => "Cecep Superi", 'jk' => 'L', 'jurusan' => 'RPL', 'kelas' =>  '12 RPL 1', 'wk' => 'Herna Diana' ],
        ['nis' => 19201753193, 'nama' => "Syifa Siti Khumairah", 'jk' => 'P', 'jurusan' => 'RPL', 'kelas' =>  '12 RPL 1', 'wk' => 'Herna Diana' ],
        ['nis' => 19201753192, 'nama' => "Maudy Meilisa", 'jk' => 'P', 'jurusan' => 'RPL', 'kelas' =>  '12 RPL 1', 'wk' => 'Herna Diana' ],
        ['nis' => 19201753168, 'nama' => "Agung Rohimat", 'jk' => 'L', 'jurusan' => 'RPL', 'kelas' =>  '12 RPL 1', 'wk' => 'Herna Diana' ],
        ['nis' => 19201753261, 'nama' => "Riska Amelia", 'jk' => 'P', 'jurusan' => 'RPL', 'kelas' =>  '12 RPL 1', 'wk' => 'Herna Diana' ],
        ['nis' => 19201753175, 'nama' => "Fitriyani Putri", 'jk' => 'P', 'jurusan' => 'RPL', 'kelas' =>  '12 RPL 1', 'wk' => 'Herna Diana' ]
        
    ];
    return view('data-siswa', compact('siswa'));
});

// Route::get('/halo', function () {
//     return '<h1>Halo Fani Ramadhanty</h1>';
// });

// Route::get('/biodata', function () {
//     echo '<h3>Nama: Fani Ramadhanty <br>
//             Tempat, Tanggal Lahir: Bandung, 13 November 2003 <br>
//             Alamat : Kp. Cangkuang Wetan <br>
//             Hobi : Menggambar <br>
//             Status : Pelajar <br>
//             Umur : 17 Tahun</h3>';
// }); 



// Route::get('/halo/{nama}/{tgl}', function($nama) {
//     echo "Nama Saya: " .$nama;
//     echo "Tempat, Tanggal Lahir: " .$tanggal;
// });


// //Route Parameter
// Route::get('/input/{nama}/{Tgl}/{alamat}/{hobi}/{status}/{umur}', function($nama,$tanggal,$alamat,$hobi,$status,$umur){
//     echo "Nama Saya: " .$nama . "<br>";
//     echo "Tempat, Tanggal Lahir: " .$tanggal . "<br>";
//     echo "Alamat : " .$alamat . "<br>";
//     echo "Hobi : " .$hobi . "<br>";
//     echo "Status : " .$status ."<br>";
//     echo "Umur : " .$umur . "<br>" ;
// });

// //optional parameter
// Route::get('/optional/{nama?/{Tgl?}/{alamat?}/{hobi?}/{status?}/{umur?}', function($nama="",$tanggal="",$alamat="",$hobi="",$status="",$umur=""){
//     echo "Nama Saya: " .$nama . "<br>";
//     echo "Tempat, Tanggal Lahir: " .$tanggal . "<br>";
//     echo "Alamat : " .$alamat . "<br>";
//     echo "Hobi : " .$hobi . "<br>";
//     echo "Status : " .$status ."<br>";
//     echo "Umur : " .$umur . "<br>" ;
// });

// //latihan
// Route::get('/ujian/{nama?}/{kelas?}/{matematika?}/{Indonesia?}/{Inggris?}/{Produktif?}', function($nama="NULL",$kelas="12 RPL 1",
//     $mtk=0, $indo=0,$inggris=0,$produktif=0){
//     echo "Nama : " .$nama ."<br>";
//     echo "Kelas : " .$kelas ."<br>";
//     echo "Nilai Matematika : " .$mtk."<br>";
//     echo "Nilai Indonesia : " .$indo."<br>";
//     echo "Nilai Inggris : " .$inggris."<br>";
//     echo "Nilai Produktif : " .$produktif."<br>";
//     $Hasil = ($mtk+$indo+$inggris+$produktif)/4;
//     echo "Rata-Rata : $Hasil";
// });

//LATIHAN 2 
// Route::get('/pesan/{makanan?}/{minuman?}/{cemilan?}', function($makanan="null",$minuman="null",$cemilan="null"){
//     if($makanan != 'null'){
//         echo "Anda Pesan <br> Makanan: " .$makanan ."<br>";
//     }if($makanan && $minuman != 'null'){
//         echo "Minum: $minuman" . "<br>";
//     }if($makanan && $minuman && $cemilan != 'null'){
//         echo "Cemilan: $cemilan";
//     }if($makanan == 'null' && $minuman == 'null' && $cemilan == 'null'){
//         echo "Anda Tidak Pesan, Silahkan Pulang";
//     }
// });

Route::get('pesan/{makan?}/{minum?}/{cemilan?}', function ($makan = null, $minum = null, $cemilan = null) {
    if ($makan == null && $minum == null && $cemilan == null){
        $pesan = "Anda tidak memesan, silahkan pulang!";
    }
    if ($makan != null ){
        $pesan = "Anda Memesan<br>"
            . "Makanan : <b>$makan</b>";
    }if ($makan != null && $minum != null ){
        $pesan = "Anda Memesan<br>"
            . "Makanan : <b>$makan</b>"
            . "<br>Minuman : <b>$minum</b>";
    }if ($makan != null && $minum != null && $cemilan != null ){
        $pesan = "Anda Memesan <br>"
            . "Makanan : <b>$makan</b>"
            . "<br>Minuman : <b>$minum</b>"
            . "<br>Cemilan : <b>$cemilan</b>";
    }
    return $pesan;
});
