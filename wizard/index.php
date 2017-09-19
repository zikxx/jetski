<?php
session_start();
date_default_timezone_set("Asia/Nicosia");
require_once '../dbconfig.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css" rel="stylesheet" data-semver="3.3.6" data-require="bootstrap-css@3.3.6"/>
	<link data-require="fontawesome@4.5.0" data-semver="4.5.0" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.css"/>
	<script data-require="angular.js@1.4.8" data-semver="1.4.8" src="https://code.angularjs.org/1.4.8/angular.js"></script>
	<script src="https://code.jquery.com/jquery-2.1.4.js" data-semver="2.1.4" data-require="jquery@*"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" data-semver="3.3.6" data-require="bootstrap@3.3.6"></script>
	<link href="style.css" rel="stylesheet"/>
	<script src="script.js"></script>
</head>
<body ng-app="app">
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>Add new reservation</h1>
			<div id="wizard-container" ng-controller="WizardController as vm">
				<div id="wizard-step-container">
					<ul class="nav nav-pills nav-justified">
						<li ng-repeat="step in vm.steps" ng-class="{'active':step.step == vm.currentStep}"><a ng-click="vm.gotoStep(step.step)" href="">{{step.step}}.
								{{step.name}}</a></li>
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
