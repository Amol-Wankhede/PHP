<html>
<head>
   <title>PHP Example - POST </title>
</head>
<body>
<?php
if( isset($_POST["name"]) ) { ?>
   <p>
   Hello,
   <?php echo $_POST["name"] ?>!   </p>
   <p>Notice the Address bar URL (POST Data not displayed)</p>
<?php } else { ?>
   <form action="" method="POST">
      <p>Please write your name below:</p>
      <p>
         <input type="text" name="name" />
      </p>
      <p>
         <button type="submit">Submit</button>
      </p>
   </form>
<?php } ?>
</body>
</html>
