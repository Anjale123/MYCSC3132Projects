<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php
		require_once 'dbconf.php';	
		try {
			// Corrected SQL query with explicit column list
			$sql = "INSERT INTO student (regno,name, age, course) 
			        VALUES ('2020asp26','Alice ', 20, 'CSC')";
            echo "<br>";
			
			// Execute the query
			$result = mysqli_query($connect, $sql);

			if ($result) {
				echo "New student record created successfully";
			} else {
				die("Error: " . mysqli_error($connect));
			}

		} catch (Exception $e) {
			die($e->getMessage());
		}
	?>

</body>
</html>