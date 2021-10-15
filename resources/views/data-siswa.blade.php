<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Data Siswa <br>
     @foreach ($siswa as $siswa1)
     Nis : {{$siswa1['nis']}} <br>
     Nama : {{$siswa1['nama']}} <br>
     Jenis Kelamin : {{$siswa1['jk']}} <br>
     Jurusan : {{$siswa1['jurusan']}} <br>
     Kelas : {{$siswa1['kelas']}} <br>
     Wali kelas : {{$siswa1['wk']}} <br>
     <hr>
     @endforeach
    </p>
</body>
</html>