<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="formulir/proses" method="post">
        <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
        Nama :
        <input type="text" name="nama"> <br />
        Nim :
        <input type="number" name="nim"> <br />
        <input type="submit" value="Simpan">
    </form>
</body>

</html>