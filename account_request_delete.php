<?php include('db_connect.php'); ?>/>
<?php
$first_name=$_REQUEST["first_name"];
$sql="delete from account_request where first_name='$first_name' ";
$conn->query($sql);
?>
<script>
alert("account_request item deleted.....");
document.location="account_request_view.php";
</script>
