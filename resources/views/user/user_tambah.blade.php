<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah</title>
</head>

<body>
    <h1>Form Tambah Data User</h1>
    <a href="{{ route('user.index') }}">Kembali</a>

    <form method="post" action="{{ route('user.tambah_simpan') }}">
        {{ csrf_field() }}
        <label for="username">Username</label><br>
        <input type="text" name="username" id="username" placeholder="Masukkan Username"><br><br>

        <label for="name">Nama</label><br>
        <input type="text" name="name" id="name" placeholder="Masukkan Nama"><br><br>

        <label for="password">Password</label><br>
        <input type="password" name="password" id="password" placeholder="Masukkan Password"><br><br>

        <label for="level_id">ID Level Pengguna</label><br>
        <input type="text" name="level_id" id="level_id"><br><br>

        <input type="submit" value="simpan" class="btn btn-succes">
    </form>
</body>

</html>
