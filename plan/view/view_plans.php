<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Plans</title>

        <link rel="stylesheet" type="text/css" href="../../common/CSS/home.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/admin_menu_bar.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/button.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/dropdown.css">
        <link rel="stylesheet" type="text/css" href="../../common/CSS/dropdown_menu.css">
		<script src="../../common/JS/jquery-2.1.1.min.js"></script>
        <script type="text/javascript">
        	function validate(){
				if ($("#txt_pno").val() == '') {
                    alert('Please enter the plan number.');
                    $("#txt_pno").focus();
                    return false;
                	}
				if ($("#txt_pname").val() == '') {
                    alert('Please enter the plan name.');
                    $("#txt_pname").focus();
                    return false;
                	}
				}
				function check_image_upload() {
    var upload1 = document.getElementById('file1').value;
    var upload2 = document.getElementById('file2').value;
    var upload3 = document.getElementById('file3').value;
    var objErrDiv = document.getElementById('divUploadCheckError');
    if (upload1 != '' || upload2 != '' || upload3 != '') {
        objErrDiv.innerHTML = ""; // Try adding this
        objErrDiv.style.padding = '4px 4px';
        objErrDiv.style.visibility = 'visible';
        objErrDiv.style.margin = '10px 0px 2px 0px';
        return false;
    } else {
        objErrDiv.innerHTML = 'Please upload at least one documents ';
        return false;

    }
}
        </script>
        <style type="text/css">
            .left_box{
                width: 20%;
            }
            .left_box td{
                padding-left: 7%;
                padding-top: 10px;
            }

            .left_box a:link, a:visited {
                display: block;
                font-weight: bold;
                color: #FFFFFF;
                background-color: #9fa393;
                width: 235px;
                text-align: center;
                padding: 4px;
                text-decoration: none;
            }

            .left_box a:hover, a:active {
                background-color: #D1D3CB;
            }
            
            .footer{
                position:absolute;
                bottom:0px;
            }
        </style>
    </head>

    <body  bgcolor="#E1E1FF">
	
    	<div style="background-color:#000089; height:10%;padding:10px;padding-left:50px">
			<h3 style="color:#FFFFFF">View Plans</h3>
		</div>
		<br/>
		<div class="admin_menu_bar" align="center" id="cssmenu">
            <ul>
               <li class='active'><a href='../../home/view/index.php'>Home</a></li>
               <li><a href='../../admin/view/control_panel.php'><span>Admin panel</span></a></li>
                <li><a href='../../admin/view/manage_users.php'><span>Users</span></a></li>
                <li><a href='../../admin/view/manage_properties.php'><span>Properties</span></a></li>
                <li><a href='../../admin/view/manage_inquiries.php'><span>Inquiries</span></a></li>
                <li><a href='../../admin/view/manage_reviews.php'><span>Reviews</span></a></li>
                <li><a href='../../admin/view/reports.php'><span>Reports</span></a></li>
                <li><a href='../../agreement/view/agreement_details.php'><span>Agreements</span></a></li>
            </ul>
        </div>
<br/><br/>        
<div class="content" style="padding-top:0px;">
<form name="frm_plan" action="../controller/add_plan.php" method="post" enctype="multipart/form-data" onsubmit="return validate();" >
	<table width="428"  style="border:#000089 1px thin solid;" align="center" cellpadding="5" cellspacing="5" bgcolor="#F8F8F7" >
    	<tr align="center">
        <td colspan="2"><h2><span style="color:#000089"> Property Plans</span></h2></td>
      </tr>
      <tr>
        <td width="130"><strong>&nbsp;&nbsp;&nbsp;&nbsp;Plan No.</strong></td>
        <td width="261"><input type="text" name="txt_pno" id="txt_pno" /></td>
      </tr>
      <tr>
        <td><strong>&nbsp;&nbsp;&nbsp;&nbsp;Plan Name:</strong></td>
        <td><input type="text" name="txt_pname" id="txt_pname" /></td>
      </tr>
      <tr>
        <td><strong>&nbsp;&nbsp;&nbsp;&nbsp;Upload Plans:</strong></td>
        <td><input type="file" name="img_plan1" id="file1" /><br/>
        	<input type="file" name="img_plan2" id="file2"/><br/>
            <input type="file" name="img_plan3" id="file3"/>
<br/>
<div id="divUploadCheckError" class="divError"></div>

        </td>
      </tr>
      <tr>
        <td colspan="2" align="center"><input type="submit" name="sbmit" value="save" onclick='check_image_upload()' /></td>
      </tr>
	</table>
</form>
</div>
</body>
</html>
