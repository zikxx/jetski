<?php
/**
 * Created by PhpStorm.
 * User: Zires
 * Date: 16-Sep-17
 * Time: 5:21 PM
 */
?>
<html >
<head>
	<link href="css/bootstrap.css" rel="stylesheet"/>
	<link href="css/font-awesome.min.css" rel="stylesheet"/>
	<link href="css/angular-moment-picker.min.css" rel="stylesheet">
	<script src="js/angular.min.js"></script>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/moment.js"></script>
	<script src="js/angular-moment-picker.min.js"></script>
</head>
<body ng-app="app">
<input moment-picker="ctrl.dateFormatted" ng-model="ctrl.momentDate" format="DD-MM-YYYY">
<script>var myApp = angular.module('app', ['moment-picker']);</script>
</body>
</html>