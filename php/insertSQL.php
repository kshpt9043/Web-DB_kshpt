<?php header('Content-Type: text/html; charset=euc-kr'); ?>
<?php 
	// ���� ���������� ���� ���� �޽��� Ȯ��
	$id = $_POST['id'];
	$name = $_POST['name'];
	$developer = $_POST['developer'];
	$date = $_POST['date'];
	$price = $_POST['price'];
	$image = $_POST['image'];
	$message = "";

	// MySQL ����̹� ���� 
	include("./SQLconstants.php");
	$conn = mysqli_connect( $mySQL_host, $mySQL_id, $mySQL_password, $mySQL_database ) or die( "Can't access DB" );
	mysqli_query($conn, "SET NAMES 'euckr'");
	mysqli_set_charset($conn, "euckr");

	// MySQL å �߰� ���� 	
	$query = "INSERT INTO game( id, name, developer, date, price, image ) VALUES ( '".$id."', '".$name."', '".$developer."', '".$date."', '".$price."', '".$image."');"; 
	$result = mysqli_query( $conn, $query );
	if( !$result ) 
	{	
		$message = "����(".$name.")�� ����Ͽ����ϴ�"; 
	} 
	else 
	{
		$message = "����(".$name.")�� ����� �� �����ϴ�"; 
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
