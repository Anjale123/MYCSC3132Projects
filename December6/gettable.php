<!DOCTYPE html>
<html>
<head>
	<title>USER LIST</title>
</head>
<body>

	<?php

//db connection file
require_once 'dbconf.php'; //(conf/dbconf.php) (folder/file)
require_once 'myfunc.php';

//PrintTable
user($connect);

?>



</body>
</html>