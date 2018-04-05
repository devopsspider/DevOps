<?php
$con=mysqli_connect("localhost","root","","task");

$uname=$_POST['unm'];
$pwd=$_POST['pwd'];

$sql="insert into cruds values(NULL,'$uname','$pwd')";
$con->query($sql);

echo "<table border='1' cellpadding='5'>
<tr><th>ID</th><th>Uname</th><th>Password</th><th>update</th></tr>
";
$sql="select * from cruds";
$res=$con->query($sql);
while($row=mysqli_fetch_assoc($res)){
echo "<tr>
<td>".$row['id']."</td><td>".$row['uname']."</td><td>".$row['password']."</td>
<td><a href='update.php?update=".$row['id']."'>update</a></td>
</tr>";
}
?>