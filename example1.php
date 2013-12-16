<html>
<head>
   <title>PHP Example</title>
</head>
<body>
<?php
if( isset($_GET["name"]) ) { ?>
   <p>
   Hello,
   <?php echo $_GET["name"] ?>!   </p>
   <p>Notice the Address bar URL (GET Data is displayed)</p>
<?php } else { ?>
   <form action="" method="GET">
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
