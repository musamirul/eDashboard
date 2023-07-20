	<?php

		define('db_server','localhost');
		define('db_user','root');
		define('db_pass','');
		define('db_name','aaes');

		$con = mysqli_connect(db_server,db_user,db_pass,db_name);
		if($con->connect_error){
			echo "failed to connect to MYSQL";
		}
		
		/*$servername="localhost";
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

		echo json_encode($row);*/
?>