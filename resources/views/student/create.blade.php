<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('student.store') }}" method="POST">
        @csrf

        <label for="nim">NIM:</label>
        <input type="text" id="nim" name="nim">
        <br><br>

        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
        <br><br>

        <label for="prodi">Prodi:</label>
        <input type="text" id="prodi" name="prodi">
        <br><br>

        <label for="angkatan">Angkatan:</label>
        <input type="number" id="angkatan" name="angkatan">
        <br><br>

        <label for="alamat">Alamat:</label>
        <textarea name="alamat" id="alamat" rows="4"></textarea>
        <br><br>

        <button for="submit">Submit</button>
    </form>
</body>
</html>