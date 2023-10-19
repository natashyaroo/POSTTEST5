<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login Admin</title>
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
            <h2>Login</h2>
            <div class="input-container">
                <form method="POST" action="dashboard.php">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required>
                    <br>
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" step="any" required>
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