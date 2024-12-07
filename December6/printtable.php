<!DOCTYPE html>
<html>
<head>
    <title>printtable</title>
</head>
<body>
   
<?php

require_once 'dbconf.php'; //db cottector file
require_once 'myfunc.php'; // all functions

// global variable
 $user_id = $_GET['user_id'];

 userdetails($user_id,$connect);


?>


</body>
</html>