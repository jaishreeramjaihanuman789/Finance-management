<?php
  $hint_ans=$_POST["hint_ans"];
   $hint_ans1=$_POST["hint_ans1"];
  $password=$_POST["password"];  
if($hint_ans==$hint_ans1)
{
?>
<script type="text/javascript">
alert("Your password is: <?php echo $password; ?>");
document.location="login.php";
</script>
<?php 
}
else
{
?>
<script type="text/javascript">
alert("Invalid Hint Answer");
document.location="login.php";
</script>
<?php 
}
?>