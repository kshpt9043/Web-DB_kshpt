<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<?php 

	// MySQL ����̹� ���� 
	include("./SQLconstants.php");
	$conn = mysqli_connect($mySQL_host,$mySQL_id,$mySQL_password,$mySQL_database) or die ("Can't access DB");
	mysqli_query($conn, "SET NAMES 'euckr'");
	mysqli_set_charset($conn, "utf8");

	if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['message']) && $_POST['message'] !== "")
	{
		$message = $_POST['message'];
		$select = $_POST['select'];
	
		if ($select == "1") {
			$sql = "SELECT * FROM GameDB WHERE title LIKE '%$message%'";
		} else if ($select == "2") {
			$sql = "SELECT * FROM GameDB WHERE developer LIKE '%$message%'";
		} else {
			$sql = "SELECT * FROM GameDB";
		}
	} 
	else 
	{
		$sql = "SELECT * FROM GameDB";
	}

	$resultSet = mysqli_query( $conn, $query );
	while( $result = mysqli_fetch_array( $resultSet ) )
	{
		echo "\n<BR>ID : ".$result['id'];
		echo "\n<BR>게임제목 : ".$result['title'];
		echo "\n<BR>제작사 : ".$result['developer'];
		echo "\n<BR>출시일 : ".$result['date'];
		echo "\n<BR>가격 : ".$result['price'];
		echo "\n<BR><img src = '".$result['image']."' height='280' width='180'> <br>";
	}

	// MySQL ����̹� ���� ����
	mysqli_free_result( $resultSet );
	mysqli_close( $conn );
?>
