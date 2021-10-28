<!DOCTYPE html>
<html lang="en">


       <head>
              <meta charset="UTF-8">


              <meta name="keywords"  content="HTML,CSS,JAVASCRIPT,BOOSTRAP,W3CSS,
              SASS,JQUERY,ANGULAR JS, REACT JS, PHP, MYSQL, NODE.JS, ASP.NET">


              <meta name="description"   content="THIS IS TEMPLATE FASHION BLOG">


              <meta name="author"   content="PHUONG.TRIEU">



              <meta name="viewport"  content="width=device-width, initial-scale=1.0">




              <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
              <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
       
              <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script> 


              <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
              
              
              <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
              





              <link rel="shortcut icon" href="image/html_logo.png" type="image/x-icon">


              <title>PHUONG WEBSITE</title>



              <link rel="stylesheet"  type="text/css" href="test1.css">


              <style>

               
              </style>
       </head>




       <body>

    
          <header ng-app="app1">
               
             <nav class="w3-bar w3-black w3-top">
                    <a class="w3-bar-item w3-btn w3-ripple w3-text-blue 
                    w3-hover-aqua w3-hover-text-white" type="button" title="home button"
                    target="_self" href="#/!"><b><i class="fa fa-home"></i> HOME</b></a>

                    <a class="w3-bar-item w3-btn w3-ripple w3-text-green 
                    w3-hover-aqua w3-hover-text-white" type="button" title="test3 button"
                    target="_self" href="#!test3"><b><i class="fa fa-home"></i> TEST3</b></a>

                    <a class="w3-bar-item w3-btn w3-ripple w3-text-yellow 
                    w3-hover-aqua w3-hover-text-white" type="button" title="test2 button"
                    target="_self" href="#!test2"><b><i class="fa fa-home"></i> TEST2</b></a>

                    <a class="w3-bar-item w3-btn w3-ripple w3-text-red 
                    w3-hover-aqua w3-hover-text-white" type="button" title="car1 button"
                    target="_self" href="#!car1"><b><i class="fa fa-car"></i> CAR1</b></a>

                    <a class="w3-bar-item w3-btn w3-ripple w3-text-yellowgreen 
                    w3-hover-aqua w3-hover-text-white" type="button" title="car2 button"
                    target="_self" href="#!car2"><b><i class="fa fa-car"></i> CAR2</b></a>
             </nav>

             <div ng-view></div>


             
          </header>

             <script>
               var app = angular.module("app1",["ngRoute"]);
               app.config(function($routeProvider){
                      $routeProvider
                      .when("/",{
                             templateUrl: "test2.php"
                      })
                      .when("/test3",{
                             controller: "test3_controller",
                             templateUrl: "test3.html"
                      })
                      .when("/test2",{
                            controller: "test2_controller",
                             templateUrl: "test2.html"
                      })
                      .when("/car1",{
                             template: `
                             <div style='width:400px;padding:20px;border:2px solid red;'>
                             <img src='image/car/suzuki1.jpg' width='300px' height='300px'>
                             <br>
                             <h1>This is Suzuki car</h1>
                             </div>`
                      })
                      .when("/car2",{
                             template: `
                             <div style='width:400px;padding:20px;border:2px solid green;'>
                             <img src='image/car/lamborghini_veneno.jpg' width='300px' height='300px'>
                             <br>
                             <h1>This is Lamborghini car</h1>
                             </div>`
                      })
                      .otherwise({
                             template: `
                             <div id='error_loading_block'>
                             <h1>
                             Sorry,there was an error.
                             </h1>
                             </div>`
                      });

               });
               app.controller("test2_controller",function($scope){
                      $scope.intro1 = "This is test2 website";
               });
               app.controller("test3_controller",function($scope){
                      $scope.intro1 = "This is test3 website";
               });
             </script>

          <main>

         

        

          




          </main> 

           
          



        
          



    
           
       
       
       </body>





       <footer>

       
       

       </footer>



</html>
