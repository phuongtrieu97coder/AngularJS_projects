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

                [id="block1"]{ 

                     background-color:rgba(216, 221, 221, 0.192); 

                       width:500px; 

                       font-size:25px; 

                        

                       border:2px solid green; 

                       position:relative; 

                       top:10px; 

                       left:400px; 

                       box-shadow:3px 3px 3px green, -3px -3px 2px green; 

                } 

 
 

                [id="block1_1"]{ 

                       padding:20px; 

                } 

 
 

                [id="block1_2"]{ 

                      background-color:white; 

                      padding:10px 20px; 

                      list-style-type:none; 

                } 

 
 

                [class="block1_2_list"]{ 

                       position:relative; 

                } 

 
 

                [class="close_button"]{ 

                       position:absolute; 

                       right:0; 

                       border:none; 

                       background-color:white; 

                       margin-right:10px; 

                } 

                [class="close_button"]:hover{ 

                       background-color:red; 

                } 

 
 

                [id="block1_3"]{ 

                       padding:20px; 

                } 

 
 

                 

                

              </style> 

       </head> 

 
 
 
 
 

       <body> 

 
 

     

          <header> 

                

          

 
 
 

              

          </header> 

 
 

            

             

          <main> 

 
 

          

            <form id="block1" ng-app="app1" ng-controller="app1_controller" title="shopping list form" 

            name="shopping_list1" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" 

            method="post" target="_self" enctype="multipart/form-data" 

            > 

                  <div id="block1_1"> 

                      <h3>My Shopping List</h3> 

                  </div> 

 
 

                   

 
 

                  <ul id="block1_2" ng-repeat="item1 in item_list1"> 

                         <li class="block1_2_list"> 

                                {{item1}} 

                                <button class="close_button" title="close button"  

                                type="button" 

                                ng-click="remove_item_func($index)">&times;</button> 

                         </li> 

                  </ul> 

                   

                  <div id="block1_3"> 

                          

                     <input id="input_shopping_item" type="text" name="shopping_item1" 

                     ng-model="input_item" 

                     placeholder="Add shopping items here" 

                      style="width:350px;height:50px;padding-left:20px;" required> 

                     

                     <button id="add_item_button"  

                     class="w3-btn w3-ripple w3-green w3-text-white w3-hover-blue" 

                     type="button" name="add_item1"  

                     ng-click="add_item_func()" 

                     style="position:relative;top:-3px;font-size:22px;">Add</button> 

 
 

                     <b class="text-danger">{{match_item_error}}</b> 

 
 

                     <br><br> 

 
 

                     <input id="order_button" type="submit" name="order_butt1" 

                     value="Order Now" class="btn btn-text-white btn-primary w3-hover-red btn-block" 

                     style="font-size:25px;"> 

 
 

                     <br> 

                  </div> 

 
 

                    

                    

 
 

            </form> 

 
 
 

            <script> 

                   var app = angular.module("app1",[]); 

                   app.controller("app1_controller",function($scope){ 

                          $scope.item_list1 = ["Watermelon","Spinach","Beef meat","Belt Pepper"]; 

                           

                          $scope.add_item_func = function(){ 

                            $scope.match_item_error = ""; 

                                 if(!$scope.input_item){return ;}; 

                                  

                                 if($scope.item_list1.indexOf($scope.input_item) == -1){ 

                                   $scope.item_list1.push($scope.input_item); 

                                 }else{ 

                                        $scope.match_item_error = "Sorry, your item already exist in this list."; 

                                 }; 

                                 

                          } 

                          $scope.remove_item_func = function(s){ 

                                  

                                 $scope.item_list1.splice(s,1); 

                          } 

                   }) 

            </script> 

 
 
 
 

          </main>  

            </body>





       <footer>

       
       

       </footer>



</html>
 
 

 
