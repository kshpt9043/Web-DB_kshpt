<?php header('Content-Type: text/html; charset=euc-kr'); ?>
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
		</script>
	</HEAD>
	<BODY onLoad="showMessage( '' );" >
		<!-- ȭ�鱸�� -->
		<BR> 
		<form name = "formm" method = "post">				
			&nbsp; &nbsp; &nbsp; 
			å ���� : <INPUT TYPE="text" NAME="message" SIZE="60"> 
		</form>  
		 &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;   
		<INPUT TYPE = "button" value = "å ���� �˻�" onClick="javascript:move( './search.php' );">
		<INPUT TYPE = "button" value = "�� å  �߰�" onClick="javascript:move( './insert.php' );">	
		<INPUT TYPE = "button" value = "å ����" onClick="javascript:move( './delete.php' );">	
		<BR> <BR> &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
		<BR> <BR>  

		<!-- å ��� ��� -->
		<?php include("./selectSQL.php"); ?>
</BODY>
</HTML>