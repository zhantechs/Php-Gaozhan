<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input</title>
</head>
<body>
    <h1>Form Input Nama dan Password</h1>
    <form action="" method="POST">
        <label for="name">Nama:</label><br>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        
        <button type="submit">Submit</button>
    </form>

    <?php
    // Mengecek apakah form sudah disubmit
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Mengambil data dari form
        $name = htmlspecialchars($_POST['name']);
        $password = htmlspecialchars($_POST['password']);
        
        // Menampilkan data yang diinput
        echo "<h2>Hasil Input:</h2>";
        echo "Nama: " . $name . "<br>";
        echo "Password: " . $password;
    }
    ?>
</body>
</html>
