<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'koneksi.php';

if (isset($_POST['submit'])) {
    echo 'test';

    $username = $_POST['username'];
    $level = $_POST['level'];
    $role = $_POST['role'];

    $result = mysqli_query($conn, "INSERT INTO member_baru (username, level, role) VALUES ('$username', '$level', '$role') ");
    if ($result) {
        echo "
        <script>
            alert('Data berhasil dimasukkan')
        </script>
        ";
    } else {
        echo 'Error description: '.mysqli_error($con);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Pendaftaran</title>
</head>
<body>
    <header>
        <div class="navbar">
            <div class="logo">
                <img src="logo.png" alt="Logo Tim">
            </div>
            <nav>
                <ul>
                    <li><a href="index.html">Beranda</a></li>
                    <li><a href="#tim">Guild Waker!</a></li>
                    <li><a href="#about">About Us</a></li>
                </ul>
                <button id="darkModeToggle" class="dark-mode-button"></button>
            </nav>
        </div>
    </header>

    <main>
        <div class="container">
            <h2>Form Daftar</h2>
            <div class="input-container">
                <form method="POST" action="">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required>
                    <br>
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" step="any" required>
                    <br>
                    <label for="level">Level Akun:</label>
                    <input type="number" id="level" name="level" step="any" required>
                    <br>
                    <div class="input-container">
                        <label for="role">Role:</label>
                        <div class="role-options">
                            <input type="radio" name="role" id="igl" value="IGL">
                            <label for="igl" class="role-label">IGL</label>

                            <input type="radio" name="role" id="rusher" value="Rusher">
                            <label for="rusher" class="role-label">Rusher</label>

                            <input type="radio" name="role" id="flanker" value="Flanker">
                            <label for="flanker" class="role-label">Flanker</label>

                            <input type="radio" name="role" id="support" value="Support">
                            <label for="support" class="role-label">Support</label>
                        </div>
                    </div>
                    <br>
                    <input type="submit" value="Submit" name="submit">
                </form>
            </div>
        </div>
    </main>

    <footer class="footer-me">
        <p>&copy; #GUILDWAKER</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>
