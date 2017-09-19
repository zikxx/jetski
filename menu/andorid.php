<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
	<title>Mobiscroll</title>
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<!--Includes-->
	<script src="mobiscroll.js.js" type="text/javascript"></script>
	<link href="mobiscroll.css.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<input id="datetime"/>
<script>
    $(function () {
        // Create a datepicker
        $("#datetime").mobiscroll().datetime({
            theme: 'android-ics light',
            display: 'inline',
            maxDate: new Date(2099, 0, 30, 15, 44),
            mode: 'clickpick',
            dateFormat: 'yy-mm-dd',
            timeFormat: 'H:ii:00'
        });
    });
</script>
</body>
</html>
