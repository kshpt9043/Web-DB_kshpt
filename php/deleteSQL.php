<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<?php 
	// ���� ���������� ���� ���� �޽��� Ȯ��
	$id = $_POST['id'];

	// MySQL ����̹� ���� 
	include("./SQLconstants.php"); 
	$conn = mysqli_connect($mySQL_host,$mySQL_id,$mySQL_password,$mySQL_database) or die ("Can't access DB");

	// MySQL å ���� ���� 	
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

	// MySQL ����̹� ���� ����
	mysqli_close( $conn );
?>

<!-- ���� �������� �޽��� ���� -->
<form name = "frm" method = "post" action = "./search.php" >
	<input type = 'hidden' name = 'message' value = ' * <?php echo str_replace("'", "", $message);?>' >
</form>
<script language="javascript">
	document.frm.submit();
</script>

