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

                  
              
              </style>
       </head>




       <body>

    
          <header>

          </header>



          <main>

          
          <div id="app1_block" ng-app="app1" >

               <h1 class="w3-center w3-text-green" ng-bind="source1"></h1>

               <div id="block1" ng-controller="app1_controller" ng-init="price1='525730.99';num1 = 3;num2 = 6">
                             <h1>{{intro1}}</h1><br>
                    <h2>{{time1}}</h2> <br>

                    <br>

                    <h1>App code: <zxb></zxb> <i test2></i>  {{num1}}  <test3></test3></h1>

                    <br>

                    <h1>App pass: {{code2 + num2}}</h1> <br>
                    <br>

                    <button id="change_app_code_butt" 
                    class="w3-button w3-ripple w3-blue w3-text-white w3-hover-green"
                    type="button"
                    title="change app code button"
                    ng-click="num1 = num1 + 2">Change app code</button>


                    <button id="change_app_code_butt" 
                    class="w3-button w3-ripple w3-green w3-text-white w3-hover-orange"
                    type="button"
                    title="change app code button"
                    ng-click="change_pass()">Change app pass</button>

                    <h3>Location address is: {{location1}}</h3> <br>

                    <h4>Data in test1.json file is: {{data1}}</h4>  <br>

                    <h5>
                           Data of Front End language is:
                     </h5>

                           <p ng-repeat="a in data1.language._front_end"> {{a | phuong_filter}} <br></p>
                     

                    <h5>Data of Back End language is: {{data1.language._back_end}}</h5>

                    <br>

                    <h2>Your app price today is: {{price1 | currency: "USA $" : 4}}</h2>

                    <br>
               </div>
                  


                    <form id="block2" name="form1" title="form1 block"
                    action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>"
                    method="post" target="_self" enctype="multipart/form-data"
                     ng-controller="app1_controller2" 
                    ng-init="
                    email1_input='but@gmail.com';
                    p_lang = [
                    'html','css','sass','javascript',
                    'php','mysql','nodejs','asp',
                    'angularJS','reactJS','bootstrap','w3css'
                    ]">
                            
                             <label for="email_input"><b>Enter email:</b></label>
                             <span ng-show="form1.email1.$error.email" class="text-danger">Invalid email address!!!</span>
                             <br>

                             <input id="email_input" type="email" name="email1" ng-model="email1_input" style="width:100%;padding:10px">
                             



                               <label for="language_input"><b>Enter any language:</b></label><br>

                               <input id="language_input" name="search1" type="search" title="Search language bar"
                                placeholder="Enter any language..." ng-model="language_filter"  style="width:100%;padding:10px">

                                <br>

                                <br><br>

                                <div id="block2_info_block">

                                       <div id="block2_info_block_1">
                                              <h3>Programming languages:</h3> <br>
                                              <b ng-repeat="a2 in p_lang | filter: language_filter">{{a2 | uppercase}} <br></b>
                                       </div>

                                       <div id="block2_info_block_2">
                                              <table>
                                                     <tr>
                                                            <th ng-click="sort_func('front_end')">Front-End</th>
                                                            <th ng-click="sort_func('back_end')">Back-End</th>
                                                     </tr>

                                                     <tr ng-repeat="f in p_lang2 | orderBy: sort_test">
                                                            <td>{{f.front_end}}</td>
                                                            <td>{{f.back_end}}</td>
                                                     </tr>
                                              </table>
                                       </div>

                                       <div id="block2_info_block_3">
                                              <h3>Change email input content to see the changing of status below <i class="fa fa-arrow-down"></i></h3> <br>
                                                 <h1>STATUS</h1>
                                              <p>Valid: {{form1.email1.$valid}} (if true, email value meets all criteria.)</p>
                                              <p>Dirty: {{form1.email1.$dirty}} (if true, email field has been changed.)</p>
                                              <p>Touched: {{form1.email1.$touched}} (if true, email field has been in focus.)</p>
                                       </div>
                                </div>
                                
                    </form>


                    
          </div>

          

          
           
          </main>



        
          



      

           
       <script src="test1.js"></script>
       <script src="test2.js"></script>
       
       </body>





       <footer>

       
       

       </footer>



</html>
