<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Siswa</title>
</head>
<body>
    <h1>Form Data Siswa</h1>
    <form action="alvin55.php" method="post">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required><br><br>
        
        <label for="nis">NIS:</label>
        <input type="text" id="nis" name="nis" required><br><br>
        
        <input type="submit" value="Kirim">
    </form>

    <?php
    // Memeriksa apakah form telah disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = htmlspecialchars($_POST['nama']);
        $nis = htmlspecialchars($_POST['nis']);
        
        
    }
    ?>
</body>
</html>