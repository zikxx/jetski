		<input id="datetime"/>
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