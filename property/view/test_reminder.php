<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<script src="../../common/JS/jquery-2.1.1.min.js"></script>
<script src="../../common/datepicker/jquery.plugin.js"></script>
<script src="../../common/datepicker/jquery.datepick.js"></script>

<script>
$(function() {
    $( "#datepicker" ).datepicker({
      showOn: "button",
      buttonImage: "../../common/images/icons/calendar-green.gif",
      buttonImageOnly: true
    });
  });

</script>
</head>

<body>
<p>Date: <input type="text" id="datepicker"></p>
</body>
</html>