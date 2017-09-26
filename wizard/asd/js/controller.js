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
    $scope.add_student = function (name, submenu, subtask, inflatables, payment, price, paid_price, paid, start, end,
                                   driver, type, first_name, last_name, status, refund, comment) {
        //set the data array
        var data = {
            name: name,
            submenu: submenu,
            subtask: subtask,
            inflatables: inflatables,
            payment: payment,
            price: price,
            paid_price: paid_price,
            paid: paid,
            start: start,
            end: end,
            driver: driver,
            type: type,
            first_name: first_name,
            last_name: last_name,
            status: status,
            refund: refund,
            comment: comment

        };

        //use $http.post to send above data to php

        $http.post('../php/add_student.php', JSON.stringify(data)).then(function (response) {
            //clear the form fields
            $scope.name = "";
            $scope.submenu = "";
            $scope.subtask = "";
            $scope.inflatables = "";
            $scope.payment = "";
            $scope.price = "";
            $scope.paid_price = "";
            $scope.paid = "";
            $scope.start = "";
            $scope.end = "";
            $scope.driver = "";
            $scope.type = "";
            $scope.first_name = "";
            $scope.last_name = "";
            $scope.status = "Active";
            $scope.refund = "";
            $scope.comment = "";

            //show success msg
            $scope.msg = true;
            //hide the msg after 2 secs
            $timeout(function () {
                $scope.msg = false;
            }, 1000);
        });
    }
}]);