<?php header('Content-Type: text/html; charset=euc-kr'); ?>
<?php 
	// 이전 페이지에서 전달 받은 메시지 확인
	$id = $_POST['id'];

	// MySQL 드라이버 연결 
	include("./SQLconstants.php"); 
	$conn = mysqli_connect($mySQL_host,$mySQL_id,$mySQL_password,$mySQL_database) or die ("Can't access DB");

	// MySQL 책 삭제 실행 	
	$query = "delete from game where id = '".$id."';";
	$result = mysqli_query( $conn, $query );
	if( $result ) 
	{	
		$message = "ID(".$id.")인 게임을 삭제하였습니다."; 
	} 
	else 
	{
		$message = "ID(".$id.")인 게임을 찾을 수 없습니다. 삭제시 게임 이름이 아니고 게임 ID를 입력해주세요."; 
	} 

	// MySQL 드라이버 연결 해제
	mysqli_close( $conn );
?>

<!-- 다음 페이지로 메시지 전달 -->
<form name = "frm" method = "post" action = "./search.php" >
	<input type = 'hidden' name = 'message' value = ' * <?php echo str_replace("'", "", $message);?>' >
</form>
<script language="javascript">
	document.frm.submit();
</script>

