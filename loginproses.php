<?php 
session_start(); 
include('connection.php');
if(isset($_POST['username'])){
	$uname=$_POST['username'];
	$pass=$_POST['password'];
	$sql="SELECT * FROM karyawan WHERE username='$uname'";
	$result=$connection->query($sql);
	if($row=mysqli_fetch_assoc($result)){
		$db_password = $row['password'];
		if($pass == $db_password){
			$_SESSION['role'] = "karyawan";
			header('location:employeeonly.php');
		} else {
			?>
			<script>
				window.alert('Incorrect password');
				window.location.href='login.php';
			</script>
			<?php
		}
	} else {
		?>
		<script>
			window.alert('Incorrect password or username');
			window.location.href='login.php';
		</script>
		<?php
	}
	
	
}


?>