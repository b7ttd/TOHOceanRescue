<?php
// credit to https://gist.github.com/code-boxx/5e0cbc797a61fe938e0868e3702e879c#file-2-lib-admin-php
class Admin {
  // (A) CONSTRUCTOR - CONNECT TO DATABASE
  private $pdo = null;
  private $stmt = null;
  public $error = "";
  function __construct () {
    $this->pdo = new PDO(
      "mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=".DB_CHARSET,
      DB_USER, DB_PASSWORD, [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
  }

  // (B) DESTRUCTOR - CLOSE CONNECTION
  function __destruct () {
    if ($this->stmt !== null) { $this->stmt = null; }
    if ($this->pdo !== null) { $this->pdo = null; }
  }

  // (C) HELPER FUNCTION - RUN SQL QUERY
  function query ($sql, $data=null) : void {
    $this->stmt = $this->pdo->prepare($sql);
    $this->stmt->execute($data);
  }

  // (D) GET USER BY ID OR EMAIL
  function get ($id) {
    $this->query(sprintf("SELECT * FROM `users` WHERE `%s`=?",
      is_numeric($id) ? "id" : "username"
    ), [$id]);
    return $this->stmt->fetch();
  }

  // (E) SAVE USER
  function save ($username, $email, $password, $id=null) {
    // (E1) SQL & DATA
    $sql = $id==null
      ? "INSERT INTO `users` (`id`, `username`, `password`) VALUES (?,?,?)"
      : "UPDATE `users` SET `id`=?, `username`=?, `password`=? WHERE `user_id`=?" ;
    $data = [$name, $email, password_hash($password, PASSWORD_DEFAULT)];
    if ($id!=null) { $data[] = $id; }

    // (E2) RUN SQL
    $this->query($sql, $data);
    return true;
  }

  // (F) VERIFICATION
  function verify ($email, $password) {
    // (F1) GET USER
    $user = $this->get($email);
    $pass = is_array($user);

    // (F2) CHECK PASSWORD
    if ($pass) { $pass = password_verify($password, $user["user_password"]); }

    // (F3) REGISTER MEMBER INTO SESSION
    if ($pass) {
      foreach ($user as $k=>$v) { $_SESSION["admin"][$k] = $v; }
      unset($_SESSION["admin"]["user_password"]);
    }

    // (F4) RESULT
    if (!$pass) { $this->error = "Invalid username/password"; }
    return $pass;
  }
}

// (G) DATABASE SETTINGS - CHANGE TO YOUR OWN
define("DB_HOST", "localhost");
define("DB_NAME", "tohweb");
define("DB_CHARSET", "utf8mb4");
define("DB_USER", "root");
define("DB_PASSWORD", "");

// (H) START!
session_start();
$_ADM = new Admin();
// ----------------------------------------------------------
// (B) CHECK LOGIN CREDENTIALS
if (count($_POST)!=0) {
  $_ADM->verify($_POST["email"], $_POST["password"]);
}

// (C) REDIRECT IF SIGNED IN
if (isset($_SESSION["admin"])) {
  header("Location: 5-protected.php");
  exit();
} ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Admin Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.5">
    <link rel="stylesheet" href="static/styles.css">
  </head>
  <body>
    <!-- (D) LOGIN FORM -->
    <?php
    if ($_ADM->error!="") { echo "<div class='error'>".$_ADM->error."</div>"; }
    ?>
    <form method="post">
      <h1>ADMIN LOGIN</h1>
      <label>Email</label>
      <input type="email" name="username" required>
      <label>Password</label>
      <input type="password" name="password" required>
      <input type="submit" value="Login">
    </form>
  </body>
</html>
