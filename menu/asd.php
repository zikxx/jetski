<html>
<head>


    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>

    <!--Includes-->
	<link href="mobiscroll.custom-2.6.2.min.css" rel="stylesheet" type="text/css"/>
	<script src="mobiscroll.custom-2.6.2.min.js" type="text/javascript"></script>
</head>
<body>
<input id="datetime" />
	<script>
	$(function () {
    // Create a datepicker
    $("#datetime").mobiscroll().datetime({ 
        theme: 'android-ics light', 
        display: 'inline',
		maxDate: new Date(2099,0,30,15,44),
		mode: 'clickpick',
		dateFormat: 'yy-mm-dd',
		timeFormat: 'H:ii:00'
    });
});
</script>
</body>
</html>