<?php
		$username = $_POST['txtUser'];
		$pass = $_POST['txtPass'];
		//1.Ket noi db server
		$conn=mysqli_connect('localhost','root','','vnexpress');
		if(!$conn){
			die('Cant connect'.mysqli_connect_error());
		}else{
			echo 'Connected.';
		}
		//2.Truy van du lieu
		mysqli_set_charset($conn,"utf8");
		$sql = "SELECT * FROM users WHERE userName = '".$username."' AND userPass='".$pass."'";
		$result=mysqli_query($conn,$sql);
		//3.Xu ly ket qua
		if(mysqli_num_rows($result) > 0) echo "Success.";
		else echo "Fail"; 
		// while($row=mysqli_fetch_assoc($result)){
		// 	echo '<h2>'.$row['newTitle'].'</h2>';
		// }
		//4.Dong ket noi
		mysqli_close($conn);
	?>