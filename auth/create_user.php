<!DOCTYPE html>
<html>
   <head>
      <title>:: Welcome to DVBS ::</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="apple-mobile-web-app-capable" content="yes" />
      <meta name="description" content="">
      <meta name="keywords" content="admin, bootstrap,admin template, bootstrap admin, simple, awesome">
      <meta name="author" content="">
      <link href="../assets/system_design/css/styles.css" rel="stylesheet">
      <link href="../assets/system_design/css/cab.css" rel="stylesheet">
      <script type="text/javascript" src="../assets/system_design/scripts/jquery.min.js"></script>
      <script src="..//assets/system_design/form_validation/js/jquery.validate.min.js" type="text/javascript"></script>
      <script src="..//assets/system_design/form_validation/js/additional-methods.min.js" type="text/javascript"></script>
      <script src="valid.js" type="text/javascript"></script>
      <!--data Tables-->
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
      <![endif]-->
      <!-- 	<link rel="shortcut icon" href="assets/img/favicon.ico">FAVICON -->
   </head>
   <style>
      html, body{
      background: url(../assets/system_design/images/login-bg.jpg);
      background-attachment: scroll;
      background-size: cover;
      width: 100%;
      height: 100%;
      margin: 0;
      padding: 0;
      position: fixed; 
      overflow:hidden;  
      }
      .see {
      color: #e74c3c;
      } 
      #total-login {
      border-radius: 10px;
      clear: both;
      display: flex;
      margin:2em auto 0;
      position: relative;
      width: 440px; 	background: #fff;	  
      }
      .login-head {
      color: #fff;
      float: left;
      font-size: 20px;
      height:40px;
      line-height: 40px;
      text-align: center;
      width: 100%;
      z-index: 99999; border-radius:10px 10px 0px 0px; background:#121e31;
      }
      .logo-home {
      font-size: 39px;
      line-height: 70px;
      }
      .select-type {
      width: 59px;
      height: 58px;
      margin: 14px auto 0;
      }
      select {
      background: #f4f4f4;
      box-shadow: 2px 2px 5px #c6c6c6;
      -moz-box-shadow: 2px 2px 5px #c6c6c6;
      -ms-box-shadow: 2px 2px 5px #c6c6c6;
      -o-box-shadow: 2px 2px 5px #c6c6c6;
      -webkit-box-shadow: 2px 2px 5px #c6c6c6;
      border: none;
      margin-top: 10px;
      }
      #fp{ float:left;     display: none ; width:100%;   }
      .forget{
      margin: 11px -43px;
      width: 100% !important;
      } 
      .forget:focus{ box-shadow:0px 0px 5px #FFF}
      .us{ border-radius:0px 5px 5px 0px !important;}
      .in-ty {
      width: 100%;
      margin-top: 15px;
      }
      .login-btn {
      float: left;
      background: #41484b;
      padding:4px 16px;
      color: #fff;
      margin: 15px 0px; 
      }
      .login-btn a{ color:#fff !important;}
      .login-btn:hover{ background:#ffa801; cursor:pointer;
      }
      .a-rig {
      float: right
      }
      .or {
      background: none repeat scroll 0 0 silver;
      float: left;
      margin: 19px 63px;
      text-align: center;
      width: 30%;
      }
      .forget-pass {
      background: none repeat scroll 0 0 #9f2525;
      border-radius: 0 0 10px 10px;
      bottom: 0;
      float: left;
      padding: 10px;
      width: 100%;
      text-align: center;
      color: #fff; font-weight: bold; cursor:pointer;
      }
      .forget-pass  a{ color:#000 !important
      }
      .shadow {
      width: 350px;
      height: 25px;
      float: left;
      background: url(../assets/system_design/images/shadow.png) center no-repeat;
      margin:0 47px;
      }
      .flip_in{
      opacity:0; 
      -moz-transform:scale(1.5,1.5);
      -webkit-transform:scale(1.5,1.5);
      transform:scale(1.5,1.5);
      transition:.2s;
      }
      .flip_out{ opacity:1;
      -moz-transform:scale(1.5,1.5);
      -webkit-transform:scale(1.5,1.5);
      transform:scale(1.5,1.5);
      transition:.2s
      }
      .btt{  background: none repeat scroll 0 0 transparent;
      color: #fff;
      margin: 21px; }
      .btt a{ color:#fff}
      .first-row {
      float: left;
      height: auto; width:100%;
      }
      .in-ty {
      margin-top: 15px;
      width: 100%;
      }
      @media only screen and (max-width:414px) {
      #total-login {
      margin: 25px 0;
      width: 320px;
      }
      }
      @media only screen and (max-width:320px){
      #total-login {
      width: 280px;
      } 
      }
   </style>
   <!-- BODY -->
   <body>
      <div class="container-fluid padding-p-0 rlt">
         <header class="bg">
            <?php include ('../layout/header.php');?>
         </header>
         <div class="container">
            <div class="row">
               <div class="col-md-6 col-md-offset-3">
                  <div id="total-login">
                     <form action="auth/create_user" method="post" accept-charset="utf-8" name="register_form" id="register_form"><div style="display:none">
<input type="hidden" name="csrf_test_name" value="6233b3c33a7321df427eabf4b92bad4f" />
</div>                     <div class="first-row">
                        <div class="login-head">Register</div>
                     </div>
					 <p align="center">Регистрация пока не работает</p>
                     <div class="col-md-12 col-xs-12">
                        <div class="input-group input-group-lg in-ty"> 
                           <input type="text" name="first_name" value="" class="user" placeholder="First Name" id="first_name"  />                                                   </div>
                     </div>
                     <div class="col-md-12 col-xs-12">
                        <div class="input-group input-group-lg in-ty"> 
                           <input type="text" name="last_name" value="" class="user" placeholder="Last Name" id="last_name"  />                                                   </div>
                     </div>
                     <div class="col-md-12 col-xs-12">
                        <div class="input-group input-group-lg in-ty">  
                           <input type="text" name="email" value="" class="user-name" placeholder="User Email" id="email"  />                                                   </div>
                     </div>
                     <div class="col-md-12 col-xs-12">
                        <div class="input-group input-group-lg in-ty"> 
                           <input type="text" name="phone" value="" class="phone1" placeholder="Phone" id="phone" maxlength="11"  />                                                   </div>
                     </div>
                     <div class="col-md-12 col-xs-12">
                        <div class="input-group input-group-lg in-ty">  
                           <input type="password" name="password" value="" class="password" placeholder="Password" id="password"  />                                                   </div>
                     </div>
                     <div class="col-md-12 col-xs-12">
                        <div class="input-group input-group-lg in-ty">  
                           <input type="password" name="password_confirm" value="" class="password" placeholder="Confirm Password" id="password_confirm"  />                                                   </div>
                     </div>
                     <div class="col-md-12 col-xs-12">
                        <input type="submit" class="login-btn" value="Register"/>
                      <div class="login-btn a-rig"> <a href="login.htm"> Login </a></div>
                     </div>
                     </form>                  </div>
               </div>
            </div>
         </div>
      </div>
      <script type="text/javascript">$(document).ready(function(){
         $.colorbox({inline:true, href:".ajax"});
         
         });
      </script> 
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="../assets/system_design/scripts/bootstrap.min.js"></script>
   </body>
</html>