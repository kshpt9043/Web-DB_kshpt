<?php header('Content-Type: text/html; charset=euc-kr'); ?>
<HTML>
	<BODY>
		<br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
		<b> - �� å ��� - </b>
		<br> 
		<form name = "formm" method = "post" action = "./insertSQL.php">				
			<br> I &nbsp; &nbsp; D &nbsp;:  <INPUT TYPE = "text" name = "id" SIZE="60" >
			<br> �� &nbsp; �� : <INPUT TYPE = "text" NAME = "title" SIZE="60" >
			<br> �� &nbsp; �� : <INPUT TYPE = "text" NAME = "author" SIZE="60" >
			<br> ���ǻ� : <INPUT TYPE = "text" NAME = "publisher" SIZE="60" >
			<br> ������ : <INPUT TYPE = "text" NAME = "date" SIZE="60" >
			<br> �̹��� : <INPUT TYPE = "text" NAME = "image" SIZE="60" >
		</form>  
		&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
		<INPUT TYPE="button" value="���" onClick="javascript:document.formm.submit();"> &nbsp; 
	</BODY>
</HTML>
