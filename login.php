<html>
<link rel="stylesheet" href="login.css">
</html>
<?php
session_start();
// Menghubungkan dengan database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "intrans";

$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi database gagal: " . $conn->connect_error);
}

// Memeriksa apakah form login sudah di-submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai input dari form
    $username = $_POST["Email"];
    $password = $_POST["password"];

    // Mengecek keberadaan username dan password dalam database
    $sql = "SELECT * FROM user WHERE Email = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Login berhasil
        session_start();
        $_SESSION["Email"] = $username;
        header("Location: home1.php"); // Ganti home.php dengan halaman setelah login
        exit();
    } else {
        // Login gagal
        $error = "Username atau password salah";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="login.css">
  <title>Login Page</title>
  <style>
        <?php
    $color = '#D9D9D9';
    $css = 'body { background-color: ' . $color . '; }';
    ?>
  </style>
</head>
<body>
<div class="main-container">
<div class="form-container">
  <center><h2 class="intrans">INTRANS</h2></center>
  <div class="container">
    <form class="login-form" method="POST">

      <h2>Login</h2>
      <?php if (isset($error)) { ?>
        <p class="error"><?php echo $error; ?></p>
      <?php } ?>
      <form method="post" action="login.php">
  <label for="Email">Username</label>
  <input type="text" name="Email" id="Email" required>

  <label for="password">Password:</label>
  <input type="password" name="password" id="password" required>

  <button type="submit">Login</button>
</form>
      
    </form>
  </div>
</body>
</html>