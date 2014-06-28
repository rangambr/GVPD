// JavaScript Document
function validateForm()
{
var x=document.forms["frm_login"]["txtuname"].value
var y=document.forms["frm_login"]["txtpass"].value
if (x,y==null || x,y==""){
	alert("Username and password must be filled out");
	return false;
	}

}