<?php
//Connection file inculde here
//Connection file inculde here
include_once('config.php');

$link = mysql_connect(DB_HOST, DB_USERNAME, DB_PASSWORD);
$db=mysql_select_db(DB_NAME, $link);
$sucess="";
//After Click on OK
if(isset($_POST['Submit']))
{
	$title=$_POST['title'];
	$sql_insert="INSERT INTO tbl_msg(name) VALUES('".$title."')";
	if(mysql_query($sql_insert))
	$sucess="Record added sucessfully";
	else
	$sucess="Record not added sucessfully";
}
?>

<style type="text/css">
table.gridtable {
	font-family: verdana,arial,sans-serif;
	font-size:11px;
	color:#333333;
	border-width: 1px;
	border-color: #666666;
	border-collapse: collapse;
}
table.gridtable th {
	border-width: 1px;
	padding: 0px;
	border-style: solid;
	border-color: #666666;
	background-color: #dedede;
}
table.gridtable td {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #666666;
	background-color: #ffffff;
}

.info, .success, .warning, .error, .validation {
border: 1px solid;
margin: 10px 0px;
padding: 4px 5px 5px 35px;
background-repeat: no-repeat;
background-position: 10px center;
}
.info {
color: #00529B;
background-color: #BDE5F8;
background-image: url('info.png');
}
.success {
color: #4F8A10;
background-color: #DFF2BF;
background-image:url('success.png');
}
.warning {
color: #9F6000;
background-color: #FEEFB3;
background-image: url('warning.png');
}
.error {
color: #D8000C;
background-color: #FFBABA;
background-image: url('error.png');
}
</style>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<body>
<form id="form1" name="form1" method="post" action="">
<table width="100%" border="0" >
  <tr>
    <td valign="top"><img src="cloud-bg.jpg" border="0" height="100" width="1200"/></td>
  </tr>
  <tr>
    <td valign="top" align="center"><h1>Hello Bigboy</h1></td>
  </tr>
</table>

  <table width="95%" class="gridtable" align="center">
    <tr>
      <td>Enter the Message </td>
      <td><label>
        <input type="title" name="title" />
        </label>      </td>
      <td><label>
        <input type="submit" name="Submit" value="Ok" />
        </label></td>
    </tr>
  </table>
</form>
<table width="95%"  align="center" class="gridtable"  c>
  <tr>
    <th><?php
   if($sucess)
   echo '<p class="success">'.$sucess.'</p>';
   else
   echo $sucess;
   ?>
      &nbsp;</th>
  </tr>
  <tr>
    <th><div align="left">Message</div></th>
  </tr>
  <?php
  $sql="select * from tbl_msg order by id desc";
  $res=mysql_query($sql);
  $cnt=0;
  while($row=mysql_fetch_array($res))
  {
  if($cnt%2==0)
    $color='#EEEEEE';
  else
   $color='';

  
  ?>
  <tr  bgcolor="#D7D7D7">
    <td style="background-color:<?=$color?>"><?=$row['name']?></td>
  </tr>
  <?php
  $cnt++; 
  }
  ?>
</table>
</body>
</html>
