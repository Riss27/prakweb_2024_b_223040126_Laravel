<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <a href="/">home</a>
    <a href="/about">about</a>
    <a href="/blog">blog</a>
    <a href="/contact">contact</a>
    <h1>Halaman Contact</h1>

    <form action="/contact" method="post">
        @csrf
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama"><br>
        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email"><br>
        <label for="pesan">Pesan:</label><br>
        <textarea id="pesan" name="pesan"></textarea><br>
        <button type="button">Kirim</button>

</body>
</html>
