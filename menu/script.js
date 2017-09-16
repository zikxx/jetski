(function() {

	angular.module('app', []);
	angular.module('app').controller("WizardController", [ wizardController ]);

	function wizardController() {
		var vm = this;

		// Model
		vm.currentStep = 1;
		vm.steps = [ {
			step : 1,
			name : "Menu",
			template : "step1.php"
		}, {
			step : 2,
			name : "Customer/Member",
			template : "step2.php"
		}, {
			step : 3,
			name : "Prices",
			template : "step3.php"
		}, {
			step : 4,
			name : "Fourth Step",
			template : "step4.php"
		}, ];
		vm.user = {};

		// Functions
		vm.gotoStep = function(newStep) {
			vm.currentStep = newStep;
		}

		vm.getStepTemplate = function() {
			for (var i = 0; i < vm.steps.length; i++) {
				if (vm.currentStep == vm.steps[i].step) {
					return vm.steps[i].template;
				}
			}
		}

		vm.save = function() {
			alert("Saving form... \n\n" + "Menu: " + vm.user.menu + "\n"
					+ "Submenu: " + vm.user.submenu + "\n" + "Subtask: " + vm.user.subtask);
		}
	}

})();
function myFunction() {
    document.getElementTagName("label").style.color = "red";
}