app.controller("app1_controller2",function($scope){
      $scope.p_lang2 = [
          {front_end: "HTML",back_end:"PHP"},
          {front_end: "CSS",back_end:"MYSQL"},
          {front_end: "JAVASCRIPT",back_end:"NODEJS"},
          {front_end: "BOOSTRAP",back_end:"JQUERY"},
          {front_end: "REACTJS",back_end:"ANGULARJS"},
          {front_end: "W3CSS",back_end:"ASP.NET"},
          {front_end: "SASS",back_end:"XML"},
          {front_end: "VUE.JS",back_end:"PYTHON"}

      ];
      $scope.sort_func = function(v){
          $scope.sort_test = v;
      }
});
