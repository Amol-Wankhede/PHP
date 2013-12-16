<html>
<head>
	<title>PHP Example - Session Heloper</title>
</head>
<body>
<?php
session_start();
if (isset($_SESSION["name"])) {
  session_destroy($_SESSION);
  echo "<h4> You've been logged out</h4>";
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
