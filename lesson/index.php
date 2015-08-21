<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>

</head>
<body>
<?php include ("navbar.html");?>
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
{
    die('Could not connect: ' . mysql_error());
}

mysql_select_db("testMyself", $con);

$result = mysql_query("SELECT * FROM books");


echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>";

while($row = mysql_fetch_array($result))
{
    echo "<tr>";
    echo "<td>" . $row['bookName'] . "</td>";
    echo "<td>" . $row['bookAuthor'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysql_close($con);

?>
</body>
</html>