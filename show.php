<html>
<head>
<title>ITF Lab</title>
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'tathus.mysql.database.azure.com', 'tathus@tathus', 'SakuraHiro8852', 'ITFLAB', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>
<table class="table table-striped">
  <thead>
    <tr>
      <th width="100"> <div align="center">name</div></th>
      <th width="350"> <div align="center">comment </div></th>
      <th width="150"> <div align="center">link </div></th>
    </tr>
  </thead>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td><?php echo $Result['name'];?></div></td>
    <td><?php echo $Result['comment'];?></td>
    <td><?php echo $Result['link'];?></td>
  </tr>
<?php
}
?>
</table>
<?php
mysqli_close($conn);
?>
</body>
</html>
