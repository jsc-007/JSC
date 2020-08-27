<?php
header("Content-type:text/html;charset=utf-8");
$name = $_POST["user"];
$pwd = $_POST["pwd1"];
$conn = mysql_connect("localhost","root","root");
mysql_select_db("jsc",$conn);
$result = mysql_query("select * from vans where user='$name' and pwd1='$pwd'",$conn);
$rows = mysql_num_rows($result);
if(mysql_num_rows($result)==1){
	echo "1";
}
else{
	echo "0";
}
?>