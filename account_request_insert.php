
<?php
include('dbconnect.php');
$f_name=$_POST['fname'];
$m_name=$_POST['mname'];
$l_name=$_POST['lname'];
$dob=$_POST['dob']; 
$age=$_POST['age'];
$qualification=$_POST['qualification'];
$accupation=$_POST['accupation'];
$adrs=$_POST['address'];
$city=$_POST['city'];
$pin=$_POST['pin_code'];
$contact=$_POST['contact_no'];
$email=$_POST['email_id'];
$adhar=$_POST['adhar'];


 $sql="insert into account_request values('$f_name','$m_name','$l_name','$dob','$age','$qualification','$accupation','$adrs','$city','$pin','$contact','$email','$adhar')";
mysqli_query($conn,$sql);
?>
<script>
alert("Account Request Information is Sent.....");
document.location="web/index.php";
</script>
