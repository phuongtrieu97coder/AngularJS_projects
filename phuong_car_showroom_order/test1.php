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
              
              
              





              <link rel="shortcut icon" href="image/html_logo.png" type="image/x-icon">


              <title>PHUONG WEBSITE</title>



              <link rel="stylesheet"  type="text/css" href="test1.css">


              <style>
               
               main{
                      background: url("car_wallpaper1.jpg") no-repeat fixed center;
                      background-size: 100% 100%;
               }

               [id="block1"]{
                      display:grid;
                      grid-template-columns:600px 800px;
               }

               [id="block1_1"]{
                      margin:40px 40px;
                      color:white;
               }
               [id="block1_2"]{
                      margin:40px 100px;
                      border:2px solid green;
                      padding:20px;
                      background-color:black;
                      color:white;
                      
               }


               [id="avatar_order_form_block"] {
                      background-image: url("logo6.jpg");
               }
               [id="avatar_order_form_block"] h1{
                    display:inline-block;
               }

               [id="account_intro_block"]{
                      background-image: url("wallpaper2.jpg");
               }

               [id="account_intro_block_avatar"]{
                      background: url("avatar1.png") no-repeat center;
                      background-size: 150px 150px;
                      width:100px;height:100px;
                      position:relative;
                      left:230px;
                      z-index:0;
                      
                      
                      
               }

               [id="account_intro_block_avatar_caption"]{
                      position:absolute;
                      top:80px;left:0px;
                      z-index:2;
                      background-color:black;
                      border:2px solid aqua;
                      text-align:center;
                      width:100%;
                      font-size:12px;
               }


               [id="account_info_block"]{
                      display:grid;
                      grid-template-columns: 300px 250px;
               }

               [id="account_info_block_1"]{
                    border-top:1px solid purple;
                    border-bottom:1px solid purple;
                    border-right:1px solid purple;
                    margin-right:30px;
               }

               [id="account_info_block_2"]{
                      height:200px;
                      border:1px solid aqua;
                      position:relative;
                      top:0;
               }
               [id="account_info_block_2"] b{
                     font-size:20px;
                     position:absolute;
                     top:10px;
                     left:50px;
                     color:yellow;
               }

               [id="car_select_block1"],
               [id="car_select_block2"],
               [id="car_select_block3"],
               [id="car_select_block4"],
               [id="car_select_block5"]{
                      position:relative;
                      top:0;
               }
               [id*="car_price"]{
                      position:absolute;
                      top:200px;
                      left:100px;
                      font-size:30px;
               }
              
              </style>
       </head>




       <body>

    
          <header>

          </header>



          <main>

       <div id="block1" ng-app="app1" ng-controller="app1_controller">  


        <?php
        
        $name = $email = $address = $gender = $telephone = $car_select = "";

        if($_SERVER["REQUEST_METHOD"] == "POST"){
               $name = check_func($_POST["name1"]);
               $email = check_func($_POST["email1"]);
               $address = check_func($_POST["address1"]);
               $gender = check_func($_POST["gender1"]);
               $telephone = check_func($_POST["tel1"]);
               $car_select = check_func($_POST["car_select1"]);


              
        }

        function check_func($data){
              $data = trim($data);
              $data = stripslashes($data);
              $data = htmlspecialchars($data);
              return $data;
       }
        
        ?>

        
          <div id="block1_1">
              <form id="form1_block" name="form1" title="form 1 block"
              action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>"
              method="post" target="_self" enctype="multipart/form-data"   
              style="width:600px;font-size:20px;padding:20px;border:2px solid blue;background-color:black;"
              ng-init="code1='253464765756757'">


              <div id="avatar_order_form_block" class="w3-center">
                     <h1><i class="text-warning fa fa-user-circle-o"></i></h1>
                     <h1 class="w3-text-aqua" style="margin-left:20px;">Order Form</h1>
              </div>


              <br>



              
           

                 <label for="car_select"><b>Car selection:</b></label>
                 <span class="text-danger" ng-show="form1.car_select1.$error.required">Please select any car!!!</span>
                 <br>

                 <select id="car_select" ng-model="car_select_mol"  name="car_select1" required 
                 
                 
                 style="width:300px;margin-left:120px;">

                       <option disabled selected>---Select any car---</option>
                        
                       <option value="Pagani Huayra Roadster 3252">Pagani Huayra Roadster 3252</option>
                       <option value="Bugatti Chiron-76878">Bugatti Chiron-76878</option>
                       <option value="Lamborghini Veneno-38724">Lamborghini Veneno-38724</option>
                       <option value="Ferrari Aperta-768452">Ferrari Aperta-768452</option>
                       <option value="Mclaren Speedtail-462150">Mclaren Speedtail-462150</option>
                 </select>


                 <br> <br>


                 <div ng-switch="car_select_mol" class="w3-content" style="width:400px;border:2px solid yellow">
                    <div id="car_select_block1" ng-switch-when="Pagani Huayra Roadster 3252">
                           <img id="image_pagani_huayra_roadster" src="2020_Pagani_Huayra_Roadster_BC.jpg" 
                           alt="pagani_huayra_roadster"
                            title="pagani_huayra_roadster"
                            width="100%" height="250px">


                            <b id="car_price1">{{car1_block[0].price}}</b>



                    </div>



                    <div id="car_select_block2" ng-switch-when="Bugatti Chiron-76878">
                           <img id="image_bugatti" src="bugatti_chiron_pur_sport.jpg"
                            alt="Bugatti_chiron"
                            title="Bugatti Chiron"
                            width="100%" height="250px">

                            <b id="car_price2">{{car1_block[1].price}}</b>
                    </div>


                    <div id="car_select_block3" ng-switch-when="Lamborghini Veneno-38724">
                           <img id="image_lamborghini" src="lamborghini_veneno.jpg" 
                            alt="Lamborghini Veneno"
                             title="lamborghini veneno"
                            width="100%" height="250px">  

                            <b id="car_price3">{{car1_block[2].price}}</b>
                    </div>


                    <div id="car_select_block4" ng-switch-when="Ferrari Aperta-768452">
                           <img id="image_ferrari" src="ferrari_laFerrari_Aperta.jpg"
                            alt="ferrari_Aperta" 
                            title="ferrari Aperta"
                            width="100%" height="250px">

                            <b id="car_price4">{{car1_block[3].price}}</b>
                    </div>


                    <div id="car_select_block5" ng-switch-when="Mclaren Speedtail-462150">
                            <img id="image_mclaren" src="mclarenspeedtail.jpg" alt="mclaren speedtail"
                            title="mclaren speedtail"
                            width="100%" height="250px">

                            <b id="car_price5">{{car1_block[4].price}}</b>
                    </div>
              </div>





                 <label for="name_input"><b>Name:</b></label>
                 <span class="text-danger" ng-show="form1.name1.$error.required">Name is required!!!</span>
               
                  <br>
                 <input id="name_input" type="text" name="name1" 
                 placeholder="Enter your name..." ng-model="name1_mol" required
                 style="width:100%">
                

                 <br>


                 <label for="email_input"><b>Email:</b></label>
                 <span class="text-danger" ng-show="form1.email1.$error.required">Email is required!!!</span>
               
                  <br>

                 <input id="email_input" type="email" name="email1" 
                 placeholder="Enter your email..." ng-model="email1_mol" required
                 style="width:100%">
                

                 <br>


                 <label for="address_input"><b>Address:</b></label>
                 <span class="text-danger" ng-show="form1.address1.$error.required">Address is required!!!</span>
               
                  <br>
                 <input id="address_input" type="text" name="address1" 
                 placeholder="Enter your address..." ng-model="address1_mol" required
                 style="width:100%">
                

                 <br>




                 <label for="phone_input"><b>Phone number:</b></label>
                 <span class="text-danger" ng-show="form1.tel1.$error.required">Phone number is required!!!</span>
               
                  <br>
                 <input id="phone_input" type="tel" name="tel1"  placeholder="Ex: (619)-345-5647"
                  ng-model="tel1_mol" required
                 style="width:100%">
                

                 <br>



                 


                 <label><b>Gender:</b></label><br>
                 <input id="male_check" name="gender1" type="checkbox" value="male" ng-model="male_mol1">
                 <label for="male_check"><b>Male</b></label>
                 <input id="female_check" name="gender1" type="checkbox" value="female" ng-model="female_mol1">
                 <label for="female_check"><b>Female</b></label>
                 <input id="other_check" name="gender1" type="checkbox" value="other" ng-model="other_mol1">
                 <label for="other_check"><b>Other</b></label>



                 <br>

                 <label for="avatar_input"><b>Upload Avatar:</b></label>
                 <input id="avatar_input" type="file" name="file1">

                 <br><br>

                 <input id="submit_butt" class="w3-green w3-text-white w3-hover-aqua" name="submit1" type="submit" 
                 value="Submit" style="width:100%;text-align:center;">


                 <br><br>
               </form>


               <br><br><br><br><br><br><br>



          </div>
         



              <div id="block1_2">

                     <div id="account_intro_block" class="w3-center">
                            <div id="account_intro_block_avatar">
                            <?php
                                   
                                   if(isset($_POST["submit1"])){
                                         $filepath = "image/".$_FILES["file1"]["name"];
                                        if(move_uploaded_file($_FILES["file1"]["tmp_name"],$filepath)){
                                               echo "<img src=".$filepath." width='100px' height='100px'>";
                                        }else{
                                               echo "Error";
                                        }
                                   }
                                   ?>
                                 
                                    <div id="account_intro_block_avatar_caption">
                                           <b>Avatar</b>
                                    </div>
                            </div>
                            
                         <h1>Account: {{code1}}</h1>   
                     </div>
                     
                     <br><br>

                    <div id="account_info_block">
                           <div id="account_info_block_1">
                           <b>Name:</b> <i class="text-white">{{name1_mol}} <?php echo $name;?></i>
                            <br>
                            <b>Email:</b> <i class="text-white">{{email1_mol}}  <?php echo $email;?></i>
                            <br>
                            <b>Address:</b> <i class="text-white">{{address1_mol}}  <?php echo $address;?></i>
                            <br>
                            <b>Phone:</b> <i class="text-white">{{tel1_mol}}  <?php echo $telephone;?></i>
                            <br>
                            <b>Gender:</b> <i class="text-white" ng-show="male_mol1">Male</i>
                            <i class="text-white" ng-show="female_mol1">Female</i>
                            <i class="text-white" ng-show="other_mol1">Other</i>
                            <?php echo $gender;?>
                            <br>
                            <b>Car select:</b> <br>
                            <b> Model : </b> <i class="text-white">{{car_select_mol}} <?php echo $car_select;?></i> <br>
                             
                            <b> Brand : </b>  <i class="text-white">
                                   <?php
                             echo check_func("{{car_brand_func()}}");
                                if($car_select == "Pagani Huayra Roadster 3252"){
                                    echo "Pagani";
                                }else if($car_select == "Bugatti Chiron-76878"){
                                       echo "Bugatti";
                                }else if($car_select == "Lamborghini Veneno-38724"){
                                       echo "Lamborghini";
                                }else if($car_select == "Ferrari Aperta-768452"){
                                       echo "Ferrari";
                                }else if($car_select == "Mclaren Speedtail-462150"){
                                   echo  "Mclaren";
                                }else{
                                   echo  " ";
                                }
                             ?>  
                             </i><br>


                           
                             
                            <b> Price : </b>  <i class="text-white">
                                   <?php
                                    echo check_func("{{car_price_func()}}");
                                    if($car_select == "Pagani Huayra Roadster 3252"){
                                          echo  "$1,500,000";
                                   }else if($car_select == "Bugatti Chiron-76878"){
                                          echo  "$4,800,000";
                                   }else if($car_select == "Lamborghini Veneno-38724"){
                                          echo  "$3,700,000";
                                   }else if($car_select == "Ferrari Aperta-768452"){
                                          echo  "$2,800,000";
                                   }else if($car_select == "Mclaren Speedtail-462150"){
                                          echo "$3,950,000";
                                   }else{
                                          echo  " ";
                                   }
                                    ?> 
                                    
                            </i><br>
                             
                                   
                                 
                                  
                            
                            
                     
                           </div>


                           <script>
                              
                           </script>



                           <div id="account_info_block_2">
                                   <img src="car_wallpaper1.jpg" width="100%" height="100%">
                                   <b>PHUONG CAR SHOWROOM</b>
                           </div>
                    </div>

                     <br>


                     <div id="car_slide_block" class="carousel slide" data-ride="carousel" data-interval="3000">
                             <div class="carousel-inner">
                                    <div class="carousel-item active">
                                           <img id="image_ferrari" src="ferrari_laFerrari_Aperta.jpg" alt="ferrari_Aperta" 
                                           title="ferrari Aperta"
                                            width="100%" height="300px">

                                            <div class="carousel-caption">
                                              <h1>Ferrari Aperta</>
                                            </div>
                                           
                                    </div>



                                    <div class="carousel-item">
                                           <img id="image_bugatti" src="bugatti_chiron_pur_sport.jpg" 
                                           alt="Bugatti_chiron"
                                            title="Bugatti Chiron"
                                            width="100%" height="300px">

                                            <div class="carousel-caption">
                                              <h1>Bugatti Chiron</h1>
                                            </div>
                                           
                                    </div>



                                    <div class="carousel-item">
                                           <img id="image_mclaren" src="mclarenspeedtail.jpg"
                                            alt="mclaren speedtail"
                                            title="mclaren speedtail"
                                            width="100%" height="300px">

                                            <div class="carousel-caption">
                                              <h1>Mclaren Speedtail</h1>
                                            </div>
                                           
                                    </div>



                                    <div class="carousel-item">
                                           <img id="image_lamborghini" src="lamborghini_veneno.jpg" 
                                           alt="Lamborghini Veneno"
                                            title="lamborghini veneno"
                                            width="100%" height="300px">

                                            <div class="carousel-caption">
                                              <h1>Lamborghini Veneno</h1>
                                            </div>
                                           
                                    </div>





                                    <div class="carousel-item">
                                           <img id="image_pagani_huayra_roadster" src="2020_Pagani_Huayra_Roadster_BC.jpg" 
                                           alt="pagani_huayra_roadster"
                                            title="pagani_huayra_roadster"
                                            width="100%" height="300px">

                                            <div class="carousel-caption">
                                              <h1>Pagani Huayra Roadster</h1>
                                            </div>
                                           
                                    </div>
                             </div>


                             <ul class="carousel-indicators">
                                   <li data-target="#car_slide_block" data-slide-to="0" class="active"></li>
                                   <li data-target="#car_slide_block" data-slide-to="1"></li>
                                   <li data-target="#car_slide_block" data-slide-to="2"></li>
                                   <li data-target="#car_slide_block" data-slide-to="3"></li>
                                   <li data-target="#car_slide_block" data-slide-to="4"></li>
                             </ul>


                             <div class="carousel-control-prev" href="#car_slide_block" data-slide="prev">
                                  <span class="carousel-control-prev-icon"></span>
                             </div>
                             <div class="carousel-control-next" href="#car_slide_block" data-slide="next">
                                  <span class="carousel-control-next-icon"></span>
                             </div>




                     </div>

              </div>

         </div>



         <br><br>



         



         <script>
                var app = angular.module("app1",[]);
                app.controller("app1_controller",function($scope){
                     $scope.car1_block = [
                            {model:"Pagani Huayra Roadster 3252",brand:"Pagani",price:"$1,500,000"},
                            {model:"Bugatti Chiron-76878",brand:"Bugatti",price:"$4,800,000"},
                            {model:"Lamborghini Veneno-38724",brand:"Lamborghini",price:"$3,700,000"},
                            {model:"Ferrari Aperta-768452",brand:"Ferrari",price:"$2,800,000"},
                            {model:"Mclaren Speedtail-462150",brand:"Mclaren",price:"$3,950,000"},

                     ];
                    
                     $scope.car_brand_func  = function(){
                             if($scope.car_select_mol == $scope.car1_block[0].model){
                                    return $scope.car1_block[0].brand;
                            
                             }else if($scope.car_select_mol == $scope.car1_block[1].model){
                                    return $scope.car1_block[1].brand;
                            
                             }else if($scope.car_select_mol == $scope.car1_block[2].model){
                                    return $scope.car1_block[2].brand;
                            
                             }else if($scope.car_select_mol == $scope.car1_block[3].model){
                                    return $scope.car1_block[3].brand;
                            
                             }else if($scope.car_select_mol == $scope.car1_block[4].model){
                                    return $scope.car1_block[4].brand;
                             }else{
                                    return " ";
                             }
                     }
                            $scope.car_price_func  = function(){
                                   if($scope.car_select_mol == $scope.car1_block[0].model){
                                          return $scope.car1_block[0].price;

                                   }else if($scope.car_select_mol == $scope.car1_block[1].model){
                                          return $scope.car1_block[1].price;
                                   
                                   }else if($scope.car_select_mol == $scope.car1_block[2].model){
                                          return $scope.car1_block[2].price;

                                   }else if($scope.car_select_mol == $scope.car1_block[3].model){
                                          return $scope.car1_block[3].price;

                                   }else if($scope.car_select_mol == $scope.car1_block[4].model){
                                          return $scope.car1_block[4].price;
                                   }else{
                                          return " ";
                                   }
                            }
                });
              
                     
                  
         </script>
 

  

         

          </main> 

           
          
          </main>



        
          



     

           
       
       
       </body>





       <footer>

       
       

       </footer>



</html>
