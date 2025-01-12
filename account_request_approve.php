<?php   include('dbconnect.php'); ?>
<?php
$ac_id=$_REQUEST["ac_id"];
$sql="update account_request set status='Approved' where ac_id='$ac_id' ";
$conn->query($sql);
?>
<script>
alert("Account Request Approved.....");
document.location="account_request_view.php";
</script>