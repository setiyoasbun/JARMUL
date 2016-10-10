function login($scope,$http,$window,$rootScope){
	$scope.last = null;
	$scope.login_validation = function(){
		var data;

		var config = {
	        headers : {
	            'Content-Type': 'application/x-www-form-urlencoded;charset=utf-8;'
	        }
	    }

	    if(typeof localStorage.id != 'undefined'){
	    	$window.location.reload();
		    $window.location.href = '/jarmul_angular/#/dashboards/dashboard_1';
	    }

	    $http.post("php/login.php", data, config).
	        success(function(data, status, headers, config) {
	            if($scope.last && $scope.last != data.count){
		        	localStorage.setItem('id', data.id);
		        	localStorage.setItem('name', data.name);

		       		$rootScope.session_name = localStorage.name;
		       		$rootScope.session_id = localStorage.id;

		       		$window.location.reload();
		        	$window.location.href = '/jarmul_angular/#/dashboards/dashboard_1';
		        }
		        else{
		        	$scope.last = data.count;
		        	setTimeout(function(){  $scope.login_validation(); }, 1000);
		        }
	        });
	}
	$scope.login_validation();

}

angular
	.module('inspinia')
	.controller('login', login);