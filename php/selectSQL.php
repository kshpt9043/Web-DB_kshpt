<?php header('Content-Type: text/html; charset=euc-kr'); ?>
<?php 
	// ???? ?????????? ???? ???? ????? ???
	$message =  $_POST['message'];
	$message = ( ( ( $message == null ) || ( $message == "" ) || ( strncmp( $message, " * ", 3 ) == 0 ) ) ? "_%" : $message );

	// MySQL ?????? ???? 
	include("./SQLconstants.php");
	$conn = mysqli_connect($mySQL_host,$mySQL_id,$mySQL_password,$mySQL_database) or die ("Can't access DB");
	mysqli_query($conn, "SET NAMES 'euckr'");
	mysqli_set_charset($conn, "euckr");

	// MySQL a ??? ???? ?? ??? ???
	$query = "select * from game where title like '%".$message."%';";
	$resultSet = mysqli_query( $conn, $query );
	while( $result = mysqli_fetch_array( $resultSet ) )
	{
		echo "\n<BR>ID : ".$result['id'];
		echo "\n<BR>게임 제목 : ".$result['title'];
		echo "\n<BR>제작사 : ".$result['developer'];
		echo "\n<BR>출시일 : ".$result['date'];
		echo "\n<BR>가격 : ".$result['price'];
		echo "\n<BR><img src = '".$result['image']."' height='280' width='180'> <br>";
	}

	// MySQL ?????? ???? ????
	mysqli_free_result( $resultSet );
	mysqli_close( $conn );
?>
