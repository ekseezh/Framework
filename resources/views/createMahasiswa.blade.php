<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Form Create Mahasiswa</h1>
    <form action=/Mahasiswa/input method=post>
    <pre style="font-family:'Arial">
        NIM        : <input type="text" name="nim">
        NAMA    : <input type="text" name="nama">
        KELAS   : <input type="text" name="kelas">
        <br />
        @csrf
        <input type="submit" value="Kirim">
    </pre>
    </form>
    <hr />
</body>
</html>
