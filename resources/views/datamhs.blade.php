<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Pasing Data Adalah peroses mengoper/mengirim data dari controler ke view</h1>
    <p>nama : {{$nama}}</p>
    @foreach($matkul as $m)
        <li>{{$m}}</li>
    @endforeach
</body>
</html>