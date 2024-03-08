<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ubah</title>
</head>

<body>
    <h1>Form Edit Data User</h1>
    <a href="{{ route('user.index') }}">Kembali</a>

    <form method="post" action="{{ route('user.ubah_simpan', ['id' => $user->user_id]) }}">

        @csrf
        @method('PUT')

        <label for="username">Username</label><br>
        <input type="text" name="username" id="username" value="{{ $user->username }}"><br><br>

        <label for="name">Nama</label><br>
        <input type="text" name="name" id="name" value="{{ $user->name }}"><br><br>

        <label for="password">Password</label><br>
        <input type="password" name="password" id="password" value="{{ $user->password }}"><br><br>

        <label for="level_id">ID Level Pengguna</label><br>
        <input type="text" name="level_id" id="level_id" value="{{ $user->level_id }}"><br><br>

        <input type="submit" value="ubah" class="btn btn-success">
    </form>
</body>

</html>
