var app = angular.module("app1",[]);
app.run(function($rootScope){
    $rootScope.source1 ="Phuong check info app";
});


app.directive("zxb",function(){
    return {
        restrict: "E",
        template:"< !---"
    };
});
app.directive("test2",function(){
    return {
        restrict: "A",
        template:"@TTytyuu677&*$^*3yijchg^^&4"
    };
});
app.directive("test3",function(){
    return {
        restrict: "E",
        template:"---!>"
    };
});






app.controller("app1_controller",function($scope,$timeout,$interval,$location,$http){
    $scope.code2 = "df453tg6y5u6u@#34";
    $scope.change_pass = function(){
        $scope.num2++;
    }
    $scope.intro1 = "WELCOME";
    $scope.time1 = new Date().toLocaleTimeString();
    $scope.location1 = $location.absUrl();
    $timeout(function(){
        $scope.intro1 = "Good morning!!!";
    },3000);
    $interval(function(){
        $scope.time1 = new Date().toLocaleTimeString();
    },1000);
    $http.get("Json_file/test1.json").then(function(response){
        $scope.data1 = response.data;
        
    });
});


app.filter("phuong_filter",function(){
    return function(z){
        var i,c,txt = "";
        for(i = 0 ; i< z.length; i++){
            c = z[i];
            if(i%2 == 0){
                c = c.toUpperCase();
                
            }
            txt += c;
        }
        return txt;
    }
});


