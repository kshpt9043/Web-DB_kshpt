<?php header('Content-Type: text/html; charset=euc-kr'); ?>
<?php 
	// ���� ���������� ���� ���� �޽��� Ȯ��
	$id = $_POST['id'];
	$title = $_POST['title'];
	$author = $_POST['author'];
	$publisher = $_POST['publisher'];
	$date = $_POST['date'];
	$image = $_POST['image'];
	$message = "";

	// MySQL ����̹� ���� 
	include("./SQLconstants.php");
	$conn = mysqli_connect( $mySQL_host, $mySQL_id, $mySQL_password, $mySQL_database ) or die( "Can't access DB" );
	mysqli_query($conn, "SET NAMES 'euckr'");
	mysqli_set_charset($conn, "euckr");

	// MySQL å �߰� ���� 	
	$query = "INSERT INTO book( id, title, author, publisher, date, image ) VALUES ( '".$id."', '".$title."', '".$author."', '".$publisher."', '".$date."', '".$image."');"; 
	$result = mysqli_query( $conn, $query );
	if( !$result ) 
	{	
		$message = "å(".$title.")�� ����Ͽ����ϴ�"; 
	} 
	else 
	{
		$message = "å(".$title.")�� ����� �� �����ϴ�"; 
	} 

	// MySQL ����̹� ���� ����
	mysqli_close( $conn );
?>

<!-- ���� �������� �޽��� ���� -->
<form name = "frm" method = "post" action = "./search.php" >
	<input type = 'hidden' name = 'message' value = ' * <?php echo $message;?>' >
</form>
<script language="javascript">
	document.frm.submit();
</script>
