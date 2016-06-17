<?PHP
session_start();
error_reporting(0);
include_once("connect.php");

$sqli="select * from cardpay order by dt1 ASC";
$q=mysql_query($sqli);
while($rs=mysql_fetch_array($q))
{
?>
<table><tr>
<td><?=$rs[0];?></td>
<td><?=$rs[1];?></td>
<td><?=$rs[2];?></td>
</tr>
</table>
<?PHP 
}
?>
