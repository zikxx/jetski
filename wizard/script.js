(function () {

    angular.module('app', []);
    angular.module('app').controller("WizardController", [wizardController]);

    function wizardController() {
        var vm = this;

        //Model
        vm.currentStep = 1;
        vm.steps = [
            {
                step: 1,
                name: "First step",
                template: "step1.php"
            },
            {
                step: 2,
                name: "Second step",
                template: "step2.php"
            },
            {
                step: 3,
                name: "Third step",
                template: "step3.php"
            },
        ];
        vm.user = {};

        //Functions
        vm.gotoStep = function (newStep) {
            vm.currentStep = newStep;
        }

        vm.getStepTemplate = function () {
            for (var i = 0; i < vm.steps.length; i++) {
                if (vm.currentStep == vm.steps[i].step) {
                    return vm.steps[i].template;
                }
            }
        }


        vm.save = function ($http) {
            $http.defaults.headers.post['Content-Type'] = 'application/x-www-form-urlencoded; charset=UTF-8';
            data = {
                'email': vm.user.name,
                'password': vm.user.email
            };

            $http.post('submit.php', data)
                .success(function (data, status, headers, config) {
                    console.log(status + ' - ' + data);
                })
                .error(function (data, status, headers, config) {
                    console.log('error');
                });
        }
    }
})();