<?php 
// mengaktifkan session
session_start();

// menghapus semua session
session_destroy();

// menghapus cookie PHPSESSID
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// mengalihkan halaman ke login
header("location:../index.php");
exit();
?>