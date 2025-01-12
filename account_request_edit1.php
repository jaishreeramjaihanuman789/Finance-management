<%@page import="java.sql.*"%>
<%@page import="atm.dbconnect"%>
<jsp:useBean id="s" class="atm.dbconnect"/>
<jsp:getProperty name="s" property="conn"/>
<%
String ac_id=request.getParameter("ac_id");
ResultSet rs=s.stmt.executeQuery("select * from account_request where ac_id="+ac_id+"");
rs.next();
%>

<link rel="stylesheet" href="js/validationEngine.jquery.css" type="text/css" media="screen" title="no title" charset="utf-8" />
		<link rel="stylesheet" href="images/Refresh.css" type="text/css" />
		
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery.validationEngine-en.js" type="text/javascript"></script>
		<script src="js/jquery.validationEngine.js" type="text/javascript"></script>
		
		<script>	
		$(document).ready(function() {
			$("#formID").validationEngine()
		});
	</script>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<jsp:include page="meta.jsp"></jsp:include>
</head>
<body>
<div id="wrapper">
     <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
   <jsp:include page="header.jsp"></jsp:include>
         
			<jsp:include page="sidebar.jsp"></jsp:include>
            <!-- /.navbar-static-side -->
        </nav>
        <div id="page-wrapper">
        <div class="col-md-12 graphs">
	   <div class="xs">
  	    <h3>Validation</h3>
  	    <div class="well1 white">
<form name="form1" method="post" action="account_request_edit2.jsp">
<input name="ac_id" type="hidden" id="fname" value="<%=rs.getString("ac_id")%>">
  <p> ACCOUNT REQUES</p>
   <table width="375" border="1">
    <tr>
      <td colspan="2"> <div align="center">ACCOUNT REQUEST</div></td>
     </tr>
    <tr>
      <td width="181"><strong>First Name </strong></td>
      <td width="178"><input name="fname" type="text" id="fname" value="<%=rs.getString("fname")%>"></td>
    </tr>
    <tr>
      <td><strong>Middle Name </strong></td>
      <td><input name="mname" type="text" id="mname" value="<%=rs.getString("mname")%>"></td>
    </tr>
    <tr>
      <td><strong>Last Name </strong></td>
      <td><input name="lname" type="text" id="lname" value="<%=rs.getString("lname")%>"></td>
    </tr>
    <tr>
      <td><strong>Date of Birth</strong></td>
      <td><input name="dob" type="text" id="dob" value="<%=rs.getInt("dob")%>"></td>
    </tr>
    <tr>
      <td><strong>Age</strong></td>
      <td><input name="age" type="text" id="age" value="<%=rs.getString("age")%>"></td>
    </tr>
    <tr>
      <td><strong>Qualification</strong></td>
      <td><input name="qualification" type="text" id="qualification" value="<%=rs.getString("qualifiction")%>"></td>
    </tr>
    <tr>
      <td><strong>Accupation</strong></td>
      <td><input name="accupation" type="text" id="accupation" value="<%=rs.getString("accupation")%>"></td>
    </tr>
    <tr>
      <td><strong>Address</strong></td>
      <td><textarea name="address" id="address"><%=rs.getString("address")%></textarea></td>
    </tr>
    <tr>
      <td><strong>City</strong></td>
      <td><input name="city" type="text" id="city" value="<%=rs.getString("city")%>"></td>
    </tr>
    <tr>
      <td><strong>Pin Code </strong></td>
      <td><input name="pin_code" type="text" id="pin_code" value="<%=rs.getInt("pin_code")%>"></td>
    </tr>
    <tr>
      <td><strong>Contact Number </strong></td>
      <td><input name="contact_no" type="text" id="contact_no" value="<%=rs.getString("contact_no")%>"></td>
    </tr>
    <tr>
      <td><strong>Email Id </strong></td>
      <td><input name="email_id" type="text" id="email_id" value="<%=rs.getString("email_id")%>"></td>
    </tr>
    <tr>
      <td height="87"><strong>Status</strong></td>
      <td><textarea name="status" id="status"><%=rs.getString("status")%></textarea></td>
    </tr>
    <tr>
      <td height="50" colspan="2"><div align="center">
          <input type="submit" name="Submit" value="Submit">        
          <input type="reset" name="Reset" value="Reset">
      </div></td>
     </tr>
  </table>
  <p>&nbsp;  </p>
</form>
</div>
    </div>
  
	<jsp:include page="copyright.jsp"></jsp:include>
   </div>
      </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
<!-- Nav CSS -->
<link href="css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
