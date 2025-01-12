<?php include('meta_tags.php');  ?>

<?php include('menus.php');  ?>

    
 <?php include('side_menu.php');  ?>
    
    <div class="content">
        
 <div class="header">
            
            <h1 class="page-title">Account Request  Details</h1>
        </div>
        
                <div class="container-fluid">
            <div class="row-fluid">
                    
<div class="btn-toolbar">
   
   
  <div class="btn-group">
  </div>
</div>
<div class="well">
    <table class="table" id="demo-dtable-01">
  <thead>

  <tr>
    <td width="50">First Name </td>
    <td width="50">middle Name </td>
    <td width="50">last name </td>
    <td width="40">Date of Birth </td>
    <td width="32">Age</td>
    <td width="82">Qualification</td>
    <td width="84">Occupation</td>
    <td width="94">Address</td>
    <td width="47">City</td>
    <td width="83">Pin Code </td>
    <td width="105">Contact Number</td>
    <td width="61">Email Id </td>
    <td width="61">Adhar Card</td>
    <td width="61">Status</td>	
    <td width="38">Approve</td>
    <td width="38">Reject</td>
    <td width="38">Action</td>
   
  </tr>
  </thead>
  <tbody>

<?php 
 include('dbconnect.php');
$sql="select * from account_request";
$res=$conn->query($sql);
while($row=mysqli_fetch_array($res))
{
$first_name=$row["first_name"];
$status=$row["status"];
?>
  
  <tr>  
    <td>&nbsp;<?php echo $row['fname']; ?></td>
    <td>&nbsp;<?php echo $row['mname']; ?></td>
    <td>&nbsp;<?php echo $row['lname']; ?></td>
    <td>&nbsp;<?php echo $row['dob']; ?></td>
    <td>&nbsp;<?php echo $row['age']; ?></td>
    <td>&nbsp;<?php echo $row['qualifiction']; ?></td>
    <td>&nbsp;<?php echo $row['accupation']; ?></td>
    <td>&nbsp;<?php echo $row['address']; ?></td>
    <td>&nbsp;<?php echo $row['city']; ?></td>
    <td>&nbsp;<?php echo $row['pin_code']; ?></td>
    <td>&nbsp;<?php echo $row['contact_no']; ?></td>
    <td><?php echo $row['email_id']; ?></td>
    <td><?php echo $row['adhar']; ?></td>
    <td><div  
	<?php if($row["status"]=='Request') { ?> class="btn btn-primary" <?php }?>  
	<?php if($row["status"]=='Approved') { ?> class="btn btn-success" <?php } ?>
	<?php if($row["status"]=='Rejected') { ?> class="btn btn-danger" <?php } ?> > <?php echo $status; ?> </div></td>
	
    <td><a href="account_request_approve.php?ac_id=<?php echo $ac_id; ?>" class="btn btn-primary">Approve</a></td>
	
	<td><a href="account_request_reject.php?ac_id=<?php echo $ac_id; ?>" class="btn btn-primary">Reject</a></td>
	
	 <td><a href="account_request_delete.php?ac_id=<?php echo $ac_id;?>" class="btn">Delete</a></td>
	<?php
	}
	?>
	  </tbody>
</table>
</div>

<div class="modal small hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Delete Confirmation</h3>
    </div>
    <div class="modal-body">
        <p class="error-text"><i class="icon-warning-sign modal-icon"></i>Are you sure you want to delete the user?</p>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
        <button class="btn btn-danger" data-dismiss="modal">Delete</button>
    </div>
</div>


                    
 <?php include('footer.php');  ?>