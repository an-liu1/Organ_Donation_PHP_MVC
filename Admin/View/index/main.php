﻿<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link type="text/css" rel="stylesheet" href="./Public/Admin/Css/public.css" />
<style type="text/css">
</style>
<title>Main Menu</title>
</head>

<body leftmargin="5" topmargin="0" marginwidth="0" marginheight="0" oncontextmenu="self.event.returnValue=false">
<table width="100%" border="0" align="center" cellpadding="1" cellspacing="1" class="border">
	<tr class="topbg"><td>System Information</td></tr>
	<tr class="tdbg">
		<td height="30">
		<table width="100%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#f0f0f0" >
			<tr class="tr_southidc"> 
				<td width="38%" height="23" bgcolor="#fcfcfc">User：<font class="t4"></font></td>
				<!-- <{$smarty.session.username}> -->
				<td width="62%" bgcolor="#fcfcfc">IP Address：<font class="t4"><?php echo $_SERVER['REMOTE_ADDR'];?></font></td>
			</tr>
			<tr class="tr_southidc"> 
				<td width="38%" height="23" bgcolor="#fcfcfc">ID Expired Time：<font class="t4"><?php echo 1400;?>s</font></td>
				<td width="62%" bgcolor="#fcfcfc">Login time：<font class="t4"><?php echo date('Y-m-d H:i:s');?></font></td>
			</tr>
			<tr class="tr_southidc"> 
				<td width="38%" height="23" bgcolor="#fcfcfc">Server Name：<font class="t4"><?php echo $_SERVER['SERVER_NAME'];?></font></td>
				<td width="62%" bgcolor="#fcfcfc">PHP Version：<font class="t4"><?php echo $_SERVER['SERVER_SOFTWARE'];?></font></td>
			</tr>
			<tr class="tr_southidc"> 
				<td height="23" bgcolor="#fcfcfc">Offical Site：<font class="t4"> <a href="http://www.andyliu.cloud" target="_blank">http://www.andyliu.cloud</a></font></td>
			</tr>
		</table>
		</td>
	</tr>
</table>
</body>
</html>
