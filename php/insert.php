<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<HTML>
	<BODY>
		<br> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
		<b> - 세 게임 등록 - </b>
		<br> 
		<form name = "formm" method = "post" action = "./insertSQL.php">				
			<br> I &nbsp; &nbsp; D &nbsp;:  <INPUT TYPE = "text" name = "id" SIZE="60" >
			<br> 제 &nbsp; 목 : <INPUT TYPE = "text" NAME = "name" SIZE="60" >
			<br> 개발사 : <INPUT TYPE = "text" NAME = "developer" SIZE="60" >
			<br> 출시일 : <INPUT TYPE = "text" NAME = "date" SIZE="60" >
			<br> 이미지 : <INPUT TYPE = "text" NAME = "image" SIZE="60" >
		</form>  
		&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
		<INPUT TYPE="button" value="등록" onClick="javascript:document.formm.submit();"> &nbsp; 
	</BODY>
</HTML>
