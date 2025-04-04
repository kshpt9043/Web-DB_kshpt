<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<HTML>
	<HEAD>      
		<script language="javascript">
			// ���޹��� �޽��� ���
			function showMessage( message )
			{
				if ( ( message != null ) && ( message != "" ) && ( message.substring( 0, 3 ) == " * " )  ) 
				{
					alert( message );
				}
			}     
			// ������ url�� �̵��ϴ� �Լ� 
			function move( url )	
	 		{
				document.formm.action = url;
				document.formm.submit();
			}
			//find game name
			function searchByGameName()
			{
				document.formm.action = './search.jsp';
				document.formm.developer.value = "";
				document.formm.submit();
			}
			//find game developer
			function searchByDeveloperName()
			{
				document.formm.action = './search.jsp';
				document.formm.message.value = "";
				document.formm.submit();
			}
		</script>
	</HEAD>
	<BODY onLoad="showMessage( '' );" >
		<!-- ȭ�鱸�� -->
		<BR> 
		<form name = "formm" method = "post">				
			&nbsp; &nbsp; &nbsp;
			<select>
			<option>선택하세요</option>
			<option value="1">제목</option>
			<option value="2">개발사</option>
		</select>  
			<INPUT TYPE="text" NAME="message" SIZE="60"> 
		</form>  
		 &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
		<INPUT TYPE = "button" value = "게임 제목 검색" onClick="searchByGameName();">
		<INPUT TYPE = "button" value = "개발사 이름 검색" onClick="searchByDeveloperName();">
		<INPUT TYPE = "button" value = "새 게임 추가" onClick="javascript:move( './insert.php' );">	
		<INPUT TYPE = "button" value = "게임 삭제" onClick="javascript:move( './delete.php' );">	
		<BR> <BR> &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
		<BR> <BR>  

		<!-- å ��� ��� -->
		<?php include("./selectSQL.php"); ?>
</BODY>
</HTML>