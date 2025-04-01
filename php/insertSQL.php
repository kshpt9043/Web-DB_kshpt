<?php header('Content-Type: text/html; charset=euc-kr'); ?>
<?php 
	// 이전 페이지에서 전달 받은 메시지 확인
	$id = $_POST['id'];
	$name = $_POST['name'];
	$developer = $_POST['developer'];
	$date = $_POST['date'];
	$price = $_POST['price'];
	$image = $_POST['image'];
	$message = "";

	// MySQL 드라이버 연결 
	include("./SQLconstants.php");
	$conn = mysqli_connect( $mySQL_host, $mySQL_id, $mySQL_password, $mySQL_database ) or die( "Can't access DB" );
	mysqli_query($conn, "SET NAMES 'euckr'");
	mysqli_set_charset($conn, "euckr");

	// MySQL 책 추가 실행 	
	$query = "INSERT INTO game( id, name, developer, date, price, image ) VALUES ( '".$id."', '".$name."', '".$developer."', '".$date."', '".$price."', '".$image."');"; 
	$result = mysqli_query( $conn, $query );
	if( !$result ) 
	{	
		$message = "게임(".$name.")을 등록하였습니다"; 
	} 
	else 
	{
		$message = "게임(".$name.")을 등록할 수 없습니다"; 
	} 

	// MySQL 드라이버 연결 해제
	mysqli_close( $conn );
?>

<!-- 다음 페이지로 메시지 전달 -->
<form name = "frm" method = "post" action = "./search.php" >
	<input type = 'hidden' name = 'message' value = ' * <?php echo $message;?>' >
</form>
<script language="javascript">
	document.frm.submit();
</script>
