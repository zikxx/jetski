<?php
/**
 * Created by PhpStorm.
 * User: Zires
 * Date: 16-Sep-17
 * Time: 5:21 PM
 */
?>
<html ng-app="myApp">
<head>
	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.4.4/angular.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment-with-locales.js"></script>
	<script src="//cdn.rawgit.com/indrimuska/angular-moment-picker/master/dist/angular-moment-picker.min.js"></script>
	<link href="//cdn.rawgit.com/indrimuska/angular-moment-picker/master/dist/angular-moment-picker.min.css" rel="stylesheet">
</head>
<body>
<div moment-picker="ctrl.myInput"
	 format="LL LTS"
	 max-view="hour"
	 min-date="''"
	 set-on-select="true">
	{{ ctrl.myInput }}
</div>
<input moment-picker="ctrl.dateFormatted" ng-model="ctrl.momentDate" format="DD-MM-YYYY">
<script>var myApp = angular.module('myApp', ['moment-picker']);</script>
</body>
</html>