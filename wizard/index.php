<?php
session_start();
date_default_timezone_set("Asia/Nicosia");
require_once '../dbconfig.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<link href="../css/bootstrap.css" rel="stylesheet"/>
	<link href="../css/font-awesome.min.css" rel="stylesheet"/>
	<link href="../css/angular-moment-picker.min.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet"/>
	<script src="../js/angular.min.js"></script>
	<script src="../js/jquery.js"></script>
	<script src="../js/bootstrap.js"></script>
	<script src="script.js"></script>
	<script src="../js/moment.js"></script>
	<script src="../js/angular-moment-picker.min.js"></script>
</head>
<body ng-app="app">
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>Add new reservation</h1>
			<div id="wizard-container" ng-controller="WizardController as vm">
				<div id="wizard-step-container">
					<ul class="nav nav-pills nav-justified">
						<li ng-repeat="step in vm.steps" ng-class="{'active':step.step == vm.currentStep}">
							<a ng-click="vm.gotoStep(step.step)" href="">{{step.step}}.{{step.name}}</a>
						</li>
					</ul>
				</div>
				<div id="wizard-content-container">
					<ng-include src="vm.getStepTemplate()"></ng-include>
				</div>
				<div id="wizard-navigation-container">
					<div class="pull-right">
						<span class="btn-group">
							<button ng-disabled="vm.currentStep <= 1" class="btn btn-default" name="previous" type="button" ng-click="vm.gotoStep(vm.currentStep - 1)"><i class="fa fa-arrow-left"></i> Previous step</button>
							<button ng-disabled="vm.currentStep >= vm.steps.length" class="btn btn-primary" name="next" type="button" ng-click="vm.gotoStep(vm.currentStep + 1)">Next step <i class="fa fa-arrow-right"></i></button>
						</span>
						<button ng-disabled="vm.currentStep != vm.steps.length" class="btn btn-success" name="next" type="button" ng-click="vm.save()">
							<i class="fa fa-floppy-o"></i> Save
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>