<!DOCTYPE html>
<html lang="">

<head>
        <link rel="stylesheet" media="all" type="text/css" href="jquery-ui.css" />
		<link rel="stylesheet" media="all" type="text/css" href="jquery-ui-timepicker-addon.css" />

		<script type="text/javascript" src="jquery-1.10.2.min.js"></script>
		<script type="text/javascript" src="jquery-ui.min.js"></script>

		<script type="text/javascript" src="jquery-ui-timepicker-addon.js"></script>
		<script type="text/javascript" src="jquery-ui-sliderAccess.js"></script>

</head>

<body>
<div style="padding-left:200px;padding-top:200px">

<div id="startDate">
<script type="text/javascript">

$(function(){
	$("#dateInput").datepicker({
		dateFormat: 'dd-M-yy',
		numberOfMonths: 2,
	});
});

</script>
<input type="text" name="dateInput" id="dateInput" value="" /> 
</div>
</body>

</html>