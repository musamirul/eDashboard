	<?php
		$servername="localhost";
		$username="root";
		$password="";
		$dbname="aaes";	
		
		//create connection
		$mysqli=new mysqli($servername, $username, $password, $dbname);

		if($mysqli->connect_errno){
			echo "Could not connect MySqli:" .$mysqli->connect_errno;
			exit();
		}

		$sql = "SELECT * FROM oncall";

		$results = $mysqli->query($sql);

		$row = $results->fetch_all(MYSQLI_ASSOC);

		$results->free_result();

		$mysqli->close();

		echo json_encode($row);
?>