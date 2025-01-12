<?php
session_start();
include('dbconnect.php');
$username=$_POST["username"];
$password=$_POST["password"];

$sql="select * from login where binary(username)='$username' and binary(password)='$password'";

$res=mysqli_query($conn,$sql);
if($row=mysqli_fetch_array($res))
{
$type=$row["type"];
$_SESSION["uname"]=$username;
if($type=="admin")
{

 
?>
<script>
document.location="admin/home.php";
</script>
<?php
}
else if($type=="agent")
{
?>
<script>
document.location="pigmyagent/home.php";
</script>
<?php
}
else if($type=="customer")
{
?>
<script>
document.location="customer/home.php";
</script>
<?php

}
else if($type=="pigmy agent")
{
?>
<script>
document.location="pigmy agent/home.php";
</script>
<?php

}

}
else
{
?>
<script>
alert("Invalid Login Details");
history.back();
</script>
<?php

}
?>