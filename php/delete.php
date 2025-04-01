<?php header('Content-Type: text/html; charset=euc-kr'); ?>
<HTML>
	<BODY>
		<BR> 
		<form name = "formm" method = "post" action = "./deleteSQL.php">				
			&nbsp; &nbsp; &nbsp; 
			삭제할 게임 ID : <INPUT TYPE="text" NAME="id" SIZE="60"> 
		</form>  
		 &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  
		 <INPUT TYPE="button" value="삭제" onClick="javascript:document.formm.submit();"> &nbsp; 
		<BR><BR>  

		<!-- 삭제 후보 게임 목록 출력 -->
		<?php include("./selectSQL.php"); ?>
	</BODY>
</HTML>
 