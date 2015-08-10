<?php if (!defined('THINK_PATH')) exit();?><!-- Author:yuanfang
Data:2015/8/10 -->
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>网站后台登录</title>
	<link href="/Admin/Public/css/bootstrap.min.css" rel="stylesheet">
	<link href="/Admin/Public/css/login.css" rel="stylesheet">
	<script src="/Admin/Public/js/jquery.min.js"></script>
	<script src="/Admin/Public/js/bootstrap.min.js"></script>


</head>
<body>
      <div class="container">
      	 <div class="row">
               <div class="col-md-4 col-md-offset-3">
               	   <div class="login-panel panel default-panel">
                       <div class="panel-heading">管理员登录</div>
                       <div class="panel-body">   
                            <form role="form">
                            	<div class="form-group">
                            		<label for="name" class="col-sm-4 control-label">用户名</label>
                            		<div class="col-sm-8">
                            		    <span class="glyphicon glyphicon-user"></span><input type="text" name="username" id="username" placeholder="请填写用户名"/>
                            	    </div>
                            	</div>
                            </form>
                       </div>
               	   </div>
               </div>
      	 </div>

      </div>
</body>
</html>