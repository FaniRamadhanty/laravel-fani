<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center><h1>Biodata</h1></center>
    @foreach ($query as $item)
    <p>id: {{$item->id}}</p>
    <p>Nama: {{$item->name}}</p>
    <p>Tanggal Lahir: {{$item->bornDate}}</p>
    <p>Jenis Kelamin: {{$item->gender}}</p>
    <p>Alamat: {{$item->address}}</p>
    <p>Agama: {{$item->religion}}</p>
    <p>Umur: {{$item->age}}</p>
    <p>Hobi: {{$item->hobby}}</p>
    
    <hr>
    @endforeach
</body>
</html>