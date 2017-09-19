var studentModule = angular.module('studentModule', []);

studentModule.controller('ListController', ['$scope', '$http', function ($scope, $http) {
    //use $http.get() to get the list of students
    $http.get('php/student_list.php').then(function (response) {
        //send back the student data to the list.html view
        $scope.studentList = response.data;
    });
}]);

studentModule.controller('AddController', ['$scope', '$http', '$timeout', function ($scope, $http, $timeout) {

    //create a function add_student with params name and email
    $scope.add_student = function (name, email) {
        //set the data array
        var data = {
            name: name,
            email: email
        }

        //use $http.post to send above data to php

        $http.post('php/add_student.php', JSON.stringify(data)).then(function (response) {
            //clear the form fields
            $scope.student_name = "";
            $scope.student_email = "";

            //show success msg
            $scope.msg = true;
            //hide the msg after 2 secs
            $timeout(function () {
                $scope.msg = false;
            }, 1000);
        });
    }
}]);