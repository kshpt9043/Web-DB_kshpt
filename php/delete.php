<?php header('Content-Type: text/html; charset=euc-kr'); ?>
<HTML>
	<BODY>
		<BR> 
		<form name = "formm" method = "post" action = "./deleteSQL.php">				
			&nbsp; &nbsp; &nbsp; 
			������ å ID : <INPUT TYPE="text" NAME="id" SIZE="60"> 
		</form>  
		 &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  
		 <INPUT TYPE="button" value="����" onClick="javascript:document.formm.submit();"> &nbsp; 
		<BR><BR>  

		<!-- ���� �ĺ� å ��� ��� -->
		<?php include("./selectSQL.php"); ?>
	</BODY>
</HTML>
 