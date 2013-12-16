<html>
<head>
	<title>PHP Example</title>
</head>
<body>
<?php
session_start();
if (isset($_POST["name"])) {
  $_SESSION["name"] = $_POST["name"];
  ?>
  <p>
    Thanks!
    <a href='continue.php'>Go here for your message</a>
  </p>
<?php } else if (isset($_SESSION["name"])) {
  echo "Hi {$_SESSION["name"]}!";
  echo "<a href='logout.php'> Logout </a>";
} else { ?>
  <form action="" method="POST">
    <p>
      Name:
      <input type="text" name="name" />
    </p>
    <input type="submit" value="submit"/>
  </form>
<?php } ?>
</body>
</html>