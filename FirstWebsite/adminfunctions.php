<?php

/* register function using hashed password, WORKS */

	$conn = mysqli_connect("localhost", "maxs", "Anthony07", "mydb");
/* creating an administrator user, this would be removed after admin user is created */
  if (isset($_POST['adminregister'])) {
$username = $_POST['username'];
$password = $_POST['password'];
$hashed_password = password_hash($password, PASSWORD_BCRYPT); /* 60 character hash */
$stmt = $conn->prepare("INSERT INTO spijkadmins (username, password) VALUES (?, ?)");
$stmt->bind_param("ss", $username, $hashed_password);
$stmt->execute();
$stmt->close();
var_dump($hashed_password); /* see how the hashed password is generating */
}

/* login function - testing but cant get it to work */

if (isset($_POST['adminsubmit'])) {
  $usernameuser = $_POST['username'];
  $passworduser = $_POST['password'];
  $cleanpassword = mysqli_real_escape_string($conn, $_GET['password']);
  $getquery = "SELECT password FROM spijkadmins WHERE username= '$cleanpassword'"; /*query database for all users where username = the entered user and select their password */
  $query = mysqli_query($conn, $getquery, MYSQLI_USE_RESULT);
  while ($row = mysqli_fetch_array($query)) {
    $userpass = $row['password'];
    $verify =   password_verify($passworduser, $userpass); /*verify the entered password with the fetched query */
if ($userpass === true) {
  echo "found"; /* I would write some admin priviledges here but im getting an error */
}
else {
  echo "not found";
}
}
}
    ?>
