<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<HTML>
	<BODY>
		<BR> 
		<form name = "formm" method = "post" action = "./deleteSQL.php">				
			&nbsp; &nbsp; &nbsp; 
			������ ���� ID : <INPUT TYPE="text" NAME="id" SIZE="60"> 
		</form>  
		 &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  
		 <INPUT TYPE="button" value="����" onClick="javascript:document.formm.submit();"> &nbsp; 
		<BR><BR>  

		<!-- ���� �ĺ� ���� ��� ��� -->
		<?php include("./selectSQL.php"); ?>
	</BODY>
</HTML>
 